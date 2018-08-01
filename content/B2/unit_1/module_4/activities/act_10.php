
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <row class="row">
        <h5><strong class="u-textColor_4">1. </strong> Read the following sentences. Pay attention to the words in bold.</h5>
        <h6 class="u-textColor_4">Information about Colombia</h6>
        <div class="row">
          <div class="col xs6 sm3 ta-c"><img class="c-figure w90 ml10 mb10 mt30" src="unit_1/module_4/assets/images/act_11a.png" alt=""/>
            <p>The Colombian National Anthem <strong>was written by</strong> Rafael Nuñez.</p>
          </div>
          <div class="col xs6 sm3 ta-c"><img class="c-figure w90 ml10 mb10 mt30" src="unit_1/module_4/assets/images/act_11b.png" alt=""/>
            <p>The music <strong> was composed by</strong> Italian musician Oreste Sindice.</p>
          </div>
          <div class="col xs6 sm3 ta-c"><img class="c-figure w90 ml10 mb10 mt30" src="unit_1/module_4/assets/images/act_11c.png" alt=""/>
            <p>Colombia <strong>was freed by</strong> Simon Bolivar in 1819.</p>
          </div>
          <div class="col xs6 sm3 ta-c"><img class="c-figure w90 ml10 mb10 mt30" src="unit_1/module_4/assets/images/act_11d.png" alt=""/>
            <p>Colombia <strong> was inhabited by</strong> tribes from the Chibcha family.</p>
          </div>
        </div>
      </row>
      <div class="col xs12 md10 col-center mt50 flex align-items-center">
        <div class="col xs12 md8 ">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent padding20">
              <p>Television was invented in the 1920s. </p>
              <p>Television was invented in the 1920s <strong>by John Logie Baird.</strong></p><br/>
              <p>The chocolate chip cookie was invented in 1930. </p>
              <p>The chocolate chip cookie was invented in 1930<strong> by Ruth Wakefield.</strong></p>
            </div>
          </div>
        </div>
        <div class="col xs12 md4 showTo-md">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_4b.png" alt=""/></div>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md10 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <h5>Unscramble the words to form sentences in the passive voice.</h5>
            <div class="mb20 col xs12 md9 mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">1. </strong></div>
              <div class="sortreload" data-ejercicio="sortable" id="sortable1"> <span class="ancho200 ui-sortable--item js-sortdrag">was</span><span class="ancho200 ui-sortable--item js-sortdrag">by</span><span class="ancho200 ui-sortable--item js-sortdrag">Bingham.</span><span class="ancho200 ui-sortable--item js-sortdrag">Machu Picchu</span><span class="ancho200 ui-sortable--item js-sortdrag">discovered</span><span class="ancho200 ui-sortable--item js-sortdrag">in</span><span class="ancho200 ui-sortable--item js-sortdrag">Hiram</span><span class="ancho200 ui-sortable--item js-sortdrag">1911</span></div>
            </div>
            <div class="mb20 col xs12 md3 mt20"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_11e.png" alt=""/></div>
            <div class="mb20 col xs12 md3 mt20"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_11f.png" alt=""/></div>
            <div class="mb20 col xs12 md9 mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">2. </strong></div>
              <div class="sortreload" data-ejercicio="sortable" id="sortable2"> <span class="ancho200 ui-sortable--item js-sortdrag">Christopher Columbus</span><span class="ancho200 ui-sortable--item js-sortdrag">America</span><span class="ancho200 ui-sortable--item js-sortdrag">?</span><span class="ancho200 ui-sortable--item js-sortdrag">1492</span><span class="ancho200 ui-sortable--item js-sortdrag">by</span><span class="ancho200 ui-sortable--item js-sortdrag">Was</span><span class="ancho200 ui-sortable--item js-sortdrag">in</span><span class="ancho200 ui-sortable--item js-sortdrag">discovered</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSortable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="sortable()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script>
  $(function(){
      $( "#sortable2" ).sortable();
      $( "#sortable2" ).disableSelection();
      $( "#sortable1" ).sortable();
      $( "#sortable1" ).disableSelection();
  });
</script>