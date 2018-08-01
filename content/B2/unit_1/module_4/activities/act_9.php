
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt50">
        <h5><strong class="u-textColor_4">1. </strong> Complete the questions in the mini-test below, using the past passive form of the verbs from the box. Then, choose the correct answer to each question. Listen to check your answers and get your score.</h5>
      </div>
      <div class="row">
        <div class="col xs12 md6 col-center">
          <div class="c-cardGreen mt30">
            <div class="c-cardGreenContent flex align-items-center justify-center">build // play // write // wear // destroy</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col sm12 md5 ">
          <h5 class="mt30">Complete the sentences.</h5>
          <div class="row mb20 mt30">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>When</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span><span>
                    the first mini-skirt 
                    ?</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" ng-click="valorinputa=1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1">1965</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" ng-click="valorinputa=2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2">1940</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" ng-click="valorinputa=3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3">1997</label>
              <input class="js-select" type="hidden" ng-model="valorinputa"/>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Where</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span><span>
                     golf 
                    for the first time?</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" ng-click="valorinputb=1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4">In Scotland</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" ng-click="valorinputb=2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5">In Whales</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" ng-click="valorinputb=3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6">In England</label>
              <input class="js-select" type="hidden" ng-model="valorinputb"/>
            </div>
          </div>
        </div>
        <div class="col sm12 md5 offset-md1">
          <div class="row mb20 mt30">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Which two books</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span><span>by Mark Twain?</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" ng-click="valorinputc=1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="textSelInputRadio_3 = 'David Copperfield' ">David Copperfield</label>
              <input class="js-select" type="hidden" ng-model="valorinputc"/>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_4" ng-click="valorinputcb=2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="textSelInputRadio_3b = 'Robinson Crusoe' ">Robinson Crusoe</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_4" ng-click="valorinputcb=3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="textSelInputRadio_3b = 'Oliver Twist' ">Oliver Twist</label>
              <input class="js-select" type="hidden" ng-model="valorinputcb"/>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Which famous British touristic attraction</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span><span>more than 4,000 years ago?</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_5" ng-click="valorinputd=1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="textSelInputRadio_4 = 'Windsor Castle' ">Windsor Castle</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_5" ng-click="valorinputd=2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="textSelInputRadio_4 = 'Stonehenge' ">Stonehenge</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_5" ng-click="valorinputd=3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="textSelInputRadio_4 = 'Buckingham Palace' ">Buckingham Palace</label>
              <input class="js-select" type="hidden" ng-model="valorinputd"/>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>What year</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span><span>
                     many buildings in London 
                    in a fire?</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_6" ng-click="valorinpute=1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="textSelInputRadio_5 = '1666' ">1666</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_6" ng-click="valorinpute=2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="textSelInputRadio_5 = '1866' ">1866</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_6" ng-click="valorinpute=3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="textSelInputRadio_5 = '1966' ">1966</label>
              <input class="js-select" type="hidden" ng-model="valorinpute"/>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center ta-c">
          <h6>Listen to get your score.</h6>
          <audio class="row mt30" controls="controls">
            <source src="unit_1/module_4/assets/audios/act_9_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>       

<footer class="template-footer is-visible" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_9_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>