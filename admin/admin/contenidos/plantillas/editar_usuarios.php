<!-- <div class="row PreloadAdmin" ng-hide="PreloadAdmin">
  <i class="fa fa-spinner fa-pulse fa-3x fa-fw fs20 spinnerAdmin"></i>
</div> -->
<div class="progress PreloadAdmin" ng-hide="PreloadAdmin">
  <div class="indeterminate"></div>
</div>

<div class="row" ng-show="editUser" ng-init="editarUsuarios()">
  <div class="col s12 m12 l12">
    <div class="card">
      <div class="card-content">

        <div class="card_title">
          <h2> <i class="fa fa-user"></i> Edit User </h2>
        </div>
        
        <div class="general-form grey lighten-3">

          <div class="card-content">
          <!-- Form -->
            <form>
              <!-- -->
              
              <div class="row">
                <div class="input-field col s6 m6 l6">
                  <i class="material-icons prefix"> account_circle </i>
                  <input ng-model="nombre" id="" type="text" class="validate" required="required">
                </div>
                <div class="input-field col s6 m6 l6">
                  <i class="material-icons prefix"> account_circle </i>
                  <input ng-model="apellido" id="" type="text" class="validate" required="required">
                </div>
              </div>
                
              <!-- -->
              
              <div class="row">
                <div class="col s6 m6 l6" ng-init="listaroles()">
                  <select class="browser-default" ng-model='tipo_usuario'>
                    <option value="" disabled selected> User Type </option>
                    <option value="{{rol.id}}" ng-repeat="rol in roles">{{rol.titulo}}</option>
                  </select>
                </div>

                <div class="input-field col s6 m6 l6">
                  <i class="material-icons prefix">email</i>
                  <input ng-model="email" id="" type="email" class="validate" required="required">
                </div>
              </div>
                             
              <!-- -->
              
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="form-botones">
                    <button class="waves-effect waves-light btn-large yellow-btn" type="submit" ng-click="crearusuariosEditar()"> 
                      <i class="material-icons right"> save </i> Update 
                    </button>
                    <!-- <button class="waves-effect waves-light btn-large blue-btn"> 
                      <i class="material-icons right"> cancel </i> Cancel
                    </button> -->
                  </div>
                </div>
              </div>
            </form>
          <!-- Form -->
          </div>
        </div>
      
        <div class="back-btn"> <a href="#/Listar_usuarios" class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">keyboard_backspace</i></a> </div>

      </div>
    </div>
  </div>
</div>