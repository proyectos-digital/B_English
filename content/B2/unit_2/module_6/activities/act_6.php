
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt50-md">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-j ">
              <p><strong>Transportation</strong></p>
              <p>Most people agree that our means of transportation will be faster and safer in the future. Hypersonic planes will fly more than five times faster than the speed of sound. Computers will pilot our planes and drive our cars for us. Some experts think we may use personal jetpack systems for individual travel in the air. Others think we might have cars that can fly or navigate under water. What do you think? </p>
              <p><strong>Currency </strong></p>
              <p>Will money as we know it disappear? In the future, people will use plastic “Smart” cards to buy everything they need. The card will know how many work credits a person has. It will contain a voice print, a photo, and personal information about the owner so that no one else can use it. It might have medical information for an emergency, too.</p>
            </div>
          </div>
          <div class="row">
            <audio class="row" controls="controls" preload="true">
              <source src="unit_2/module_6/assets/audios/act_6.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <h5>Classify.</h5>
          </div>
          <div class="row row-flex justify-center">
            <div class="dragCont">
              <div class="drag" rescon="3">Cars will be invisible.</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Transportation will be faster and safer in the future.</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Medical information included in Smart Cards.</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Computers will pilot cars and planes.</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Smart cards will know how many work credits a person has.</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="3">Different people will be able to use the same smart card.</div>
            </div>
          </div>
          <div class="row-flex mt30">
            <table class="c-table-estilo_dos row">
              <thead>
                <tr>
                  <th>Must be True</th>
                  <th>May, could, might be true</th>
                  <th>Can’t be true</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ta-c"> <span class="drop mt20"></span></td>
                  <td class="ta-c"> <span class="drop mt20"></span></td>
                  <td class="ta-c"> <span class="drop mt20"></span></td>
                </tr>
                <tr>
                  <td class="ta-c"> <span class="drop mt20"></span></td>
                  <td class="ta-c"> <span class="drop mt20"></span></td>
                  <td class="ta-c"> <span class="drop mt20"></span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_6/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>