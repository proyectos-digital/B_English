
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_3" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="c-flickity">
          <div class="row mt10 mb30">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Page 1</button>
                <button class="c-flickity-button ">Page 2</button><span class="c-flickity--cell-total">2</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row" style="height: 750px; overflow: hidden; overflow-y: auto;">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1">
                  <div class="col xs12 md6">
                    <h5 class="ta-c">Too much stuff in your life? 7 ways to turn it around</h5>
                    <h6 class="ta-c">From sharing to repairing, the inspiration you need to lighten your load</h6>
                    <p class="ta-c">Shannan Stoll posted Sep 05, 2013</p>
                    <p class="ta-j"><strong>1. Change the rules</strong><br/>
                      University <strong>procurement</strong> policies are one of the most effective pressure points for
                      students seeking big change. The college apparel industry, which <strong>retailed</strong> an estimated
                      $4.6 billion in 2011, is mostly supplied through <strong>overseas</strong> factory labor for brands like
                      Nike and Adidas.<br/>
                      When one Adidas factory supplier in Indonesia <strong>abruptly</strong> closed in April 2011, 2,700
                      workers were left without jobs and were <strong>owed</strong> $1.8 million in <strong>severance</strong> pay. United
                      Students Against Sweatshops (USAS) responded by launching a two-year campaign
                      aimed at pressuring university administrators to end their contracts with Adidas if
                      the company refused to pay the workers.
                      Seventeen universities and colleges ended
                      their contracts. In April 2013, USAS announced
                      that the campaign had been successful: Adidas
                      had agreed to compensate the former workers.<br/><br/>
                      <img class="u-responsive-img w40 ml10 mt10  " src="unit_3/module_9/assets/images/act_3_1.png" alt="" align="right"/>
                      <strong>2. Know your stuff</strong><br/>
                      Last year, nearly $1 billion worth of handmade
                      goods was sold through Etsy, the flourishing
                      online marketplace that connects individual
                      craftspeople with individual buyers.<br/>
                      Madesmith is an online store that takes this
                      idea one step further, telling the stories of
                      the people who make the <strong>wares</strong> it sells. Like
                      the one about Chelsea Miller, whose work
                      
                    </p>
                  </div>
                  <div class="col xs12 md6">
                    <p class="ta-j">
                      creating handmade knives from repurposed steel helps her forge a connection with
                      her blacksmith father.<br/>
                      Madesmith founders Sheila Iverson and Sumeera Rasul aim to support local
                      communities and preserve <strong>craftsmanship</strong>. They hope that the stories behind the
                      products will help buyers think a bit more about the things they buy, how they’re
                      made, and who is making them. "Knowing where our things come from,” they write,
                      helps us “buy less, buy well."<br/><br/>
                      <strong>3. Share it</strong> <br/>
                      At the height of the Great Depression, the manager of a Los Angeles <strong>dime</strong> store
                      caught two small boys pocketing toys their families couldn’t <strong>afford</strong>. The Probation
                      Department staff assigned to the boys' case responded by opening the county's first
                      Toy Loan Center in a garage in Southwest L.A.<br/>
                      In recent years, the Toy Loan Program's popularity has grown quickly alongside
                      unemployment, with the number of centers in Los Angeles County more than doubling
                      over the past decade. The program still operates like it did more than 75 years ago,
                      though. Each week, children at 45 centers <strong>throughout</strong> the county check out their
                      favorite toy on an <strong>honor system</strong>. For every 20 weeks of good toy care and on-time
                      returns, children earn a <strong>wishlist</strong> toy to keep. If a kid gets bored with a toy, it goes
                      back on the shelf for the next <strong>borrower</strong>. It's a library for toys, without the late fees.<br/><br/>
                      <strong>4. Repair it</strong> <br/>
                      A growing movement is fighting planned <strong>obsolescence</strong> by helping people fix what's
                      broken. In Brooklyn, N.Y., the Fixers Collective dedicates space, tools, and community
                      support to what it calls improvisational fixing. Formed out of a 2008 art installation
                      based on the idea of <strong>mending</strong>, the collective has since built a community that
                      includes experienced fixers with skills in mending, <strong>soldering</strong>, and electronics. People
                      bring suitcases, clocks, and iPods—anything, really—to the monthly repair sessions.
                      Sometimes things aren't fixable and get creatively repurposed. A specialty of the Fixers
                      is creating tote bags from broken umbrellas reclaimed from the streets of New York.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row" style="height: 750px; overflow: hidden; overflow-y: auto;">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1 ">
                  <div class="col xs12 md6">
                    <p class="ta-j"><strong>5. Slow clothes</strong><br/>
                      Sarah Kate Beaumont makes virtually everything she wears, underwear and rain gear
                      included. The New York-based artist uses fabric from worn out clothes and old sheets,
                      other people's scrap fabric, and the occasional discount cloth purchase to <strong>craft</strong> a
                      beautiful, functional, and completely hand-made wardrobe in her own style.
                      Beaumont began her project in response to the economic downtown in 2008, and five
                      years later, it's grown into a lifestyle. Slow clothes, as Beaumont calls the project, is
                      about understanding the clothes we wear. Because she mends or makes everything
                      she wears, she's not supporting sweatshops and other aspects of consumer culture. At
                      the monthly mending workshops she hosts, participants tell her again and again how
                      encouraging it is when they find they can prolong the life of something they thought was
                      <strong>worn out. Darning</strong> a sock, she says, is empowering.<br/>
                      "If I am cold in the winter and need another layer, I make it, instead of thinking about what
                      I need to buy," says Beaumont, who is featured in the book Overdressed: The Shockingly
                      High Cost of Cheap Fashion by Elizabeth Cline. Beaumont adds that shifting her focus away
                      from consumerism opens up artistic space
                      in her life. Her handmade lifestyle demands
                      creativity every day and builds self-reliance.<br/><br/>
                      <img class="u-responsive-img w40 mr10  " src="unit_3/module_9/assets/images/act_3_2.png" alt="" align="left"/>
                      <strong>6. Think "better than new"</strong><br/>
                      When ceramic artist Dick Lehman traveled
                      to Japan for an exhibition in 1999, he was
                      astonished by his host's parting gift: four
                      broken ceramic cups that Lehman had thrown
                      in the trash just a few weeks earlier. Under his
                      host’s covert care, the cups were recovered,
                      repaired with silver, and made even more
                      beautiful than they were before.<br/>
                      Kintsugi, translated as "gold <strong>joinery</strong>," is the
                      ancient Japanese craft of mending broken
                      
                    </p>
                  </div>
                  <div class="col xs12 md6">
                    <p class="ta-j"><img class="u-responsive-img w40 ml10  " src="unit_3/module_9/assets/images/act_3_3.jpg" alt="" align="right"/>
                      <strong>pottery</strong> with gold-filled resin. Modern
                      Kintsugi artists use a variety of materials to
                      decorate the scars from a repair. "In the West,
                      we usually expect a thing to be repaired so you
                      can't tell it's broken," says Lehman, who now
                      incorporates Kintsugi into his own work. Using
                      copper powder or gold leaf to mend his pieces,
                      Lehman hopes his repairs communicate a sense
                      of history and care. He writes, "Kintsugi artists
                      believe when something has suffered damage
                      and has a history, it becomes more beautiful."<br/><br/>
                      <strong>7. Reinvent a mindless tradition</strong><br/>
                      Traditionally, wedding rings are made of
                      gold and engagement rings have diamonds.
                      Diamond engagement rings weren't that common before De Beers rebranded them in
                      a 1940s campaign featuring Hollywood actresses and the slogan "A diamond is forever."
                      And the human cost of mining gems and precious metals is high.<br/>
                      In a new trend, couples are choosing tattoos instead of diamond and gold jewelry. When
                      Sarah Wilson and Matt Beck (pictured right) married, they had wedding bands tattooed
                      around their ring fingers. "Even though we were doing something nontraditional, we
                      still wanted to echo tradition," says Wilson. The symbol of the ring indicates that the
                      marriage bond is eternal—even more so when the ring is permanent. Tattoos, after all,
                      really are forever.
                    </p>
                    <p class="ta-j">Read the full story here:<a href="http://www.yesmagazine.org/issues/the-human-cost-of-stuff/7-ways-to-unstuff">https://www.propublica.org/ </a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row align-items-center row-flex">
        <div class="col xs12 md6">
          <h5>Choose the most appropriate heading for the following excerpt:</h5>
          <div class="row">
            <p><strong class="u-textColor_4">•</strong>
              When one Adidas factory supplier in Indonesia <strong>abruptly</strong> closed in April 2011, 2,700 workers
              were left without jobs and were <strong>owed</strong> $1.8 million in <strong>severance pay</strong>. United Students Against
              Sweatshops (USAS) responded by launching a two-year campaign aimed at pressuring university
              administrators to end their contracts with Adidas if the company refused to pay the workers.
              Seventeen universities and colleges ended their contracts. In April 2013, USAS announced that
              the campaign had been successful: Adidas had agreed to compensate the former workers.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_1">The fight for fair work contracts.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_2">Adidas forced to change.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_3">USAS success campaign.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Choose “true”, “false” or “information not given”.
            </h6>
            <p>The core tenet of the Fixers Collective is improvisational fixing.</p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">Information not given.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Match the information given with one of the paragraphs from the text.
            </h6>
            <p>Beauty can be found in things that are broken.</p>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_10" value="1"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_10">2.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_11" value="2"/>
              <label class="c-Checkbox xs12 sm3 " for="selInput_11">12.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_12" value="3"/>
              <label class="c-Checkbox xs12 sm3 " for="selInput_12">7.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words from the paragraph.
            </h6>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>honor system | abruptly | throughout | owed | borrower | wishlist</span></div>
            </div>
            <p>With the Toy Loan Program children 
              <input class="c-input js-escribir" type="text"/> their county can borrow and return toys
              based on an 
              <input class="c-input js-escribir" type="text"/> . A toy from the child’s 
              <input class="c-input js-escribir" type="text"/> can be gifted if it is well
              looked after and return in a timely manner
              
            </p>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Complete the sentence with a word from the table below.
            </h6>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>craftsmanship | joinery | crafts | obsolescence | borrower</span></div>
            </div>
            <p>In every country, especially in the tourist areas, you will find lots of people selling their handmade 
              <input class="c-input js-escribir" type="text"/>.
              
            </p>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Choose the correct answer.   <br/><br/>
            </h6>
            <p>Diamond engagement rings gained popularity because 
              <input class="c-input js-escribir row" type="text" ng-model="txtcaptura_a"/>
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_13" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_13" ng-click="txtcaptura_a ='it was something traditional.'">it was something traditional.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_14" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_14" ng-click="txtcaptura_a = 'diamonds are expensive precious stones.'">diamonds are expensive precious stones.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_15" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_15" ng-click="txtcaptura_a = 'the image of some Hollywood actresses helped to rebrand diamonds.'">the image of some Hollywood actresses helped to rebrand diamonds.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '750');</script>