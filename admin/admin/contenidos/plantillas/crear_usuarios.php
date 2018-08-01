<div class="row">
  <div class="col s12 m12 l12">
    <div class="card">
      <div class="card-content">

        <div class="card_title">
            <h2><i class="fa fa-user-plus" aria-hidden="true"></i> Create User </h2>
        </div>
  
          <!-- Form -->
          <div class="general-form grey lighten-3"> 
            <div class="card-content">
              <form method="get">

                <!-- -->
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input ng-model="nombre" id="" type="text" class="validate">
                    <label for="icon_prefix">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input ng-model="apellido" id="" type="text" class="validate">
                    <label for="icon_telephone">Last Name</label>
                  </div>
                </div>
                
                <!-- -->
                <div class="row">
                  <div class="input-field col s6 m6 l6" ng-init="listaroles()">
                  <select class="browser-default" ng-model='tipo_usuario'>
                    <option value="" disabled selected> User Type </option>
                    <option value="{{rol.id}}" ng-repeat="rol in roles">{{rol.titulo}}</option>
                  </select>
                </div>
                  <div class="input-field col s6 m6 l6">
                    <i class="material-icons prefix">email</i>
                    <input ng-model="email" id="" type="email" class="validate" required="required">
                    <label for="icon_prefix">E-mail</label>
                  </div>
                </div>
                <!-- -->


                <!-- -->
                <div class="row">
                  <div class="input-field col s6 m6 l6">
                    <select class="browser-default" ng-model='nivel_id'>
                      <option value="" disabled selected> Level </option>
                      <option value="4">B2</option>
                      <option value="5">C1</option>
                    </select>
                  </div>
                </div>
                <!-- -->
                


                <!-- -->
                <div class="row">
                  <div class="input-field col s6 m6 l6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input ng-model="contrasena" id="" type="password" class="validate">
                    <label for="icon_prefix">Password</label>
                  </div>
                  <div class="input-field col s6 m6 l6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input ng-model="conf_contrasena" id="" type="password" class="validate">
                    <label for="icon_prefix">Repeat Password</label>
                  </div>
                </div>
                
                <!-- -->
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="form-botones">
                      <button class="waves-effect waves-light btn-large yellow-btn" type="submit" ng-click="crearusuarios(1)"> 
                        <i class="material-icons right"> save </i> Save 
                      </button>
                      <!-- <button class="waves-effect waves-light btn-large blue-btn" type="submit"> 
                        <i class="material-icons right"> cancel </i> Cancel
                      </button> -->
                    </div>
                  </div>
                </div>
              </form>
          <!-- Form -->
            </div>
          </div>

  
    
      </div>
      <!-- Card-content -->
    </div>
    <!-- Card -->
  </div>
</div>