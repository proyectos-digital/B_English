
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    
  </aside>
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row">
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md12 col-flex-lg5 col-center">
              <h5><strong class="u-textColor_4-dark">1</strong>  Read the following sentences. </h5>
              <div class="row">
                <div class="col sm9 md12 col-center">
                  <ul class="c-list">
                    <p>Pay attention to how they are reported in the text.</p>
                    <li>"<strong>I love</strong> science fiction movies".</li>
                    <li>"Last year, <strong>I read</strong> some books by Asimov, a famous science fiction author".</li>
                    <li>"<strong>I have read</strong> most of his books".</li>
                  </ul>
                </div>
                <h5><strong class="u-textColor_4">2. </strong> Watch the video:</h5>
              </div>
              <div class="row-flex justify-center mt20 mb20">
                <div class="col md11">
                  <div class="c-contVideo">
                    <video class="u-responsive-video" controls="controls">
                      <source src="unit_2/module_7/assets/videos/act_1.mp4" type="video/mp4"/>
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-flex-sm12 col-flex-md12 col-flex-lg6 col-center">
              <table class="c-table-estilo_tres">
                <thead>
                  <tr>
                    <th>Quoted Speech</th>
                    <th>Reported Speech</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="ta-c">Mary: "I love science fiction movies."</td>
                    <td class="ta-c">Mary <strong>said</strong> she loved science fiction movies.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Bill: "My friend Ana likes science fiction movies, too."</td>
                    <td class="ta-c">Bill <strong>said</strong> his friend Ana liked science fiction movies, too</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Sue: <strong>"I didn't like</strong> that comedy"</td>
                    <td class="ta-c">Sue said <strong>she didn’t like</strong> that comedy.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Joe: <strong>"My friends hated</strong> it, too."</td>
                    <td class="ta-c">Joe said <strong>his friends hated</strong> it, too.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Pam: <strong>"I have seen</strong> that move 3 times."</td>
                    <td class="ta-c">Pam said <strong>she had seen</strong> that movie 3 times.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Tim: <strong>"I haven’t seen</strong> that movie yet."</td>
                    <td class="ta-c">Tim said <strong>he hadn’t seen</strong> that movie yet.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row">
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md10 col-flex-lg8 col-center">
              <p class="mb30"><strong><span class="u-textColor_4-dark">2</span> . Complete the following sentences.</strong></p>
              <table class="c-table-estilo_tres">
                <thead>
                  <tr>
                    <th>Quoted/Direct Speech</th>
                    <th>Reported Speech</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="ta-c">David: “We haven’t gone to the movies in years.”</td>
                    <td class="ta-c">David said they <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> to the movies in years.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Janet: “I  <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> romantic comedies.”</td>
                    <td class="ta-c">Janet said she <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> romantic comedies.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Mark: “My father likes action films.”</td>
                    <td class="ta-c">Mark said <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> father <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> action films.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Jane: “I really  <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>g the movie we watched yesterday.” </td>
                    <td class="ta-c">Jane  <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> she really enjoyed the movie they watched yesterday.</td>
                  </tr>
                  <tr>
                    <td class="ta-c">Paul: “I don’t feel like going to the movies tonight.”</td>
                    <td class="ta-c">Paul said he  <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> going to the movies tonight. </td>
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
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()" ng-show="s_actividad == 2"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>