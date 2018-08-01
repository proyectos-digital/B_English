
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_9" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="ta-c">In English, when expressing various feelings or emotions, we use the verbs ‘be’ or ‘feel’ plus the qualifying adjective:</h5>
      <p class="ta-c"><strong>• <i>I am saddened </i> </strong>  by the death of my great grandmother.<br/>
        <strong>• <i>Samantha feels</i> </strong>  stressed because she has a lot of preparation to do for the trip.<br/><br/>
        Synonyms that can be used to express various states or emotions:
        
      </p>
      <table class="c-table-estilo_tres m-a">
        <thead>
          <tr>
            <th class="w20"><i>Sadness</i></th>
            <th class="w20"><i>Happiness</i></th>
            <th class="w20"><i>Anger</i></th>
            <th class="w20"><i>Surprise</i></th>
            <th class="w20"><i>Confusion</i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="ta-c padding20"><strong class="u-textColor_4">•</strong> Saddened <br/>
              <strong class="u-textColor_4">•</strong> Sad <br/>
              <strong class="u-textColor_4">•</strong> Hurt <br/>
              <strong class="u-textColor_4">•</strong> Down in the dumps <br/>
              <strong class="u-textColor_4">•</strong> Depressed <br/>
              <strong class="u-textColor_4">•</strong> Disenchanted <br/>
              <strong class="u-textColor_4">•</strong> Let down <br/>
              <strong class="u-textColor_4">•</strong> Disappointed <br/>
              <strong class="u-textColor_4">•</strong> Blue (feel) <br/>
            </td>
            <td class="ta-c padding20"><strong class="u-textColor_4">•</strong> Overjoyed <br/>
              <strong class="u-textColor_4">•</strong> Over the moon <br/>
              <strong class="u-textColor_4">•</strong> Elated <br/>
              <strong class="u-textColor_4">•</strong> Ecstatic <br/>
              <strong class="u-textColor_4">•</strong> Glad <br/>
              <strong class="u-textColor_4">•</strong> Excited <br/>
              <strong class="u-textColor_4">•</strong> Beside oneself (be) <br/>
              
            </td>
            <td class="ta-c padding20"><strong class="u-textColor_4">•</strong> Upset <br/>
              <strong class="u-textColor_4">•</strong> Enraged <br/>
              <strong class="u-textColor_4">•</strong> Furious <br/>
              <strong class="u-textColor_4">•</strong> Seething (be) <br/>
              <strong class="u-textColor_4">•</strong> Irritated <br/>
              <strong class="u-textColor_4">•</strong> Peeved <br/>
              <strong class="u-textColor_4">•</strong> Outraged <br/>
              <strong class="u-textColor_4">•</strong> Incensed <br/>
              
            </td>
            <td class="ta-c padding20"><strong class="u-textColor_4">•</strong> Appalled <br/>
              <strong class="u-textColor_4">•</strong> Shocked <br/>
              <strong class="u-textColor_4">•</strong> Surprised <br/>
              <strong class="u-textColor_4">•</strong> Horrified <br/>
              <strong class="u-textColor_4">•</strong> Stunned (be) <br/>
              
            </td>
            <td class="ta-c padding20"><strong class="u-textColor_4">•</strong> Confused <br/>
              <strong class="u-textColor_4">•</strong> Bewildered <br/>
              <strong class="u-textColor_4">•</strong> Flustered <br/>
              <strong class="u-textColor_4">•</strong> Puzzled (be) <br/>
              <strong class="u-textColor_4">•</strong> Perplexed <br/>
            </td>
          </tr>
          <tr>
            <td class="ta-c padding20" colspan="5"><strong><i>Other common expressions</i> :</strong><br/>
              Emotional, grateful, jaded, annoyed, anxious, uncomfortable, bored, flustered, embarrassed, worried, indifferent.
              
              
              
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex mt30 align-items-center">
        <h5 class="ta-c">Select the correct option to complete the sentences.</h5>
        <div class="row">
          <div class="col xs12 md6">
            <ol class="c-listDefault mt30">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I was</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="" ng-model="txtcaptura_a"/></span><span>when I received the acceptance letter to study at the University of Wales.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='incensed'">incensed</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='disappointed'">disappointed</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='over the moon'">over the moon</label>
            </div>
            <ol class="c-listDefault mt30">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Mr. Henry is</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="" ng-model="txtcaptura_b"/></span><span>at the fact that his son drove his car without his permission.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='ecstatic'">ecstatic</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='seething'">seething</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='grateful'">grateful</label>
            </div>
            <ol class="c-listDefault mt30">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I’d be eternally </span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="" ng-model="txtcaptura_c"/></span><span> if you could lend me $3000. I really need it to repay my bank loan.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='grateful'">grateful</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='anxious'">anxious</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='perplexed'">perplexed</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <ol class="c-listDefault mt30">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>You feel </span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="" ng-model="txtcaptura_d"/></span><span>, don’t you? Me too. This meeting seems never-ending.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='hurt'">hurt</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='peeved'">peeved</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='bored'">bored</label>
            </div>
            <ol class="c-listDefault mt30">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Despite the teacher’s explanation, everyone was still</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="" ng-model="txtcaptura_e"/></span><span>.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='puzzled'">puzzled</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e='indifferent'">indifferent</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='confident'">confident</label>
            </div>
            <ol class="c-listDefault mt30">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Carl felt really </span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="" ng-model="txtcaptura_f"/></span><span> by his family. No one tried to help him when he was going through a difficult time.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_6" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_f='jaded'">jaded</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_6" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_17" ng-click="txtcaptura_f='let down'">let down</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_6" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_18" ng-click="txtcaptura_f='emotional'">emotional</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>