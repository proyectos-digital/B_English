<section id="main-content">
    <section class="wrapper">
        <h3><i class=""></i> Question</h3>
        <div class="row" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="content-panel p20">
                    <div class="col-lg-12 no_padding mb30">
                        
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 table-bordered table-striped table-condensed">
                            <label class="col-xs-4 col-sm-4 col-md-4 col-lg-4 no_padding mt10 control-label">Level</label>
                            <div class="col-md-8 col-sm-8 col-xs-8 no_padding">
                                <select class="form-control w90 f-r">
                                    <option></option>
                                     <option value="{{nivel.niv_id}}" ng-repeat="nivel in niveles">{{nivel.niv_nom}}</option>
                                    <!--<option value="M">Male</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 table-bordered table-striped table-condensed" ng-init="listarmodulos()">
                            <label class="col-xs-4 col-sm-4 col-md-4 col-lg-4 no_padding mt10 control-label">Module</label>
                            <div class="col-md-8 col-sm-8 col-xs-8 no_padding">
                            <select class="form-control w90 f-r">
         
                              <option></option>
                              <option value="{{mod.mod_id}}" ng-repeat="mod in modulos">{{mod.mod_nom}}</option>
                            

                            </select>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 table-bordered table-striped table-condensed">
                            <label class="col-xs-4 col-sm-4 col-md-4 col-lg-4 no_padding mt10 control-label">Category</label>
                            <div class="col-md-8 col-sm-8 col-xs-8 no_padding">
                         <select class="form-control w90 f-r">
                              <option></option>  
                          <option value="{{tipo.tip_pre_id}}" ng-repeat="tipo in tipo_pregunta">{{tipo.tip_pre_nom}}</option>                        
                           
                        </select>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 table-bordered table-striped table-condensed">
                            <button class="btn btn-primary" ng-click="listarpreguntas()">
                                Buscar
                            </button>
                        </div>

                    </div>

                    <h4><i class=""></i></h4>

                    <section id="unseen" ng-init="listarpreguntas()">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>

                                    <th>Titulo</th>
                                    <th>Categoria</th>
                                    <th>Modulo</th>
                                    <th>Orden</th>
                         
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="preguntas in preguntas">
                                    <td>{{preguntas.pre_tit}}</td>
                                    <td>{{preguntas.cat_pre_id}}</td>
                                    <td>{{preguntas.mod_id}}</td>
                                    <td>{{preguntas.pre_ord}}</td>
                                   
                                </tr>
                                                            
                            </tbody>
                        </table>
                    </section>
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-lg-4 -->
        </div>
        <!-- /row -->

    </section>
</section>