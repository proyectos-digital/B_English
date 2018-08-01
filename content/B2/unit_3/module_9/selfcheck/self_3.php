
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <h6>Notice that some phrases are in bold. Drag and drop those phrases in the respective box (defining or non-defining).</h6>
            <div class="row mt30"></div>
            <p class="u-txtSpace"> <span class="dragCont mb10"><span class="drag" rescon="1">Foreigners who have lived in Colombia</span></span>for long periods have a different perspective of our country. In general,<span class="dragCont mb10"><span class="drag" rescon="1">most of them find that</span></span>this is an excellent country to live. <span class="dragCont mb10"><span class="drag" rescon="1">Some of them say that</span></span>people are very friendly and others<span class="dragCont mb10"><span class="drag" rescon="1">say that they fell in love</span></span>with our landscapes. Jan, <span class="dragCont mb10"><span class="drag" rescon="2">who is from Belgium</span></span>, says that Colombia is his second home. Edward,<span class="dragCont mb10"><span class="drag" rescon="2">who is from the USA</span></span>, married a Colombian and has Colombian children. He says<span class="dragCont mb10"><span class="drag" rescon="1">that he would never leave the country</span></span>. While these opinions are very positive, all of them coincide<span class="dragCont mb10"><span class="drag" rescon="1">that there are things that can be changed</span></span>. The first problem is<span class="dragCont mb10"><span class="drag" rescon="1">that is mentioned</span></span>traffic. The second one,<span class="dragCont mb10"><span class="drag" rescon="2">which is mentioned only in big cities</span></span>, is security. The last one,<span class="dragCont mb10"><span class="drag" rescon="2">which is not a problem exclusive of Colombia</span></span>, is corruption. All of them agree that the great majority of Colombians are good, honest, and hard-working people.</p>
          </div>
          <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center"> 
            <div class="row">
              <table class="c-table-estilo_uno w100">
                <thead>
                  <tr>
                    <th>DEFINING</th>
                    <th>NON DEFINING</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                  </tr>
                  <tr>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                  </tr>
                  <tr>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                  </tr>
                  <tr>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                  </tr>
                  <tr>
                    <td> <span class="drop w80 h30 centrado"></span></td>
                  </tr>
                  <tr>
                    <td><span class="drop w80 h30 centrado"></span></td>
                  </tr>
                  <tr>
                    <td><span class="drop w80 h30 centrado"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>