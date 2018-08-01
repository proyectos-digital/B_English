
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a act_7">
    <section class="template-content">
      <div class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <h6>Look at the following sentences.</h6>
        <div class="col xs12 md10 col-center">
          <div class="row mt50">
            <div class="c-cardBlue m-a mt10">
              <div class="c-cardBlueContent">
                <div class="row row-flex align-items-center">
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <p class="u-textColor_5-darker"><strong>•</strong> This is the dress that I bought in the sales. </p>
                    <hr/>
                    <p class="u-textColor_5-darker"><strong>•</strong> This is the dress which I bought in the sales.</p>
                  </div>
                  <div class="col-flex-sm1 col-flex-md1 col-center">
                    <h5 class="arrow_rotate">-></h5>
                  </div>
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <blockquote>This is the dress I bought in the sales.</blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="c-cardBlue m-a mt10">
              <div class="c-cardBlueContent">
                <div class="row row-flex align-items-center">
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <p class="u-textColor_5-darker"><strong>•</strong> The man who is interested in your car will telephone later.</p>
                  </div>
                  <div class="col-flex-sm1 col-flex-md1 col-center">
                    <h5 class="arrow_rotate">-></h5>
                  </div>
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <blockquote>The man interested in your car will telephone later.</blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="c-cardBlue m-a mt10">
              <div class="c-cardBlueContent">
                <div class="row row-flex align-items-center">
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <p class="u-textColor_5-darker"><strong>•</strong> The books which are on the table have been read.</p>
                  </div>
                  <div class="col-flex-sm1 col-flex-md1 col-center">
                    <h5 class="arrow_rotate">-></h5>
                  </div>
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <blockquote>The books on the table have been read.</blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="c-cardBlue m-a mt10">
              <div class="c-cardBlueContent">
                <div class="row row-flex align-items-center">
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <p class="u-textColor_5-darker"><strong>•</strong> A person who has been tricked once is careful the next time.</p>
                  </div>
                  <div class="col-flex-sm1 col-flex-md1 col-center">
                    <h5 class="arrow_rotate">-></h5>
                  </div>
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <blockquote>A person tricked once is careful the next time.</blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="c-cardBlue m-a mt10">
              <div class="c-cardBlueContent">
                <div class="row row-flex align-items-center">
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <p class="u-textColor_5-darker"><strong>•</strong> The family who are living in the house are very rich.</p>
                  </div>
                  <div class="col-flex-sm1 col-flex-md1 col-center">
                    <h5 class="arrow_rotate">-></h5>
                  </div>
                  <div class="col-flex-xs12 col-flex-sm5 col-center">
                    <blockquote>The family living in the house are very rich.</blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <h6>Rewrite the sentences reducing the relative clauses.</h6>
        <div class="row">
          <div class="col-flex-xs11 col-flex-md7 col-center"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_7_2.png" alt="" srcset=""/></div>
        </div>
        <div class="row mt50">
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4-dark">1.</strong> The movie that we watched yesterday was very boring. </p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4-dark">2.</strong> Carnivore is the name that we give to animals that eat meat.</p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4-dark">3.</strong> The lady who is standing in the corner is my aunt. </p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4-dark">4.</strong> The books that are on the desk are mine. </p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4-dark">5.</strong> This is the house that the famous architect designed.</p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>