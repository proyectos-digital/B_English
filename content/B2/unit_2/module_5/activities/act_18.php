
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5> <strong class="u-textColor_4">1. </strong> Read the paragraph and complete it with the correct form of the verbs.</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
            <div class="row mt40"><img class="u-responsive-img centrado w80" src="./unit_2/module_5/assets/images/act_18_1.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="row mt40">
              <p class="u-txtSpace">Dale Carnegie <strong>(1)</strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">began</option>
                  <option value="2">had begun</option>
                </select> teaching people how to speak in public in 1912. But only a year before that, he <strong>(2)</strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">lived</option>
                  <option value="2"> had been living</option>
                </select>in a New York hostel, out of money and out of work. His problems <strong>(3)</strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">had started</option>
                  <option value="2"> had been starting</option>
                </select>when he quit the company where he <strong>(4) </strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">worked</option>
                  <option value="2"> had been working</option>
                </select>as a salesman. Instead, he studied acting and <strong>(5)</strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">got </option>
                  <option value="2">had been getting</option>
                </select>a part in a travelling show. The show closed after a short time and Carnegie needed work. Before his acting course, he <strong>(6)</strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">thought</option>
                  <option value="2">had been thinking</option>
                </select>of becoming a teacher, and he decided to setup the "Dale Carnegie Course". His success <strong>(7)</strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">was</option>
                  <option value="2">had been</option>
                </select>immediate. By the time Carnegie died, over 5 million people <strong>(8)</strong>
                <select class="c-select c-textField w30 ml10 mr10">
                  <option disabled="disabled" selected="selected"> </option>
                  <option value="1">read</option>
                  <option value="2">had read</option>
                </select>his book How to Win Friends and Influence People, and he was one of the best-known trainers in public speaking in the world.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
