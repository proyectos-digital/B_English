
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a act_2">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md align-items-center">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent lh-20 ta-j u-textColor_1">
              <p class="u-fz09">My name is Betty. Do you see how fit I am? It is not on purpose and it´s not in my nature to be thin either; there is a good reason for me keeping in shape: my mother. She is a disaster in the kitchen, and besides that, she usually has accidents in the kitchen. She doesn´t pay much attention, and despite our advice to keep out of the kitchen, she still tries and we have to eat what she prepares. Or at least, we eat what we can. <br/> <br/> The last time she tried to prepare a meal, the result was a burning kitchen. Dad could barely put the fire off. When mom goes to the kitchen, we start fearing for our lives and stomachs. We even fake sicknesses sometimes, to avoid eating what she prepares. <br/> <br/> But despite the bad cook we have at home, our house is always full of guests for lunch or dinner. We suspect they come, just to laugh at the disasters, and to be the first to tell all our friends what my mom´s latest kitchen calamity was.</p>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="col xs12 col-center"> 
            <table class="c-table mt30 row" data-ejercicio="table-truefalse">
              <thead>
                <tr>
                  <th> </th>
                  <th>true</th>
                  <th>false</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">1.</strong> The girl´s mother is a terrific cook.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">2.</strong>  The girl´s mom usually has accidents in the kitchen.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">3.</strong>  The girl´s mother gave up cooking.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">4.</strong>  The family has asked the woman to stop cooking.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">5.</strong>  They have to eat what she cooks.</p>
                  </td>
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
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