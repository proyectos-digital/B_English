
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <h5>At times in life, things become difficult, challenging, we have uncertainties or doubts. For such instances, it is good to give encouragement. Here are a few expressions:</h5>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p class="ta-l mt20 lh35"><strong>• </strong> <i>What do you have to lose? <strong>→</strong> A rhetorical question meaning that there’s nothing. </i> <br/>
                <strong>• </strong> <i>Go for it! <strong>→</strong> Do something with a lot of effort. </i> <br/>
                <strong>• </strong> <i>Don’t give up. <strong>→</strong> Continue trying your hardest to achieve something. </i> <br/>
                <strong>• </strong> <i>It’s worth a shot. <strong>→</strong> If you try, things could turn out favorable. </i> <br/>
                <strong>• </strong> <i>Think positive. <strong>→</strong> Do not be doubtful or negative in your thoughts. </i> <br/>
                <strong>• </strong> <i>Believe in yourself. <strong>→</strong> Do not doubt yourself or your abilities. </i> <br/>
                 <i>wrong in attempting to do something. </i> <br/>
                 <i>You won’t know the results until you try. </i> <br/>
              </p>
            </div>
          </div>
        </div>
        <div class="col xs12 md5 mr40">
          <h5>Which of the above expressions do you think best suit each situation? (There can be more than one option for a situation.)</h5>
          <div class="row mt20 flex align-items-center">                     
            <p><strong class="u-textColor_4">• </strong>Amy wishes to apply for a position at a bank.
              However, she’s not sure whether to send her
              résumé because one of the requirements is to have
              a C2 English level. But, she has a C1 level. 
            </p>
            <div class="col xs6">
              <select class="c-select" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="6">What do you have to lose?</option>
                <option value="2">Don’t give up</option>
                <option value="4">Think positive</option>
                <option value="1">It’s worth a shot</option>
                <option value="5">Go for it!</option>
                <option value="3">Believe in yourself</option>
              </select>
            </div>
          </div>
          <div class="row mt20 flex align-items-center">
            <div class="col xs6">
              <p><strong class="u-textColor_4">• </strong>David loves learning English but sometimes he
                gets frustrated when speaking because he forgets
                words or mispronounces some of them. 
              </p>
            </div>
            <div class="col xs6">
              <select class="c-select" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="6">What do you have to lose?</option>
                <option value="2">Don’t give up</option>
                <option value="4">Think positive</option>
                <option value="1">It’s worth a shot</option>
                <option value="5">Go for it!</option>
                <option value="3">Believe in yourself</option>
              </select>
            </div>
          </div>
          <div class="row mt20 flex align-items-center">
            <div class="col xs6">
              <p><strong class="u-textColor_4">• </strong>Your sister applied to university but she has
                doubts about being accepted because it’s so
                competitive to get in.
              </p>
            </div>
            <div class="col xs6">
              <select class="c-select" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="6">What do you have to lose?</option>
                <option value="2">Don’t give up</option>
                <option value="3">Think positive</option>
                <option value="1">It’s worth a shot</option>
                <option value="5">Go for it!</option>
                <option value="3">Believe in yourself</option>
              </select>
            </div>
          </div>
          <div class="row mt20 flex align-items-center">
            <p class="ta-j"><strong class="u-textColor_4">• </strong>Martin is a great chef and wants to open a fast
              food restaurant. However, he is hesitant.
            </p>
            <div class="col xs6">
              <select class="c-select" name="act_1_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="5">What do you have to lose?</option>
                <option value="2">Don’t give up</option>
                <option value="4">Think positive</option>
                <option value="1">It’s worth a shot</option>
                <option value="5">Go for it!</option>
                <option value="3">Believe in yourself</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>