
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt30-md mt10-sm">
        <div class="col-flex-md6 col-flex-sm10 col-flex-xs12 col-center padding20">
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">1</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_1" ng-click="txtcaptura_a='down'">I have a friend whose sister is an actress.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_2" ng-click="txtcaptura_a='up'">I have a friend sister is an actress.</label>
          </div>
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">2</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_2" value="1"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_3" ng-click="txtcaptura_a='down'">The room where we stayed in was very small.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="2"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_4" ng-click="txtcaptura_a='up'">The room we stayed in was very small.</label>
          </div>
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">3</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_3" value="1"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_5" ng-click="txtcaptura_a='down'">The apartment we live in is not very big.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_3" value="2"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_6" ng-click="txtcaptura_a='up'">The apartment we live in is not very big.</label>
          </div>
        </div>
        <div class="col-flex-md6 col-flex-sm10 col-flex-xs12 col-center padding20">
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">4</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_4" value="1"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_7" ng-click="txtcaptura_a='down'">The person whom I wanted to talk to was not available.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_4" value="2"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_8" ng-click="txtcaptura_a='up'">The person which I wanted to talk to was not available.</label>
          </div>
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">5</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_5" value="1"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_9" ng-click="txtcaptura_a='down'">I came across the family which car was stolen.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_5" value="2"/>
            <label class="c-CheckSelected w100 col-flex ml10 mr10 mt0" for="inputRadio_10" ng-click="txtcaptura_a='up'">I came across the family whose car was stolen.</label>
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