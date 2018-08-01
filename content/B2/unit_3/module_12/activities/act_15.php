
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a u-animationFadeDown">
    <section class="template-content">
      <div class="row-flex justify-between">
        <h5> <strong class="u-textColor_4">1. </strong> Read the article and say if the statements are true (T) or false (F).</h5>
        <div class="xs12" phrasal-column="column-xs1 column-md2">
          <p class="ta-j">Dealing with a difficult boss is never easy. Everyone has a story or two to tell. Rather than letting your boss get you down, there are a few things you can do to improve your situation at work.</p>
          <p class="ta-j">First of all, it is highly unlikely that you will be able to affect how your boss acts. Instead, change the way you view and respond to their behavior. Try to understand the reasons why your boss is hard to deal with and devise tactics that will reduce your frustration and anger. One immediate thing you can do is adjust the way you view criticism. Instead of being baited and reacting defensively as if it is a personal attack, acknowledge what your boss is saying and see criticism as useful information to improve your performance on the job. If your boss criticizes your work, it clearly means that they have their own idea on how something should be done. So why not ask them for their advice on how your work can be improved? If you take this a step further and be proactive, you could prevent potential problems before they arise. Well-timed discussions in advance with your boss can minimize their negative actions later when things go wrong.</p>
          <p class="ta-j">A second thing you can do is make sure that you are professional at all times. Be the model employee, someone they can always count on. You may not like your boss, but you are being paid to get the job done and carryout what they ask you to do in a dutiful manner. Exceed expectations and gain respect in return. You can also help yourself by reflecting on your own job performance. Regularly check to see where you can make improvements and act accordingly. This will show your boss how seriously you take your job and how devoted you are to doing the best you possibly can.</p>
        </div>
        <div class="xs12 row-flex">
          <div class="xs12 md7 col-center">
            <table class="c-table mt30 row" data-ejercicio="table-truefalse">
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
                    <p><strong class="u-textColor_4-dark">1.</strong>  The feeling of being treated disrespectfully by our boss affects us the most deeply.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">2.</strong>  It is not difficult to change the way your boss acts toward you.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">3.</strong>  Changing the way you view criticism can help reduce the amount of frustration and anger you feel.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">4.</strong> If your boss criticizes your work, it means that they do not have an idea about how something should be done.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">5.</strong> Discussions in advance of a problem could save you a lot of difficulties later.</p>
                  </td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                  <td><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_12/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>