
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-top">         
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11  ta-l">
              <p><strong><span class="u-textColor_4-dark">1. </span></strong><span> Many people live in Colombia. They dream about a country in peace.</span></p>
              <div class="mb25">
                <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox mt10" for="inputRadio_2"><span> People dream about Colombia</span></label>
                <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="2"/>
                <label class="c-Checkbox mt10" for="inputRadio_3"><span> Colombian people dream about living in peace.</span></label>
                <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_1" value="3"/>
                <label class="c-Checkbox mt10" for="inputRadio_4"><span> Colombian people dream about living in peace.</span></label>
              </div>
            </div>
            <div class="col-center col xs12 sm10 md8 lg11  ta-l">
              <p><strong><span class="u-textColor_4-dark">2. </span></strong><span> The director of UNAD gave a speech. He talked about the expansion of the university.</span></p>
              <div class="mb25">
                <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="1"/>
                <label class="c-Checkbox mt10" for="inputRadio_5"><span> The director of UNAD talked about giving a speech.</span></label>
                <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox mt10" for="inputRadio_6"><span> The director of UNAD gave expanded speeches at the university.</span></label>
                <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_2" value="3"/>
                <label class="c-Checkbox mt10" for="inputRadio_7"><span> The director of UNAD talked about expanding the university.</span></label>
              </div>
            </div>
            <div class="col-center col xs12 sm10 md8 lg11  ta-l">
              <p><strong><span class="u-textColor_4-dark">3. </span></strong><span> The government of Japan is inviting UNAD students to study there. Some students are interested.</span></p>
              <div class="mb25">
                <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_3" value="1"/>
                <label class="c-Checkbox mt10" for="inputRadio_8"><span> Some UNAD students are interested in studying in Japan.</span></label>
                <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="2"/>
                <label class="c-Checkbox mt10" for="inputRadio_9"><span> The Japanese government is studying what happens at UNAD</span></label>
                <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox mt10" for="inputRadio_10"><span> Some students are interested in the Japanese government.</span></label>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11  ta-l">
              <p><strong><span class="u-textColor_4-dark">4. </span></strong><span> I left my mobile in the university bathroom. You brought it! Thank you!</span></p>
              <div class="mb25">
                <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_4" value="1"/>
                <label class="c-Checkbox mt10" for="inputRadio_11"><span> Thanks for bringing me the mobile I had left at the bathroom.</span></label>
                <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_4" value="2"/>
                <label class="c-Checkbox mt10" for="inputRadio_12"><span> I left the mobile for people to thank me</span></label>
                <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_4" value="3"/>
                <label class="c-Checkbox mt10" for="inputRadio_13"><span> You left the mobile at the university and I put it in the bathroom.</span></label>
              </div>
            </div>
            <div class="col-center col xs12 sm10 md8 lg11  ta-l">
              <p><strong><span class="u-textColor_4-dark">6. </span></strong><span> Alicia wants to bring the car to the university. She insists!</span></p>
              <div class="mb25">
                <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_5" value="1"/>
                <label class="c-Checkbox mt10" for="inputRadio_14"><span> Alicia insists on bringing the car to the university</span></label>
                <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_5" value="2"/>
                <label class="c-Checkbox mt10" for="inputRadio_15"><span> Alicia insisted all the students to bring their cars to the university</span></label>
                <input class="c-inputRadio" id="inputRadio_16" type="radio" name="selInputRadio_5" value="3"/>
                <label class="c-Checkbox mt10" for="inputRadio_16"><span> Alicia insisted that the University has to give her a place to park.</span></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1">    </button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/selfcheck/self_8_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>