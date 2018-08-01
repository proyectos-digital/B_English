
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <h5><strong class="u-textColor_4">1. </strong> Write two things related with technology that has changed the way you used to do things and how you are getting used to using it now:</h5>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent"><img class="u-responsive-img centrado mt20 mb20" src="./unit_2/module_5/assets/images/sel_7.png" alt="" srcset=""/>
                <p>
                   Technology has invaded our lives. When I was studying with my friends at the university, we used to have a cup of coffee and talk.
                  Now, I am trying to get used to listening to my friends talking on their phones and reading their chats.
                  This is difficult for me because I am not used to this. I was used to sharing and telling stories and jokes.
                  Another thing about technology is TV. Many years ago, I used to watch a program. If I knew I was going to be late for the program I had to record it or miss it.
                  Nowadays, technology allows me to record the program online! I need to get used to this because this is one case where technology has become a help rather than an intruder.
                </p>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
            <div class="row">
              <div class="c-wrapTextarea">
                <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
