
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md12 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p>
                When I was leaving Sidney, I decided to pull stop at one of those rest areas on the side of the road.
                there was a gas station and a mini-market with bathrooms. I got into the bathrooms. The first stall was taken,
                so I go into the second stall. I had just sat down when I heard a voice from the other stall.
                "Hi, there, how's it going?" I think to myself, "What?" I am not the type of person that starts up conversations
                with strangers. I don't know what to say, so I finally said "Not bad" Then the voice says:
                "So, what are you doing" I am starting to find this a little bit weird and very uncomfortable, but I finally reply
                "Well, I'm going back east" Then I hear the person say "Look honey, I'll call you back. Every time I ask you a question, the person in then stall next to me keeps answering my questions!"
                There was a moment of complete silence in the bathrooms. I have to tell you I was a relieved. But never before has I felt 
                so silly! Horrible cell phones.
              </p>
            </div>
          </div>
          <div class="row-flex justify-center mt40">
            <table class="c-table w80" data-ejercicio="table-truefalse">
              <thead>
                <tr>
                  <th> </th>
                  <th>true</th>
                  <th>false</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 
                    <p><strong class="u-textColor_4-dark">1.</strong> The man telling the story was traveling by train.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_a"/>
                      <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_a"/>
                      <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
                </tr>
                <tr>
                  <td> 
                    <p><strong class="u-textColor_4-dark">2.</strong> The man stopped for gas.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_b"/>
                      <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_b"/>
                      <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
                </tr>
                <tr>
                  <td> 
                    <p><strong class="u-textColor_4-dark">3.</strong> The person in the other bathroom stall was talking to him.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_c"/>
                      <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_c"/>
                      <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
                </tr>
                <tr>
                  <td> 
                    <p><strong class="u-textColor_4-dark">4.</strong> The man is not comfortable talking to strangers.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_d"/>
                      <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_d"/>
                      <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
                </tr>
                <tr>
                  <td> 
                    <p><strong class="u-textColor_4-dark">5.</strong> The man in the other bathroom stall was talking on the phone.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_e"/>
                      <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_e"/>
                      <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
                </tr>
              </tbody>
            </table>
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
