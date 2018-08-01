
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md9 col-center mt10-sm padding10">
          <h5>Read carefully and decide if the following sentences are correct or incorrect.</h5>
          <table class="c-table row" data-ejercicio="table-truefalse ">
            <thead>
              <tr>
                <th class="xs10"> </th>
                <th class="xs1 u-fz08">CORRECT</th>
                <th class="xs1 u-fz08">INCORRECT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. You’ll never guess which I’ve just heard.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_1"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_2"> </label></span></td>
              </tr>
              <tr>
                <td>2. He told me he had passed all of his exams, that was quite a surprise.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_3"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_4"> </label></span></td>
              </tr>
              <tr>
                <td>3. One of the people with whom I work knows you.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_5"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_6"> </label></span></td>
              </tr>
              <tr>
                <td>4. She hasn’t called me for ages, which is worrying.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_7"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_8"> </label></span></td>
              </tr>
              <tr>
                <td>5. That I like best of my house is its nice terrace.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_9"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_10"> </label></span></td>
              </tr>
              <tr>
                <td>6. Who was the person who called you just now?</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_11"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_12"> </label></span></td>
              </tr>
              <tr>
                <td>7. That’s the guy whose now working at our firm.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_13" name="tfInputRadio_7" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_13"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_14" name="tfInputRadio_7" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_14"> </label></span></td>
              </tr>
              <tr>
                <td>8. Is that the man whose car was robbed last week?</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_15" name="tfInputRadio_8" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_15"> </label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_16" name="tfInputRadio_8" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_16"> </label></span></td>
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