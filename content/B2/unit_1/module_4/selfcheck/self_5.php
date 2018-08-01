
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md showTo-md"><img class="u-responsive-img w45 mb20 ml10 m-a" src="unit_1/module_4/assets/images/self_5.png" alt=""/><img class="u-responsive-img w45 mb20 ml10 m-a" src="unit_1/module_4/assets/images/self_5a.png" alt=""/></div>
        <div class="col-flex-md6 col-flex-sm10 col-flex-xs12 col-center ta-c">
          <p class="ta-j line-h1">The Nazca lines are huge images that <strong>(1. carve) <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>in the ground in Peru centuries ago. Many of these images are animals, and others are enormous geometric shapes. Scientists believe that the lines <strong>(2. created) <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>by ancient Nazca people between 200 B.C.E. and 600 C.E. Why the lines <strong>(3. make) <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>is still a mystery. Some astronomers think the lines could be a star map, that <strong>(4. use) <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>by the Nazca people to predict the weather. Some archeologists think the lines <strong>(5. use, probably) <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>for religious or magical purposes. No one knows for sure!</p>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
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