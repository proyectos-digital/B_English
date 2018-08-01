
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
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>What would be an appropriate title for the text?</span></span></li>
              </ol>
              <div class="row">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_b='come'">My childhood in the coast of Colombia. </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_b='count'">My Grandparents. </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="2"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_b='settle'">My Childhood Friends.</label>
              </div>
            </div>
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>We could not watch TV because...</span></span></li>
              </ol>
              <div class="row justify-around">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_c='break'">Grandparents wouldn’t let me.</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_c='put'">I had to do my homework first.   </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_c='turn'">There was no electricity.</label>
              </div>
            </div>
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>My grandparents...</span></span></li>
              </ol>
              <div class="row justify-around">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='break'">Hated when we played outside.</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='put'">Made sure we ate before we played.</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='turn'">Made sure we did our homework before we played.</label>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 padding20 mt10-xs">
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>As a child... </span></span></li>
              </ol>
              <div class="row">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='go'">Playing outside with my friends and brothers. </label>
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='hang'">I love ghost stories.</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='try'">I love singing.</label>
              </div>
            </div>
            <div class="row mb20 mt30">
              <ol class="c-listDefault">
                <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Why did the narrator want to be a firefighter?</span></span></li>
              </ol>
              <div class="row">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='take'">Because he got an engine toy.</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e='put'">Because he enjoys playing with fire.</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
                <label class="c-CheckSelected col-flex centrado w100 mt10 ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='speed'">Because he didn’t want to be a teacher.</label>
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