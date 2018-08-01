
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_5">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="DragandDrop()" ng-show="s_actividad == 1">
      <div class="row mt40-xs mt20-md">
        <h5>Read the following short articles about Colombian fashion and fill in the blank space with the words below.</h5>
      </div>
      <div class="row-flex mt40">
        <div class="col-flex-xs12">
          <div class="row-flex justify-around">
            <div class="col-flex-xs12 col-flex-sm9 col-flex-md12 col-center">
              <div class="row row-flex justify-around">
                <div class="dragCont">
                  <div class="drag">embroidered</div>
                </div>
                <div class="dragCont">
                  <div class="drag">eco-friendly</div>
                </div>
                <div class="dragCont">
                  <div class="drag">sophiscticated</div>
                </div>
                <div class="dragCont">
                  <div class="drag">designer</div>
                </div>
              </div>
              <h5 class="ta-c mt40">Amelia Toro unveils fall collection with indigenous influence</h5>
            </div>
          </div>
          <div class="row mt20">
            <table class="c-table-default">
              <thead></thead>
              <tbody>
                <tr>
                  <td class="ta-j">
                    A Bogota-based
                    <strong>(1) </strong>
                    <span class="drop"></span>
                    using traditional fabrics in her garments is selling pieces for up to $4,000, the Los Angeles Times reported.
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    Amelia Toro, uses a colorful,
                    <strong>(2) </strong>
                    <span class="drop"></span>
                    fabric called mola in her creations, giving her coats and dresses a special Colombian touch.
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    Mola is traditionally made by the women of the indigenous Kuna people who live in the coastal Caribbean area of Colombia near the Panamanian border.
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    Toro also gets inspiration from the Wayuu and Putumayo tribes. She said, “My purpose is in mixing these cultures in a
                    <strong>(3)</strong>
                    <span class="drop"></span>
                    and elegant way, so that these crafts continue and heritage is not lost.”
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    The designer pays a fair price to her suppliers and uses only sustainable,
                    <strong>(4)</strong>
                    <span class="drop"></span>
                    fabrics.
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    Toro has a policy of hiring single women who are the head of their household in her workshop, and her 40 full-time employees receive pensions and health care benefits.
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    Over 60% of her clothes are bought by foreign clients including Katie Couric, Marisa Tomei and Kim Basinger.
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    Other high-profile Colombian fashion designers include Pepa Pombo, Silvia Tcherassi, and Esteban Cortazar. Internationally acclaimed designer Carolina Herrera is from neighboring Venezuela.
                    
                  </td>
                </tr>
                <tr>
                  <td class="ta-j">
                    Read the full article here:
                    <a href=" https://colombiareports.com/amelia-toro-fashion-designer/" target="blank">https://colombiareports.com/amelia-toro-fashion-designer/</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-init="DragandDrop()" ng-show="s_actividad == 2">
      <div class="row mt40-xs mt20-md">
        <h5>Read the following short articles about Colombian fashion and fill in the blank space with the words below</h5>
      </div>
      <div class="row-flex mt40">
        <div class="col-flex-xs12">
          <div class="row-flex justify-around">
            <div class="col-flex-xs12 col-flex-sm9 col-flex-md12 col-center">
              <div class="row row-flex justify-around">
                <div class="dragCont">
                  <div class="drag">tailor</div>
                </div>
                <div class="dragCont">
                  <div class="drag">label</div>
                </div>
                <div class="dragCont">
                  <div class="drag">Pleats</div>
                </div>
                <div class="dragCont">
                  <div class="drag">seamtress</div>
                </div>
              </div>
              <h5 class="ta-c mt40">Guayabera shirts for Barack Obama</h5>
            </div>
          </div>
          <div class="row mt20">
            <p>A famous Colombian designer is facing one of his most demanding orders to date, the shirts that U.S. president Barack Obama will wear at the Summit of the Americas in Cartagena, his daughter told local media Wednesday.</p>
            <p>Edgar Gomez Estevez, a well-known designer of “guayaberas,” light-weight tropical shirts also known as “Mexican wedding shirts,” is hard at work. “We are creating 130 guayaberas [for Obama],” he said. “We will make the design very different and special. Obama’s guayabera will have a very valuable <strong>(1) </strong><span class="drop"></span>.</p>
            <p>The guayabera has several distinguishing features — either two or four patch pockets and two vertical rows of “alforzas,” fine, tiny <strong>(2) </strong><span class="drop"></span>, sewn closely together, running along the front and back of the shirt. One Cuban legend says it was created by a poor countryside <strong>(3) </strong><span class="drop"></span> sewing large patch-pockets onto her husband’s shirts so he could carry carrying guava fruit from the field.</p>
            <p>Obama’s custom guayabera will be made of “linen and 100% natural fibers that originate in a region in France called Normandy, after they will go to Ireland and Poland, so the fibers we will work with will be Irish and Polish,” said Gomez.</p>
            <p>Gomez has made the popular Caribbean shirt for some of Colombia’s most famous figures including Alejandro Obregon and Gabriel Garcia Marquez, who wears the guayaberas with a tie.</p>
            <p>“Making a guayabera is not something that can be delegated. All of the embroidery is done by hand. I cut the piece and the borders, and single mothers finish the details by hand, and then we <strong>(4) </strong><span class="drop"></span>  the custom shirt together,” said the veteran designer.</p>
            <p>People like Bill Gates, John McCain, and King Juan Carlos of Spain have also ordered guayaberas after Juan Pablo Montoya made them fashionable by wearing one on his wedding day.</p>
            <p>Read the full article here:<a href=" https://colombiareports.com/colombian-designs-shirts-for-president-obama/" target="blank"><strong>https://colombiareports.com/colombian-designs-shirts-for-president-obama/</strong></a></p>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-init="DragandDrop()" ng-show="s_actividad == 3">
      <div class="row mt40-xs mt20-md">
        <h5>Read the following short articles about Colombian fashion and fill in the blank space with the words below</h5>
      </div>
      <div class="row-flex mt40">
        <div class="col-flex-xs12">
          <div class="row-flex justify-around">
            <div class="col-flex-xs12 col-flex-sm9 col-flex-md12 col-center">
              <div class="row row-flex justify-around">
                <div class="dragCont">
                  <div class="drag">textile and fashion</div>
                </div>
                <div class="dragCont">
                  <div class="drag">school</div>
                </div>
                <div class="dragCont">
                  <div class="drag">upcoming</div>
                </div>
              </div>
              <h5 class="ta-c mt40">Medellin fashion week generated $308M in deals: Inexmodaa</h5>
            </div>
          </div>
          <div class="row mt20">
            <p>Medellin‘s most important fashion event, Colombiamoda, generated a record $308 million in business agreements for Colombia’s <strong>(1) </strong><span class="drop"></span> industry, business association Inexmoda said Friday.</p>
            <p>More than 60,000 visitors went to experience the 25th annual fashion fair. 1,552 international investors from 53 countries and 7,024 domestic buyers attended the fashion week that began Tuesday and ended Thursday.</p>
            <p>Colombiamoda earned $221 million in business agreements, 19% more than in 2013. Textiles 2, a fair for the textile industry, made $65 million, approximately 41% more than last year.</p>
            <p>Fashion For the World generated $22 million, 22% more than last year.</p>
            <p>29,000 people attended the 29 runways, where 11 commercial brands, 20 designers, 16 <strong>(2) </strong><span class="drop"></span> designers, 3 fashion <strong>(3) </strong><span class="drop"></span> and more than 300 models presented the latest trends in fashion.</p>
            <p>Another 12,000 people, with additional 27,000 people streaming, attended the 22 conferences held in the Inexmoda Knowledge Pavilion jointly with the Pontificia Bolivariana university.</p>
            <p>Read the full article here:<a href=" https://colombiareports.com/colombias-fashion-week-generates-308m/" target="blank"><strong>https://colombiareports.com/colombias-fashion-week-generates-308m/</strong></a></p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>