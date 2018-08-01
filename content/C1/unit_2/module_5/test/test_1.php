
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>Read the following excerpt and choose the correct answers:</h5>
      <div class="c-cardGreen">
        <div class="c-cardGreenContent u-textColor_1">
          <div class="row"> 
            <div class="col xs12 md6">
              <h5 class="ta-c">From Ecotourism to Community Tourism</h5>
              <p class="ta-c">John Cavanagh, Robin Broad posted May 09, 2011</p>
              <p class="ta-j"><strong>1</strong> In the heart of Trinidad’s ancient forests, we discover a concept that extends
                ecotourism in a direction that excites us. “We like to call it community tourism, by which
                we mean the tourist actually lives in the community and interacts with the people and
                their surrounding environment,” explains local resident Kelly Warren.
                We are <strong>smack-dab</strong> in the middle of the mountain range covering the
                northern quarter of Trinidad, in the village of Brasso Seco, population 350. Kelly and
                her husband Carl Fitzjames are our hosts. Carl is listed in The Rough Guide to Trinidad
                and Tobago as the “best guide” to this area in northern Trinidad, a little-explored gem of
                flora and fauna biodiversity.
                
              </p>
              <p class="ta-j"><strong>2</strong> Brasso Seco is a perfect base for hiking into the forest, bathing in waterfalls, being
                tutored in medicinal plants, and learning about local agriculture. For us, it is a base to
                walk and talk and learn. One day we walk with Kelly, Carl, and their two young children
                down an old <strong>muddy</strong> road that once led to a cocoa plantation. At every turn is a different
                bird (as a bird-bander, Carl knows them all)—probably to be expected since there are
                430 species packed into this small country. Blue morpho butterflies flit in and out of the
                sunlight that cuts through the forests. Carl tells us about a golden frog that does not live
                anywhere else in the world.
                
              </p>
              <p class="ta-j"><strong>3</strong>  But community tourism means more than just nature treks. Another day, Carl cuts
                huge leaves from a local palm for us to use as umbrellas as we hike through the driving
                rain to see his organic “garden.” Deep in the forest, they are growing everything from
                the root crops that Trinis call “provisions” to fruit trees and giant leafy green vegetables.
                Kelly and Carl combine many of these into a <strong>scrumptious</strong> and nutritious stew they
                call “jungle pot.” As Carl explains, his garden and its nutritious food are his “first line of
                defense,” the very first thing that local families here traditionally worry about.
                
                
                
              </p>
            </div>
            <div class="col xs12 md6">
              <p class="ta-j"><strong>4</strong>  Carl, now 57 (but looking more like 45), was trained decades ago as a nuclear welder
                in Canada: “In my 30s, I’m working all over North America as a nuclear welder and I
                read a confidential Canadian government report on all the highly noxious metals that
                I’m inhaling … and I realized this isn’t really what I wanted to do with my life. That’s
                when I did what I call making the leap … returning to my roots.” He returned to this
                mountain town of Brasso Seco. “Making the leap”—it is a phrase that Carl and Kelly
                keep repeating.<br/>
                Carl’s roots are a mélange typical of these islands. His great-grandfather was a
                Venezuelan tightrope walker who came to Trinidad in the circus. He was smitten by
                a woman in the audience, one of a small community of Amerindians that somehow
                survived colonialism, and he settled with her in Brasso Seco. By Carl’s own reckoning,
                his blood includes strains from Africa, Spain, Venezuela, and the Amerindians that
                originally came to Trinidad from South America.
                
              </p>
              <p class="ta-j"><strong>5</strong>  As Carl’s stories reveal, he learned much of what he knows from his grandfather.
                Carl is passing on his knowledge, training younger people in the village to be nature
                guides in the hope that a growing demand by researchers and tourists for guides in
                this ecologically and socially rich location will be met by Brasso Seco’s own. He is a
                pragmatist as well as a dreamer and believes it is very possible for the government to
                value agriculture, and alternative tourism as much as natural gas and giant industrial
                projects.
                
              </p>
              <p><strong>Read the full article here:</strong> <a href="http://www.yesmagazine.org/blogs/john-cavanagh-and-robin-broad/taking-the-leap-from-ecotourism-to-community-tourism?icl=yesemail_wkly20110513&amp;ica=mrBroad ">www.yesmagazine.org</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt: <br/> <br/>
            Brasso Seco is a perfect base for hiking into the forest, bathing in waterfalls, being tutored in
            medicinal plants, and learning about local agriculture. For us, it is a base to walk and talk and
            learn. One day we walk with Kelly, Carl, and their two young children down an old muddy road
            that once led to a cocoa plantation. At every turn is a different bird (as a bird-bander, Carl
            knows them all)—probably to be expected since there are 430 species packed into this small
            country. Blue morpho butterflies flit in and out of the sunlight that cuts through the forests.
            Carl tells us about a golden frog that does not live anywhere else in the world..<br/><br/>
            
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">The bird whisperer.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">My family vacation.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">Ecotourism.</label>
            <input class="js-select" type="hidden" ng-model="valorinputa"/>
          </div>
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Answer “true”, “false” or “information not given”. <br/> <br/>
            Carl’s grandparents were from Venezuela and America.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden" ng-model="valorinputb"/>
          </div>
        </div>
        <div class="col xs12 md5">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.  <br/> <br/>
            Carl’s father worked in the circus.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">1.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">4.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">5.</label>
            <input class="js-select" type="hidden" ng-model="valorinputc"/>
          </div>
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center"><span>Smack-dab | Muddy | Scrumptious</span></div>
          </div>
          <p>The new apartment was 
            <input class="c-input js-escribir" type="text"/> in the middle of the city center.
          </p>
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the correct answer.  <br/> <br/>
            Carl’s believes the government should...
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">focus on eco-tourism.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">focus on the oil and gas industry.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">focus on both.</label>
            <input class="js-select" type="hidden" ng-model="valorinputd"/>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
