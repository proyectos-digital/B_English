
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <p><strong> Here are some useful expressions that can be used when arguing a point or stating a fact:</strong></p>
          <div class="col xs12 md11 col-center">  
            <ul class="col xs4">
              <li><strong class="u-textColor_4">•</strong> There is no denying (the fact) that…</li>
              <li><strong class="u-textColor_4">•</strong> Clearly…</li>
              <li><strong class="u-textColor_4">•</strong> It is clear that…</li>
              <li><strong class="u-textColor_4">•</strong> There is no doubt that…</li>
            </ul>
            <ul class="col xs4"> 
              <li><strong class="u-textColor_4">•</strong> It is evident that…</li>
              <li><strong class="u-textColor_4">•</strong> It is obvious that…</li>
              <li><strong class="u-textColor_4">•</strong> Obviously...</li>
              <li><strong class="u-textColor_4">•</strong> It is certain that… </li>
            </ul>
            <ul class="col xs4"> 
              <li><strong class="u-textColor_4">•</strong> In truth and in fact…</li>
              <li><strong class="u-textColor_4">•</strong> The fact is that…</li>
              <li><strong class="u-textColor_4">•</strong> Certainly…</li>
            </ul>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> <strong>Eg1: There’s no doubt that , </strong> Germany’s economy is larger than that of Italy’s.</p>
            <p><strong class="u-textColor_4">•</strong> <strong> Eg2: Certainly,</strong> in terms of population size, Colombia is more populated than Cuba.</p>
          </div>
          <div class="row mt30">  
            <p> <strong>Remember, when making comparisons, we are comparing two people, things, objects or qualities. Depending on the syllables of the adjective, there are certain rules to follow: </strong>   </p>
            <div class="row-flex justify-between">
              <div class="u-bgColor_4-lighter w30 flex align-items-center ta-c padding10">
                <div class="row">
                  <p><strong>1 syllable</strong></p>
                  <p><strong class="u-textColor_4">• </strong> <strong>add ER (+ than)</strong></p>
                  <p><strong>Eg: young</strong> <br/> France’s President is 
                    <stong>younger than</stong> Canada’s president.
                  </p>
                </div>
              </div>
              <div class="u-bgColor_4-lighter w30 flex align-items-center ta-c padding10">
                <div class="row">
                  <p><strong>1 Adjectives with 2 syllables that end in ‘y’</strong></p>
                  <p><strong class="u-textColor_4">• </strong> <strong>change the ‘Y’ to ‘I’ then add ER (+ than)</strong></p>
                  <p><strong>Eg: scary</strong> <br/> Compared to the horror movies of today, I think the Chucky movies were  
                    <stong>scarier</stong>.
                  </p>
                </div>
              </div>
              <div class="u-bgColor_4-lighter w30 flex align-items-center ta-c padding10">
                <div class="row">
                  <p><strong>3 or more syllables</strong></p>
                  <p><strong class="u-textColor_4">• </strong> <strong>MORE + Adjective (+ than)</strong></p>
                  <p><strong>Eg: interactive</strong> <br/> This new online program is  
                    <stong>more interactive</stong>.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <p> Bear in mind that there are also irregular adjectives. In this case, their comparative forms are different:                 </p>
          <div class="col xs12 md11 col-center">  
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> good → better (than)</li>
              <li><strong class="u-textColor_4">•</strong> bad → worse (than)</li>
              <li><strong class="u-textColor_4">•</strong> far → farther (than) [physical distance] / further [non-physical distance or things]</li>
            </ul>
          </div>
          <p class="mt30"><strong>as + adjective + as</strong> <br/> This structure of comparison is used to indicate similarities. In this instance, there’s no need to change the adjectives.
            <div class="col xs12 md11 col-center"> 
              <ul class="lh25">
                <li><strong class="u-textColor_4">•</strong> <strong>Eg1:</strong> Brian is <strong>as organized as</strong> his father. Like father, like son.</li>
                <li><strong class="u-textColor_4">•</strong> <strong>Eg2:</strong> Physics is  <strong>as hard as</strong> chemistry. I really don’t like it!</li>
              </ul>
            </div>
          </p>
          <p class="mt30"><strong>not as + adjective + as</strong> <br/> This structure can be used when you wish to say that something or someone is less than the other. Again, in this instance, there’s no need to change the adjectives.
            <div class="col xs12 md11 col-center"> 
              <ul class="lh25">
                <li><strong class="u-textColor_4">•</strong> <strong>Eg1:</strong> It is obvious that Melissa is not as strong as Kimberly.</li>
                <li><strong class="u-textColor_4">•</strong> <strong>Eg2:</strong> Many Caribbean countries are not as developed as European countries.</li>
              </ul>
            </div>
          </p>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center justify-between"> 
        <div class="col xs12 md5 ta-c"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_13_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>Based on the context, choose the best answer. </h5>
          <div class="row">
            <p><strong class="u-textColor_4">•</strong> There’s no denying that technology is 
              <input class="c-input js-escribir" type="text"/> <strong class="u-textColor_2">(good)</strong> today than it was 10 years ago.
            </p>
          </div>
          <div class="row mt25">
            <p><strong class="u-textColor_4">•</strong> The video footage shows the man entering the supermarket with a gun. </p>
            <div class="row-flex align-items-center justify-center">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="mr10 mt0 c-CheckSelected" for="inputRadio_1">Fact</label><span class="mr10">or</span>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="mr10 mt0 c-CheckSelected" for="inputRadio_2">Opinion</label><span class="mr10">?</span>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt25"><span><strong class="u-textColor_4">•</strong> The fact is that the policies implemented by the current administration are  </span>
            <select class="c-select ml5 mr5 mt5 mb5 js-escribir" name="act_13_1">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">not as effective as</option>
              <option value="2">as effective as</option>
            </select><span>they should be.</span>
          </div>
          <div class="row mt25"><span><strong class="u-textColor_4">•</strong> Based on the university’s assessment of the issue, each student is </span>
            <select class="c-select ml5 mr5 mt5 mb5 js-escribir" name="act_13_2">
              <option value="" disabled="disabled" selected="selected"></option>
              <option value="1">guiltier than</option>
              <option value="2">as guilty as</option>
            </select><span>the other. </span>
          </div>
          <div class="row">
            <p><strong class="u-textColor_4">•</strong> He’s 
              <input class="c-input js-escribir" type="text"/> <strong class="u-textColor_2">(dishonest)</strong> I thought.
            </p>
          </div>
          <div class="row mt25"><span><strong class="u-textColor_4">•</strong> When you compare both signatures, they do not match. So</span>
            <select class="c-select ml5 mr5 mt5 mb5 js-escribir" name="act_13_3">
              <option value="" disabled="disabled" selected="selected"></option>
              <option value="1">in my opinion</option>
              <option value="2">certainly</option>
            </select><span>Paul forged his mother’s signature.</span>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>