
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row mt40-xs mt20-md">
        <h5>Fill in the blank space with the appropriate words.</h5>
      </div>
      <div class="row-flex mt40">
        <div class="col-flex-xs12">
          <div class="row-flex justify-around">
            <div class="c-cardGreen">
              <ul class="c-cardGreenContent row row-flex">
                <li class="c-cardGreen_item">multiparty system</li>
                <li class="c-cardGreen_item">one party system</li>
                <li class="c-cardGreen_item">mainstream</li>
                <li class="c-cardGreen_item">international</li>
                <li class="c-cardGreen_item">electorate</li>
                <li class="c-cardGreen_item">constituents</li>
                <li class="c-cardGreen_item">polling station</li>
                <li class="c-cardGreen_item">term in office</li>
                <li class="c-cardGreen_item">in power</li>
                <li class="c-cardGreen_item">opposition</li>
                <li class="c-cardGreen_item">civil servant</li>
              </ul>
            </div>
          </div>
          <div class="row mt20">
            <p>♦ Many may not realise it  but the president is a 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/>, he works for the government to serve the people of the country.
            </p>
            <p>♦ The party that did not win the election is the 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/> while the party that won the election is the party that is 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/>.
            </p>
            <p>♦ Most modern democracies have a term limit. Usually the 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/> is 4 years and the number of terms is two.
            </p>
            <p>♦ When you are going to vote, you need to find the 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/> at which you are registered. It is usually the one closest to your home address.
            </p>
            <p>♦ Candidates must go out to speak to their 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/>, these are the people that live in the area the candidate wants to represent.
            </p>
            <p>♦ The candidates for the presidency must have a massive campaign that can reach all the 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/> in the country. They need all the votes they can get.
            </p>
            <p>♦ 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/> politics involved the political relationships between countries.
            </p>
            <p>♦ Some of the ideas that are 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/> politics in Colombian politics include, equal rights and justice for all, rich or poor.
            </p>
            <p>♦ In a communist country there is usually no opposition so they have a 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/>.
            </p>
            <p>♦ Colombia has several political parties, some may say there are too many, that is because of the 
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/>.
            </p>
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