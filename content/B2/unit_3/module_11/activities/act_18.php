
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center mt30-md mt30-sm">
          <h5>We use different pronouns in relative clauses to express different levels of formality:</h5>
          <div class="row-flex ta-c"><img class="showTo-sm u-responsive-img m-a" src="unit_3/module_11/assets/images/act_18_1.png" alt=""/>
            <h6 class="hideFrom-sm u-bgColor_3-light ta-c w90 m-a padding10">More Formal</h6>
          </div>
          <div class="row-flex">
            <div class="col-flex-xs4 col-center">
              <table class="c-table-estilo_dos w90 m-a ta-c">
                <tbody>
                  <tr>
                    <td>Whom</td>
                  </tr>
                  <tr>
                    <td>Who</td>
                  </tr>
                  <tr>
                    <td>That</td>
                  </tr>
                  <tr>
                    <td>No Pronoun</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-flex-xs4 col-center">
              <table class="c-table-estilo_dos w90 m-a">
                <tbody>
                  <tr>
                    <td>Which</td>
                  </tr>
                  <tr>
                    <td>That</td>
                  </tr>
                  <tr>
                    <td>No Pronoun</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-flex-xs4 col-center">
              <table class="c-table-estilo_dos w90 m-a">
                <tbody>
                  <tr>
                    <td>In which</td>
                  </tr>
                  <tr>
                    <td>Which</td>
                  </tr>
                  <tr>
                    <td>Where</td>
                  </tr>
                  <tr>
                    <td>That</td>
                  </tr>
                  <tr>
                    <td>No Pronoun</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row-flex">
            <h6 class="hideFrom-sm u-bgColor_3-light ta-c w90 m-a padding10">Less formal</h6>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center mt30-md mt30-sm">
          <h5>The following sentences are written in formal register. Rewrite them to make them more informal.</h5>
          <div class="row-flex">
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>That is the woman whom I talked to about the problem.  <span class="c-textField mt10">
                  <input class="c-input js-escribir w235" type="text" placeholder="Text here..."/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>Can you bring the box in which all your things were packed? <span class="c-textField mt10">
                  <input class="c-input js-escribir w235" type="text" placeholder="Text here..."/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>I don´t have the paper which you mention.  <span class="c-textField mt10 row">
                  <input class="c-input js-escribir w80" type="text" placeholder="Text here..."/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>The man over there is the mechanic who usually fixes our car.  <span class="c-textField mt10">
                  <input class="c-input js-escribir w235" type="text" placeholder="Text here..."/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>This is the museum in which his paintings are displayed.  <span class="c-textField mt10">
                  <input class="c-input js-escribir w235" type="text" placeholder="Text here..."/></span> </div>
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