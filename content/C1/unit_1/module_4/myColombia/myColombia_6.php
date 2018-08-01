
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Let’s compare the Colombian family with the British family.</h5>
      <div class="col xs12 md6">
        <p>
          Your new neighbour is from Britain. He comes over and sees your
          entire family at home. Your adult brothers and sister, your nieces and
          nephews. He believes this is strange.<br/>
          British neighbour: “you have a big family. Your sister is going to
          university and still lives at home? Your brother just graduated
          university and still lives at home? You guys talk on the phone all the
          time. Wow, your family is close. I left home at 17 to attend university, I
          never moved back home. My friend and I got jobs after university and
          rented a flat together. I speak to my parents once every month.”<br/><br/>
        </p>
        <h6>   <strong>Write a paragraph comparing the two cultures. Be sure to highlight their differences and similarities</strong>.<br/></h6>
      </div>
      <div class="col xs12 md6">
        <div class="c-wrapTextarea">
          <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
