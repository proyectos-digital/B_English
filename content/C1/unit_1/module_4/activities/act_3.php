
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_3" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="c-flickity">
          <div class="row mt10 mb30">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Page 1</button>
                <button class="c-flickity-button ">Page 2</button><span class="c-flickity--cell-total">2</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
            <div class="c-flickity--cell">
              <div class="row" style="height:720px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent u-textColor_1">
                    <div class="col xs12 md6">
                      <h5 class="ta-c">The Painting That Saved My Family from the Holocaust</h5>
                      <h6 class="ta-c">Stephen Engelberg</h6>
                      <p class="ta-c">ProPublica, Nov. 24, 2015, 5:39 p.m.</p>
                      <p class="ta-j"><strong>1</strong>. A <strong>frightened</strong> young woman left her apartment in Munich in November 1938 and returned with the visa that saved her family. A team of German journalists launched an <strong>improbable</strong> search to find the missing artwork and tell its story.<br/>
                        Seventy-seven years ago this week, my grandmother left her fourth-floor apartment in Munich carrying a painting by Otto Stein, a modestly popular German artist. Earlier that month, the Nazis had <strong>launched</strong> a nationwide program against Germany’s Jewish minority, a <strong>rampage</strong> in which gangs of men burned stores, schools and <strong>synagogues</strong>. In the <strong>aftermath</strong> of what became known as Kristallnacht, the Gestapo rounded up hundreds of Jewish men and sent them to the Dachau concentration camp. Among them was my grandfather, Jakob Engelberg.<br/>
                        Seventy-seven years ago this week, my grandmother left her fourth-floor apartment in Munich carrying a painting by Otto Stein, a modestly popular German artist. Earlier that month, the Nazis had <strong>launched</strong> a nationwide program against Germany’s Jewish minority, a <strong>rampage</strong> in which gangs of men burned stores, schools and <strong>synagogues</strong>. In the <strong>aftermath</strong> of what became known as Kristallnacht, the Gestapo rounded up hundreds of Jewish men and sent them to the Dachau concentration camp. Among them was my grandfather, Jakob Engelberg.<br/>
                        Paula Engelberg never talked about what happened during her visit to the Swiss consulate. But when she returned home a few hours later, she no longer had the painting. What she had was the most precious of commodities in Nazi Germany of 1938: A valid visa to enter Switzerland.
                      </p>
                      <p class="ta-j"><strong>2</strong>.  The consulate issued only 600 such documents that year, up from just 200 the previous year. This particular one secured the release of my grandfather from Dachau after two weeks, allowing my grandparents, father and aunt to escape Germany and ultimately settle in the United States. It made possible the existence of 20 more human beings. I’m one of them.<br/> Five years ago, I told this story to Christian Salewski, a German journalist who was working at ProPublica for several months as part of a fellowship. I said I had always wondered what had happened to the painting, not because it was particularly valuable — works by Stein can be found on eBay selling for a few hundred dollars — but because I wanted to know its story.
                        
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 mr10 mb10 " src="unit_1/module_4/assets/images/act_3_1.png" alt="" align="left"/>
                        As a journalist, I imagined any number of possible <strong>narratives</strong>. Perhaps the painting was given to a diplomat who <strong>dispensed</strong> visas to desperate Jews, a Schindler of the Swiss diplomatic service. Perhaps it had been sold to an art dealer to raise the money for a <strong>bribe</strong>. Maybe it was simply a gratuity for a service <strong>rendered</strong>.<br/><br/>
                        <strong>3</strong>. I had fantasies of finding a house full of paintings in Switzerland, the owners <strong>unaware</strong> of the lives saved by their existence. I told Christian that we had only one real <strong>clue</strong>. My family had managed to leave Germany with a second painting by Stein, a portrait of a young woman whose <strong>gaze</strong> seems to follow you, Mona Lisa-like, across a room. In my father’s memory, this painting, which he called “My Mona Lisa,” <strong>bore</strong> a <strong>striking resemblance</strong> to its missing sister in both style and subject. The remaining painting hung in our family’s living room, a testament to our past as refugees.<br/>
                        Early this year, Christian and three colleagues decided to launch what they called #kunstjagdt — “art hunt.” Their plan was to spend six weeks using social media like WhatsApp and stories on the radio, on television and in newspapers to search for the artistic equivalent of a needle in a very large <strong>haystack</strong>.<br/> Their reporting unfolded against the <strong>backdrop</strong> of the exploding refugee crisis in Europe and the Middle East. It was not hard to see parallels.<br/><br/>
                        
                      </p>
                      <p class="ta-j"><strong>4</strong>. Then, as now, a desperate group of people sought to escape an increasingly terrifying situation. Then, as now, most countries in the world turned their backs. It’s sometimes suggested that German Jews of the 1930’s was a delusional group, waiting far too long to flee a country in which they had grown too comfortable.
                        
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row" style="height:720px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent u-textColor_1 ">
                    <div class="col xs12 md6">
                      <p class="ta-j">The truth as documented by the Art Hunt team is that then, as now, there was hardly anywhere to go.<br/> Jakob Engelberg applied to immigrate to the United States in 1934, shortly after Hitler came to power. He waited four years for his number to be called in America’s restrictive, Depression-era immigration system. My aunt told me years later that people who applied for U.S. visas just a few weeks later in 1934 died in the Holocaust. My father and his sister recall that Hitler’s speeches and the Nazi Party’s program persuaded Jakob Engelberg that the Jews of Germany faced an existential threat, one sufficiently dire to persuade him to abandon a comfortable middle-class life as a traveling salesman living in one of Europe’s most beautiful cities.<br/> The records dug up by the Art Hunt team suggest he was trying to live his life as an ordinary German. According to a Gestapo report Christian found in the Munich archives, Jakob Engelberg “read the rather liberal Frankfurter Zeitung but besides that was quite an apolitical person who didn’t show party flagging from his window on national holidays.” I never got the chance to ask him precisely what persuaded him to try to leave Germany at such an early date. Jakob Engelberg died from a cerebral hemorrhage in 1941, long before I was born. (The German government would eventually make a small payment in compensation for his death, acknowledging that it was caused, at least in part, by blows to the head he received while at Dachau.)</p>
                      <p class="ta-j"><img class="u-responsive-img w40 mr10 mb10 " src="unit_1/module_4/assets/images/act_3_2.png" alt="" align="left"/>
                         <strong>5</strong> The U.S. visas for Paula Engelberg and the two children, Melly and Edward, arrived in October 1938. Jakob’s visa was delayed because of his Polish nationality, a less-desirable category of immigrant under U.S. law for which fewer visas were issued. And so he was imprisoned in the barracks of Dachau on Nov. 10, 1938, a Jew still
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 ml10 mb10 " src="unit_1/module_4/assets/images/act_3_3.png" alt="" align="right"/>
                        waiting for his papers to leave the country. These facts were confirmed by records recovered from archives in Germany and Switzerland by Christian and his Art Hunt colleagues: Fredy Gareis, Marcus Pfeil and Carolyn Braun.<br/> The search for the painting proved much more difficult. The team identified the man who stamped the precious visa: Wolfgang Gribi, a Swiss diplomat whose wife lived to be over 100. Unfortunately, she died two years ago. <br/> They tracked down an expert on the art of Otto Stein who helped them identify 14 possible “suspects” that were similar to my family’s Mona Lisa. Most could be eliminated by date or provenance and my father eliminated several more in a Skype conversation (his first, at age 86). Eventually, the team narrowed it down to one particular painting that was bought by a private collector in Munich in 1950 after suffering what was described as “war damage.” <br/> <br/> Read the full story here: <a href="https://www.propublica.org/article/the-painting-that-saved-my-family-from-the-holocaust">https://www.propublica.org/ </a>
                        
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h5>Answer the following texts based on the text you have read.</h5>
      </div>
      <div class="row align-items-center row-flex">
        <div class="col xs12 md6">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong>
              Choose the most appropriate heading for the following extract: <br/><br/>
            </h6>
            <p>
              The consulate issued only 600 such documents that year, up from just 200 the previous year.
              This particular one secured the release of my grandfather from Dachau after two weeks,
              allowing my grandparents, father and aunt to escape Germany and ultimately settle in the
              United States. It made possible the existence of 20 more human beings.<br/>
              I’m one of them. <br/><br/>
              Five years ago, I told this story to Christian Salewski, a German journalist who was working at
              ProPublica for several months as part of a fellowship. I said I had always wondered what had
              happened to the painting, not because it was particularly valuable — works by Stein can be
              found on eBay selling for a few hundred dollars — but because I wanted to know its story.
              As a journalist, I imagined any number of possible narratives. Perhaps the painting was given
              to a diplomat who dispensed visas to desperate Jews, a Schindler of the Swiss diplomatic
              service. Perhaps it had been sold to an art dealer to raise the money for a bribe. Maybe it was
              simply a gratuity for a service rendered.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_1">The German journalist and my family</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_2">The Schindler list</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_3">The painting that save my family</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30-xs mt0-md">
            <h6><strong class="u-textColor_4">•</strong>
              Choose “true”, “false” or “information not given”. <br/><br/>
            </h6>
            <p>The author found out what exactly happened to his family’s art work.</p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_5">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_6">Information not given.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Match the information given with one of the paragraphs from the text.  <br/><br/>
            </h6>
            <p>The author’s grandfather travelled a lot.</p>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox xs12 sm3 ta-c" for="selInput_7">1.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox xs12 sm3 ta-c " for="selInput_8">3.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox xs12 sm3 ta-c " for="selInput_9">4</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row row-flex align-items-center">
        <div class="col xs12 md6">
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words form the paragraph.  <br/><br/>
            </h6>
            <p>The story is about a Jewish family from Germany. The Nazis 
              <input class="c-input js-escribir" type="text"/> a national
              program against the Jewish people. This resulted in 
              <input class="c-input js-escribir" type="text"/> gangs in the streets.
              The 
              <input class="c-input js-escribir" type="text"/> of it was the destruction of 
              <input class="c-input js-escribir" type="text"/>, business and
              homes. The family's life was saved by a painting that had a 
              <input class="c-input js-escribir" type="text"/> to the Mona Lisa.
              The author is trying to find the painting now but it's like searching for a needle in 
              <input class="c-input js-escribir" type="text"/>.
              
            </p>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Choose the correct answer. <br/><br/>
            </h6>
            <p>The author...</p>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox xs12 sm3 md3 ta-c" for="selInput_10">Witnessed the events of 1938.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox xs12 sm3 md3 ta-c " for="selInput_11">Was not born yet.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox xs12 sm3 md3 ta-c " for="selInput_12">Is the great grandson of the witnesses.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Complete the table by using the correct person from the text.
            </h6>
            <div class="row mt30">
              <table class="c-table-estilo_tres m-a ">
                <thead>
                  <tr>
                    <th>German nationals</th>
                    <th>Other nationality</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input class="c-input js-escribir" type="text"/>
                    </td>
                    <td>
                      <input class="c-input js-escribir" type="text"/>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input class="c-input js-escribir" type="text"/>
                    </td>
                    <td>
                      <input class="c-input js-escribir" type="text"/>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input class="c-input js-escribir" type="text"/>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row ta-c mt30"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_3_4.png" alt=""/></div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2 || s_actividad == 3" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2 || s_actividad == 3" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '720');</script>