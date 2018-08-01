
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5 class="ta-c"> <strong class="u-textColor_4">1. </strong> Read the following text: Identifying text organization: Santa Marta</h5>
        <div class="row-flex mt50 align-items-center">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <p>
               Santa Marta has one Sister City: Miami Beach, Florida. They were established as Sister Cities on February 21st, 1979. Before becoming a Sister City to Miami Beach, Santa Marta had to comply with at least one of the following requirements:</p>
            <p><strong>a.</strong> The two cities must have similar demographic and geographic characteristic and a similar population.</p>
            <p><strong>b.</strong> The sister cities have to have some other qualities in common, such as being major international tourist destinations, having significant historic districts, a community involved in the entertainment industry, and among others.</p>
            <p>Santa Marta easily met the two criteria easily, being able to twin with Miami Beach.</p>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> <img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/col_2_1.png" alt="" srcset=""/></div>
        </div>
        <div class="row-flex align-items-center mt50">
          <div class="col-flex-sm12 col-flex-md4 col-center"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/col_2_2.png" alt="" srcset=""/></div>
          <div class="col-flex-sm12 col-flex-md8 col-center"> 
            <p> Once cities have certified they meet the requirements and become sisters, a coordinating council has to be established. This council is the governing body of the Sister Cities Program. The council consists of: one representative per Sister City and nine other members. All of these members are appointed by the mayors of each city. The members of the council must be persons who are interested in furthering the purpose of the Sister Cities program. To qualify, each person has to present a resume and a letter of interest to the committee chairperson. These members are appointed for two years.</p>
            <p>Twin towns or Sister Cities are a form of legal and social agreement between towns or cities, in geographically distinct areas, to promote cultural and commercial ties. The concept of Sister Cities was conceived after the Second World War, and was intended to foster friendship and understanding between different cultures and to encourage trade and tourism. In recent times, the Sister City program has been used to form strategic international business links between member cities.</p>
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