
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_8">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-sm10 col-flex-md4 col-center pl10 pr10 showTo-md"><img class="u-responsive-img mt50 m-a ml10" src="unit_3/module_11/assets/images/self_8.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-sm10 col-flex-md4 col-center pl10 pr10">
          <div class="row mt20">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>Hey, I didn’t see you at the San Pedro festival.</div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>I couldn’t go! Maybe next year!</div>
            </div>
            <div class="row row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_1" ng-click="txtcaptura_a='down'">Kind</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_2" ng-click="txtcaptura_a='up'">Rude</label>
            </div>
          </div>
          <div class="row mt20">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>You didn’t call me yesterday! </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>Whatever.</div>
            </div>
            <div class="row row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_4" ng-click="txtcaptura_a='down'">Kind</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_5" ng-click="txtcaptura_a='up'">Rude</label>
            </div>
          </div>
          <div class="row mt20">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>Why didn’t you vote? </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>None of your business.</div>
            </div>
            <div class="row row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_7" ng-click="txtcaptura_a='down'">Kind</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_8" ng-click="txtcaptura_a='up'">Rude</label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm10 col-flex-md4 col-center pl10 pr10">
          <div class="row mt20">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>Please, don’t throw garbage to the floor. </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>My apologies. It won’t happen again.</div>
            </div>
            <div class="row row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_10" ng-click="txtcaptura_a='down'">Kind</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_11" ng-click="txtcaptura_a='up'">Rude</label>
            </div>
          </div>
          <div class="row mt20">
            <div class="row">
              <div class="col xs12"><strong class="u-textColor_4-dark"> A. </strong>Read the instructions first.  </div>
              <div class="col xs12"><strong class="u-textColor_4-dark"> B. </strong>… Really?</div>
            </div>
            <div class="row- row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_13" ng-click="txtcaptura_a='down'">Kind</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_14" ng-click="txtcaptura_a='up'">Rude</label>
            </div>
          </div>
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