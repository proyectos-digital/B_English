
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row row-flex">
          <p>When speaking about possessions in English, such as the property of someone or the qualities of a person or object we use an “S” with an apostrophe (‘) to show ownership or possession.</p>
          <div class="col xs12 md6 mb30">
            <div class="xs12 md11 col-center">
              <h6>Look at the examples below</h6>
              <div class="c-cardBlue">
                <div class="c-cardBlueContent u-textColor_1">
                  <ul class="lh25">
                    <li><strong class="u-textColor_4">•</strong>  Camilo’s new diet includes a lot of meat.</li>
                    <li><strong class="u-textColor_4">•</strong>  Francine’s new exercise routine burns a lot of calories.</li>
                    <li><strong class="u-textColor_4">•</strong>  Angie’s test results were all normal.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 md6 mb30">
            <div class="xs12 md11 col-center">
              <h6>When a noun is in the plural form we usually place the apostrophe outside of the “s”</h6>
              <div class="c-cardBlue">
                <div class="c-cardBlueContent u-textColor_1">
                  <ul class="lh25">
                    <li><strong class="u-textColor_4">•</strong>  Singular: The cat’s favorite food is canned tuna.</li>
                    <li><strong class="u-textColor_4">•</strong>  Plural: The cats’ favorite food is canned tuna.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 md6 mb30">
            <div class="xs12 md11 col-center">
              <h6>In Spanish, it is customary to use “of.” Although “of” is very common in Spanish, in English it is not.</h6>
              <p>Here are some cases where “of” can be used:</p>
              <div class="c-cardBlue">
                <div class="c-cardBlueContent u-textColor_1">
                  <ul class="lh25">
                    <li><strong class="u-textColor_4">•</strong>  Colombia’s culture is very interesting.</li>
                    <li><strong class="u-textColor_4">•</strong>  The culture of Colombia is very interesting.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 md6 mb30">
            <div class="xs12 md11 col-center">
              <h6>Also, we use “of” when something is a part of another rather than a possession</h6>
              <div class="c-cardBlue">
                <div class="c-cardBlueContent u-textColor_1">
                  <ul class="lh25">
                    <li><strong class="u-textColor_4">•</strong>  The color of the pants is blue</li>
                    <li><strong class="u-textColor_4">•</strong>  The ceiling of my room is high.</li>
                    <li><strong class="u-textColor_4">•</strong>  The walls of the apartment are thin.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="xs12 col-center">
            <p>Let’s look at the following rare exceptions to the rule when using abbreviations, letters, or words that are not normally nouns are used as nouns.</p>
            <ul>
              <li> <strong class="u-textColor_4">•</strong> Tania received two A’s and three B’s.</li>
              <li> <strong class="u-textColor_4">•</strong> The hospital hired three M.D.’s and two D.O.’s.</li>
              <li> <strong class="u-textColor_4">•</strong> Do you have more yes’s than no’s?</li>
              <li> <strong class="u-textColor_4">•</strong> Yeses and noes is also use in the last example.</li>
            </ul>
            <h6>Write the plural for of the following examples.</h6>
            <table class="c-table-estilo_tres">
              <thead>
                <tr>
                  <th>Singular</th>
                  <th>Plural</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2 and 3</td>
                  <td>
                    <input class="c-input js-escribir row" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>DUI</td>
                  <td>
                    <input class="c-input js-escribir row" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>ABC</td>
                  <td>
                    <input class="c-input js-escribir row" type="text"/>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="col xs12 md10 col-center">
          <p>The possessive of a plural noun is formed by adding only an apostrophe when the noun ends in s, and by adding both an apostrophe and s when it ends in a letter other than s.</p>
          <div class="col xs12 md6">
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> Excessive lawyers’ fees.</li>
              <li><strong class="u-textColor_4">•</strong> Children’s backpacks.</li>
              <li><strong class="u-textColor_4">•</strong> The twins’ grandparents.</li>
              <li><strong class="u-textColor_4">•</strong> The student teachers’ counselor.</li>
              <li><strong class="u-textColor_4">•</strong> The Salas’ vacation villa.</li>
              <li><strong class="u-textColor_4">•</strong> The girls’ softball team.</li>
              <li><strong class="u-textColor_4">•</strong> The alumni’s fundraising.</li>
              <li><strong class="u-textColor_4">•</strong> An editor with at least ten years’ experience</li>
            </ul>
          </div>
          <div class="col xs12 md6">
            <h6>Complete the table by writing the possessive form of the following nouns.</h6>
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th>Plural form</th>
                  <th>Possessive form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bacteria</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>Syllabi</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>Bosses</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>Managers</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col xs12 md10 col-center">
          <h5>Exceptions to the general rule</h5>
          <div class="col xs12 md10">
            <p>Use only an apostrophe for places or names that are singular but have a final word in plural form and ending with an s.</p>
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> Beverly Hills’ former mayor.</li>
              <li><strong class="u-textColor_4">•</strong> The United States’ lingering debt problem</li>
              <li><strong class="u-textColor_4">•</strong> Cellar Systems’ CEO.</li>
            </ul>
            <h6>Complete the table with the possessive form of the following nouns.</h6>
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th>Noun</th>
                  <th>Possessive form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>The United Emirates</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>Caracas</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>Telecoms</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 3">
        <div class="row-flex justify-between align-items-center">
          <div class="col xs12 md6">
            <h6>Nouns that end in an s sound take only an apostrophe when they are followed by sake.</h6>
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> For goodness’ sake.</li>
              <li><strong class="u-textColor_4">•</strong> For conscience’ sake.</li>
            </ul>
            <h6>A proper noun that is already in possessive form is left as is.</h6>
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> Chilly’s menu was recently changed.</li>
            </ul>
            <h6>Complete the table with the possessive from the first column.</h6>
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th>Noun</th>
                  <th>Possessive form</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>For righteousness sake</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>For Jesus sake</td>
                  <td>
                    <input class="c-input js-escribir" type="text"/>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col xs12 md6">
            <h6>Shared possession is indicated by a single apostrophe.</h6>
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> Robert Smith and Rebecca Green’s drama play. (They coauthored the play)</li>
              <li><strong class="u-textColor_4">•</strong> Sara and Nick’s house. (They share the house)</li>
            </ul>
            <h6>Individual possession is indicated by apostrophes for each possessor.</h6>
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> Colombia’s and Chile’s domestic policies are diverging.</li>
              <li><strong class="u-textColor_4">•</strong> Camila’s and Adriana’s houses were designed by the same person.</li>
            </ul>
            <h6>Chose the correct sentence.</h6>
            <div class="col xs12 md11 col-center">
              <table class="c-table-estilo_tres row m-a">
                <thead>
                  <tr>
                    <th>option a</th>
                    <th>option b</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                      <label class="c-Checkbox mt0" for="selInput_1">Karen’s and Maria’s houses are on the same street.</label>
                    </td>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                      <label class="c-Checkbox mt0" for="selInput_2">Karen and Maria’s houses are on the same street.</label>
                      <input class="js-select" type="hidden" ng-model="valorinputa"/>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="c-table-estilo_tres row m-a mt20">
                <tbody>
                  <tr>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_3" value="1"/>
                      <label class="c-Checkbox mt0" for="selInput_3">Kevin and Jonathan’s boat is red.</label>
                    </td>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="2"/>
                      <label class="c-Checkbox mt0" for="selInput_4">Kevin’s and Jonathan’s boat is red.</label>
                      <input class="js-select" type="hidden" ng-model="valorinputb"/>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 4">
        <div class="row-flex justify-between align-items-center">
          <div class="col xs12 md4 ta-c showTo-md"><img class="u-responsive-img mt30 w90 m-a" src="unit_1/module_2/assets/images/act_11_1.png" alt=""/></div>
          <div class="col xs12 md8">
            <h6>Avoid awkward possessives.</h6>
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> Correct but awkward: St. Patrick’s Cathedral’s Second Avenue entrance.</li>
              <li><strong class="u-textColor_4">•</strong> Better: The Second Avenue entrance for St. Patrick’s Cathedral.</li>
            </ul>
            <h6>Write the correct possessive form of the following nouns.</h6>
            <ul class="lh25">
              <li><strong class="u-textColor_4">•</strong> The (<strong>manager</strong>) 
                <input class="c-input js-escribir" type="text"/> office is being repainted.
              </li>
              <li><strong class="u-textColor_4">•</strong> The (<strong>managers</strong>) 
                <input class="c-input js-escribir" type="text"/> offices are being repainted.
              </li>
              <li><strong class="u-textColor_4">•</strong> (<strong>Johnny</strong>) 
                <input class="c-input js-escribir" type="text"/> friends are very noisy.
              </li>
            </ul>
            <h6>Chooses the correct form.</h6>
            <div class="col xs10 md10">
              <table class="c-table-estilo_tres row m-a">
                <thead>
                  <tr>
                    <th>option a</th>
                    <th>option b</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_5" value="1"/>
                      <label class="c-Checkbox row" for="selInput_5">The gym’s walls are dirty.</label>
                    </td>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="2"/>
                      <label class="c-Checkbox row" for="selInput_6">The walls of the gym are dirty.</label>
                      <input class="js-select" type="hidden" ng-model="valorinputc"/>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="c-table-estilo_tres row m-a">
                <tbody>
                  <tr>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_7" value="1"/>
                      <label class="c-Checkbox row" for="selInput_7">The color of the shirt is red.</label>
                    </td>
                    <td class="w50">
                      <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_8" value="2"/>
                      <label class="c-Checkbox row" for="selInput_8">The shirt’s color is red.</label>
                      <input class="js-select" type="hidden" ng-model="valorinputd"/>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()" ng-show="s_actividad == 4"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarWordFind" ng-click="CompTxt_SelectMult()" ng-show="s_actividad == 4"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script src="./../assets/js/librerias/wordfind.js"></script>
<script src="./../assets/js/librerias/wordfindgame.js"></script>