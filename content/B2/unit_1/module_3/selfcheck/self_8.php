
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Listen to the dialogue and choose the form that you hear:</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center showTo-md">
            <div class="row mt50"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/sel_8.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md7 col-center">
            <audio class="row mt40 w60 centrado" controls="controls">
              <source src="unit_1/module_3/assets/audios/sel_8.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
            <div class="row mt50">
              <p> <strong>Gloria:	</strong>Did you finish<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">to read</label></span><span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">reading</label></span>the book I lent you?</p>
            </div>
            <div class="row">
              <p> <strong>Alberto:	</strong>No, I had to postpone<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">to read</label></span><span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">reading</label></span>because I was in final exams.</p>
            </div>
            <div class="row">
              <p><strong>Gloria:	</strong>I refuse<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">to believe</label></span><span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">believing</label></span>that you couldn’t finish it. It’s very short!</p>
            </div>
            <div class="row">
              <p><strong>Alberto:	</strong>Well, I really didn’t have time. I hope to<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">to finish</label></span><span class="c-textField ml5 mr5"> 
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">finishing</label></span>it next week.</p>
            </div>
            <div class="row">
              <p><strong>Gloria:	</strong>I will consider<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">to lend</label></span><span class="c-textField ml5 mr5"> 
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">lending</label></span>books to you again!</p>
            </div>
            <div class="row">
              <p><strong>Alberto:	</strong>Wait! I refuse<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">to be</label></span><span class="c-textField ml5 mr5"> 
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">being</label></span>treated as a thief! Here is your book!</p>
            </div>
            <div class="row">
              <p><strong>Gloria:	</strong>Sorry, I was rude. I admit<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="tfInputRadio_7" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_13">to be</label></span><span class="c-textField ml5 mr5"> 
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="tfInputRadio_7" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_14">being</label></span>rude. Please finish it whenever you can.</p>
            </div>
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