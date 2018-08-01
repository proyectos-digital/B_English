
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Read the text and decide if the statements are true or false.</h5>
    </section>
    <div class="row-flex align-items-center">
      <div class="col-flex-sm12 col-flex-md6 mt50-md mt30-sm">
        <div class="c-cardGreen">
          <div class="c-cardGreenContent">
            <p>Science fiction is a genre of fiction dealing with imaginative content such as futuristic settings, futuristic science and technology, space travel, time travel, faster than light travel, parallel universes and extraterrestrial life. It usually makes references to the supernatural, and unlike the related genre of fantasy, its imaginary elements are largely plausible within the scientifically established context of the story. Science fiction often explores the potential consequences of scientific and other innovations, and has been called a “literature of ideas”. Science fiction elements include:</p>
            <p class="ml40">A time setting in the future, in alternative timelines, or in a historical past that contradicts known facts of history or the archaeological record.</p>
            <p class="ml40">A spatial setting or scenes in outer space, spaceflights, on other worlds, or on subterranean earth.</p>
            <p class="ml40">Characters that include aliens, mutants, androids, or humanoid robots and other types of characters arising from a future human evolution.</p>
            <p class="ml40">Futuristic or plausible technology such as ray guns, teleportation machines, and humanoid computers.</p>
            <p class="ml40">Scientific principles that are new or that contradict accepted physical laws, for example time travel, wormholes, or faster-than-light travel or communication.</p>
            <p class="ml40">Paranormal abilities such as mind control, telepathy, telekinesis, and teleportation. Other universes or dimensions and travel between them.</p>
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
              <td>1. Science Fiction and fantasy are the same.</td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                  <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
                  <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
            </tr>
            <tr>
              <td>2. Science Fiction explores consequences of innovations.</td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_2" value="1"/>
                  <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="2"/>
                  <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
            </tr>
            <tr>
              <td>3. Science Fiction is also known as “literature of ideas”.</td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_3" value="1"/>
                  <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_3" value="2"/>
                  <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
            </tr>
            <tr>
              <td>4. Fairies are common characters in Science Fiction.</td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="selInputRadio_4" value="1"/>
                  <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="selInputRadio_4" value="2"/>
                  <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
            </tr>
            <tr>
              <td>5. The future is a popular scenario in Science Fiction titles.</td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="selInputRadio_5" value="1"/>
                  <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
              <td><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="selInputRadio_5" value="2"/>
                  <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>