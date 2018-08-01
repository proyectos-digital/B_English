
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1; DragandDropClonable()">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md8 col-center mt10-sm mt20-md">
          <table class="c-table-estilo_tres row">
            <thead>
              <tr>
                <th> </th>
                <th>Surprise</th>
                <th>Comparisons</th>
                <th>Equality</th>
                <th>Flat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Use</td>
                <td>The word <strong>even </strong>is used to show that something is surprising or unusual; it is more than we would expect.</td>
                <td> <strong>Even </strong>is used to add emphasis when making a comparison.</td>
                <td> <strong>Even </strong>is used to describe a situation which is equal or well balanced.</td>
                <td> <strong>Even </strong>is used to describe a surface that is flat.</td>
              </tr>
              <tr>
                <td>Example</td>
                <td>Everyone seems to have a motorcycle these days. <strong>Even </strong>I am thinking of getting one!</td>
                <td>The second book from the saga is <strong>even </strong>better than the first one.</td>
                <td>Here’s the 5 dollars you lent me We’re <strong>even </strong>now.</td>
                <td>The table has an <strong>even </strong>surface.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs7 col-flex-md3 offset-md1 col-center mt10-sm mt20-md"><img class="u-responsive-img m-a mt30" src="unit_2/module_6/assets/images/act_5.png" alt=""/></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex">
        <div class="col-flex-xs9 col-flex-md12 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <h5>Match the sentences with the use of even.</h5>
          </div>
          <div class="row-flex">
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10">
              <div class="dragCont m-a mt10">
                <div class="drag">Equality</div>
              </div>
            </div>
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10">
              <div class="dragCont m-a mt10">
                <div class="drag">Comparisons</div>
              </div>
            </div>
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10">
              <div class="dragCont m-a mt10">
                <div class="drag">Flat</div>
              </div>
            </div>
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10">
              <div class="dragCont m-a mt10">
                <div class="drag">Surprise</div>
              </div>
            </div>
          </div>
          <div class="row-flex mt20">
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10"><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">India is even hotter than Australia.</div><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">Even Tom bought her a present and he never usually buys gifts.</div>
            </div>
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10"><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">The new road is not ever in some places.</div><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">Divide the money evenly among you all.</div>
            </div>
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10"><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">Our team was losing until Torres evened the score just before half-time.</div><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">Careful where you walk the floor is not even.</div>
            </div>
            <div class="col-flex-sm6 col-flex-md3 col-center mt30-md mt30-sm padding10"><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">That movie was even more interesting than I expected.</div><span class="drop w100 centrado mt10"></span>
              <div class="mt10"></div>
              <div class="c-blue-text1 h90">We couldn´t find the museum-even using the map!</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_6/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>