
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm11 col-center col-flex-md6">
            <p class="pr50"> <strong><span class="u-textColor_4-dark">1</span>. Read the following story. </strong><br/><br/><span>Julia Baquero is talking about her history teacher. My history teacher loves to give orders all the time. Yesterday, he told us to be quiet. Then he ordered us to open the books. After that, he said to read silently. Then, he told us not to move! One of the students got really angry and left the classroom. He told him to come back immediately!</span></p>
            <table class="c-table-estilo_tres row mt20 mb20">
              <thead>
                <tr>
                  <th colspan="2">Commands</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ta-c"><strong>Direct Speech</strong></td>
                  <td class="ta-c"><strong>Reported Speech</strong></td>
                </tr>
                <tr>
                  <td class="ta-l" rowspan="2">She said, “Jake! Come back!”</td>
                  <td class="ta-l">She <strong>said to come back</strong></td>
                </tr>
                <tr>
                  <td class="ta-l">She <strong>told Jake to come back.</strong></td>
                </tr>
                <tr>
                  <td class="ta-l" rowspan="2">I said, “Don’t move!”
                    <td class="ta-l"><strong>I said not to move.</strong></td>
                  </td>
                </tr>
                <tr>
                  <td class="ta-l"><strong>I told him not to move.</strong></td>
                </tr>
                <tr>
                  <th class="u-bgColor_4-dark u-textWhite" colspan="2">Requests</th>
                </tr>
                <tr>
                  <td class="ta-c">She said (to you), “Could you buy some eggs?” </td>
                  <td class="ta-c">She <strong>asked</strong><span> me to buy some eggs.</span></td>
                </tr>
                <tr>
                  <td class="ta-c">She said, “Don’t buy any apples.” </td>
                  <td class="ta-c">She <strong>asked</strong><span> me not to buy any apples.</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="col-flex-sm10 col-center col-flex-md5 offset-md1"> 
            <p class="col xs12 mb30"> <strong><span class="u-textColor_4-dark">2</span>. Listen. Then rewrite the commands and requests into reported speech.</strong></p>
            <p class="col xs12 ta-c"><strong class="u-textColor_4-dark">Example</strong> : 
              ”Have your eyes tested.” <strong class="u-textColor_3">The teacher to Laura </strong> 
              <br/> 
              <i>The teacher told Laura to get his eyes tested.</i>
              
            </p>
            <div class="row-flex col xs12 align-items-center mt35 justify-between">
              <div class="col xs2 sm1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_7_1.mp3"></button>
              </div>
              <div class="col xs9 sm10">
                <p><span class="u-textColor_4-dark">1</span>. Diana to Jim</p>
                <input class="c-input js-escribir col xs12" type="text" placeholder="Text here..."/>
              </div>
            </div>
            <div class="row-flex col xs12 align-items-center mt35 justify-between">
              <div class="col xs2 sm1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_7_2.mp3"></button>
              </div>
              <div class="col xs9 sm10">
                <p><span class="u-textColor_4-dark">2</span>. Mrs. Marks to Mr. Farley</p>
                <input class="c-input js-escribir col xs12" type="text" placeholder="Text here..."/>
              </div>
            </div>
            <div class="row-flex col xs12 align-items-center mt35 justify-between">
              <div class="col xs2 sm1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_7_3.mp3"></button>
              </div>
              <div class="col xs9 sm10">
                <p><span class="u-textColor_4-dark">3</span>. Dad to Mom</p>
                <input class="c-input js-escribir col xs12" type="text" placeholder="Text here..."/>
              </div>
            </div>
            <div class="row-flex col xs12 align-items-center mt35 justify-between">
              <div class="col xs2 sm1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_7_4.mp3"></button>
              </div>
              <div class="col xs9 sm10">
                <p><span class="u-textColor_4-dark">4</span>. Park-keeper to Julian</p>
                <input class="c-input js-escribir col xs12" type="text" placeholder="Text here..."/>
              </div>
            </div>
            <div class="row-flex col xs12 align-items-center mt35 justify-between">
              <div class="col xs2 sm1">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_7_5.mp3"></button>
              </div>
              <div class="col xs9 sm10">
                <p><span class="u-textColor_4-dark">5</span>. Tina to Kevin</p>
                <input class="c-input js-escribir col xs12" type="text" placeholder="Text here..."/>
              </div>
            </div>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice">   </button>
  </footer>
</div>