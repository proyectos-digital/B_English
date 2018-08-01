
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm11 col-center col-flex-md12">
            <p class="pr50"> <strong><span class="u-textColor_4-dark">1</span>. Read the following sentences. Pay attention to the words in bold.</strong><br/><br/><span>I read an article on Facebook about a policeman and a driver in Bosa. It is about a man who was under the influence of alcohol and driving. <strong>The policeman asked him where he lived</strong> . The man didn’t even know! Then <strong>he asked the man if he could give him a number to call his family</strong>, but the man didn’t even understand the question. Then <strong>he asked him where he had been drinking</strong>, and the man immediately remembered! He was arrested and had to pay a fine!</span></p>
          </div>
          <div class="col-flex-sm11 col-center col-flex-md6">
            <table class="c-table-estilo_tres xs11 col-center mt20 mb20">
              <thead>
                <tr>
                  <th colspan="2">Yes / No Questions     </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ta-c"><strong>Direct Speech</strong></td>
                  <td class="ta-c"><strong>Reported Speech</strong></td>
                </tr>
                <tr>
                  <td class="ta-l"><span>The police officer asked, “ <strong>Do</strong> you <strong>live</strong> on Main Street?”</span></td>
                  <td class="ta-l"><span>The police officer asked <strong>if Mr. Anderson lived</strong> on Main Street.</span></td>
                </tr>
                <tr>
                  <td class="ta-l"><span>The police officer asked, “ <strong>Did</strong> he <strong>say</strong> anything?”</span></td>
                  <td class="ta-l"><span>The police officer asked <strong>if the man had said</strong> anything.</span></td>
                </tr>
                <tr>
                  <th class="u-bgColor_4-dark u-textWhite" colspan="2">Wh- Questions</th>
                </tr>
                <tr>
                  <td class="ta-l"><span>The police officer asked, <strong>“Where do you live?”</strong></span></td>
                  <td class="ta-l"><span>The police officer asked <strong>where she lived</strong>.</span></td>
                </tr>
                <tr>
                  <td class="ta-l"><span>The police officer asked, <strong>“What happened?”</strong> </span></td>
                  <td class="ta-l"><span>” The police officer asked if Mr. Anderson lived on Main Street. The police officer <strong>asked what had happened</strong>.</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="col-flex-sm11 col-center col-flex-md6"> 
            <p class="row mb30"> <strong><span class="u-textColor_4-dark">2</span>. Report the questions.</strong></p>
            <div class="row">
              <div class="col xs3 sm4">
                <div class="dragCont">
                  <div class="drag">…why he was wearing a raincoat.</div>
                </div>
              </div>
              <div class="col xs3 sm4">
                <div class="dragCont">
                  <div class="drag">…whether he wanted to leave early.</div>
                </div>
              </div>
              <div class="col xs3 sm4">
                <div class="dragCont">
                  <div class="drag">…where she had left her purse.</div>
                </div>
              </div>
              <div class="col xs3 sm4">
                <div class="dragCont">
                  <div class="drag">…who had given me those documents.</div>
                </div>
              </div>
              <div class="col xs3 sm4">
                <div class="dragCont">
                  <div class="drag">…if we lived in the same town.</div>
                </div>
              </div>
            </div>
            <div class="row mt30">
              <div class="row-flex align-items-center"> 
                <div class="col xs8"> 
                  <p><strong><span class="u-textColor_4-dark">1. </span></strong> Where did you leave your purse? He asked her…</p>
                </div>
                <div class="col xs4"> <span class="drop centrado mt10"></span></div>
              </div>
              <div class="row-flex align-items-center"> 
                <div class="col xs8"> 
                  <p><strong><span class="u-textColor_4-dark">2. </span></strong> Why are you wearing a raincoat? She asked him…</p>
                </div>
                <div class="col xs4"> <span class="drop centrado mt10"></span></div>
              </div>
              <div class="row-flex align-items-center"> 
                <div class="col xs8"> 
                  <p><strong><span class="u-textColor_4-dark">3. </span></strong> Who gave you those documents? They asked me…</p>
                </div>
                <div class="col xs4"> <span class="drop centrado mt10"></span></div>
              </div>
              <div class="row-flex align-items-center"> 
                <div class="col xs8"> 
                  <p><strong><span class="u-textColor_4-dark">4. </span></strong> Did you live in the same town? She asked us…</p>
                </div>
                <div class="col xs4"> <span class="drop centrado mt10"></span></div>
              </div>
              <div class="row-flex align-items-center"> 
                <div class="col xs8"> 
                  <p><strong><span class="u-textColor_4-dark">5. </span></strong> Do you want to leave early? I asked him…</p>
                </div>
                <div class="col xs4"> <span class="drop centrado mt10"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_8_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>