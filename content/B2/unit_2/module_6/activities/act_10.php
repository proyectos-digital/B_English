
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md4 col-center mt30-md "><img class="u-responsive-img showTo-md" src="unit_2/module_6/assets/images/act_10.png" alt=""/>
          <p class="mt30"><strong>Read the following sentences:</strong></p>
          <p class="mt30">Most <strong>interested students</strong> in online tutorials at UNAD, and those <strong>registered in </strong> the blended learning programs can now access more information in the website. The <strong>tutors trained </strong> for this service offer <strong>motivating sessions </strong> and additional materials. Newly <strong>added materials </strong> facilitate your learning.</p>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm">
          <h6><strong class="u-textColor_4">1. </strong> Choose the right option.</h6>
          <div class="row mb20 mt50">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>The inspector learned that all the</span><span class="c-textField">
                    <input class="c-input ta-c" type="text" placeholder="Text here..." ng-model="txtcaptura_a" disabled="disabled"/></span><span>men worked for the same company.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='Interviewing'">interviewing</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='Interviewed'">interviewed</label>
            </div>
          </div>
          <div class="row mb20 mt50">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I live in a very nice room</span><span class="c-textField">
                    <input class="c-input ta-c" type="text" placeholder="Text here..." ng-model="txtcaptura_b" disabled="disabled"/></span><span>the sea.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_b='Overlooked'">overlooked</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='Overlooking'">overlooking</label>
            </div>
          </div>
          <div class="row mb20 mt50">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Some of the people</span><span class="c-textField">
                    <input class="c-input ta-c" type="text" placeholder="Text here..." ng-model="txtcaptura_c" disabled="disabled"/></span><span>to the party can’t come.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_c='Inviting'">inviting</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_c='Invited'">invited</label>
            </div>
          </div>
          <div class="row mb20 mt50">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I was woken up by a</span><span class="c-textField">
                    <input class="c-input ta-c" type="text" placeholder="Text here..." ng-model="txtcaptura_d" disabled="disabled"/></span><span>phone.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_d='Ringing'">ringing</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_d='Rang'">rang</label>
            </div>
          </div>
          <div class="row mb20 mt50">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>The newly</span><span class="c-textField">
                    <input class="c-input ta-c" type="text" placeholder="Text here..." ng-model="txtcaptura_e" disabled="disabled"/></span><span>factory is producing too much smoke</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_e='Opened'">opened</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_e='Opening'">opening</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_6/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>