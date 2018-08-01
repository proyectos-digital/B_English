
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col xs12 md7 ta-c ">                  <img class="u-responsive-img mt30 showTo-md" src="unit_3/module_10/assets/images/act_10.png" alt="act_7"/>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-l lh25">
                <p class="ta-j">In all languages, there are words that you use when you don’t know or don’t remember the exact name. In Colombia, for example, we use “VAINA” or “COSA” when we are not sure. In English we often use the word thing(s) and stuff when both the speaker and the listener know which objects are being discussed, or when we don’t know the exact word, or even when there isn’t an exact word.</p>
                <ul> 
                  <li><strong>• Thing </strong> refers to single countable objects (e.g. a car, a mouse).</li>
                  <li><strong>• Things </strong> refer to plural countable objects (e.g. clothes, spiders, pens).</li>
                  <li><strong>• Stuff </strong> refers to uncountable objects (e.g. oil, information) or a collection of countable objects (like things) e.g. a lot of clothes, shopping items.                        </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col xs12 md5 pdr5">
            <h5 class="mb30">Listen to the examples and choose the correct option.</h5>
            <div class="row mb50 flex align-items-center">
              <div class="col xs1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_10_1.mp3"></button>
              </div>
              <div class="col xs11"><strong><span class="u-textColor_4-dark">1. </span></strong><span> In Example 1, stuff refers to:</span>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_1" ng-click="txtcaptura_c='at'">Lots of different things.</label>
                  <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_2" ng-click="txtcaptura_c='about'">Things that the speaker can´t remember the name of.</label>
                  <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_3" ng-click="txtcaptura_c='of'">A single countable object.</label>
                </div>
              </div>
            </div>
            <div class="row mb50 flex align-items-center">
              <div class="col xs1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_10_2.mp3"></button>
              </div>
              <div class="col xs11"><strong><span class="u-textColor_4-dark">2. </span></strong><span> In Example 2:</span>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_4" ng-click="txtcaptura_c='at'">The speaker says his eyes are blue.</label>
                  <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_5" ng-click="txtcaptura_c='about'">The speaker says his eyes are green.</label>
                  <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_6" ng-click="txtcaptura_c='of'">The speaker is not sure what color are his eyes.</label>
                </div>
              </div>
            </div>
            <div class="row mb50 flex align-items-center">
              <div class="col xs1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_10_3.mp3"></button>
              </div>
              <div class="col xs11"><strong><span class="u-textColor_4-dark">3. </span></strong><span>In Example 3:</span>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_7" ng-click="txtcaptura_c='at'">The speaker is looking for something.</label>
                  <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_8" ng-click="txtcaptura_c='about'">The speaker is looking for someone.</label>
                  <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                  <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_9" ng-click="txtcaptura_c='of'">The speaker is looking for his glasses.</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>