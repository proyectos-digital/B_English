
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 mt50-md mt30-sm">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p><strong>Detecting Lies</strong></p>
              <p>Have you ever been in a situation where you´re talking to someone and you have the feeling that person is lying to you? Did you know that there are several things you can look for to see if you are being lied to? Here are some things you can look for when you get the feeling: When people are lying, they tend not to move their arms, hands or legs very far from their body. They usually stand very still, looking stiff. This is because they don’t want to be noticed. Sometimes a person who is lying will not look you in the eyes. Other times people who lie try to look at you in a strong way because they want to convince you they are telling the truth. If someone does either of these two things they might be lying. Liars may also touch their face, ears or the back of their neck. Another thing a liar might do is turn their head away from you when talking.</p>
              <p>Liars will not answer a question directly. </p>
              <p>They will try to deflect your attention. </p>
              <p>Liars may also give too many details. They may try to over-explain things. They do this because they want to convince you of what they are saying. Often when a person is lying, they do not want to continue talking about their lie. They will be happy to change the subject.</p>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center mt50-md mt30-sm">
          <table class="c-table" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th> </th>
                <th>true</th>
                <th>false</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. There are special rules you need to know if you want to be a good liar.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_1" name="group_trueFalse_1" value="1"/>
                    <label class="c-CheckTrue" for="SelInputRadio_1"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_2" name="group_trueFalse_1" value="2"/>
                    <label class="c-CheckFalse" for="SelInputRadio_2"></label></span></td>
              </tr>
              <tr>
                <td>2. Liars tend to do specific things when they lie.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_3" name="group_trueFalse_2" value="1"/>
                    <label class="c-CheckTrue" for="SelInputRadio_3"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_4" name="group_trueFalse_2" value="2"/>
                    <label class="c-CheckFalse" for="SelInputRadio_4"></label></span></td>
              </tr>
              <tr>
                <td>3. There are several things liars do with their body when they lie.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_5" name="group_trueFalse_3" value="1"/>
                    <label class="c-CheckTrue" for="SelInputRadio_5"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_6" name="group_trueFalse_3" value="2"/>
                    <label class="c-CheckFalse" for="SelInputRadio_6"></label></span></td>
              </tr>
              <tr>
                <td>4. There are several things that liars do with language.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_7" name="group_trueFalse_4" value="1"/>
                    <label class="c-CheckTrue" for="SelInputRadio_7"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_8" name="group_trueFalse_4" value="2"/>
                    <label class="c-CheckFalse" for="SelInputRadio_8"></label></span></td>
              </tr>
              <tr>
                <td>5. Liars will answer questions directly.</td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_9" name="group_trueFalse_5" value="1"/>
                    <label class="c-CheckTrue" for="SelInputRadio_9"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="SelInputRadio_10" name="group_trueFalse_5" value="2"/>
                    <label class="c-CheckFalse" for="SelInputRadio_10"></label></span></td>
              </tr>
            </tbody>
          </table>
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