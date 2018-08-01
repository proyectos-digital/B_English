
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_9" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex mt30 align-items-center">
        <div class="c-cardBlue">
          <div class="c-cardBlueContent u-textColor_1">
            <div class="col xs12 md6">
              <h5 class="ta-c">Expressing and asking about health, symptoms and</h5>
              <h5 class="ta-c">physical sensations.</h5>
              <p class="ta-j">
                To ask about how someone feels, especially regarding their health, it is common to ask
                <strong>“How do you feel?”</strong> <br/><br/>
                
                To find out if the person’s condition has improved, one might ask <strong>“(Are you) feeling any better?”</strong> <br/><br/>
                
                <strong>Common type of aches</strong>: The verb ‘have’ is used when referring to these aches.
                • stomach ache / belly ache , headache, backache, toothache, earache.<br/>
                Other symptoms with the verb ‘have’:<br/><br/>
                
                <strong class="u-textColor_4 ml30">•</strong> have a rash.<br/>
                <strong class="u-textColor_4 ml30">•</strong> have a runny nose.<br/>
                <strong class="u-textColor_4 ml30">•</strong> have a sore throat.<br/>
                <strong class="u-textColor_4 ml30">•</strong> have / feel a tingling sensation → a feeling of pins and needles.<br/>
                <strong class="u-textColor_4 ml30">•</strong> have / get butterflies in one’s stomach → feel very excited or nervous about something.<br/>
                
              </p>
            </div>
            <div class="col xs12 md6">
              <p class="ja-j"><strong>It is also possible to qualify the pain or ache that you feel:</strong>
                Sharp, Shooting, Piercing, Intense, Unbearable, Throbbing, Numb, Awful, Terrible, Splitting.<br/><br/>
                
                <strong>Eg:</strong> Karen has had a throbbing headache for the past few days. I think she might be
                suffering from a migraine.<br/><br/>
                
                <strong>Of course, you can say where hurts:</strong> <br/><br/>
                
                <strong>Eg:</strong> I sprained my ankle the other day while jogging. Now, it’s swollen and it really hurts.<br/>
                <strong>Eg:</strong> He says he can’t walk any further because his feet hurt.<br/>
                <strong>**Remember to use say ‘hurts’ with the singular and ‘hurt’ with the plural.**</strong>
                
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex mt30 align-items-center">
        <h5 class="ta-c">Based on the images, say what illness or symptom each person has. You need to incorporate the adjective given.</h5>
        <div class="row">
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Ronald / Unbearable</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_1.png" alt=""/>
          </div>
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Jack / Terrible</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_2.png" alt=""/>
          </div>
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Nicole / Awful</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_3.png" alt=""/>
          </div>
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Jason / Rash</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_4.png" alt=""/>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Sharon / Splitting</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_5.png" alt=""/>
          </div>
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Ashley / Runny</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_6.png" alt=""/>
          </div>
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Elaine / Butterflies in</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_7.png" alt=""/>
          </div>
          <div class="col xs6 md3 ta-c mt40">
            <p><strong class="u-textColor_4">•</strong> <strong>Mr. Duval / Intense</strong></p>
            <div class="c-wrapTextarea min-h40">
              <textarea class="c-textarea min-h40 js-escribir"></textarea>
            </div><img class="u-responsive-img w80" src="unit_2/module_5/assets/images/act_9_8.png" alt=""/>
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