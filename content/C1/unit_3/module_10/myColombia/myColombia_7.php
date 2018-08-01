
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"> </button>
  </aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5> List of number one songs in Colombia in 2016.</h5>
      <div class="row mt30-md mt20-xs">
        <div class="col md6 xs12">
          <table class="c-table-estilo_tres m-a mt30 col xs12 col-center">
            <thead>
              <tr>
                <th>Week</th>
                <th>Issue date</th>
                <th>Song</th>
                <th>Artist(s)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="ta-c"> 1</th>
                <td class="ta-c">January 1 </td>
                <td class="ta-c" rowspan="4">“Desde el día en que te fuiste”</td>
                <td class="ta-c" rowspan="4">ChocQuibTown</td>
              </tr>
              <tr>
                <th class="ta-c"> 2</th>
                <td class="ta-c">January 8 </td>
              </tr>
              <tr>
                <th class="ta-c"> 3</th>
                <td class="ta-c">January 15 </td>
              </tr>
              <tr>
                <th class="ta-c"> 4</th>
                <td class="ta-c">January 22</td>
              </tr>
              <tr>
                <th class="ta-c"> 5</th>
                <td class="ta-c">January 29</td>
                <td class="ta-c">“Ginza”</td>
                <td class="ta-c">J Balvin</td>
              </tr>
              <tr>
                <th class="ta-c"> 6</th>
                <td class="ta-c">February 5 </td>
                <td class="ta-c" rowspan="6">“Vestirse de Amor (La Flor)”</td>
                <td class="ta-c" rowspan="6">Felipe Pelaez</td>
              </tr>
              <tr>
                <th class="ta-c"> 7</th>
                <td class="ta-c">February 12</td>
              </tr>
              <tr>
                <th class="ta-c"> 8</th>
                <td class="ta-c">February 19</td>
              </tr>
              <tr>
                <th class="ta-c"> 9</th>
                <td class="ta-c">February 26</td>
              </tr>
              <tr>
                <th class="ta-c"> 10</th>
                <td class="ta-c">March 4</td>
              </tr>
              <tr>
                <th class="ta-c"> 11</th>
                <td class="ta-c">March 11</td>
              </tr>
              <tr>
                <th class="ta-c">12</th>
                <td class="ta-c">March 18 </td>
                <td class="ta-c">“Hasta el Amanecer”</td>
                <td class="ta-c">Nicky Jam</td>
              </tr>
              <tr>
                <th class="ta-c"> 13</th>
                <td class="ta-c">March 25</td>
                <td class="ta-c" rowspan="4">“Vestirse de Amor (La Flor)”</td>
                <td class="ta-c" rowspan="4">Felipe Pelaez</td>
              </tr>
              <tr>
                <th class="ta-c"> 14</th>
                <td class="ta-c">April 1</td>
              </tr>
              <tr>
                <th class="ta-c"> 15</th>
                <td class="ta-c">April 8</td>
              </tr>
              <tr>
                <th class="ta-c"> 16</th>
                <td class="ta-c">April 15</td>
              </tr>
              <tr>
                <th class="ta-c"> 17</th>
                <td class="ta-c">April 22</td>
                <td class="ta-c" rowspan="5">“El Perdedor”</td>
                <td class="ta-c" rowspan="5">Maluma</td>
              </tr>
              <tr>
                <th class="ta-c"> 18</th>
                <td class="ta-c">April 29</td>
              </tr>
              <tr>
                <th class="ta-c"> 19</th>
                <td class="ta-c">May 6</td>
              </tr>
              <tr>
                <th class="ta-c"> 20</th>
                <td class="ta-c">May 13</td>
              </tr>
              <tr>
                <th class="ta-c"> 21</th>
                <td class="ta-c">May 20</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col md6 xs12">
          <table class="c-table-estilo_tres m-a mt30 col xs12 col-center">
            <thead>
              <tr>
                <th>Week</th>
                <th>Issue date</th>
                <th>Song</th>
                <th>Artist(s)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="ta-c"> 22</th>
                <td class="ta-c">May 27</td>
                <td class="ta-c" rowspan="19">“La Bicicleta” </td>
                <td class="ta-c" rowspan="19">Carlos Vives with Shakira</td>
              </tr>
              <tr>
                <th class="ta-c"> 23</th>
                <td class="ta-c">June 3</td>
              </tr>
              <tr>
                <th class="ta-c"> 24</th>
                <td class="ta-c">June 10</td>
              </tr>
              <tr>
                <th class="ta-c"> 25</th>
                <td class="ta-c">June 17</td>
              </tr>
              <tr>
                <th class="ta-c"> 26</th>
                <td class="ta-c">June 24</td>
              </tr>
              <tr>
                <th class="ta-c"> 27</th>
                <td class="ta-c">July 1</td>
              </tr>
              <tr>
                <th class="ta-c"> 28</th>
                <td class="ta-c">July 8</td>
              </tr>
              <tr>
                <th class="ta-c"> 29</th>
                <td class="ta-c">July 15</td>
              </tr>
              <tr>
                <th class="ta-c"> 30</th>
                <td class="ta-c">July 22</td>
              </tr>
              <tr>
                <th class="ta-c"> 31</th>
                <td class="ta-c">July 29</td>
              </tr>
              <tr>
                <th class="ta-c"> 32</th>
                <td class="ta-c">August 5</td>
              </tr>
              <tr>
                <th class="ta-c">33</th>
                <td class="ta-c">August 12 </td>
              </tr>
              <tr>
                <th class="ta-c"> 34</th>
                <td class="ta-c">August 19</td>
              </tr>
              <tr>
                <th class="ta-c"> 35</th>
                <td class="ta-c">August 26</td>
              </tr>
              <tr>
                <th class="ta-c"> 36</th>
                <td class="ta-c">September 2</td>
              </tr>
              <tr>
                <th class="ta-c"> 37</th>
                <td class="ta-c">September 9</td>
              </tr>
              <tr>
                <th class="ta-c"> 38</th>
                <td class="ta-c">September 16</td>
              </tr>
              <tr>
                <th class="ta-c"> 39</th>
                <td class="ta-c">September 23</td>
              </tr>
              <tr>
                <th class="ta-c"> 40</th>
                <td class="ta-c">September 30</td>
              </tr>
              <tr>
                <th class="ta-c"> 41</th>
                <td class="ta-c">October 7</td>
                <td class="ta-c" rowspan="2">“Fuego”</td>
                <td class="ta-c" rowspan="2">Juanes</td>
              </tr>
              <tr>
                <th class="ta-c"> 42</th>
                <td class="ta-c">October 14</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="col md6 xs12">
        <table class="c-table-estilo_tres m-a mt30 col xs12 col-center">
          <thead>
            <tr>
              <th>Week</th>
              <th>Issue date</th>
              <th>Song</th>
              <th>Artist(s)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="ta-c"> 43</th>
              <td class="ta-c">October 21</td>
              <td class="ta-c" rowspan="4">“Traicionera”</td>
              <td class="ta-c" rowspan="4">Sebastian Yatra</td>
            </tr>
            <tr>
              <th class="ta-c"> 44</th>
              <td class="ta-c">October 28</td>
            </tr>
            <tr>
              <th class="ta-c"> 45</th>
              <td class="ta-c">November 4</td>
            </tr>
            <tr>
              <th class="ta-c"> 46</th>
              <td class="ta-c">November 11</td>
            </tr>
            <tr>
              <th class="ta-c"> 47</th>
              <td class="ta-c">November 18</td>
              <td class="ta-c">“Ya no me duele mas”</td>
              <td class="ta-c">Silvestre Dangond</td>
            </tr>
            <tr>
              <th class="ta-c"> 48</th>
              <td class="ta-c">November 25</td>
              <td class="ta-c" rowspan="2">“Traicionera”</td>
              <td class="ta-c" rowspan="2">Sebastian Yatra                             </td>
            </tr>
            <tr>
              <th class="ta-c"> 49</th>
              <td class="ta-c">December 2</td>
            </tr>
            <tr>
              <th class="ta-c"> 50</th>
              <td class="ta-c">December 9</td>
              <td class="ta-c" rowspan="3">“Ya no me duele mas”</td>
              <td class="ta-c" rowspan="3">Silvestre Dangond</td>
            </tr>
            <tr>
              <th class="ta-c"> 51</th>
              <td class="ta-c">December 16</td>
            </tr>
            <tr>
              <th class="ta-c"> 52</th>
              <td class="ta-c">December 23</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col xs12 md6">
        <h6>Write a report for a university teacher describing the tendencies in popular music that can be deduced from the table shown.</h6>
        <p><strong class="u-textColor_4">»</strong> You should write at least 150 words.</p>
        <p><strong class="u-textColor_4">»</strong> You should spend about 20 minutes on this task.</p>
        <div class="c-wrapTextarea " ng-init="ContadorPalabras(150)">
          <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
          <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje">          </span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>
<style>
  .treeItem[correcta="bien"],
  .treeItem_hi[correcta="bien"],
  .treeItem_set[correcta="bien"]{
      background-color: var(--color_good);
      color: white;
  }
  .treeItem[correcta="mal"],
  .treeItem_hi[correcta="mal"],
  .treeItem_set[correcta="mal"]{
      background-color: var(--color_wrong);
      color: white;
  }
</style>