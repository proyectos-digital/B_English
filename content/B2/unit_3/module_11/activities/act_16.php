
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Complete the Formality Scales, classifying the sentences according to how formal or informal they are.</h5>
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md10 col-center">
          <div class="row-flex mt10-xs mt30-sm">
            <div class="col-flex-xs12 showTo-md col-flex-md4 col-center"><img class="u-responsive-img h180" src="unit_3/module_11/assets/images/act_16_1.png" alt="" style="objetive-fit: cover;"/></div>
            <div class="col-flex-xs12 hideFrom-md">
              <h6>Order by more formal to less formal</h6>
            </div>
            <div class="col-flex-xs12 col-flex-md8 col-center">
              <ul class="c-counterStep ui-sortable sortreload justify-center" id="sortable_1" data-ejercicio="sortable">
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The woman we came across last week is a foreigner.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The woman who we came across last week is a foreigner.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The woman whom we came across last week is a foreigner.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The woman that we came across last week is a foreigner.</span></li>
              </ul>
            </div>
          </div>
          <div class="row-flex mt10-xs mt30-sm">
            <div class="col-flex-xs12 showTo-md col-flex-md4 col-center"><img class="u-responsive-img h180" src="unit_3/module_11/assets/images/act_16_1.png" alt="" style="objetive-fit: cover;"/></div>
            <div class="col-flex-xs12 hideFrom-md">
              <h6>Order by more formal to less formal</h6>
            </div>
            <div class="col-flex-xs12 col-flex-md8 col-center">
              <ul class="c-counterStep ui-sortable sortreload justify-center" id="sortable_2" data-ejercicio="sortable">
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The country I live in is beautiful.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The country which we live is beautiful.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The country where I live is beautiful.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The country in which we live is beautiful.</span></li>
              </ul>
            </div>
          </div>
          <div class="row-flex mt10-xs mt30-sm">
            <div class="col-flex-xs12 showTo-md col-flex-md4 col-center"><img class="u-responsive-img h180" src="unit_3/module_11/assets/images/act_16_1.png" alt="" style="objetive-fit: cover;"/></div>
            <div class="col-flex-xs12 hideFrom-md">
              <h6>Order by more formal to less formal</h6>
            </div>
            <div class="col-flex-xs12 col-flex-md8 col-center">
              <ul class="c-counterStep ui-sortable sortreload justify-center" id="sortable_3" data-ejercicio="sortable">
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The movie we watched yesterday was good.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The movie which we watched yesterday was good.</span></li>
                <li class="ui-sortable--item row flex justify-between c-counterStep__item js-sortdrag"><span>The movie that we watched yesterday was good.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSortable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="sortable()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>
  $( "#sortable_1" ).sortable()
  $( "#sortable_2" ).sortable()
  $( "#sortable_3" ).sortable()
</script>