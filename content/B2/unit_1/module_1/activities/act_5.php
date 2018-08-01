
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Find 6 phrasal verbs and write them in the spaces below</h5>
      <div class="row-flex justify-center mt50-md">
        <div class="col-flex-xs12 col-flex-md4 ta-c col-center"><img class="u-responsive-img showTo-md mb30" src="unit_1/module_1/assets/images/act_5.png" alt=""/>
          <div class="words">
            <ul class="row-flex justify-between">
              <div class="col-flex-xs6">
                <li><span class="c-textField">1. 
                    <input class="c-input js-escribir max-ancho120" type="text" placeholder="Text here..."/></span></li>
                <li><span class="c-textField">2. 
                    <input class="c-input js-escribir max-ancho120" type="text" placeholder="Text here..."/></span></li>
                <li><span class="c-textField">3. 
                    <input class="c-input js-escribir max-ancho120" type="text" placeholder="Text here..."/></span></li>
              </div>
              <div class="col-flex-xs6">    
                <li><span class="c-textField">4. 
                    <input class="c-input js-escribir max-ancho120" type="text" placeholder="Text here..."/></span></li>
                <li><span class="c-textField">5. 
                    <input class="c-input js-escribir max-ancho120" type="text" placeholder="Text here..."/></span></li>
                <li><span class="c-textField">6. 
                    <input class="c-input js-escribir max-ancho120" type="text" placeholder="Text here..."/></span></li>
              </div>
            </ul>
          </div>
        </div>
        <div class="col-flex-md7 col-flex-sm10 col-flex-xs12 col-center ta-c  ">
          <div id="puzzle" style="display: inline-block;"></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck js-validarWordFind"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
 
<script src="./../assets/js/librerias/wordfind.js"></script>
<script src="./../assets/js/librerias/wordfindgame.js"></script>
<script>
  $(function() {
      $( "#puzzle" ).draggable();
  });
  
</script>
<script>
  var words = ['Look-after', 'Look-at', 
               'Think-about', 'Talk-about' , 
               'Wait-for' , 'Complain-about'
              ];
  
  // start a word find game
  var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');
  
  $('#solve').click( function() {
      wordfindgame.solve(gamePuzzle, words);
  });
  
  // create just a puzzle, without filling in the blanks and print to console
  var puzzle = wordfind.newPuzzle( words, {height: 10, width:18, fillBlanks: false} );
  wordfind.print(puzzle);
</script>