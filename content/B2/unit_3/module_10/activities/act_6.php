
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row">
          <h5>As you listen, mark if the person is precise or vague.</h5>
          <div class="row-flex align-items-center mt30">
            <div class="col-flex-xs12 col-flex-sm4 col-flex-md4 col-flex-lg5 col-center showTo-md">
              <div class="col xs12 sm8 md7 ta-l"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_6_1.png" alt="act_1"/></div>
              <div class="col xs12 sm8 md7 ta-r"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_6_2.png" alt="act_1"/></div>
            </div>
            
            <div class="col-flex-xs12 col-flex-sm12 col-flex-md8 col-flex-lg7 col-center ta-c">
              <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_6.mp3"></button>
              <table class="c-table-SelfCheck mt30 mt30">
                <thead>
                  <tr>
                    <th>Vague</th>
                    <th>Precise</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_1">I suppose it’s fast food.</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_2">It’s definitely fast food! </label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_2" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_3">I know why I like it!</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_2" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_4">I don’t know why I like it.</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_3" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_5">…like say in a football stadium or something like that…</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_3" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_6">Only in the stadium.</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_4" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_7">…you’ll find most people eating hot dogs.</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_4" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_8">Everybody eats hot dogs.</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_5" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_9">I don’t think I have a favorite food.</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_5" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_10">I am sure what my favorite food is.</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_6" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_11">I always know exactly what I want to order.</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_6" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_12">I just sort of wake up and I just feel like eating something different…</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_7" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_13">…but If you go out with someone or something, don’t you choose an Italian restaurant?</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_7" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_14">I know where to go when I am with friends.</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_8" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_15">...most of the places I go to tend to be sort of international</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_16" type="radio" name="selInputRadio_8" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_16">All the restaurants I go to are always international.</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_17" type="radio" name="selInputRadio_9" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_17">I know what I want when I enter a restaurant.</label>
                    </td>
                    <td class="ta-c">
                      <input class="c-inputRadio" id="inputRadio_18" type="radio" name="selInputRadio_9" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_18">…I end up ordering pasta!</label>
                    </td>
                  </tr>
                </tbody>
              </table>
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