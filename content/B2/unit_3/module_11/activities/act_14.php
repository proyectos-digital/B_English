
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md10 col-center mt10-sm padding10">
          <p>As you know, you can use formal or informal language depending on how formal the situation is.</p>
          <p>Here are some aspects of formality you should know:</p>
          <ul class="c-listDefault">
            <li>In <strong>formal </strong>English in particular, relative adverbs <strong>when </strong>and <strong>where </strong>are sometimes replaced by a <strong>preposition + which.</strong></li>
            <li>In <strong>Informal situations </strong>we would use that rather <strong>than which </strong>or <strong>who:</strong>
              <blockquote class="ml20">“The man <strong>that </strong>spoke to me was very worried” rather than “The man <strong>who</strong> spoke to me was very worried”.</blockquote>
            </li>
            <li>Or we would <strong>omit </strong>the relative clause completely:
              <blockquote class="ml20">“The jacket Fred usually wears is a tennis blazer” rather than “The jacket <strong>that </strong>Fred usually wears is a tennis blazer.” (this is only possible if the verb has a subject)</blockquote>
            </li>
            <li>Using <strong>“whom” </strong>is more formal than <strong>who.</strong></li>
            <div>
              <li>In informal spoken English we normally put the preposition after the verb:  </li>
              <blockquote class="ml20">… the restaurant which we go <strong>to. </strong><br/>or … <br/>the letter that I was looking <strong>for.</strong></blockquote>
            </div>
            <li>In formal English we can say:
              <blockquote class="ml20">Was that the restaurant to which we normally go? or<br/>Electronics is a subject <strong>about</strong> which I know very little. or<br/>John is the person <strong>from</strong> whom I obtained the information.</blockquote>
            </li>
          </ul>
        </div>
        <div class="col-flex-xs12 col-flex-md8 col-center mt10-sm padding10">
          <h5>Decide if the following sentences are formal or informal.</h5>
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th class="xs10"> </th>
                <th class="xs1">Formal</th>
                <th class="xs1">Informal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. The woman to whom I talked was very nice.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
              </tr>
              <tr>
                <td>2. She is a very nice woman who you can trust.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
              </tr>
              <tr>
                <td>3. The woman who I talked to was very nice.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
              </tr>
              <tr>
                <td>4. She is a very nice woman you can trust.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
              </tr>
              <tr>
                <td>5. She is the woman for whom they have been looking.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
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