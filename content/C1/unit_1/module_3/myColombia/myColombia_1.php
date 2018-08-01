
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="5" ng-click="s_actividad = 5" ng-class="(s_actividad == 5) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5>Listen to some people talk about their time at primary school.</h5><span>What was your favourite teacher? Tell an anecdote</span>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_3/assets/videos/col_1_1.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
          <h5 class="mt30">Answer the following questions True or false.</h5>
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th></th>
                <th>True</th>
                <th>False</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Miss Garcia punished them everytime they misbehave.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
              </tr>
              <tr>
                <td>The teacher felt guilty because she left the students alone in the class.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_2" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5>Listen to some people talk about their time at primary school.</h5><span>Who was your favourite subject? Tell an anecdote</span>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_3/assets/videos/col_1_2.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
          <h5 class="mt30">Answer the following questions True or false.</h5>
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th></th>
                <th>True</th>
                <th>False</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>He was better at other subjects than Math.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_3" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_3" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
              </tr>
              <tr>
                <td> He was encouraged by winning to pay attention to Math.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="selInputRadio_4" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="selInputRadio_4" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5>Listen to some people talk about their time at primary school.</h5><span>Who was your best friend? Tell an anecdote</span>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_3/assets/videos/col_1_3.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
          <h5 class="mt30">Answer the following questions True or false.</h5>
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th></th>
                <th>True</th>
                <th>False</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> They bought Cholados under the mango tree.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="selInputRadio_5" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="selInputRadio_5" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
              </tr>
              <tr>
                <td>They loved talking about cartoons under the tree.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_11" name="selInputRadio_6" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_11"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_12" name="selInputRadio_6" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_12"></label></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 4">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5>Listen to some people talk about their time at primary school.</h5><span>What did you do after school? Tell an anecdote</span>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_3/assets/videos/col_1_4.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
          <h5 class="mt30">Answer the following questions True or false.</h5>
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th></th>
                <th>True</th>
                <th>False</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> They made their own footballs.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_13" name="selInputRadio_7" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_13"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_14" name="selInputRadio_7" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_14"></label></span></td>
              </tr>
              <tr>
                <td>The bought plastics from a man down the street.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_15" name="selInputRadio_8" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_15"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_16" name="selInputRadio_8" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_16"></label></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 5">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5>Listen to some people talk about their time at primary school.</h5><span>What didi you do that you knew you were not supposed to do?</span>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_3/assets/videos/col_1_5.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
          <h5 class="mt30">Answer the following questions True or false.</h5>
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th></th>
                <th>True</th>
                <th>False</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Milo gets soft when exposed to air.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_17" name="selInputRadio_9" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_17"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_18" name="selInputRadio_9" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_18"></label></span></td>
              </tr>
              <tr>
                <td>He was punished for making the Milo go bad.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_19" name="selInputRadio_10" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_19"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_20" name="selInputRadio_10" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_20"></label></span></td>
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