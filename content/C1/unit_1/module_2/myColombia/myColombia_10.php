
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <h5>Read the article and answer the following questions true or false</h5>
      <div class="row mt40">
        <div class="col xs12 ta-j" phrasal-column="column-xs1 column-md2">
          <h6>Colombian babe sues makers of weight-loss pills</h6>
          <p>   written by Rob Edmond October 12, 2012<br/></p>
          <p>A weight loss pill producer is in hot water after falsely using a Colombian presenter and model’s name and picture for advertising on Friday.</p>
          <p>Carolina Cruz wasn’t too happy after the brand that produces the weight loss pills “Maxburn” used her on a Facebook ad campaign where she claimed she lost over 17       pounds after using the pill.</p>
          <p>The guys at Maxburn boast the product promises effortless weight-loss and that the pill is used by “Hollywood celebrities,” although the Colombian hottie swears her figure   comes from a good diet and exercise.</p>
          <p>According to online magazine cineyseriesdetv.com, Cruz has reported the misuse to the relevant authorities and her lawyer has initiated a lawsuit against the brand.           Her lawyer was also quoted saying, “for more than two months, hundreds of people began to contact us through social networks to ask, whether it was true that her figure and body were a result of the consumption of a product called Maxburn, and where and how they could acquire it.”</p>
          <p>Carolina Cruz is well-known in Colombia for her presenting and modelling work, she was also Miss Colombia in 1999, representing the country in the Miss World contest          that year</p>
        </div>
        <div class=" col xs12 md8 col-center mt30">
          <table class="c-table col-center" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th></th>
                <th>True</th>
                <th>False</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>To be in hot water means to be in trouble.</span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
              </tr>
              <tr>
                <td><span>Carolina Cruz was upset because she did not lose 17 pounds.</span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_2" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
              </tr>
              <tr>
                <td><span>Carolina Cruz recommended Maxburn through a social network.</span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_3" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                <td><span class="c-textField">
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_3" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
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
