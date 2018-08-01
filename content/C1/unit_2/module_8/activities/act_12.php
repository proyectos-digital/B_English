
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_12" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="ta-c u-textColor_2">Asking for information and giving answers about people, places, timetables, facts, activities or events</h5>
      <p class="ta-c"><strong>Normally, when asking for information we have to use a polite tone, especially if we have to interrupt the person</strong>. Depending on the time of the day, you can start off with an appropriate greeting, before asking for the information: <strong>Greeting / afternoon / evening</strong>.</p>
      <p class="ta-c">You can say <strong>‘excuse me’</strong>  in order to get the person’s attention.</p>
      <p class="ta-c"><strong>‘Could’</strong> is also a polite way to request something.</p>
      <div class="row">
        <div class="col xs12 md8 col-center">
          <div class="row-flex mt30 flex align-items-center mt20 justify-around">
            <button class="c-btn-IconAction u-bgIconListen mr10" ng-audio="unit_2/module_8/assets/audios/act_12_1.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen mr10" ng-audio="unit_2/module_8/assets/audios/act_12_2.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen mr10" ng-audio="unit_2/module_8/assets/audios/act_12_3.mp3"></button>
          </div>
        </div>
      </div>
      <div class="row mt30">
        <h5><strong>Embarrassment</strong><br/></h5>
        <p>Expressing embarrassment is expressing how ashamed one is of or for doing something. <br/>
          Here are few expressions:
        </p>
      </div>
      <div class="row row-flex align-items-center justify-center">
        <div class="col xs12 md5">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p><strong>Embarrassment</strong> tends to refer to<strong> socially awkward or uncomfortable contexts</strong>.<br/><br/>
                • feel / be (so) embarrassed when / because + explanation<br/>
                • feel / be (so) embarrassed to + verb<br/>
                • make someone feel ashamed / embarrassed<br/>
              </p>
              <div class="row">
                <div class="row row-flex align-items-center justify-center">
                  <div class="col xs6 sm4 md6 mt20">
                    <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_12_1.png" alt=""/>
                      <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_12_4.mp3"></button>
                    </div>
                  </div>
                  <div class="col xs6 sm4 md6 mt20">
                    <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_12_2.png" alt=""/>
                      <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_12_5.mp3"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md5 ma-l">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p><strong>Shame</strong> tends to refer to <strong>some sort of guilt or regret</strong>.<br/><br/>
                • feel / be (so) ashamed to + verb<br/>
                • feel / be (so) ashamed when / because + explanation<br/>
              </p>
              <div class="row">
                <div class="row row-flex align-items-center justify-center">
                  <div class="col xs6 sm4 md6 mt20">
                    <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_12_3.png" alt=""/>
                      <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_12_6.mp3"></button>
                    </div>
                  </div>
                  <div class="col xs6 sm4 md6 mt20">
                    <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_12_4.png" alt=""/>
                      <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_12_7.mp3"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5 class="ta-c">Based on the images, how would each person feel: embarrassed or ashamed?</h5>
      <div class="row mt30">
        <div class="col sm12 md4">
          <div class="w90 align-items-center"><span>Being hit the face with a baseball at a national game.</span><img class="u-responsive-img mt30 m-a collection-item" src="unit_2/module_8/assets/images/act_12_5.png" alt=""/>
            <div class="row ta-c mt10">
              <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="2">ashamed</option>
                <option value="1">embarrassed</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col sm12 md4">
          <div class="w95 col align-items-center"><span>Falling on the runway at a fashion show</span><img class="u-responsive-img mt45 m-a collection-item" src="unit_2/module_8/assets/images/act_12_6.png" alt=""/>
            <div class="row ta-c mt10">
              <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="1">ashamed</option>
                <option value="2">embarrassed</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col sm12 md4">
          <div class="w95 col align-items-center"><span class="ta-c">A father dancing while wearing a pink tutu.</span><img class="u-responsive-img mt45 m-a collection-item" src="unit_2/module_8/assets/images/act_12_7.png" alt=""/>
            <div class="row ta-c mt10">
              <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="1">ashamed</option>
                <option value="2">embarrassed</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <h5 class="ta-c">Based on the images, how would each person feel: embarrassed or ashamed?</h5>
      <div class="row mt30">
        <div class="col sm12 md4">
          <div class="w95 align-items-center"><span>Getting caught on camera accepting a bribe.</span><img class="u-responsive-img m-a mt30 collection-item" src="unit_2/module_8/assets/images/act_12_8.png" alt=""/>
            <div class="row ta-c mt10">
              <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="1">ashamed</option>
                <option value="2">embarrassed</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col sm12 md4">
          <div class="w95 align-items-center"><span>The wind blowing up your skirt in public</span><img class="u-responsive-img m-a mt30 collection-item" src="unit_2/module_8/assets/images/act_12_9.png" alt=""/>
            <div class="row ta-c mt10">
              <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="2">ashamed</option>
                <option value="1">embarrassed</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col sm12 md4">
          <div class="w95 align-items-center"><span>Getting caught cheating on exam.</span><img class="u-responsive-img m-a mt30 collection-item" src="unit_2/module_8/assets/images/act_12_10.png" alt=""/>
            <div class="row ta-c mt10">
              <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="2">ashamed</option>
                <option value="1">embarrassed</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 3" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 3" ng-click="selectOption()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>