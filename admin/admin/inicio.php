<?php
include("../../login/data/acceso_denegado.php");
?>
<!DOCTYPE html>
<html lang="en" ng-app="AdminGen">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

	<title> Admin</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/simpleChat.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iconos.css">
    <link href="assets/css/normalize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/css/reset.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- Font awesome -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>

    <!-- Materialize  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
    <!-- Css  -->
    <!-- <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
    <link href="assets/css/admin.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- <link href="assets/css/tables.css" rel="stylesheet" type="text/css" media="screen,projection"/> -->
    <link href="assets/css/responsive_admin.css" rel="stylesheet" type="text/css" media="screen,projection"/> 

    <!-- Chat -->
    <!-- <link href="../../assets/css/simpleChat.css" rel="stylesheet" type="text/css"/> -->

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"> 


    <!--External css-->
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css"> 
    <link rel="stylesheet" type="text/css" href="assets/css/style_pie.css"> 
    <link rel="stylesheet" type="text/css" href="./../../content/assets/css/foro.css"> 
    

    <!-- <link href="../../assets/css/iconos.css" rel="stylesheet" type="text/css"/> -->
<!--     <link href="../../assets/css/UX.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/UX_admin.css" rel="stylesheet" type="text/css"/> -->

    <script src="https://use.fontawesome.com/bef9fdffcb.js"></script>
    
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/sweetalert-dev.js"></script>
    <script src="assets/js/chart-master/Chart.js"></script>

</head>

<body>
    
<input type="hidden" id="admsId" value="<?php echo $_SESSION["id"] ?>">
<input type="hidden" id="rolId" value="<?php echo $_SESSION["rol_id"] ?>">


<section id="container">
	<!-- Menu left -->
		<div id="sideMenu">
			<div id="sideMenuFixed"></div>
			 <div id="sidecontent" ng-include="'contenidos/principal/menu.php'"></div>
		</div>

	<!-- Contenido -->
		<div id="content">
			<div class="header" ng-include="'contenidos/principal/header.php'"></div>
            <div><input type="hidden" value="<?php    echo $_SESSION['rol_id'] ; ?>" id="rolUser">     
            <div><input type="hidden" value="<?php    echo $_SESSION['id'] ; ?>" id="idUser"></div>
			<div class="content-admin"  ng-view></div>
			<div class="footer" ng-include="'contenidos/principal/footer.php'"></div>
		</div>
</section>


<!--  Scripts-->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- <script src ="js/angular.min.js"></script> -->
<script src="js/angularJS_1.5.5.min.js"> </script>
<script src ="js/angular.easypiechart.min.js"></script>
<script src ="js/angular_ngRoute.js"></script>
<script src ="js/angular-datatables.min.js"></script>
<script src ="js/angular-resource.min.js"></script>
<script src ="js/modelo.js"></script>
<script src ="js/controller.js"></script>
<script src ="js/kendo.js"></script>
<script src="js/angular.easypiechart.min.js"></script>

<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<!-- <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script> -->
<script src="assets/js/jquery.sparkline.js"></script>
<script src="assets/js/prueba.js"></script>
<script src="js/wavesurfer.min.js"> </script>
<script src="js/angular-sanitize.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<!-- <script src="assets/js/common-scripts.js"></script> -->

<!--  Scripts Materialize -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
</body>
</html>



