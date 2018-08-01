
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="DragandDrop()">
      <div class="row mt40-xs mt20-md">
        <h5>Fill in the blank space with the appropriate collocation from the table below.</h5>
      </div>
      <div class="row-flex mt40">
        <div class="col-flex-xs12">
          <div class="row-flex justify-around">
            <div class="col-flex-xs12 col-flex-sm9 col-flex-md9 col-center">
              <div class="row row-flex justify-center">
                <div class="dragCont ml5">
                  <div class="drag">must have</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">slave to fashion</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">old fashioned</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">get dressed up</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">fashion icons</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">smart clothes</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">well dressed</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">takes a lot of pride in her appearance</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">vintage clothes</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">timeless</div>
                </div>
                <div class="dragCont ml5">
                  <div class="drag">designer labels</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt20">
            <table class="c-table-default">
              <thead></thead>
              <tbody>
                <tr>
                  <td><strong>1.</strong></td>
                  <td>
                    I cannot resist the new spring collection of sweaters I am
                    <strong>(1) </strong>
                    <span class="drop"></span>
                    .
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>2.</strong></td>
                  <td>
                    I like the way Martin takes pride in his appearance he is always so
                    <strong>(2) </strong>
                    <span class="drop"></span>
                    .
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>3.</strong></td>
                  <td>
                    Maria does always wear the latest fashion trends, the girls at work are mean to her, they say her clothes are
                    <strong>(3)</strong>
                    <span class="drop"></span>
                    but I think it’s <strong>(4)</strong> <span class="drop"></span>.
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>4.</strong></td>
                  <td>
                    Julian also has a fresh haircut and is so well dressed, he
                    <strong>(5)</strong>
                    <span class="drop"></span>
                    .
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>5.</strong></td>
                  <td>
                    My wife loves to
                    <strong>(6)</strong>
                    <span class="drop"></span>
                    for dinner parties and nights out on the town.
                    
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>6.</strong></td>
                  <td>
                    We can dress casually at work but we must wear
                    <strong>(7)</strong>
                    <span class="drop"></span>
                    to attend meetings.
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>7.</strong></td>
                  <td>
                    There are some well known musicians in Colombia, whatever they wear becomes the new trend, they are
                    <strong>(8)</strong>
                    <span class="drop"></span>.
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>8.</strong></td>
                  <td>
                    This blouse looked fashionable ten years ago and it looks fashionable today. It is a
                    <strong>(9)</strong>
                    <span class="drop"></span>
                    piece of clothing.
                    
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>9.</strong></td>
                  <td>
                    Everybody has the new choker necklaces. It is new
                    <strong>(10)</strong>
                    <span class="drop"></span>
                    accessory  this summer.
                    
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>10.</strong></td>
                  <td>
                    Juan does not care who makes his jackets as long as he gets them cheap. He does not buy
                    <strong>(11)</strong>
                    <span class="drop"></span>
                    or generic brands.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>