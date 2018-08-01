
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img w70 m-a" src="unit_1/module_4/assets/images/self_7.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row-flex">
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
                  <td>1. US independence day is celebrated on the 4th of July.</td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_1" name="selInputRadio_1" value="1"/>
                      <label class="c-CheckTrue" for="selInputRadio_1"></label></span></td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_2" name="selInputRadio_1" value="2"/>
                      <label class="c-CheckFalse" for="selInputRadio_2"></label></span></td>
                </tr>
                <tr>
                  <td>2. In Latin America, labor day is celebrated on October 31st.</td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_3" name="selInputRadio_2" value="1"/>
                      <label class="c-CheckTrue" for="selInputRadio_3"></label></span></td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_4" name="selInputRadio_2" value="2"/>
                      <label class="c-CheckFalse" for="selInputRadio_4"></label></span></td>
                </tr>
                <tr>
                  <td>3. United Nations day is commemorated on May 1st.</td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_5" name="selInputRadio_3" value="1"/>
                      <label class="c-CheckTrue" for="selInputRadio_5"></label></span></td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_6" name="selInputRadio_3" value="2"/>
                      <label class="c-CheckFalse" for="selInputRadio_6"></label></span></td>
                </tr>
                <tr>
                  <td>4. Halloween is celebrated on October 31st.</td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_7" name="selInputRadio_4" value="1"/>
                      <label class="c-CheckTrue" for="selInputRadio_7"></label></span></td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_8" name="selInputRadio_4" value="2"/>
                      <label class="c-CheckFalse" for="selInputRadio_8"></label></span></td>
                </tr>
                <tr>
                  <td>5. Earth Day is commemorated on April 22nd.</td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_9" name="selInputRadio_5" value="1"/>
                      <label class="c-CheckTrue" for="selInputRadio_9"></label></span></td>
                  <td><span>
                      <input class="c-inputRadio" type="radio" id="selInputRadio_10" name="selInputRadio_5" value="2"/>
                      <label class="c-CheckFalse" for="selInputRadio_10"></label></span></td>
                </tr>
              </tbody>
            </table>
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