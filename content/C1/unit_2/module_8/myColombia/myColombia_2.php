
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <div class="row">
      <h5><strong>Read the following short news article and answer the questions that follow. </strong><br/><br/></h5>
      <div class="col xs12 md6">
        <p class="ta-j"><strong>E! Entertainment</strong><br/><br/>
          The Colombian division of E! Entertainment Latin America, a TV network dedicated to
          entertainment-related programming, is looking for a new face to dazzle viewers, reported
          El Espectador Thursday.<br/>
          For the second consecutive year, E! is looking for Colombian girls between the ages of 18
          and 25 to present on its network, becoming “Chica E! Colombia” 2012.<br/>
          According to Lily Messuti, the channel’s marketing coordinator, E! is looking for a girl
          who is “fresh, charming, spontaneous, glamorous, confident, very trendy, but above all
          charming and able to conquer the audience and fans of show business.”<br/>
          To enter in the competition the girls must register on the website Chica E! Colombia and
          upload a video in which they answer a surprise question.<br/>
          “The video must not be too elaborate nor too easy going,” advises current Chica E!
          Colombia Karen Bray.<br/>
          According to the channels marketing coordinator beauty is an important factor in the
          contest, but so is naturalness, which means the videotape should not be too well prepared.
          She added that “the channel is not looking for a Mother Theresa, nor someone with a
          wealth of knowledge of cultural issues, as the world of E! is spectacle and entertainment.”<br/>
          During the next stage of the competition E! will select twenty candidates, who will do a
          casting call in front of a jury July 31.<br/>
          Three candidates will be selected, who will then have to charm viewers who will ultimately
          vote to decide the winner of Chica E! Colombia 2012.<br/><br/>
          Read the story here:<a href=" https://colombiareports.com/e-seeks-new-colombian-chica/" target="blank"> https://colombiareports.com/e-seeks-new-colombian-chica/</a>
          
          
        </p>
      </div>
      <div class="col xs12 md6">
        <div class="col xs11 col-center mt30">
          <h6 class="mb10">The word Dazzle can be replaced by…</h6>
          <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_1">Impress.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_2">Shake up.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_3">Blind.</label>
        </div>
        <div class="col xs11 col-center mt30">
          <h6 class="mb10">E! Entertainment …</h6>
          <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_4">Is a Colombian TV network in Latin America.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_5">Has shows in several Latin American countries.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_6">Is a show for Models.</label>
        </div>
        <div class="col xs11 col-center mt30">
          <h6 class="mb10">The Beauty contest is looking for…</h6>
          <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_7">The most beautiful girl.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_8">The best prepared audition tape that shows of beauty and knowledge.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
          <label class="c-CheckSelected row ml10 mr10" for="inputRadio_9">The person that is most relatable to the audience.</label>
        </div>
      </div>
    </div>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>