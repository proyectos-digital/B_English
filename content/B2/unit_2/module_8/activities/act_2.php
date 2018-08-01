
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <h5>Read the text about American Indians.</h5>
          <div class="row mb30 ta-c showTo-md f-l w45 ml15 mt15"><img class="u-responsive-img" src="unit_2/module_8/assets/images/act_2a.png" alt=""/></div>
          <div class="row mb30 ta-c showTo-md f-l w45 ml15 mt15"><img class="u-responsive-img" src="unit_2/module_8/assets/images/act_2b.png" alt=""/></div>
          <div class="row mb30 ta-c showTo-md f-l w45 ml15 mt15"><img class="u-responsive-img" src="unit_2/module_8/assets/images/act_2c.png" alt=""/></div>
          <div class="row mb30 ta-c showTo-md f-l w45 ml15 mt15"><img class="u-responsive-img" src="unit_2/module_8/assets/images/act_2d.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c ">
              <p class="ta-j">Today, American Indians live very much like every one of us. But their lives used to be very different. For example, today most American Indians live in houses. But many of them <strong>would live </strong> in teepees, which are tents made of animal skins. They also used to be nomads. They <strong>would travel </strong> from place to place and carry their teepees with them. Today, they travel differently, too. They <strong>would travel </strong> on horse. Today, they travel by car, bus, train and airplane, just like everyone else. Today, American Indians communicate with telephones, but in the past they would use smoke signals to send messages from one place to another.</p>
              <p class="ta-j">Years ago, there used to be thousands of buffaloes in the West. American Indians <strong>would hunt </strong> them with bows and arrows. They <strong>would eat </strong> buffalo meat and make clothes from their skin. They even used to make tools out of buffalo bones. Today, however, they eat food from supermarkets. They don’t hunt buffaloes anymore.</p>
              <p class="ta-j">The lives of American Indian children are also different now. They <strong>would learn </strong> everything from their parents at home, mostly through oral tradition. Today, American Indian children go to school, and have access to a formal education, just like everyone else.</p>
            </div>
          </div>
          <h5>Complete the chart.</h5>
          <table class="c-table-estilo_tres mt30 m-a">
            <thead>
              <tr>
                <th> </th>
                <th>Before</th>
                <th>Now</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>House</td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td>Transportation</td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td>Food</td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td>Communication</td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td>Education</td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
                <td><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></td>
              </tr>
            </tbody>
          </table>
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