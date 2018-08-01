
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <p>How do we start a conversation in Spanish? What words do we use to invite someone to speak? What questions do you ask when you want someone to give more information about the things they said? How do we keep participants in a dialogue on topic? This section will give you the most important expressions used to take initiative in interactions, at different points of communication: the beginning and during the interaction to make sure the participants stay on topic.</p>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm mt20-md">
          <p><strong>Look at the following chart:</strong></p>
          <table class="c-table-estilo_tres m-a mt30">
            <thead>
              <tr>
                <th class="xs4">At the beginning</th>
                <th class="xs4">During an interaction</th>
                <th class="xs4">Keeping participants on topic</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mary, would you like to begin?</td>
                <td>Mary, can you tell us… (how, why, when, who, etc.)</td>
                <td>Can we keep to the point, please.</td>
              </tr>
              <tr>
                <td>Sam, would you like to kick off?</td>
                <td>How does that… (affect/change/impact/make you feel, etc.)</td>
                <td>Let’s not get distracted.</td>
              </tr>
              <tr>
                <td>Shall we begin?</td>
                <td>Let’s move on, shall we?</td>
                <td>That’s another topic.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm mt20-md">
          <p><strong>Listen to the examples and classify them.</strong></p>
          <div class="mb20 row mt20">
            <div class="col xs12 md2 offset-md1 mt10-sm mt20-md">
              <div class="row-flex mb5">
                <div class="col-flex-xs4 col-flex-md12">
                  <div class="row-flex mb5"><span class="flex-inline m-a">
                      <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_3/module_11/assets/audios/act_4_1.mp3"></button>
                      <div class="dragCont m-a">
                        <div class="drag" rescon="1"><span>Example 1</span></div>
                      </div></span></div>
                </div>
                <div class="col-flex-xs4 col-flex-md12">
                  <div class="row-flex mb5"><span class="flex-inline m-a">
                      <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_3/module_11/assets/audios/act_4_2.mp3"></button>
                      <div class="dragCont m-a">
                        <div class="drag" rescon="2"><span>Example 2</span></div>
                      </div></span></div>
                </div>
                <div class="col-flex-xs4 col-flex-md12">
                  <div class="row-flex mb5"><span class="flex-inline m-a">
                      <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_3/module_11/assets/audios/act_4_3.mp3"></button>
                      <div class="dragCont m-a">
                        <div class="drag" rescon="3"><span>Example 3</span></div>
                      </div></span></div>
                </div>
              </div>
            </div>
            <div class="col xs12 md8 mt10-sm mt20-md">
              <table class="c-table-estilo_tres m-a mt30">
                <thead>
                  <tr>
                    <th class="xs4">Control and Delegation at Start</th>
                    <th class="xs4">During an interaction</th>
                    <th class="xs4">Keeping participants on topic</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <span class="drop ancho150 centrado"> </span></td>
                    <td> <span class="drop ancho150 centrado"> </span></td>
                    <td> <span class="drop ancho150 centrado"> </span></td>
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>