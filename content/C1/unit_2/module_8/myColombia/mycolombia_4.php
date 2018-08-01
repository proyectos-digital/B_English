
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropClonable()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h6 class="mb20">Match these words to for the appropriate two word phrase. Words can be used more than once:</h6>
        <div class="row">
          <div class="dragCont col xs4 md2">
            <div class="drag">A movie</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A song</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A video</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A concert</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A show</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A video game</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A game</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A book</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A magazine</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A talk show</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">A podcast</div>
          </div>
          <div class="dragCont col xs4 md2">
            <div class="drag">commentary</div>
          </div>
        </div>
        <div class="col md6 xs12">
          <table class="c-table-estilo_tres m-a mt30 col xs10 col-center">
            <thead>
              <tr>
                <th class="w20">Verbs</th>
                <th class="w80">entertainment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ta-c"><span>Stream online</span></td>
                <td>
                  <div class="drop"></div>
                  <div class="drop"></div>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Watch</span></td>
                <td>
                  <div class="drop"></div>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Attend</span></td>
                <td>
                  <div class="drop"></div>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Play</span></td>
                <td>
                  <div class="drop"></div>
                  <div class="drop"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col md6 xs12">
          <table class="c-table-estilo_tres m-a mt30 col xs10 col-center">
            <thead>
              <tr>
                <th class="w20">Verbs</th>
                <th class="w80">entertainment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ta-c"><span>download</span></td>
                <td>
                  <div class="drop"></div>
                  <div class="drop"></div>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Read</span></td>
                <td>
                  <div class="drop"></div>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span>Listen</span></td>
                <td>
                  <div class="drop"></div>
                  <div class="drop"></div>
                  <div class="drop"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropClonable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script src="./../assets/js/librerias/drawConnector.js"></script>