
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a col_3">
    <section class="template-content u-animationFadeDown">
      <div class="row mt40 ">
        <div class="row-flex m-a">
          <div class="col-flex-sm12 col-flex-md4 col-center">
            <p><strong>Prepare a PowerPoint presentation about the traditional games in the town. At least 5 slides with real pictures from your camera.</strong></p>
            <form class="row row-flex" form="form" enctype="multipart/form-data" id="formdata" method="post">
              <input class="upload" type="file" multiple="multiple" name="documentos" ng-model="documentos" value="" id="documentos"/>
              <label class="c-btn mr20" for="documentos">Choose Files</label>
              <input class="c-btn-IconAction u-bgIconClip" type="submit" value="Send" ng-click="NewDoc()"/>
              <p ng-show="importFileDoc">send...</p>
            </form>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center ta-c">
            <h6>This is an example of the Colombian game yermis:</h6>
            <p class="ta-l">It is a traditional Colombian game for kids. It is played on the street or parks. You need to teams to play Yermis. The rules are:</p><img class="u-responsive-img  mt20 " src="unit_2/module_8/assets/images/col_3.png" alt=""/>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'">                                                       </footer>