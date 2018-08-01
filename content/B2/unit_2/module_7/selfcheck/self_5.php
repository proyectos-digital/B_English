
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12  col-center"></div>
          <div class="col xs12 md8 col-center "><br/>
            <div class="row-flex align-items-center">
              <div class="col xs12 sm8">
                <p><strong><span class="u-textColor_4-dark">1. </span></strong><span>Despite that Pamela trained really hard, she didn´t win the race.</span></p>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_2">INCORRECT</label>
              </div>
            </div><br/>
            <div class="row-flex align-items-center">
              <div class="col xs12 sm8">
                <p><strong><span class="u-textColor_4-dark">2. </span></strong><span>Even though he was feeling sick yesterday, he went to work anyway.</span></p>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_4">INCORRECT</label>
              </div>
            </div><br/>
            <div class="row-flex align-items-center">
              <div class="col xs12 sm8">
                <p><strong><span class="u-textColor_4-dark">3. </span></strong><span> It is snowing just in case.</span></p>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_6">INCORRECT</label>
              </div>
            </div><br/>
            <div class="row-flex align-items-center">
              <div class="col xs12 sm8">
                <p><strong><span class="u-textColor_4-dark">4. </span></strong><span>In spite of all their efforts, they didn´t solve the problem.</span></p>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_8">INCORRECT</label>
              </div>
            </div><br/>
            <div class="row-flex align-items-center">
              <div class="col xs12 sm8">
                <p><strong><span class="u-textColor_4-dark">5. </span></strong><span> I think Daniela went to the ATM, but I´m going to go, just in case she didn´t have time.</span></p>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label>
              </div>
              <div class="col xs6 sm2 ta-c">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_10">INCORRECT</label>
              </div>
            </div>
          </div>
          <div class="col xs12 md4 col-center ta-c showTo-md "><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/self_5.png" alt="self_5"/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>