
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Read the following sentences and then select the right meaning for the words in boldface.</h5>
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p>• After the avalanche in Armero, the local government is <strong>looking after </strong> hundreds of kids.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">care for, take care of</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">look behind you</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• If you have doubts about the math problem, you can talk to Ramiro. He <strong>sails through </strong> math!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">travel by boat</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">get through something without difficulty</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• When the police arrived, the thieves have destroyed the evidence! They had <strong>ripped up </strong> all the documents.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">climb up</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">to tear paper into small pieces</label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p>• Have you seen Milan, Shakira’s son? He <strong>took after </strong> his father! They are identical!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">leave for another moment</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">to resemble a relative</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• Remember! We are not going to buy anything. We are just going to <strong>look around </strong> to compare prices.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">to walk around a room or building to see what is there</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">look in circles</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• I am always stressed because I have to <strong>deal with </strong> students who failed courses at the university!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_6" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">to make business</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_6" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">to take action to do something</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>