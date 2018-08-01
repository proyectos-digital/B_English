
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Some words are the same whether you read them forwards or backwards. </h5>
      <p>Examples in Spanish are OSO and some phrases such as LA RUTA NATURAL. These are called palindromes. Can you find 14 palindromes here?</p>
      <div class="row-flex mt100-xs mt10-md">
        <div class="row mt10-sm"><img class="col xs3 u-responsive-img  showTo-md" src="unit_2/module_8/assets/images/act_18a.png" alt=""/>
          <div class="col xs12 md6 row-flex">
            <div id="puzzle" style="display:inline-block;"></div>
            <div class="row ta-c min-h50 mt10">
              <button class="c-btn c-btn-Icon u-bgActWriting min-w100" id="solve"><span>Help: solve 1 word random</span></button>
            </div>
          </div><img class="col xs3 u-responsive-img  showTo-md" src="unit_2/module_8/assets/images/act_18b.png" alt=""/>
        </div>
        <div class="col xs12 ta-c md6 col-center  mt30">
          <div id="words"></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
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
  function randomIntFromInterval(min,max){
      return Math.floor(Math.random()*(max-min+1)+min);
  }
  var words = ['bib', 'dad', 'did', 'kayak' , 'level' , 'minim', 'madam', 'mum' , 'noon' , 'racecar', 'reviver', 'rotator' , 'stats' , 'wow'];
  
  // start a word find game
  var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');
  
  $('#solve').click( function() {
      let helper = 0,
          help = randomIntFromInterval(0,words.length),
          resolve = words[help]
      if(helper == 0) $('#solve').css('display', 'none')
          wordfindgame.solve(gamePuzzle, [resolve]);
  });
  
  // create just a puzzle, without filling in the blanks and print to console
  var puzzle = wordfind.newPuzzle( words, {height: 10, width:18, fillBlanks: false} );
  wordfind.print(puzzle);
</script>