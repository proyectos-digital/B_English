
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Find 2 collocations with do and 3 collocations with make.</h5>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="row mb30 ta-c "><img class="u-responsive-img w80 m-a showTo-md" src="unit_1/module_4/assets/images/self_4_1.png" alt=""/>
            <ul class="words" phrasal-column="column-xs3">
              <li>do your best</li>
              <li>do your hair</li>
              <li>make a call</li>
              <li>make money</li>
              <li>make friends</li>
            </ul>
          </div>
        </div>
        <div class="col-flex-md7 col-flex-sm10 col-flex-xs12 col-center ta-c">
          <div id="puzzle" style="display: inline-block"></div>
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
  var words = ['doyourbest', 'doyourhair', 'makeacall', 'makemoney', 'makefriends'];
  
  // start a word find game
  var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');
  
  $('#solve').click( function() {
      wordfindgame.solve(gamePuzzle, words);
  });
  
  // create just a puzzle, without filling in the blanks and print to console
  var puzzle = wordfind.newPuzzle( words, {height: 10, width:18, fillBlanks: false} );
  wordfind.print(puzzle);
</script>