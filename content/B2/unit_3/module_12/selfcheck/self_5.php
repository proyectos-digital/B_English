
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row"> 
          <div class="col xs12 md6 lh30">
            <p><span class="u-textColor_2"><strong>A: </strong></span> I heard about your grandmother passing away. I am terribly sorry.</p>
            <p><span class="u-textColor_5"><strong>B: </strong></span> Thanks a lot! She was very, very sick.</p>
            <p><span class="u-textColor_2"><strong>A: </strong></span> You know you can count on us in case you need anything.</p>
            <p><span class="u-textColor_5"><strong>B: </strong></span> Thanks. Everything is taken care of. I appreciate your words, though.</p>
            <p><span class="u-textColor_2"><strong>A: </strong></span> I was wondering. Would it be ok to accompany you to the funeral?</p>
            <p><span class="u-textColor_5"><strong>B: </strong></span> Actually it will be a private service. Only relatives will be there. Thanks anyway.</p>
            <p><span class="u-textColor_2"><strong>A: </strong></span> Don’t mention it. Please do let me know if there is anything we can do, ok?</p>
            <p><span class="u-textColor_5"><strong>B: </strong></span> Actually, yes. Would you mind watering the plants in my apartment? I have been really busy these days.</p>
            <p><span class="u-textColor_2"><strong>A: </strong></span> Count on that! See you then.</p>
          </div>
          <div class=" col xs12 md6 lh30">
            <table class="c-table mt30 row" data-ejercicio="table-truefalse">
              <thead>
                <tr>
                  <th> </th>
                  <th class="ta-c">
                    <h5 class="u-textColor_4">True</h5>
                  </th>
                  <th class="ta-c">
                    <h5 class="u-textColor_4">False</h5>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">1.</strong> Somebody passed away.</p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_1" name="InputRadio_1" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_1"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_2" name="InputRadio_1" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_2"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">2.</strong>  The person was really ill. </p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_3" name="InputRadio_2" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_3"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_4" name="InputRadio_2" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_4"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">3.</strong>  Everybody can attend the funeral.</p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_5" name="InputRadio_3" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_5"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_6" name="InputRadio_3" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_6"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">4.</strong>  Relatives are not invited to the funeral. </p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_7" name="InputRadio_4" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_7"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_8" name="InputRadio_4" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_8"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">5.</strong>  The person needs someone to take care of the cat. </p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_9" name="InputRadio_5" value="1"/>
                      <label class="c-Checkbox" for="inputRadio_9"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_10" name="InputRadio_5" value="2"/>
                      <label class="c-Checkbox" for="inputRadio_10"></label></span></td>
                </tr>
              </tbody>
            </table>
            <div class="row ta-c mt20"><img class="u-responsive-img m-a w70" src="unit_3/module_12/assets/images/self_5_1.jpg" alt="self_5"/></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()">       </button>
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