
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Read and listen to a conversation between two students. Decide if the statements are True or False.</h5>
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm padding10">
          <audio class="row w30 centrado" controls="controls">
            <source src="unit_3/module_11/assets/audios/act_13.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm padding10">
          <table class="c-table-estilo_tres m-a mt30">
            <thead>
              <tr>
                <th></th>
                <th class="xs9"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Jimmy: </strong></td>
                <td>Hi, Carol.</td>
              </tr>
              <tr>
                <td><strong>Carol: </strong></td>
                <td>Hi, Jimmy.</td>
              </tr>
              <tr>
                <td><strong>Jimmy: </strong></td>
                <td>Why’s the cafeteria so noisy? There shouldn’t be many people there at three in the afternoon.</td>
              </tr>
              <tr>
                <td><strong>Carol: </strong></td>
                <td>There’s a sort of rally going on- for the demonstration.</td>
              </tr>
              <tr>
                <td><strong>Jimmy: </strong></td>
                <td>Demonstration? Really? Against what? What’s it about?</td>
              </tr>
              <tr>
                <td><strong>Carol: </strong></td>
                <td>Tuition. It’s about the tuition increase. How do you pay for your tuition?</td>
              </tr>
              <tr>
                <td><strong>Jimmy: </strong></td>
                <td>My money comes from a savings account my father started when I was born. He put a little money into it every month, and over- what? - eighteen years, that grew to enough to get me through university. And God bless Daddy! Oh, hey Rose!</td>
              </tr>
              <tr>
                <td><strong>Rose: </strong></td>
                <td>Hi, guys.</td>
              </tr>
              <tr>
                <td><strong>Jimmy: </strong></td>
                <td>Did you know about the demonstration? What do you think about it, Rose?</td>
              </tr>
              <tr>
                <td><strong>Rose: </strong></td>
                <td>Well, students don’t have any money. Their parents don’t have any money. They just can’t afford to pay any more for school right now. So I understand why they are demonstrating.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm padding10">
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th class="xs10"> </th>
                <th class="xs1">True</th>
                <th class="xs1">False</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. The cafeteria is noisier than usual.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
              </tr>
              <tr>
                <td>2. There will be a demonstration today.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
              </tr>
              <tr>
                <td>3. The demonstration is about the new schedules.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
              </tr>
              <tr>
                <td>4. The man has a savings account to pay for his expenses.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
              </tr>
              <tr>
                <td>5. Rose understands the reasons behind the demonstration.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
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