
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md5 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/test_4_1.png" alt="" srcset=""/></div>
        <div class="col-flex-sm12 col-flex-md7 col-center"> 
          <div class="row">
            <table class="c-table" data-ejercicio="table-truefalse">
              <thead>
                <tr>
                  <th> </th>
                  <th>true</th>
                  <th>false</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <strong class="u-textColor_4-dark">1. </strong>  An expedition left Santo Domingo to explore Texas.</td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
                </tr>
                <tr>
                  <td> <strong class="u-textColor_4-dark">2.</strong> By splitting the crew, the captain made a mistake.</td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
                </tr>
                <tr>
                  <td> <strong class="u-textColor_4-dark">3.</strong> Most of the men left the ships at Tampa Bay.</td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
                </tr>
                <tr>
                  <td> <strong class="u-textColor_4-dark">4.</strong>  The two groups didn't get together again.</td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
                </tr>
                <tr>
                  <td> <strong class="u-textColor_4-dark">5.</strong> Only a few men survived and continued to travel west.</td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/test/tes_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>