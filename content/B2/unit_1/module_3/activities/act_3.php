
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong>  Listen and read the dialogue. Complete the sentences.</h5>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm11 col-flex-md5 col-center">
            <audio class="col xs12 md7 centrado" controls="controls">
              <source src="unit_1/module_3/assets/audios/act_3.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_3_1.png" alt="" srcset=""/>
            <p class="mt30"><strong class="u-textColor_4-dark"> A.</strong> Someone told me that Mary from Canada was in Santa Marta last week, but I saw her here in Medellin. So she<strong> (1)</strong><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span>in Santa Marta.</p>
            <div class="row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='can&#96;t have'">can't have</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='can&#96;t have been'">can't have been</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='can&#96;t be'">can't be</label>
            </div>
          </div>
          <div class="col-flex-sm11 col-flex-md5 col-center">
            <p class="mt30"><strong class="u-textColor_4-dark"> B.</strong> She was in Santa Marta last month. Guess what happened to her!</p>
            <p><strong class="u-textColor_4-dark"> A.</strong> What?</p>
            <p><strong class="u-textColor_4-dark"> B.</strong> Her plane to Santa Marta was delayed and she had to wait 36 hours in the airport!</p>
            <p><strong class="u-textColor_4-dark"> A.</strong> She <strong>(2)</strong><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span>very happy with the airline!</p>
            <div class="row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='can&#96;t be'">can't be</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='not can be'">not can be</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='can&#96;t have been'">can't have been</label>
            </div>
            <p class="mt40"><strong class="u-textColor_4-dark"> B.</strong> Of course not! She wasn't happy at all.</p>
            <p><strong class="u-textColor_4-dark">A.</strong> Does Mary speak any Spanish?</p>
            <p><strong class="u-textColor_4-dark">B.</strong> No, she doesn't.</p>
            <p><strong class="u-textColor_4-dark">A.</strong> So she <strong>(3)  </strong><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span><br/>anything people said! How did she manage?</p>
            <div class="row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='can&#96;t have understood'">can't have understood</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='can&#96;t understand'">can't understand</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='can&#96;t have understand'">can't have understand</label>
            </div>
            <p class="mt40"><strong class="u-textColor_4-dark"> B.</strong> Lots of people speak English in Santa Marta, so she probably didn’t have much trouble communicating.</p>
            <p>  <strong class="u-textColor_4-dark"> A.</strong> Someone told me she had recently quit her job. Is that true?</p>
            <p><strong class="u-textColor_4-dark">B.</strong> Yes, she did. So that means she <strong>(4)</strong><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span>a lot of money in Santa Marta.</p>
            <div class="row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='can&#96;t spend'">can't spend</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='can&#96;t have spent'">can't have spent</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='can&#96;t spent'">can't spent</label>
            </div>
            <p class="mt30"><strong class="u-textColor_4-dark">A.</strong> Why don’t we call her to say hi?</p>
            <p><strong class="u-textColor_4-dark">B.</strong> Let’s do it.</p>
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