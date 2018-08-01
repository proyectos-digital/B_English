
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="col xs12 md10 row-flex justify-between col-center"></div>
        <div class="row row-flex justify-between mt30">
          <div class="dragCont">
            <div class="drag">bumped into</div>
          </div>
          <div class="dragCont">
            <div class="drag">burned out</div>
          </div>
          <div class="dragCont">
            <div class="drag">break up</div>
          </div>
          <div class="dragCont">
            <div class="drag">call back</div>
          </div>
          <div class="dragCont">
            <div class="drag">brush up on</div>
          </div>
        </div>
        <div class="row mt30 row-flex align-items-center justify-between">
          <div class="col xs12 md5">
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th>Use</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="ta-l lh30 padding15">My mother had to <span class="drop"></span> a fight between my brothers again.</th>
                </tr>
                <tr>
                  <th class="ta-l lh30 padding15">I start my English course tomorrow, I need to <span class="drop"></span> seen my English before I go to class.</th>
                </tr>
                <tr>
                  <th class="ta-l lh30 padding15">I have not seen my cousin in years! I <span class="drop"></span> him yesterday at the mall, I was so surprised.</th>
                </tr>
                <tr>
                  <th class="ta-l lh30 padding15">After studying for 5 hours I was completely <span class="drop"></span>.</th>
                </tr>
                <tr>
                  <th class="ta-l lh30 padding15">I missed two calls from my mother this morning so now I have to <span class="drop"></span> before she gets worried.</th>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col xs12 md5 ta-c mt20"><img class="u-responsive-img" src="unit_1/module_4/assets/images/self_1_1.png" alt=""/></div>
          <div class="row row-flex" data-drag="true" data-jqyoui-options="{revert: 'invalid'}" ng-model="list1" jqyoui-draggable="{animate:true}" ng-hide="!list1.title">hola</div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
