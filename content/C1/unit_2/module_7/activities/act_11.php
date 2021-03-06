
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p class="ta-l mt20">When having a conversation, we sometimes have to say it in a particular way, either changing, returning to or continuing with the topic.<br/><br/>
                <strong>Changing the topic</strong><br/><br/>
                <strong>•</strong> Let’s move on to…<br/>
                <strong>•</strong> That aside…<br/>
                <strong>•</strong> On a different note…<br/>
                <strong>•</strong> Moving on…<br/>
                <strong>•</strong> Not to go off on a tangent, but… (if somehow related to what was just said)<br/>
                <strong>•</strong> By the way… (if somehow related to what was just said)<br/>
                <strong>•</strong> On a side note… (if somehow related to what was just said)<br/>
                <strong>•</strong> Well, anyways (informal)…<br/><br/>
                <strong>Returning to the topic</strong><br/><br/>
                <strong>•</strong> Just to get back to what ... was / were saying…<br/>
                <strong>•</strong> Getting back to what ... was / were saying…<br/>
                <strong>•</strong> So, as ... was / were saying…<br/><br/>
                <strong>Continuing the topic</strong><br/><br/>
                <strong>•</strong> Well, just to continue (with)<br/>
                <strong>•</strong> Let’s continue (with…) <br/>
                
              </p>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 pl10">
          <h5>Complete the following dialogue by choosing the most appropriate expression.</h5>
          <div class="row mt20"><span class="ta-j lh35"><strong class="u-textColor_4">• </strong>Mrs. Anderson is speaking with a business client at her firm: <br/>
              <strong>Mrs. Anderson:</strong> Good day, Mr. Hiako. And how are you this afternoon?<br/>
              <strong>Mr. Hiako:</strong> I am fine, thanks. I hope you are as well.<br/>
              <strong>Amy:</strong> Yes, I am fine, thank you.<br/>
              <strong>Mr. Hiako:</strong> So,</span>
            <select class="c-select" name="act_1_2">
              <option value="" disabled="disabled" selected="selected"></option>
              <option value="1">on a side note</option>
              <option value="2">getting back to what</option>
            </select><span class="ta-j lh35">
              we were discussing at last week’s meeting, we
              still need to set the price for the new line of laptop computers.<br/>
              <strong>Mrs. Anderson:</strong> Yes, our head of marketing is still in discussions with the manufacturers to
              determine a price. So, that information should be available by Wednesday.</span>
            <select class="c-select" name="act_1_2">
              <option value="" disabled="disabled" selected="selected"></option>
              <option value="1">On a side note</option>
              <option value="2">As I was saying</option>
            </select><span class="ta-j lh35">
               , Mr. Henry, who is the director of the manufacturing company,
              will be joining us at our next meeting.<br/>
              <strong>Mr. Hiako:</strong> Oh, thank you for letting me know. It’ll be a pleasure to have him there.
              Ok,</span>
            <select class="c-select" name="act_1_2">
              <option value="" disabled="disabled" selected="selected"></option>
              <option value="1">anyways</option>
              <option value="2">let’s move on</option>
            </select><span class="ta-j lh35">
              . The release date is another important aspect. I really
              wouldn’t want it released on the market when there is stiff competition.<br/>
              
              
              
              
              
              
              
              
              </span>
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