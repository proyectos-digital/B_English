
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row row-flex align-items-center">
        <div class="col xs12">
          <p class="ta-j" phrasal-column="column-xs1 column-md2"><strong>Read the following short news article and answer the questions that follow</strong>.<br/><br/>
            Colombia on Friday became the first Latin American country to use robotic science in a pediatric
            operation.<br/>
            Surgeons in Bogota‘s Marly Clinic operated on a two-year-old boy to remove a malformation
            located in the urethra behind the bladder and repair the urinary tract.<br/>
            “This was the first  surgery of its kind performed in Latin America,” Dr. Manuel Rueda of the clinic told Colombia Reports.<br/>
            The team of doctors was led by Pablo Gomez, Director of Pediatric Robotic Urology at the Florida
            Hospital for Children, who is one of the few surgeons trained to use the machine in pediatric
            surgery. Dr. Gomez said that the operation puts Colombia “in the forefront of robotic science in
            Latin America.”<br/>
            The amazing robotic system minimizes edge incisions and reduces recovery time to as little as one
            day.<br/>
            “It is a very different set of skills and only a few of us worldwide are trained in operating on kids,
            99% of operations are still done using open techniques. In the U.S. there are only one or two elite
            programs training doctors to do this kind of operation. That means there are only 25 graduates a
            year,” Dr. Gomez told Colombia Reports.<br/>
            “The fact that Colombia has made such a huge investment is very important,” said the surgeon
            who is part of a joint venture with the Walt Disney Pavillion at the Florida Hospital for Children and
            Universidad de Los Andes offering training and support to Colombian doctors.<br/>
            “We have a tight relationship… We had lots of meetings while we were there with the goal of
            coming up with a program. We had so many ideas we are now planning a new meeting with the
            agenda of narrowing them down,” said Dr. Gomez.<br/>
            Around 2,000 machines have been sold worldwide with most of these in the U.S., according to the
            doctor. South America so far has only four or five. The machine itself costs around $1.3 million
            and the upkeep is around $150,000 a year, making it too expensive for many hospitals to invest in.
            There are many advantages to robotic-assisted surgery according to Dr. Gomez including faster
            recovery time, reduced blood loss and less pain. This, according to the doctor will make this type
            of surgery more attractive to patients and parents.<br/>
            “We are hoping for Colombia to become a hub for this type of surgery, like it is for plastic surgery
            and fertility operations like reverse vasectomy,” said Dr Gomez.<br/><br/>
            Read the story here:<a href=" https://colombiareports.com/colombia-at-the-forefront-of-robotic-science-in-latin-america/" target="blank">  https://colombiareports.com/colombia-at-the-forefront-of-robotic-science-in-latin-america/</a>
            
            
          </p>
        </div>
        <div class="col xs12">
          <div class="col xs11 md4 mt30">
            <h6 class="mb10">One of the advantages of using a robot to perform surgery is that...</h6>
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_1">Doctors don’t have to touch the patients.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_2">The patient won’t feel any pain.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_3">It minimizes the incisions needed to operate.</label>
          </div>
          <div class="col xs11 md4 mt30">
            <h6 class="mb10 min-h35">These operations is only performed...</h6>
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_4">At the Marly Clinic.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_5">At Javeriana.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_6">Few places in the world.</label>
          </div>
          <div class="col xs11 md4 mt30">
            <h6 class="mb10 min-h35">Colombia is now a world leader...</h6>
            <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_7">Robotic surgery</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_8">Training doctors</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_9">Cosmetic surgery</label>
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