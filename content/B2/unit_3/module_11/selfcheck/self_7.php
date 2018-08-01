
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item" ng-init="listenImage = 1; s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 col-center md ta-j pl20 pr20">
          <div class="row mt30">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>I think Santurban should be protected. Don’t you agree? </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>I couldn’t agree with you more!</div>
            </div>
            <div class="mt10 row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_1" ng-click="txtcaptura_a='down'">agreeing</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_2" ng-click="txtcaptura_a='up'">Disagreeing</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_3" ng-click="txtcaptura_a='up'">Partially agreeing</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>Santurban is a protected national park. It should be protected.</div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>Go on!</div>
            </div>
            <div class="mt10 row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_4" ng-click="txtcaptura_a='down'">Changing the topic</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_5" ng-click="txtcaptura_a='up'">Inviting to continue</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_6" ng-click="txtcaptura_a='up'">Ignoring the person</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>I went to the Santurban highlands last year. </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>Is there anything you’d like to add?</div>
            </div>
            <div class="mt10 row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_7" ng-click="txtcaptura_a='down'">Inviting one-to-one interaction</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_8" ng-click="txtcaptura_a='up'">Changing the topic</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_9" ng-click="txtcaptura_a='up'">Stopping the dialogue </label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center md ta-j pl20 pr20">
          <div class="row mt30">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>Mining should be allowed in some areas. </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>What makes you think that?</div>
            </div>
            <div class="mt10 row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_10" ng-click="txtcaptura_a='down'">Inviting one-to-one interaction</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_11" ng-click="txtcaptura_a='up'">Contradicting</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_12" ng-click="txtcaptura_a='up'">Disagreeing</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>Some of you have expressed interest in the protection of this ecosystem. </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>Yes, but I would like to know if this other group would like to comment on this.</div>
            </div>
            <div class="mt10 row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_13" ng-click="txtcaptura_a='down'">agreeing</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_14" ng-click="txtcaptura_a='up'">Disagreeing</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_15" ng-click="txtcaptura_a='up'">Inviting group interaction</label>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm mt20-md ta-j"><img class="u-responsive-img ancho300 mt30 centrado" src="unit_3/module_11/assets/images/self_6a.png" alt=""/>
          <table class="c-table-estilo_tres m-a mt30">
            <thead>
              <tr>
                <th>To continue</th>
                <th>Invitation in one-to-one interaction</th>
                <th>Invitation in group interaction</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Carry on. / Go on.</td>
                <td>Don’t you agree?</td>
                <td>What do you think, (name)?</td>
              </tr>
              <tr>
                <td>Really?</td>
                <td>Is that OK with you?</td>
                <td>Let’s hear what (name) has to say.</td>
              </tr>
              <tr>
                <td>Tell me more.</td>
                <td>How about you?</td>
                <td>(name) might have something to say on this.</td>
              </tr>
              <tr>
                <td>What makes you say/think that?</td>
                <td>What do you think?</td>
                <td>(name) knows a lot about this.</td>
              </tr>
              <tr>
                <td>I’m all ears. / I’m listening</td>
                <td>Is there anything you’d like to add/comment on?</td>
                <td>(name), you did something like that, didn’t you?</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad==1" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad==1" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>