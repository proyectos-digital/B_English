
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_8">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md12 col-center mt30-md mt30-sm ta-j"></div>
        <div class="row-flex">
          <ul class="c-counterStep ui-sortable sortreload flex flex-wrap justify-center" id="sortable" data-ejercicio="sortable">
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">Manuel studied his high school at La Salle School in Floridablanca, Santander.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">Next year, he will have to take his English examination, as a requirement to graduate.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">In two years, he will have completed all the requirements for graduation.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">In three and a half years, he will have graduated as an accountant.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">He says that in four years, he will have gained enough experience to open his own accounting office.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">When he finished the English courses, he took the admission exam at University of Colombia.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">Manuel began to study Accounting at University of Colombia.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">Before he entered University of Colombia, he took two basic English courses in Bucaramanga.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">Manuel has studied two semesters of his major at the University of Colombia.</li>
            <li class="ui-sortable--item c-counterStep__item js-sortdrag">When he completes the language requirements, he will have to do the research paper.</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice u-bgIconAlert is-active" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSortable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="sortable()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/selfcheck/self_8_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script>$( "#sortable" ).sortable()</script>