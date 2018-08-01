
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h6 class="mb20">When talking about art there are thousands of descriptive words that can be used.  Lest take a look at the some words use to describe mood and atmosphere created by a painting. <br/> Match the words  with similar meanings.</h6>
        <div class="row">
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="1">dull</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="2">tranquil</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="3">happy</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="5">angry</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="5">dark</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="5">violent</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="4">miserable</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="6">exciting</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="2">content</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="1">lifeless</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="3">joyful</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="5">chilling</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="5">distressing</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="4">gloomy</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="4">somber</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="6">Thought-provoking</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="2">peaceful</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="2">relaxed</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="1">insipid</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="3">romantic</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="5">frightening</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="4">sad</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="4">tearful</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag" rescon="6">stimulating</div>
          </div>
        </div>
        <div class="col md12 xs12">
          <table class="c-table-estilo_tres m-a mt30 col xs10 col-center">
            <tbody>
              <tr>
                <td class="ta-c"><span>Boring</span></td>
                <td class="row-flex justify-around align-items-center">
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Calm</span></td>
                <td class="row-flex justify-around align-items-center">
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Cheerful</span></td>
                <td class="row-flex justify-around align-items-center">
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Depressed</span></td>
                <td class="row-flex justify-around align-items-center">
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"> </div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Aggressive</span></td>
                <td class="row-flex justify-around align-items-center">
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Energetic</span></td>
                <td class="row-flex justify-around align-items-center">
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                  <div class="drop w30"></div>
                </td>
              </tr>
            </tbody>
          </table>
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
