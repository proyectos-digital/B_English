
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row mt40 ">
        <h5>Choose the best answer for the following questions:</h5>
        <div class="row-flex m-a">
          <div class="col-flex-sm12 col-flex-md6 padding20 mt10-xs">
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>What is a good title for this Email?</span></span></li>
              </ol>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_b='come'">Using Transmilenio </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_b='count'">moving to Chapinero  </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_b='settle'">Welcome to University life.</label>
              </div>
            </div>
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>What does Alfredo think of the south of Bogota?</span></span></li>
              </ol>
              <div class="row-flex justify-around">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_c='break'">It is dangerous </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_c='put'">It is easy to find an apartment or room  </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_c='turn'">It is easy to travel to by transmilenio</label>
              </div>
            </div>
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Why is it easier to get a transmilenio card?</span></span></li>
              </ol>
              <div class="row-flex justify-around">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='break'">You will get a discount  </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='put'">Students get a discount</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='turn'">You avoid the daily lines</label>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 padding20 mt10-xs">
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Where is the University Located?</span></span></li>
              </ol>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='go'">In the South of Bogota</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='hang'">Near El Dorado airport</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='try'">In Chapinero</label>
              </div>
            </div>
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Alfredo thinks a Nursery student should get a part-time job at a…</span></span></li>
              </ol>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='take'">Bank</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e='put'">Hotel</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='speed'">Hospital</label>
              </div>
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