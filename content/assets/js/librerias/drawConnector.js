let itemHeightFactor = 16;		//set this based on the size of your font
let oSource = null;
let oTarget = null;
let linecanvas_graphics ;

function graphicsInit() {
    console.log(`graphicsInit()--`);
    // when the page loads, initialize this object for drawing.
    linecanvas_graphics = new Graphics('linecanvas');
}
function setSource(oSrc) {
    //if another source was clicked first, unhilite it
    if (oSource != null) {
        if (oSource.className == "treeItem_hi") {
            oSource.className = "treeItem";
        }
        oSource = null;
    }
    //if this source is already set, clear its line and its target
    if (oSrc.className == "treeItem_set") {
        //this source was already set; clear
        clearElementSetting(oSrc.id);
    }
    oSrc.className = "treeItem_hi";
    oSource = oSrc;
    if (oTarget != null) {
            drawLine();
            oSource = null;
            oTarget = null;
    }
}
function setTarget(oTar) {
    if (oTarget != null) {
        if (oTarget.className == "treeItem_hi") {
            oTarget.className = "treeItem";
        }
        oTarget = null;
    }
    if (oTar.className == "treeItem_set") {
        //this target already has a source; clear
        clearElementSetting(oTar.id);
    }
    oTar.className = "treeItem_hi";
    oTarget = oTar;
    if (oSource != null) {
        drawLine();
        oSource = null;
        oTarget = null;
    }
}
function clearElementSetting(stID) {
    //clear line DIVs that have the given ID as their connection
    let 
        canvas = document.getElementById("linecanvas"),
        oChild,
        sSourceID,
        sTargetID,
        arrRemoveNodes = new Array()
    ;
    //cannot remove childNodes in first loop, that changes childNodes.length.
    for (i=0; i<canvas.childNodes.length; i++) {
        oChild = canvas.childNodes[i];
        if (oChild.tagName == "DIV") {
            if ((oChild.getAttribute("mySrc") == stID) || (oChild.getAttribute("myTar") == stID)) {
                arrRemoveNodes.push(oChild.id);
                //set IDs for clearing source and target hilite
                sSourceID = oChild.getAttribute("mySrc");
                sTargetID = oChild.getAttribute("myTar");
            }
        }
    }
    //remove childnodes to be removed
    for (i=0; i<arrRemoveNodes.length; i++) {
        oChild = document.getElementById(arrRemoveNodes[i]);
        canvas.removeChild(oChild);
    }
    //clear hilites of source and target
    document.getElementById(sSourceID).className = "treeItem";
    document.getElementById(sTargetID).className = "treeItem";
}

//********************************************************************************************************************
// The following code portion is from Doga Arinir, with modifications by me as noted:
function drawLine() {
    let 
        nSrcY = oSource.offsetTop,		//relative to bounding DIV's coordinates
        nTarY = oTarget.offsetTop,		//relative to bounding DIV's coordinates
        nRightEdge = parseInt(document.getElementById("linecanvas").style.width.replace("px", ""))
    ;
    try {
        linecanvas_graphics.drawLine(0, (nSrcY + itemHeightFactor), nRightEdge, (nTarY + itemHeightFactor));
        linecanvas_graphics.paint();
        oSource.className = "treeItem_set";
        oTarget.className = "treeItem_set";
        oSource = null;
        oTarget = null;
    } catch(e) {}
}

function checkbrowser() {
    this.b = document.body;
    this.dom = document.getElementById ? 1:0;
    this.ie = this.b && typeof this.b.insertAdjacentHTML != 'undefined';
    this.mozilla = typeof(document.createRange) != 'undefined' && typeof((document.createRange()).setStartBefore) != 'undefined';
}

function Graphics(container) {
    //container must be a DIV on the page	** JL modification
    this.bw = new checkbrowser();
    this.color = '#b04f52';
    this.backbuffer = '';
    this.container = document.getElementById(container);
    this.clear = function() {this.container.innerHTML = "";this.backbuffer = '';}
    let paint_ie = function() {
        this.container.insertAdjacentHTML("BeforeEnd", this.backbuffer);
        this.backbuffer = '';
    }
    let paint_moz = function() {
        let r = document.createRange();
        r.setStartBefore(this.container);
        this.container.appendChild(r.createContextualFragment(this.backbuffer));
        this.backbuffer = '';
    }
    this.paint = this.bw.ie ? paint_ie : paint_moz;
}

Graphics.prototype.setPixel = function(x, y, w, h) {
    //oSource and oTarget must already be set			** JL modification:  added ID to DIVs so lines can be removed
    let myID = "Pixel_" + x + "," + y + "," + w + "," + h;
    this.backbuffer += "<div id=\"" + myID + "\" mySrc=\"" + oSource.id + "\" myTar=\"" + oTarget.id + "\" style=\"position:absolute;left:" + x + "px;top:" + y + "px;width:" + w + "px;height:" + h + "px;background-color:" + this.color + ";overflow:hidden;\"></div>";
}

Graphics.prototype.drawLine = function(x1, y1, x2, y2) {
    //Always draw from left to right. This makes the algorithm much easier...
    if (x1 > x2) {
        let tmpx = x1; 
        let tmpy = y1;
        x1 = x2; y1 = y2;
        x2 = tmpx; y2 = tmpy;
    }

    let dx = x2 - x1;	
    let dy = y2 - y1; 
    let sy = 1;	
    if (dy < 0) {
        sy = -1;
        dy = -dy;
    }
    dx = dx << 1; dy = dy << 1;
    if (dy <= dx) {	
        let fraction = dy - (dx>>1);
        let mx = x1;
        while (x1 != x2) {
            x1++;
            if (fraction >= 0) {
                this.setPixel(mx, y1,x1-mx,1);
                y1 += sy;
                mx = x1;
                fraction -= dx;
            }
            fraction += dy;
        }
        this.setPixel(mx,y1,x1-mx,1);
    } else {
        let fraction = dx - (dy>>1);
        let my = y1;
        if (sy > 0) {		
            while (y1 != y2) {
                y1++;
                if (fraction >= 0) {
                    this.setPixel(x1++, my,1,y1-my);
                    my = y1;
                    fraction -= dy;
                }
                fraction += dx;
            }	
            this.setPixel(x1,my,1,y1-my);
        } else {
            while (y1 != y2) {
                y1--;
                if (fraction >= 0) {
                    this.setPixel(x1++, y1,1,my-y1);
                    my = y1;
                    fraction -= dy;
                }
                fraction += dx;
            }
            this.setPixel(x1,y1,1,my-y1);		
        }
    }
}
// End Doga Arinir Code
//********************************************************************************************************************

function packageUp() {
    alert();
    //every line drawn represents a connection.
    // make sure number of lines equals number of sources
    let oSources = document.getElementById("sourceElements");
    let oConnections = document.getElementById("linecanvas");
    let nSources = 0;
    let arrConns = new Array();
    let sLastConnSID = "";
    let bProceed = false;
    // "Sources" are the childNodes of oSources that have a specified ID pattern. (not ALL childNodes)
    for (i=0; i<oSources.childNodes.length; i++) {
        if (oSources.childNodes[i].id) {
            if (oSources.childNodes[i].id.indexOf("Item") != -1) {
                nSources++;
            }
        }
    }
    // "Connections" are Complete Lines; not every childNode, which would include every portion of sloped lines.
    //	Note: DIVs are always appended in order, so we can count them linearly
    for (i=0; i<oConnections.childNodes.length; i++) {
        if (oConnections.childNodes[i].getAttribute("mySrc") != sLastConnSID) {
            arrConns.push(oConnections.childNodes[i].getAttribute("mySrc"));
            arrConns.push(oConnections.childNodes[i].getAttribute("myTar"));
            sLastConnSID = oConnections.childNodes[i].getAttribute("mySrc");
        }
    }
    //arrConns is twice the length as number of connections it represents
    if (arrConns.length < (nSources * 2)) {
        bProceed = confirm("Not all sources have been connected.\n\nClick OK to save as-is. Click CANCEL to make more connections.");
    }
    if (bProceed) {
        for (i=0; i<(arrConns.length - 1); i++) {
            alert("Source ID " + arrConns[i] + " will be linked to target ID " + arrConns[i+1]);
            i++;
        }
    }
}