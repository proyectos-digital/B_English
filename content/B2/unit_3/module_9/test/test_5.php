
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a test_5">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md5 col-center">
          <div class="row-flex flex-column">
            <div class="row">
              <p><strong class="u-textColor_4-dark">1.</strong></p>
              <div class="row w80 col-center">
                <audio class="row " controls="controls">
                  <source src="unit_3/module_9/assets/audios/test_5_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                </audio>
              </div>
            </div>
            <div class="row">
              <p><strong class="u-textColor_4-dark">2.</strong></p>
              <div class="row w80 col-center">
                <audio class="row " controls="controls">
                  <source src="unit_3/module_9/assets/audios/test_5_2.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                </audio>
              </div>
            </div>
            <div class="row">
              <p><strong class="u-textColor_4-dark">3.</strong></p>
              <div class="row w80 col-center">
                <audio class="row " controls="controls">
                  <source src="unit_3/module_9/assets/audios/test_5_3.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                </audio>
              </div>
            </div>
            <div class="row">
              <p><strong class="u-textColor_4-dark">4.</strong></p>
              <div class="row w80 col-center">
                <audio class="row " controls="controls">
                  <source src="unit_3/module_9/assets/audios/test_5_4.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                </audio>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md7 col-center mt40-sm mt30-md mt30-xs"> 
          <div class="row-flex">
            <div class="col-flex-sm3 col-flex-md3 col-center"> 
              <div class="row ">
                <div class="row min-h110"><img class="u-responsive-img min-h110" src="./unit_3/module_9/assets/images/test_5_1.png" alt="" srcset=""/></div><span class="c-textField mt20">
                  <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span>
              </div>
            </div>
            <div class="col-flex-sm3 col-flex-md3 col-center"> 
              <div class="row ">
                <div class="row min-h110"><img class="u-responsive-img min-h110" src="./unit_3/module_9/assets/images/test_5_2.png" alt="" srcset=""/></div><span class="c-textField mt20">
                  <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span>
              </div>
            </div>
          </div>
          <div class="row-flex mt30">
            <div class="col-flex-sm3 col-flex-md3 col-center"> 
              <div class="row ">
                <div class="row min-h110"><img class="u-responsive-img min-h110" src="./unit_3/module_9/assets/images/test_5_3.png" alt="" srcset=""/></div><span class="c-textField mt20">
                  <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span>
              </div>
            </div>
            <div class="col-flex-sm3 col-flex-md3 col-center"> 
              <div class="row ">
                <div class="row min-h110"><img class="u-responsive-img min-h110" src="./unit_3/module_9/assets/images/test_5_4.png" alt="" srcset=""/></div><span class="c-textField mt20">
                  <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>