
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/test_2_1.png" alt="" srcset=""/><img class="u-responsive-img centrado mt30" src="./unit_3/module_9/assets/images/test_2_2.png" alt="" srcset=""/></div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="row-flex justify-around">
            <div class="dragCont">
              <div class="drag" rescon="4">advantage</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="3">a barbecue</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="4">a bath</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">a complaint</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">well</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">an appointment</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">your best</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="3">a class</div>
            </div>
          </div>
          <div class="row">
            <table class="c-table-estilo_uno w100 mt40">
              <thead>
                <tr>
                  <th>Make</th>
                  <th>Do</th>
                  <th>Have</th>
                  <th>Take</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 
                    <div class="drop h30"></div>
                  </td>
                  <td> 
                    <div class="drop h30"></div>
                  </td>
                  <td>
                    <div class="drop h30"></div>
                  </td>
                  <td> 
                    <div class="drop h30"></div>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <div class="drop h30"></div>
                  </td>
                  <td> 
                    <div class="drop h30"></div>
                  </td>
                  <td>
                    <div class="drop h30"></div>
                  </td>
                  <td> 
                    <div class="drop h30"></div>
                  </td>
                </tr>
              </tbody>
            </table>
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