
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md5 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c lh25">
              <h5>Study shows that Canadians enjoy daily commute to work</h5>
              <p class="ta-c">Wikinews.org, Wednesday, November 8, 2006</p>
              <p class="ta-j">A new study by Statistics Canada shows that 38 percent of Canadians enjoy their daily commute to work. One in six workers, about 16 percent even said that they liked commuting a lot and 30 percent do not.<br/> The average commute for people from Burlington to Toronto takes about 45 minutes.<br/> The shorter the distance to work, the more enjoyable the commute is. Most commuters who travel to work by bike enjoy the trip the most. “People taking public transit get the least amount of enjoyment out of the commute, which could be because their trips are often longer,” said Martin Turcotte, the author of the study. “Baby boomers like commuting more than younger people,” he said.<br/> “The time alone is therapeutic,” said a 33-year-old, who has been commuting for seven years. “I am alone in my car and I can control all the elements. I can have it hot or cold, have the music on or off and I can choose to take phone calls or not.”<br/> “It’s also an opportunity to exercise that I otherwise wouldn’t have,” said Chris Heysel, who cycles 21 kilometers from Stoney Creek to McMaster University in Hamilton.<br/> More workers said that they disliked chores like cleaning the house and grocery shopping more than they did commuting to work.<br/> Read the full story here:<a href="https://en.wikinews.org/wiki/Study_shows_that_Canadians_enjoy_daily_commute_to_work" target="blank">https://en.wikinews.org/wiki/</a></p>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row col-center">
            <h5> Answer the following questions based on the reading above.</h5>
            <div class="row-flex">
              <p> <strong class="u-textColor_4">•</strong>  What is an alternative name for text above?</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">Cycling to work.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">The morning commute.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">Chores vs. the morning Commute.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row-flex align-items-center">
              <p> <strong class="u-textColor_4">•</strong>  What percentage of Canadians do not enjoy their morning commute?</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4"> More than those that like coming to work.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">38 percent.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">Less than those that enjoy commuting to work.</label>
            </div>
          </div>
          <div class="row col-center mt30">
            <div class="row-flex">
              <p> <strong class="u-textColor_4">•</strong> Who enjoyed the morning commute the most?</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">People on public transport because they didn’t have to drive in traffic.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">People in cars because they get to be alone.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">People that cycled to work.</label>
            </div>
          </div>
          <div class="row col-center mt30">
            <div class="row-flex">
              <p> <strong class="u-textColor_4">•</strong> According to the author:</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_10">Younger workers enjoy commuting more than older workers.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_11">Older workers enjoy commuting to work more than younger workers.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_12">The author did not say</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>