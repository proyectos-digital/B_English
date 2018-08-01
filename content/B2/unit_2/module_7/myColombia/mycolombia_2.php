
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Listen carefully to the following text and arrange the events in chronological order.</h5>
      <div class="row-flex">
        <div class="col col-center md8 xs12 mt40">
          <audio class="row m-a" controls="controls">
            <source src="unit_2/module_7/assets/audios/col_2_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col-flex-sm12 col-flex-md8 col-center mt20-sm ta-j">
          <ul class="c-counterStep ui-sortable sortreload justify-center" id="sortable" data-ejercicio="sortable">
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_1.jpg" alt=""/><span>The fire station was founded in 1957.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_2.jpg" alt=""/><span>Tumaco was made a municipality by President Tomas Cipriano de Mosquera in 1861.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_3.jpg" alt=""/><span>The San Judas sports arena was founded in 1986, upon arrival of Pope John Paul II.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_4.jpg" alt=""/><span>The Trans-Andean oil duct was built in 1966.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_5.jpg" alt=""/><span>The park known as Parque Colon was built by Colonel Pio Quiñones in 1903. Materials used in its construction include cement and oyster shells.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_6.jpg" alt=""/><span>The park known as Parque de Nariño was built in 1950.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_7.jpg" alt=""/><span>The monument of Nariño that is displayed in the park known as Parque de Nariño was built in 1923.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_8.jpg" alt=""/><span>Florida Airport was founded in 1940.</span></li>
            <li class="ui-sortable--item h70 row flex justify-between ta-l c-counterStep__item js-sortdrag"><img class="w30 h70" src="unit_2/module_7/assets/images/col_2_9.jpg" alt=""/><span>Stella Marquez Zawadski de Araneta, born and raised in Tumaco, was elected Miss Colombia in 1959 and Miss International in 1960.</span></li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSortable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="sortable()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>


<script>$( "#sortable" ).sortable()</script>