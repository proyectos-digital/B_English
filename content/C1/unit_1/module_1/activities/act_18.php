
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_18" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content row-flex align-items-center" ng-show="s_actividad == 1">
      <div class="col xs12 md8">
        <div class="c-cardBlue">
          <div class="c-cardBlueContent u-textColor_1-darker lh30">
            <p>There are three main phrases that are used when asking for a favor.</p>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> Could you open the door for me please?</p>
              <p><strong class="u-textColor_4">•</strong> Could you hand me the folder?</p>
            </div>
            <div class="mt20 lh10">
              <p><strong>“Could you”</strong> is followed by a verb.</p>
              <p><strong>“Could you”</strong> is the more polite form of making a request.</p>
            </div>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> Can you open the door for me please?</p>
              <p><strong class="u-textColor_4">•</strong> Can you get me the check please?</p>
            </div>
            <div class="mt20 lh10">
              <p><strong>“Can you”</strong> is followed by a verb.</p>
              <p><strong>“Can you”</strong> is a more informal way of making a request.</p>
            </div>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> Would you mind calling the porter for me?</p>
              <p><strong class="u-textColor_4">•</strong> Would you mind parking this car for me?</p>
            </div>
            <div class="mt20 lh10">
              <p><strong>“Would you mind”</strong> is followed by a verb + ing.</p>
              <p><strong>“Would you mind”</strong> is a polite way of making a request.</p>
            </div>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> Do you mind if I shut down the computers?</p>
              <p><strong class="u-textColor_4">•</strong> Do you mind if I move the meeting to 1:00pm?</p>
            </div>
            <div class="mt20 lh10">
              <p><strong>“Do you mind if”</strong> is used to ask for permission.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col xs12 md4 ta-c"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_18_1.png" alt=""/></div>
    </section>
    <section class="template-content row-flex align-items-center" ng-show="s_actividad == 2">
      <div class="col xs12 md4 ta-c"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_18_2.png" alt=""/></div>
      <div class="col xs12 md8">
        <div class="c-cardGreen">
          <div class="c-cardGreenContent u-textColor_1-darker lh30">
            <p>There are many ways to offer help in English. Here are a few.</p>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> May I help you? Or can I help you?</p>
            </div>
            <div class="mt20">
              <p>These are usually used to offer help to someone when they look lost or confused.</p>
            </div>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> After seeing the man wandering around the lobby the receptionist said, “Good afternoon, sir. May I help you find someone?” Are you looking for something?</p>
            </div>
            <div class="mt20">
              <p>This expression is usually used in stores by assistants trying to help customers.</p>
            </div>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> The store assistant observed the man looking at the kitchenware. She walked over to him and said, “Hi, are you looking for something in particular?” What can I do for you today?</p>
            </div>
            <div class="mt20">
              <p>This is usually used to greet clients and offer assistance.</p>
            </div>
            <div class="mt20 lh20">
              <p><strong class="u-textColor_4">•</strong> e.g. Good morning, sir. What can I do for you today?</p>
            </div>
            <div class="mt20">
              <p>Questions used to offer assistance: Do you need any help? Need any help? May I offer my assistance?</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content " ng-show="s_actividad == 3">
      <div class="row">
        <h6><span class="u-textColor_4">1.</span> Listen to the offers of assistance and match them with the correct situation.</h6>
      </div>
      <div class="row">
        <div class="col xs12 md6 mt50">
          <div class="col md6 sm6 xs12">
            <div class="dragCont">
              <p class="drag">A woman sees a lady with several grocery bags.</p>
            </div>
          </div>
          <div class="col md6 sm6 xs12">
            <div class="dragCont">
              <p class="drag">A woman walks into the office of a home remodeling contractor.</p>
            </div>
          </div>
          <div class="col md6 sm6 xs12">
            <div class="dragCont">
              <p class="drag">A man walks into an electronic store and begins to glance over the shelves.</p>
            </div>
          </div>
          <div class="col md6 sm6 xs12">
            <div class="dragCont">
              <p class="drag">A woman sees a car with a flat tire by the side of the road he drives up to the car and says…</p>
            </div>
          </div>
          <div class="col md6 sm6 xs12 col-center">
            <div class="dragCont">
              <p class="drag">A man walks into the reception area of a golf club.</p>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <table class="c-table-estilo_tres m-a">
            <thead>
              <tr>
                <th class="w33">Situations</th>
                <th class="w33">Listen</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ta-c"><span class="drop"></span></td>
                <td class="ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_18_1.mp3"></button>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span class="drop"></span></td>
                <td class="ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_18_2.mp3"></button>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span class="drop"></span></td>
                <td class="ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_18_3.mp3"></button>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span class="drop"></span></td>
                <td class="ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_18_4.mp3"></button>
                </td>
              </tr>
              <tr>
                <td class="ta-c"><span class="drop"></span></td>
                <td class="ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_18_5.mp3"></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>