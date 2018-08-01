
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="row-flex justify-between col-center mt30">
          <div class="dragCont">
            <div class="drag w100">Look up to</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Passed away</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Make up</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Look for</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Passed out</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Mixed up</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Nodded off</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Looking forward to</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Owned up</div>
          </div>
          <div class="dragCont">
            <div class="drag w100">Making fun of</div>
          </div>
        </div>
        <div class="row-flex mt30 flex align-items-center justify-between">
          <div class="col xs12 md5">
            <p><strong class="u-textColor_4">•</strong> I bought a painting just before I moved into my new house. Now I can’t find it anywhere, can you help me  <span class="drop w35"></span> it’.</p>
            <p><strong class="u-textColor_4">•</strong> I am finally going to visit the Gold Museum in Bogota. I am really <span class="drop w35"></span> it.</p>
            <p><strong class="u-textColor_4">•</strong> I believe my teacher is a very honest and hardworking person. He is very intelligent and always makes the right decisions. I <span class="drop w35"></span> him.</p>
            <p><strong class="u-textColor_4">•</strong> I am really bad at painting. I just don’t have the talent, so my friends are always  <span class="drop w35"></span> my paintings.</p>
            <p><strong class="u-textColor_4">•</strong> Botero and some of his fellow artists put their artwork together to <span class="drop w35"></span> one of the biggest art displays in Colombia.</p>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4">•</strong> Your car and my dad’s car look exactly alike! I always get them <span class="drop w35"></span></p>
            <p><strong class="u-textColor_4">•</strong> I was so sleepy on the bus ride home. I <span class="drop w35"></span> and before I realized it, I was already home.</p>
            <p><strong class="u-textColor_4">•</strong> As the manager, Jenny  <span class="drop w35"></span> to her responsibilities for the accident that happened in the factory.</p>
            <p><strong class="u-textColor_4">•</strong> My dog was very sick, he <span class="drop w35"></span> yesterday at the animal hospital. I had him cremated.</p>
            <p><strong class="u-textColor_4">•</strong> The teacher was feeling sick all morning. She was on her way to the sickbay when she <span class="drop w35"></span> The school had to call an ambulance.</p>
          </div>
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
