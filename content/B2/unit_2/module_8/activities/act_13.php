
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_13a.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "> 
                  <h5>El Carmelo - Medellin</h5>
                  <p>I had a very nice meal at El Carmelo restaurant. The food was lovely – delicious and full of flavor. The only disappointment was the dessert – the apple pie was far too sweet and it was cold too. We chose to eat in the garden which was full of beautiful flowers and very relaxing. The service was quite good but as we were in the garden it was more difficult to find a waiter when we wanted to order something. Apart from that it was an enjoyable evening. As for the price – what a bargain, excellent value for money!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "> 
                  <h5>Sassones - Bogota </h5>
                  <p>The best thing about Sassones was the service, it was excellent. There was a warm welcome when we arrived and the staff was very helpful all evening. The food was good. The menu was interesting. I ordered a curry which was very delicious and had a lot of flavors. Then when we had coffee at the end. It’s quite a nice room, with black and white photographs of famous people on the walls. It’s not cheap, but it is not expensive either.</p>
                </div>
              </div>
            </div>
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_13b.png" alt=""/></div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_13c.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "> 
                  <h5>Caramillo - Cali</h5>
                  <p>I went to Caramillo because I wanted a romantic meal with my wife – what a mistake! The music playing was horrible and very loud too. There were no candles; the place was full of bright, flashing lights! The food was average, nothing special at all. My wife’s chocolate cake was tasty but I had a lemon tart which was far too sour. Our waitress never noticed when our glasses were empty and we had to wait over half an hour for the bill. It wasn’t expensive but as the food wasn’t great I’m glad I didn’t have to pay any more.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 4">
      <div class="row-flex col-center mt30-xs mt50-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <h5>Answer the questions.</h5>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1. </span></strong><span>Where did this person have the best experience?</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_1">El Carmen</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_2">Sassones</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_3">Caramillo</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2. </span></strong><span>Where did this person have the worst experience?</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_4">El Carmen</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_5">Sassones</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_6">Caramillo</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3. </span></strong><span>Where did this person have the tastiest meal?</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_7">El Carmen</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_8">Sassones</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_9">Caramillo</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4. </span></strong><span> Which place offers the best service?  </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_10">El Carmen</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_11">Sassones </label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_12">Caramillo</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5. </span></strong><span>Which place has the worst setting and decoration? </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_13">El Carmen</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_14">Sassones</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                <label class="c-CheckSelected row mt10" for="SelectRadio_15">Caramillo</label>
              </div>
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