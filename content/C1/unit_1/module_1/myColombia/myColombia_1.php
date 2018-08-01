
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h4>Solve the problem</h4>
        <p>There are 8 people in a hotel. You have some information. Karen has the rest of the information.</p>
        <p>Taking turns, work together to find out who is each room, where everybody is from and what they do for living.</p>
      </div>
      <div class="row mt30 mb30">
        <table class="c-table-estilo_uno col-center">
          <thead></thead>
          <tbody>
            <tr>
              <th>Names </th>
              <td>Mario, Catalina, Andrés, Sandra, Yadira, Mercedes, Tomas, Diego. </td>
            </tr>
            <tr>
              <th>Origin</th>
              <td>Cali, San Andrés, Valledupar, Santa Marta, Cartagena, Bogotá, Manizales, Leticia</td>
            </tr>
            <tr>
              <th>Job or occupation</th>
              <td>Architect, dentist, engineer, journalist, librarian, nurse, pilot, teacher.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="c-game no-init" game="HowIsIt" id="HowIsIt">
        <div class="c-game--header"></div>
        <div class="js-game--feedBack" game="game--feedBack">
          <div class="js-game--imageSection js-game--welcome" game="game--feedBack-welcome"><img class="u-responsive-img" src="../assets/multimedia/images/games/HowIsIt/game_welcome.png" alt="" draggable="false"/></div>
          <div class="js-game--instructions" game="game--feedBack-instructions">
            <div game="game--feedBack-instructions-content">
              <div class="m-a"><img class="u-responsive-img" src="../assets/multimedia/images/games/HowIsIt/game_karem.png" alt="" draggable="false"/></div>
              <div class="m-a" game="game--feedBack-instructions-content_block">
                <h4 game="game--feedBack-instructions-content_title">INSTRUCTIONS</h4>
                <p game="game--feedBack-instructions-content_text">There are 8 people in a hotel. You have some information. Karen has the rest of the information. Taking turns, work together to find out who is each room, where everybody is from and what they do for living.</p>
              </div>
            </div><img class="js-game--imageSection u-responsive-img" src="../assets/multimedia/images/games/HowIsIt/game_instructions.png" alt="" draggable="false"/>
          </div>
          <div class="js-game--selectAvatar" game="game--feedBack-selectAvatar">
            <div class="js-game--selectImage" game="game--selectAvatar">
              <input type="radio" id="checkbox--avatar_1" name="game_checkboxSelAvatar" game="game--inputRadio"/>
              <label for="checkbox--avatar_1"><img class="js-game--avatar_1 is-inactive" game="game--avatar_1" src="../assets/multimedia/images/games/HowIsIt/game_avatar_1.png" alt="" draggable="false"/></label>
              <input type="radio" id="checkbox--avatar_2" name="game_checkboxSelAvatar" game="game--inputRadio"/>
              <label for="checkbox--avatar_2"><img class="js-game--avatar_2 is-inactive" game="game--avatar_2" src="../assets/multimedia/images/games/HowIsIt/game_avatar_2.png" alt="" draggable="false"/></label>
              <input type="radio" id="checkbox--avatar_3" name="game_checkboxSelAvatar" game="game--inputRadio"/>
              <label for="checkbox--avatar_3"><img class="js-game--avatar_3 is-inactive" game="game--avatar_3" src="../assets/multimedia/images/games/HowIsIt/game_avatar_3.png" alt="" draggable="false"/></label>
              <input type="radio" id="checkbox--avatar_4" name="game_checkboxSelAvatar" game="game--inputRadio"/>
              <label for="checkbox--avatar_4"><img class="js-game--avatar_4 is-inactive" game="game--avatar_4" src="../assets/multimedia/images/games/HowIsIt/game_avatar_4.png" alt="" draggable="false"/></label>
            </div>
            <input class="js-game--inputName" type="text" value="" placeholder="Select your name" game="game--feedBack-inputName"/><img class="js-game--imageSection u-responsive-img" src="../assets/multimedia/images/games/HowIsIt/game_selectName.png" alt="" draggable="false"/>
          </div>
        </div>
        <div class="js-game--notices" game="game--notices">
          <div class="js-game--result" game="game--result">
            <div class="js-game--winner" game="game--result-youWin">
              <h1>youWin</h1>
            </div>
            <div class="js-game--loser" game="game--result-youLose">
              <h1>youLose</h1>
            </div>
          </div>
          <div game="game--error"></div>
        </div>
        <div class="js-game--body" game="game--body">
          <div class="js-game--scene" game="game--scene">
            <div class="js-game--scene-one" game="game--scene-one"><img game="game--map" src="../assets/multimedia/images/games/HowIsIt/game_map.png" alt="" draggable="false"/></div>
            <div class="js-game--scene-two" game="game--scene-two">
              <div game="game--avatar"><img class="u-responsive-img" src="../assets/multimedia/images/games/HowIsIt/game_karem.png" alt="" draggable="false"/></div>
              <div game="game--pista">
                <h5 style="font-size: 2.5vmin; font-weight:normal; margin: 0;  padding-right: 2%;">Hi, I'm Karem, How I can help you?</h5>
                <div class="js-game--pista-karem" game="game--pista-opciones"></div>
                <p class="js-game--pista-karem_frase" game="game--pista-frase"></p>
              </div>
            </div>
            <div class="js-game--scene-three" game="game--scene-three">
              <div game="game--avatar"><img class="js-game--avatarSelected u-responsive-img" alt="" draggable="false"/><span class="js-game--nameUser" game="game--avatar-name"></span></div>
              <div game="game--pista">
                <h5 style="font-size: 2.5vmin; font-weight:normal; margin: 0;  padding-right: 2%;">Hi Karem, I'm <span class="js-game--nameUser"></span>, Let's work together to find out where the guests are from and what they do...</h5>
                <div class="js-game--pista-user" game="game--pista-opciones"></div>
                <p class="js-game--pista-user_frase" game="game--pista-frase"></p>
              </div>
            </div>
          </div>
          <div class="js-game--footer" game="game--footer">
            <input type="radio" id="checkbox--btn_one" name="game_checkboxBtn" checked="checked" game="game--inputRadio"/>
            <label class="js-game--btn-one" for="checkbox--btn_one" game="game--footer-btn-one"></label>
            <input type="radio" id="checkbox--btn_two" name="game_checkboxBtn" game="game--inputRadio"/>
            <label class="js-game--btn-two" for="checkbox--btn_two" game="game--footer-btn-two"></label>
            <input type="radio" id="checkbox--btn_three" name="game_checkboxBtn" game="game--inputRadio"/>
            <label class="js-game--btn-three" for="checkbox--btn_three" game="game--footer-btn-three"></label>
          </div>
        </div>
        <div class="js-game--bg" game="game--bg"></div>
      </div>
      <div class="row mt40">
        <div class="xs12 md10 col-center">
          <h5>Complete the information here:</h5>
          <table class="c-table-estilo_uno row" ng-init="listarJuegoRoles()">
            <thead>
              <th> </th>
              <th>Names </th>
              <th>Origin</th>
              <th>Job or occupation</th>
            </thead>
            <tbody>
              <tr ng-repeat="habitacion in habitaciones">
                <td>{{habitacion.habitacion}}</td>
                <td>
                  <input class="c-input row js-escribir" type="text" id="names_{{habitacion.id}}" preguntaid="{{habitacion.id}}"/>
                </td>
                <td>
                  <input class="c-input row js-escribir" type="text" id="origin_{{habitacion.id}}"/>
                </td>
                <td>
                  <input class="c-input row js-escribir" type="text" id="occupation_{{habitacion.id}}"/>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row mt20 ta-c mb100">
        <button class="c-btn-IconAction u-bgIconUpload" ng-click="guardarJuegoRoles()"></button>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>
  let arrPistas = [
      pistas_1 = [
          'The man in room 102 is from San Andrés.',
          'Sandra is an engineer.',
          'The pilot is in the room next to the teacher.',
          'Yadira is from Leticia.',
          'The woman in room 109, is Catalina.',
          'There is an architect in the room in front of the pilot.',
          'The woman from Cali is in the room next to Mercedes.',
          'Catalina is from Bogotá.',
          'Mario is a dentist.',
          'Catalina is in the room next to the man from Santa Marta.',
          'The man in the room closer to the beverage room comes from Cartagena.',
      ]
      , pistas_2 = [
          'The man in room 104 is an architect.',
          'Diego is a librarian',
          'The nurse comes from Bogota.',
          'The woman that comes from Leticia is in the room in front of Tomas.',
          'The woman from room 106 comes from Leticia.',
          'Mercedes is a pilot.',
          'The man between Mario y Sandra, is Andres.',
          'Mario and Sandra are in the rooms on both sides of  the TV lounge. ',
          'The architect is from Valledupar.',
          'Yadira is a journalist.',
          'The man from San Andres is in the room in front of Sandra.',
      ]
  ];
  
  $('#HowIsIt').game_howIsIt(arrPistas);
</script>