
<!-- ============================== templateContainer-->

<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Answer the questions. Write complete sentences.</h5>
      <div class="row-flex mt50">
        <div class="col-flex-sm11 col-flex-md5 col-center">
          <div class="row-flex">
            <ol class="c-listReset row mb30" data-ejercicio="">
              <p>What kind of means of transportation will we be using in the future?</p>
              <li>
                <div class="c-textField col">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuario"/>
                </div>
              </li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-listReset row mb30" data-ejercicio="">
              <p>How high will these machines fly?</p>
              <li>
                <div class="c-textField col">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariob"/>
                </div>
              </li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-listReset row mb30" data-ejercicio="">
              <p>How many people will they carry?</p>
              <li>
                <div class="c-textField col">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuarioc"/>
                </div>
              </li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-listReset row mb30" data-ejercicio="">
              <p>Why won´t these machines have a pilot?</p>
              <li>
                <div class="c-textField col">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariod"/>
                </div>
              </li>
            </ol>
          </div>
        </div>
        <div class="col-flex-sm11 col-flex-md5 col-center">
          <div class="row-flex">
            <ol class="c-listReset row mb30" data-ejercicio="">
              <p>What kind of facilities will these means of transportation have?</p>
              <li>
                <div class="c-textField col">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuarioe"/>
                </div>
              </li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-listReset row mb30" data-ejercicio="">
              <p>What kind of chairs will there be inside?</p>
              <li>
                <div class="c-textField col">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariof"/>
                </div>
              </li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-listReset row mb30" data-ejercicio="">
              <p>What will be a big advantage of these machines?</p>
              <li>
                <div class="c-textField col">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariog"/>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconInfoActivity is-active openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>           

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_3_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>