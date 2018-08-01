
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt10-xs mt100-md align-items-center">
        <div class="col xs12 sm10 md8 col-center ">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent lh25">
              <p>James Jackson usually has only 15 minutes to eat lunch, so he <strong class="u-textColor_4">(1)</strong> <strong class="u-textColor_1">bolts it down. </strong> He only has a sandwich and a soda. But his wife loves cooking and she always <strong class="u-textColor_4">(2)</strong> <strong class="u-textColor_1">whips up </strong> a wonderful dinner, which she has ready when he arrives home. This explains why James is not so thin. He <strong class="u-textColor_4">(3)</strong> <strong class="u-textColor_1">pigs out </strong> every evening on a full course dinner: meat and vegetables, a pasta or rice side dish, and to <strong class="u-textColor_4">(4)</strong> <strong class="u-textColor_1">top it off </strong>, a big dessert that his wife <strong class="u-textColor_4">(5)</strong> <strong class="u-textColor_1">picks up on</strong> her way home from work.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex col-center mt30-xs mt50-md align-items-top">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10 ">
          <div class="row mb10">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> To eat food very quickly is to…</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">Bolt it down.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">Pig out.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">Whip it up.</label>
              </div>
            </p>
          </div>
          <div class="row mb10">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> To eat a lot of food is to…</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">Wear out.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">Roll out.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">Pig out.</label>
              </div>
            </p>
          </div>
          <div class="row mb10">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> To pick up is to…</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">To throw away.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">To buy something.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">To cook something.</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb10">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> To prepare something to eat is to…</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">Bolt down.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">Whip up.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">Top off.</label>
              </div>
            </p>
          </div>
          <div class="row mb10">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span>To finish something with a final activity or detail is to…</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13">Top it off.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14">Pick it up.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15">Pig out.</label>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>