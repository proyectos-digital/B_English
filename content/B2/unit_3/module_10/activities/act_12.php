
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row">
          <h5>Decide if the vague expressions are polite or impolite.</h5>
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_12.png" alt="act_12"/></div>
            <div class="col-flex-sm12 col-flex-md6 col-center">
              <div class="col xs12 md6">
                <div class="row mb50">
                  <div class="row-flex mb20">
                    <button class="c-btn-IconAction u-bgIconListen  is-active u-textWhite" ng-audio="unit_3/module_10/assets/audios/act_12_1.mp3"></button>
                    <h6 class="m-a">"Conversation 1"</h6>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                    <label class="c-CheckSelected row" for="inputRadio_1">Polite</label>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                    <label class="c-CheckSelected row" for="inputRadio_2">Impolite</label>
                  </div>
                </div>
                <div class="row mb50">
                  <div class="row-flex mb20">
                    <button class="c-btn-IconAction u-bgIconListen  is-active u-textWhite" ng-audio="unit_3/module_10/assets/audios/act_12_2.mp3"></button>
                    <h6 class="m-a">"Conversation 2"</h6>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                    <label class="c-CheckSelected row" for="inputRadio_3">Polite</label>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                    <label class="c-CheckSelected row" for="inputRadio_4">Impolite</label>
                  </div>
                </div>
                <div class="row mb50">
                  <div class="row-flex mb20">
                    <button class="c-btn-IconAction u-bgIconListen  is-active u-textWhite" ng-audio="unit_3/module_10/assets/audios/act_12_3.mp3"></button>
                    <h6 class="m-a">"Conversation 3"</h6>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                    <label class="c-CheckSelected row" for="inputRadio_5">Polite</label>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                    <label class="c-CheckSelected row" for="inputRadio_6">Impolite</label>
                  </div>
                </div>
              </div>
              <div class="col xs12 md6">
                <div class="row mb50">
                  <div class="row-flex mb20">
                    <button class="c-btn-IconAction u-bgIconListen  is-active u-textWhite" ng-audio="unit_3/module_10/assets/audios/act_12_4.mp3"></button>
                    <h6 class="m-a">"Conversation 4"</h6>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                    <label class="c-CheckSelected row" for="inputRadio_7">Polite</label>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                    <label class="c-CheckSelected row" for="inputRadio_8">Impolite</label>
                  </div>
                </div>
                <div class="row mb50">
                  <div class="row-flex mb20">
                    <button class="c-btn-IconAction u-bgIconListen  is-active u-textWhite" ng-audio="unit_3/module_10/assets/audios/act_12_5.mp3"></button>
                    <h6 class="m-a">"Conversation 5"</h6>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                    <label class="c-CheckSelected row" for="inputRadio_9">Polite</label>
                  </div>
                  <div class="col xs12 md6">
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                    <label class="c-CheckSelected row" for="inputRadio_10">Impolite</label>
                  </div>
                </div>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>