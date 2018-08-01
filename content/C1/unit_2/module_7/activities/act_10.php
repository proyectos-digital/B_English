
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <h5>Complete the sentences with the correct form of the expression ‘be going to’ using the words in parenthesis.</h5>
          <p class="ta-j mt40"> <strong class="u-textColor_4">• </strong> Last year and the year before, I was selected to represent the university in Canada. This year they’re definitely 
            <input class="c-input ta-c js-escribir" type="text"/>  <strong class="u-textColor_2">(not send)</strong> me.
          </p>
          <p class="ta-j mt20"> <strong class="u-textColor_4">• </strong> Are we 
            <input class="c-input ta-c js-escribir" type="text"/>  <strong class="u-textColor_2">(we / continue)</strong> from where we left off?
          </p>
          <p class="ta-j mt20"> <strong class="u-textColor_4">• </strong> Martin confirmed with me this morning that he  
            <input class="c-input ta-c js-escribir" type="text"/>  <strong class="u-textColor_2">(not go)</strong>  with us to Brazil this year because he hasn’t got enough money. Instead, he 
            <input class="c-input ta-c js-escribir" type="text"/>  <strong class="u-textColor_2">(spend)</strong>  a week with his brother in Cali.
          </p>
          <p class="ta-j mt20"> <strong class="u-textColor_4">• </strong> 
            <input class="c-input ta-c js-escribir" type="text"/>  <strong class="u-textColor_2">(Sally / become)</strong>  the next CEO of the company? I’ve been hearing a few murmurs around the office.
          </p>
          <p class="mt20"> <strong class="u-textColor_4">• </strong> Hey Karen! Quick question.  
            <input class="c-input ta-c js-escribir ancho180" type="text"/>  <strong class="u-textColor_2">(Mary and her husband / not get a divorce)</strong> ?
          </p>
        </div>
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p><strong>Be going to + verb</strong> <strong class="u-textColor_2">(positive)</strong><br/>
                <strong>Be not going to + verb</strong> <strong class="u-textColor_4">(negative)</strong><br/>
                <strong>→</strong> to express planned actions for the future or something that is certain to happen.<br/><br/>
                <strong>Eg1: I am going to travel to</strong> Cartagena this weekend with my family.<br/>
                <strong>Eg2: The manager is not going to have</strong> the meeting this afternoon.<br/><br/>
              </p>
              <h6 class="ta-c">INTERROGATIVE FORMS</h6>
              <p><strong>Positive</strong><br/><br/>
                <strong>→ used to find out if something is going to happen</strong>.<br/><br/>
                
                <strong class="ml20">•</strong> Am I going to + verb… ? → <strong>Am I going to live</strong> with my cousins? <br/>
                <strong class="ml20">•</strong> Are you / we / they going to + verb… ? → <strong>Are they going to apply</strong> for the
                 scholarship? <br/>
                <strong class="ml20">•</strong> Is he /she / it going to + verb… ? → <strong>Is the government going to increase</strong>
                 taxes again? <br/><br/>
                <strong>Negative</strong><br/><br/>
                <strong>→ used when we wish to confirm if something is going to occur or not</strong>.<br/><br/>
                <strong class="ml20">•</strong> Am I not… ? → Mr. Darwin, <strong>am I not going to be</strong> the class valedictorian?<br/>
                <strong class="ml20">•</strong> Aren’t you / we / they… ? → <strong>Aren’t we going to attend</strong> the concert?<br/>
                <strong class="ml20">•</strong> Isn’t he / she / it… ? → <strong>Isn’t Michelle going to get married</strong> next month?<br/>
                
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>