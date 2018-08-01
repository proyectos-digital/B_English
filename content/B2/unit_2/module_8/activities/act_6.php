
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Complete the gaps with "use", "used", "used to" and "would".</h5>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span><span>to love eating seafood.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>My old boss</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span><span>always demand too much.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>My sister</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span><span>go out with one of my friends.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>There</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span><span>be less people on the planet.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>He loved computer games, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span><span>play them for hours.</span></span></li>
            </ol>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>He</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_f"/></span><span>have a powerful gaming PC.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>He</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_g"/></span><span>not spend much time practicing sports when he was young.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I didn’t</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_h"/></span><span>to do my homework every week.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>She</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_i"/></span><span>to spend all her time playing football!</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Didn’t you</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_j"/></span><span>to wear glasses?</span></span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>