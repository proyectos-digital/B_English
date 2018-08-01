
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_13" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    
  </aside>
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row">
          <div class="c-table-estilo_tres">
            <div class="row">
              <div class="c-table-estilo_tres--thead">
                <div class="c-table-estilo_tres--tr">
                  <div class="c-table-estilo_tres--th">Expressing Opinions</div>
                </div>
              </div>
              <div class="c-table-estilo_tres--tbody">
                <div class="c-table-estilo_tres--tbody--tr">
                  <div class="c-table-estilo_tres--td">I think... <br/> As far as I’m concerned... <br/> To my mind... <br/> According to me... <br/> As I see it... <br/> It seems to me that... <br/> In my point of view / my opinion... <br/> From my point of view...<br/> I am of the opinion that... <br/> I take the view that... <br/> My personal view is that... <br/> In my experience... <br/> As far as I understand / can see/see it... <br/> I think/believe that...</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="c-table-estilo_tres--thead">
                <div class="c-table-estilo_tres--tr">
                  <div class="c-table-estilo_tres--th">Agreeing with ideas</div>
                </div>
              </div>
              <div class="c-table-estilo_tres--tbody">
                <div class="c-table-estilo_tres--tbody--tr">
                  <div class="c-table-estilo_tres--td"> I agree with this opinion. <br/> I completely agree with this view. <br/> This is absolutely right. <br/> I couldn’t / can’t agree more.</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="c-table-estilo_tres--thead">
                <div class="c-table-estilo_tres--tr">
                  <div class="c-table-estilo_tres--th">Partial Agreement</div>
                </div>
              </div>
              <div class="c-table-estilo_tres--tbody">
                <div class="c-table-estilo_tres--tbody--tr">
                  <div class="c-table-estilo_tres--td">I agree with this point of view, but... <br/> This idea is right, but... <br/> I agree with you, but...</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="c-table-estilo_tres--thead">
                <div class="c-table-estilo_tres--tr">
                  <div class="c-table-estilo_tres--th">Disagreeing</div>
                </div>
              </div>
              <div class="c-table-estilo_tres--tbody">
                <div class="c-table-estilo_tres--tbody--tr">
                  <div class="c-table-estilo_tres--td">I’m afraid… <br/> I can’t agree with you. <br/> I disagree with you. <br/> I don’t agree with you. <br/> I’m not sure I agree with you.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row">
          <h5>Decide if the speakers agree or disagree.</h5>
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md6 ta-c"><img class="u-responsive-img max-ancho350" src="unit_3/module_10/assets/images/act_13_1.png" alt="act_13"/></div>
            <div class="col-flex-sm12 col-flex-md6 col-center">
              <div class="row-flex mb20 justify-center align-items-center">
                <button class="c-btn-IconAction u-bgIconListen is-active u-textWhite xs3 md1 max-h50" ng-audio="unit_3/module_10/assets/audios/act_13_1.mp3"></button>
                <div class="col xs6 ta-c">
                  <h6 class="ta-c">"Conversation 1"</h6>
                  <select class="c-select" name="act_12_2">
                    <option value="" disabled="disabled" selected="selected"> </option>
                    <option value="1">disagree</option>
                    <option value="2">agree</option>
                    <option value="3">partially agree</option>
                  </select>
                </div>
              </div>
              <div class="row-flex mb20 justify-center align-items-center">
                <button class="c-btn-IconAction u-bgIconListen  is-active u-textWhite xs3 md1 max-h50" ng-audio="unit_3/module_10/assets/audios/act_13_2.mp3"></button>
                <div class="col xs6 ta-c">
                  <h6 class="m-a">"Conversation 2"</h6>
                  <select class="c-select" name="act_12_2">
                    <option value="" disabled="disabled" selected="selected"> </option>
                    <option value="1">disagree</option>
                    <option value="2">agree</option>
                    <option value="3">partially agree</option>
                  </select>
                </div>
              </div>
              <div class="row-flex mb20 justify-center align-items-center">
                <button class="c-btn-IconAction u-bgIconListen  is-active u-textWhite  xs3 md1 max-h50" ng-audio="unit_3/module_10/assets/audios/act_13_3.mp3"></button>
                <div class="col xs6 ta-c">
                  <h6 class="m-a">"Conversation 3"</h6>
                  <select class="c-select" name="act_12_2">
                    <option value="" disabled="disabled" selected="selected"> </option>
                    <option value="1">disagree</option>
                    <option value="2">agree</option>
                    <option value="3">partially agree</option>
                  </select>
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="selectOption()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>