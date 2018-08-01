
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2" ng-init="s_actividad = 1; answer_1 = false">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex mt30 align-items-center">
        <h5 class="row">Try to figure out the answer to following riddles.</h5>
        <div class="col xs12 md5 col-center mt30">
          <p><strong> Mary and John have five daughters, and each daughter has one brother. How many people are in the family?</strong>.</p>
          <div class="row row-flex align-items-center justify-center flex-column"><img class="u-responsive-img w60 col-center" src="unit_1/module_4/assets/images/col_2_1.png" alt="myColombia"/>
            <select class="c-select c-textField mt20 col-center">
              <option disabled="disabled" selected="selected"> </option>
              <option value="1">8 people, 5 daughters, 1 son and the 2 parents.</option>
              <option value="2">12 people, 5 daughters, 5 sons and the 2 parents.</option>
              <option value="3">9 people, 5 daughters, 1 son and the 2 parents.</option>
            </select>
          </div>
        </div>
        <div class="col xs12 md5 col-center mt30">
          <p><strong>I am a married woman. Tom’s son is my daughter’s father. What is my relationship to Tom?</strong>.</p>
          <div class="row row-flex align-items-center justify-center flex-column"><img class="u-responsive-img m-a w60 col-center" src="unit_1/module_4/assets/images/col_2_2.png" alt="myColombia"/>
            <select class="c-select c-textField mt20 col-center">
              <option disabled="disabled" selected="selected"> </option>
              <option value="1">Cousin.</option>
              <option value="2">Niece.</option>
              <option value="3">Daughter in law.</option>
            </select>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md5 col-center">
          <p><strong>A man sees an old friend from high school. The friend ask him: “ Who is this lady you are walking with?”, the man replied "Her mother-in-law and my mother-in-law are mother and daughter to each other." Who is the woman for the man?</strong>. 
                     
          </p>
          <div class="row row-flex align-items-center justify-center flex-column"><img class="u-responsive-img m-a w60 col-center" src="unit_1/module_4/assets/images/col_2_3.png" alt="myColombia"/>
            <select class="c-select c-textField mt20 col-center">
              <option disabled="disabled" selected="selected"> </option>
              <option value="1">The lady is the man's daughter-in-law.</option>
              <option value="2">The lady is the man's niece.</option>
              <option value="3">The lady is the man's granddaughter.</option>
            </select>
          </div>
        </div>
        <div class="col xs12 md5 col-center">
          <p><strong>What is your father's sister's sister-in-law to you?</strong>.
                     
          </p>
          <div class="row row-flex align-items-center justify-center flex-column"><img class="u-responsive-img m-a w60 col-center" src="unit_1/module_4/assets/images/col_2_4.png" alt="myColombia"/>
            <select class="c-select c-textField mt20 col-center">
              <option disabled="disabled" selected="selected"> </option>
              <option value="1">Your sister.</option>
              <option value="2">Your mother-in-law.</option>
              <option value="3">Your aunt.</option>
            </select>
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