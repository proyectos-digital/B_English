
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 mt50-md mt30-sm">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent padding20">Angkor is a region of Cambodia that served as the seat of the Khmer Empire, which flourished from approximately the 9th to 15th centuries. Angkor was a megacity supporting at least 0.1% of the global population during 1010-1220. In 2007, an international team of researchers using satellite photographs and other modern techniques concluded that Angkor had been the largest pre-industrial city in the world, with an elaborate infrastructure system connecting an urban sprawl of at least 1,000 square kilometers to the well-known temples at its core. The principal temple of the Angkorian region, Angkor Wat, was built between 1113 and 1150 by King Suryavarman II. In 1181, Jayavarman assumed the throne. He was to be the greatest of the Angkorian kings. Jayavarman constructed the walled city of Angkor Thom, as well as its geographic and spiritual center, the temple known as the Bayon.</div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md4 offset-md1 mt50-md mt30-sm">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img w90 centrado" src="unit_1/module_4/assets/images/test_4.png" alt=""/></div>
        </div>
      </div>
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md7 col-center mt50-md mt30-sm">
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th> </th>
                <th>true</th>
                <th>false</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. Angkor was studied using satellite photographs.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_1" name="selInputRadio_1" value="1"/>
                    <label class="c-CheckTrue" for="selInputRadio_1"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_2" name="selInputRadio_1" value="2"/>
                    <label class="c-CheckFalse" for="selInputRadio_2"></label></span></td>
              </tr>
              <tr>
                <td>2. The main temple of Angkor was built by King Jayavarman VII.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_3" name="selInputRadio_2" value="1"/>
                    <label class="c-CheckTrue" for="selInputRadio_3"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_4" name="selInputRadio_2" value="2"/>
                    <label class="c-CheckFalse" for="selInputRadio_4"></label></span></td>
              </tr>
              <tr>
                <td>3. King Suryayarman was the greatest Angkorian king.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_5" name="selInputRadio_3" value="1"/>
                    <label class="c-CheckTrue" for="selInputRadio_5"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_6" name="selInputRadio_3" value="2"/>
                    <label class="c-CheckFalse" for="selInputRadio_6"></label></span></td>
              </tr>
              <tr>
                <td>4. The walled city was constructed by King Jayavarman.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_7" name="selInputRadio_4" value="1"/>
                    <label class="c-CheckTrue" for="selInputRadio_7"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_8" name="selInputRadio_4" value="2"/>
                    <label class="c-CheckFalse" for="selInputRadio_8"></label></span></td>
              </tr>
              <tr>
                <td>5. The spiritual center is called the Bayon.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_9" name="selInputRadio_5" value="1"/>
                    <label class="c-CheckTrue" for="selInputRadio_9"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="selInputRadio_10" name="selInputRadio_5" value="2"/>
                    <label class="c-CheckFalse" for="selInputRadio_10"></label></span></td>
              </tr>
            </tbody>
          </table>
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