
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <h5><strong class="u-textColor_4">1. </strong> Choose the correct form of the verb</h5>
        <div class="col-flex-sm12 col-flex-md4 mt50-md mt30-sm">
          <div class="row mb30 ta-c showTo-md"><img class="c-figure w90" src="unit_1/module_4/assets/images/act_13_1.png" alt=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md8 mt50-md mt30-sm col-center">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Hollywood</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" readonly="readonly" ng-model="txtcaptura_a" disabled="disabled"/></span><span>for its movies and movie stars.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='is known'">is known</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='was known'">was known</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Switzerland and Germany</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" readonly="readonly" ng-model="txtcaptura_b" disabled="disabled"/></span><span>for their fine watches.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='were known'">were known</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='are known'">are known</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Those cave paintings</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" readonly="readonly" ng-model="txtcaptura_c" disabled="disabled"/></span><span>16,000 years ago.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='are being created'">are being created</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='were created'">were created</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>All ingredients for the soup</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" readonly="readonly" ng-model="txtcaptura_d" disabled="disabled"/></span><span>and</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" readonly="readonly" ng-model="txtcaptura_e" disabled="disabled"/></span><span>to the pot.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='were chopped up'">were chopped up</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='were being chopped up'">were being chopped up</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_e='was added'">was added</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='were added'">were added</label>
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
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>