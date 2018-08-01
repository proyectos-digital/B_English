
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section">
    <section class="template-content">
      <div class="row mt50-md">
        <div class="row mt20-md">
          <h5><strong class="u-textColor_4">1. </strong>   Ana María is at her EPS because she is very sick. The doctor is giving her a prescription and instructions. Read and listen to the dialogue. Fill in the spaces with the information you hear.</h5>
        </div>
        <div class="row-flex mt30">
          <div class="col-flex-xs12 col-flex-md5 col-center mb30">
            <div class="row w90 col-center showTo-md">
              <div class="row ta-c showTo-sm"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_5.png" alt=""/></div>
            </div>
            <div class="row w90 col-center mt40-md">
              <audio class="row " controls="controls">
                <source src="unit_1/module_1/assets/audios/self_5.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div>
          </div>
          <div class="col-flex-xs11 col-flex-md7 col-center">
            <div class="row-flex mb30">
              <table class="row ">
                <tbody>
                  <tr>
                    <td class="w20"><strong>Ana María:</strong></td>
                    <td class="w80"> I have a headache!</td>
                  </tr>
                  <tr>
                    <td><i>Doctor:</i></td>
                    <td> Don’t worry. In a couple of hours your headache <strong class="u-textColor_2">(1)</strong> <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></td>
                  </tr>
                  <tr>
                    <td><strong>Ana María:</strong></td>
                    <td> And, what about the fever?</td>
                  </tr>
                  <tr>
                    <td><i>Doctor:</i></td>
                    <td>That will take longer. In about six hours, the antibiotics <strong class="u-textColor_2">(2)</strong> <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></td>
                  </tr>
                  <tr>
                    <td><strong>Ana María:</strong></td>
                    <td> When can I go to the gym?</td>
                  </tr>
                  <tr>
                    <td><i>Doctor:</i></td>
                    <td>
                      Hmm, not so soon. In two or three days you 
                      <strong class="u-textColor_2">(3)</strong> 
                      <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> 
                      over the infection.
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Ana María:</strong></td>
                    <td> And what about the lab tests they took today?</td>
                  </tr>
                  <tr>
                    <td><i>Doctor:</i></td>
                    <td>
                      The lab
                      <strong class="u-textColor_2">(4)</strong> 
                      <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                      the results by the time you come back.
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Ana María:</strong></td>
                    <td>Is there any risk I can get worse?</td>
                  </tr>
                  <tr>
                    <td><i>Doctor:</i></td>
                    <td>
                      No, absolutely no. By our next appointment next week,
                      <strong class="u-textColor_2">(5)</strong> 
                      <span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                      the treatment.
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Ana María:</strong></td>
                    <td>Thank you, Doctor!</td>
                  </tr>
                  <tr>
                    <td><i>Doctor:</i></td>
                    <td>You are welcome. Take good care of yourself.</td>
                  </tr>
                </tbody>
              </table>
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