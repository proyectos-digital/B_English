
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md ta-j">
          <p>As a student at UNAD, you have to decide the kind of job you can accept that will not interfere with your studies. At the moment you have very clear that:</p>
          <p><strong>a. </strong>You need 20 hours a week minimum to study in order to cover all the subjects of the semester.</p>
          <p><strong>b. </strong>At least $700,000 a month to cover for your basic expenses.</p>
          <p><strong>c. </strong>Flexibility in your job so that you can take time for meetings and tutorial sessions at UNAD.</p>
          <p><strong>d. </strong>You know a lot about computers. You have Internet at home.</p>
          <p><strong>e. </strong>Your English level is intermediate.</p><img class="u-responsive-img ancho250 mt50 centrado" src="unit_2/module_8/assets/images/self_8.png" alt=""/>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <h5>Which of the following jobs would be more convenient for you to have?</h5>
          <p class="mt40"><strong>JOB 1</strong></p>
          <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
          <label class="c-CheckSelected col-flex mb10 mt10" for="inputRadio_1">We require part-time students to work in a call center in the city. Schedule: From 6:00 PM to 6:00 AM. Excellent salary ($1,200.000). Advanced level of English and interpersonal skills required. Send your resume at call@centers.com</label>
          <p class="mt40"><strong>JOB 2</strong></p>
          <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
          <label class="c-CheckSelected col-flex mb10 mt10" for="inputRadio_2">Part-time job available. Office hours from 8:00 AM to 1:00 PM. Salary starting in $400,000. Microsoft Office required. Excellent ability to deal with lots of people.</label>
          <p class="mt40"><strong>JOB 3</strong></p>
          <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
          <label class="c-CheckSelected col-flex mb10 mt10 mr5" for="inputRadio_3">Work from your home. Excellent opportunity correcting texts in Spanish. Payment based on number of pages corrected. Average salary $700,000. Minimum number of hours required: 20 hours a week or 300 pages corrected. Call us now. 1-8000- 2341 3332</label>
          <p class="mt40"><strong>JOB 4</strong></p>
          <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
          <label class="c-CheckSelected col-flex mb10 mt10 mr5" for="inputRadio_4">Office assistant needed. Intermediate level of English. Schedule Monday thru Friday from 9:00 AM to 7:00 PM. All benefits included.</label>
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