
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="col-flex-sm12 col-flex-md12 col-center mt50-md mt30-sm">
        <table class="c-table-SelfCheck mt20">
          <thead>  
            <tr>
              <th class="w5"> </th>
              <th class="w35">LANGUAGE</th>
              <th class="w20"> </th>
              <th class="w20"> </th>
              <th class="w20"> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ta-c"><strong>1</strong></td>
              <td class="ta-c padding10">Identify and use would to talk about habits in the past</td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio ml10" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_1">We would love to go with you!</label>
              </td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio ml10" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_2">We would go to the beach after school.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_3">I would like a sandwich.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_4" type="radio" name="selInputRadio_1" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_4">Where would I go?</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>2</strong></td>
              <td class="ta-c padding10">Identify and use verbs following prepositions of, for, from and on</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_5" type="radio" name="selInputRadio_2" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_5">Let’s go for a walk.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_6" type="radio" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_6">I was looking for you</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_7" type="radio" name="selInputRadio_2" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_7">They are waiting for the doctor.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_8" type="radio" name="selInputRadio_2" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_8">I’m all for going to the movies tonight.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>3</strong></td>
              <td class="ta-c padding10">Synthesize</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_9" type="radio" name="selInputRadio_3" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_9">To tell someone something in a way that helps them understand it better</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_10" type="radio" name="selInputRadio_3" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_10">To think carefully about something before making a judgment about its value, importance, or quality</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_11" type="radio" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_11">To make something new or original that did not exist before</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_12" type="radio" name="selInputRadio_3" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_12">To combine different ideas, styles, or systems into a single idea or system</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>4</strong></td>
              <td class="ta-c padding10">Evaluate arguments</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_13" type="radio" name="selInputRadio_4" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_13">To make something new or original that did not exist before</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_14" type="radio" name="selInputRadio_4" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_14">To combine different ideas, styles, or systems into a single idea or system</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_15" type="radio" name="selInputRadio_4" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_15">To think carefully about something before making a judgment about its value, importance, or quality</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_16" type="radio" name="selInputRadio_4" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_16">To tell someone something in a way that helps them understand it better</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>