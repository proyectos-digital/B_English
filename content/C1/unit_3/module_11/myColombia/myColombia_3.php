
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row row-flex">
        <div class="col xs12">
          <div class="ta-j" phrasal-column="column-xs1 column-md2"><strong>Read the following article and answer the questions that follow</strong>.<br/><br/>
            <strong>Read the following short news article and answer the questions that follow</strong>.<br/><br/>
            Colombia’s Canal 1 asked an astrologer to explain the significance of the Nobel Prize for Physics on Wednesday.
            The anchors of news show Primera Hora, Ivan Lalinde and Silvia Corzo, were reporting on the high-level acknowledgment for the investigations on gravitational waves by three American scientists.<br/><br/>
            The anchors invited astrologist Ricardo Villalobos to explain the cosmic event once predicted by Albert Einstein and the significance of the astronomers’ observation of ripples in the fabric of space-time.<br/><br/>
            
            <hr/>
            We must understand that these Nobel prizes are given to those who show how synchronized we are with the cosmos, reminding us that we are part of the stars. A world that we, day by day,
            penetrate and of which we realize that there are really no distinctions. Humans are, as Carl Sagan said, ‘an intrinsic part of the universe.’ He was saying that we are all cosmic dust. And just
            because we inhale and breathe does not mean that we breathe the particles that come from the universe.<br/><br/>
            
            <p class="ta-r mb20"><strong> Ricardo Amilcar</strong></p>
            
            <hr/>
            The Nobel Prize for Physics is given to scientists who have made considerable contributions to the scientific understanding of the world and the universe.
            Astrologers, often distinct from physicists, believe in unproven relations between terrestrial events and life on earth.<br/><br/>
            
            <hr/>
            Scientists play intellectual games that have certain rules that need to be followed. They accept conclusions that can be verified by repeated observations or experiments, or by making
            predictions that can be tested. Astrology fails to meet these criteria. Put simply, the tenets of astrology provide ample evidence of its absurdity. Effects of astrology do not exist in the Universe.<br/><br/>
            
            
            <p class="ta-r mb20"><strong> Professor Quamrul Haider</strong></p>
            
            <hr/>
            Among the first in Colombia’s science community to call “shame” was astrophysicist Juan Diego Soler, who called out the television network on Twitter.
            The performance by the reported expert in tarot cards also drew criticism from the Medellin-based Antioquia University, whose math department called the astrologer a “charlatan.”
            According to Einstein, gravitational waves are caused by major cosmic events, for example the colliding of black holes, and cause ripples in the fabric of space-time.
            The 2015 Laser Interferometer Gravitational-Wave Observatory, or Ligo, experiment carried out by Rainer Weiss, Kip Thorne and Barry Barish was able to observe gravitational waves caused
            by the collision of black holes a billion light-years away.<br/>
            Einstein predicted these waves in his theory of general relativity for which the genius, ironically, never received a Nobel prize.<br/><br/>
            Read the full story here: <a href="https://colombiareports.com/colombia-tv-show-dubs-astrologer-expert-psychics/">https://colombiareports.com/colombia-tv-show-dubs-astrologer-expert-psychics/</a>
          </div>
        </div>
        <div class="col xs12 mt40">
          <hr/>
        </div>
        <div class="col xs12">
          <h6 class="col xs11 mt30">Choose the correct answer for the following questions.</h6>
          <div class="row row-flex">
            <div class="col xs11 md5 col-center mt30">
              <h6 class="mb10">An astrologer …</h6>
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected row ml10 mr10" for="inputRadio_1">Studies physic.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected row ml10 mr10" for="inputRadio_2">Studies gravitational waves.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected row ml10 mr10" for="inputRadio_3">Tells the future using cards.</label>
            </div>
            <div class="col xs11 md5 col-center mt30">
              <h6 class="mb10">An astrophysicist …</h6>
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected row ml10 mr10" for="inputRadio_4">Studies the weather.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected row ml10 mr10" for="inputRadio_5">Studies how the universe works.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected row ml10 mr10" for="inputRadio_6">Tells the future using cards.</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
