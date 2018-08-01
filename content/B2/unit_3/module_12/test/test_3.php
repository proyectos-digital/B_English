
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center ">
        <div class="col xs12 md6">
          <div class="col xs12 md10 col-center">
            <div class="c-cardGreen">
              <div class=".c-cardGreencontent row flex align-items-center ta-c padding20">
                <h4 class="m-a u-textWhite">Talking to your friends and people you know well. (Informal language)</h4>
              </div>
            </div>
          </div>
          <div class="col xs12 md9 col-center">
            <select class="row mb30 c-select" name="act_12_1" ng-click="validarListadoSelect()">
              <option disabled="disabled" selected="selected"> </option>
              <option class="opc opc1" data="1" value="1">What´s up?</option>
              <option class="opc opc2" data="2" value="2">How are you today?</option>
              <option class="opc opc3" data="3" value="1">Hi!</option>
              <option class="opc opc4" data="4" value="2">Good morning.</option>
              <option class="opc opc5" data="5" value="2">It´s nice to meet you.</option>
              <option class="opc opc6" data="6" value="1">Cool!</option>
            </select>
            <select class="row mb30 c-select" name="act_12_2" ng-click="validarListadoSelect()">
              <option disabled="disabled" selected="selected"> </option>
              <option class="opc opc1" data="1" value="1">What´s up?</option>
              <option class="opc opc2" data="2" value="2">How are you today?</option>
              <option class="opc opc3" data="3" value="1">Hi!</option>
              <option class="opc opc4" data="4" value="2">Good morning.</option>
              <option class="opc opc5" data="5" value="2">It´s nice to meet you.</option>
              <option class="opc opc6" data="6" value="1">Cool!</option>
            </select>
            <select class="row mb30 c-select" name="act_12_3" ng-click="validarListadoSelect()">
              <option disabled="disabled" selected="selected"> </option>
              <option class="opc opc1" data="1" value="1">What´s up?</option>
              <option class="opc opc2" data="2" value="2">How are you today?</option>
              <option class="opc opc3" data="3" value="1">Hi!</option>
              <option class="opc opc4" data="4" value="2">Good morning.</option>
              <option class="opc opc5" data="5" value="2">It´s nice to meet you.</option>
              <option class="opc opc6" data="6" value="1">Cool!</option>
            </select>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="col xs12 md10 col-center">
            <div class="c-cardBlue">
              <div class=".c-cardBluecontent row flex align-items-center ta-c padding20">
                <h4 class="m-a u-textWhite">Talking in public, talking to adults, or talking to people who are well respected. (Formal language)</h4>
              </div>
            </div>
          </div>
          <div class="col xs12 md9 col-center">
            <select class="row mb30 c-select" name="act_12_5" ng-click="validarListadoSelect()">
              <option disabled="disabled" selected="selected"> </option>
              <option class="opc opc1" data="1" value="1">What´s up?</option>
              <option class="opc opc2" data="2" value="2">How are you today?</option>
              <option class="opc opc3" data="3" value="1">Hi!</option>
              <option class="opc opc4" data="4" value="2">Good morning.</option>
              <option class="opc opc5" data="5" value="2">It´s nice to meet you.</option>
              <option class="opc opc6" data="6" value="1">Cool!</option>
            </select>
            <select class="row mb30 c-select" name="act_12_6" ng-click="validarListadoSelect()">
              <option disabled="disabled" selected="selected"> </option>
              <option class="opc opc1" data="1" value="1">What´s up?</option>
              <option class="opc opc2" data="2" value="2">How are you today?</option>
              <option class="opc opc3" data="3" value="1">Hi!</option>
              <option class="opc opc4" data="4" value="2">Good morning.</option>
              <option class="opc opc5" data="5" value="2">It´s nice to meet you.</option>
              <option class="opc opc6" data="6" value="1">Cool!</option>
            </select>
            <select class="row mb30 c-select" name="act_12_7" ng-click="validarListadoSelect()">
              <option disabled="disabled" selected="selected"> </option>
              <option class="opc opc1" data="1" value="1">What´s up?</option>
              <option class="opc opc2" data="2" value="2">How are you today?</option>
              <option class="opc opc3" data="3" value="1">Hi!</option>
              <option class="opc opc4" data="4" value="2">Good morning.</option>
              <option class="opc opc5" data="5" value="2">It´s nice to meet you.</option>
              <option class="opc opc6" data="6" value="1">Cool!</option>
            </select>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>