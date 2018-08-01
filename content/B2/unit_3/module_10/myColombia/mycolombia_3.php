
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <h5 class="mb35 row">Choose the best answer for the following questions:</h5>
        <div class="col xs12 lg4 ta-c"><img class="u-responsive-img m-a" src="unit_3/module_10/assets/images/col_3.png" alt="act_2"/></div>
        <div class="col xs12 sm6 lg4 ta-l ">
          <div>
            <h6><span class="u-textColor_4"><strong>1. </strong></span> What is an appropriate name for the text?</h6>
            <p>
              <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
              <label class="c-Checkbox" for="inputRadio_1" ng-click="txtcaptura_a='told'"><span>The laws of Colombia. </span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
              <label class="c-Checkbox" for="inputRadio_2" ng-click="txtcaptura_a='told'"><span> Colombian Customs regulation. </span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
              <label class="c-Checkbox" for="inputRadio_3" ng-click="txtcaptura_a='told'"><span> Custom agents.</span></label>
            </p>
          </div>
          <div>
            <h6><span class="u-textColor_4"><strong>2. </strong></span> Upon arrival at El Dorado International Airport, all foreign passengers must have a...</h6>
            <p>
              <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_2" value="1"/>
              <label class="c-Checkbox" for="inputRadio_4" ng-click="txtcaptura_a='told'"><span>Passport. </span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="2"/>
              <label class="c-Checkbox" for="inputRadio_5" ng-click="txtcaptura_a='told'"><span> Visa.</span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="3"/>
              <label class="c-Checkbox" for="inputRadio_6" ng-click="txtcaptura_a='told'"><span> money to pay the embarkation tax.</span></label>
            </p>
          </div>
          <div>
            <h6><span class="u-textColor_4"><strong>3. </strong></span>  If I left my bag in the airport door, where can I go to reclaim it?</h6>
            <p>
              <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_3" value="1"/>
              <label class="c-Checkbox" for="inputRadio_7" ng-click="txtcaptura_a='told'"><span>In the same spot. </span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_3" value="2"/>
              <label class="c-Checkbox" for="inputRadio_8" ng-click="txtcaptura_a='told'"><span> In the baggage claim.</span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="3"/>
              <label class="c-Checkbox" for="inputRadio_9" ng-click="txtcaptura_a='told'"><span>You cannot claim it.</span></label>
            </p>
          </div>
        </div>
        <div class="col xs12 sm6 lg4 ta-l  ">
          <div>
            <h6><span class="u-textColor_4"><strong>4. </strong></span> If I have a bullet in my pocket what will happen to me at customs in El Dorado International Airport?</h6>
            <p>
              <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_4" value="1"/>
              <label class="c-Checkbox" for="inputRadio_10" ng-click="txtcaptura_a='told'"><span>It will be taken from me and I will Board the flight.</span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_4" value="2"/>
              <label class="c-Checkbox" for="inputRadio_11" ng-click="txtcaptura_a='told'"><span>I will be searched, questioned and possible arrested.  </span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_4" value="3"/>
              <label class="c-Checkbox" for="inputRadio_12" ng-click="txtcaptura_a='told'"><span>My bags will be searched and I will be allowed on the flight. </span></label>
            </p>
          </div>
          <div>
            <h6><span class="u-textColor_4"><strong>5. </strong></span> What will happen if I have U.S.$5,000 in my pocket and U.S. $5,001 in my luggage?</h6>
            <p>
              <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_5" value="1"/>
              <label class="c-Checkbox" for="inputRadio_13" ng-click="txtcaptura_a='told'"><span>It ok because you only have U.S. $5,000 in my pocket. </span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_5" value="2"/>
              <label class="c-Checkbox" for="inputRadio_14" ng-click="txtcaptura_a='told'"><span>The extra U.S.$1.00 will be taken away.</span></label>
            </p>
            <p>
              <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_5" value="3"/>
              <label class="c-Checkbox" for="inputRadio_15" ng-click="txtcaptura_a='told'"><span>The entire amount will be confiscated and you will be questioned.</span></label>
            </p>
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
 