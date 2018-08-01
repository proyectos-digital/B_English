
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10" ng-init="juegoHangman({ 1:['keep control','Hangman 1'], 2:['keep in touch','Hangman 2'], 3:['keep quiet','Hangman 3'], 4:['come first','Hangman 4'], 5:['come last','Hangman 5'], 6:['come late','Hangman 6'] }, 6); ">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5 class="mb20">Find 3 collocations with "come" and 3 collocations with the word “keep”.</h5>
      <div class="row-flex mt10-xs mt10-md">
        <div class="game__hangman mt40 game__hangman1">
          <div class="game__hangman--score">
            <div class="game__hangman--scoreContar js_hangman--count">0 </div>
            <div class="game__hangman--scoreTotal">6</div>
          </div>
          <div class="game__hangman--header">
            <div class="game__hangman--instruction">
              <h6 class="game__hangman--pista">instrucción 1</h6>
            </div>
          </div>
          <div class="game__hangman--hiddenImg" style="background-image:url('../assets/multimedia/images/games/hangman/fondo.png');"><img class="responsive-img game__hangman--Img lingote_1 is-visible" src="../assets/multimedia/images/games/hangman/lingote_1.png"/><img class="responsive-img game__hangman--Img lingote_2 is-visible" src="../assets/multimedia/images/games/hangman/lingote_2.png"/><img class="responsive-img game__hangman--Img lingote_3 is-visible" src="../assets/multimedia/images/games/hangman/lingote_3.png"/><img class="responsive-img game__hangman--Img lingote_4 is-visible" src="../assets/multimedia/images/games/hangman/lingote_4.png"/><img class="responsive-img game__hangman--Img lingote_5 is-visible" src="../assets/multimedia/images/games/hangman/lingote_5.png"/><img class="responsive-img game__hangman--Img lingote_6 is-visible" src="../assets/multimedia/images/games/hangman/lingote_6.png"/></div>
          
          <div class="game__hangman--phrase">
            <div class="game__hangman--word">
              <div class="game__hangman--letter js_hangman--letter mal">e</div>
              <div class="game__hangman--letter js_hangman--letter mal">r</div>
              <div class="game__hangman--letter js_hangman--letter mal">r</div>
              <div class="game__hangman--letter js_hangman--letter mal">o</div>
              <div class="game__hangman--letter js_hangman--letter mal">r</div>
            </div>
            <div class="game__hangman--word">
              <div class="game__hangman--letter js_hangman--letter mal">g</div>
              <div class="game__hangman--letter js_hangman--letter mal">a</div>
              <div class="game__hangman--letter js_hangman--letter mal">m</div>
              <div class="game__hangman--letter js_hangman--letter mal">e</div>
            </div>
          </div>
          
          <div class="game__hangman--keyBoard">
            <div class="game__hangman--keyBoard--line">
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="Q" disabled="disabled">Q</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="W" disabled="disabled">W</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="E" disabled="disabled">E</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="R" disabled="disabled">R</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="T" disabled="disabled">T</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="Y" disabled="disabled">Y</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="U" disabled="disabled">U</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="I" disabled="disabled">I</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="O" disabled="disabled">O</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="P" disabled="disabled">P</div>
            </div>
            <div class="game__hangman--keyBoard--line">
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="A" disabled="disabled">A</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="S" disabled="disabled">S</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="D" disabled="disabled">D</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="F" disabled="disabled">F</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="G" disabled="disabled">G</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="H" disabled="disabled">H</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="J" disabled="disabled">J</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="K" disabled="disabled">K</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="L" disabled="disabled">L</div>
            </div>
            <div class="game__hangman--keyBoard--line">
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="Z" disabled="disabled">Z</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="X" disabled="disabled">X</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="C" disabled="disabled">C</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="V" disabled="disabled">V</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="B" disabled="disabled">B</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="N" disabled="disabled">N</div>
              <div class="game__hangman--keyBoard-key js-game__hangman--key" pos="0" value="M" disabled="disabled">M</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh js-game__hangman--reset"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"> </footer>