<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>B-ENGLISH</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive_admin.css" rel="stylesheet">
    <link href="assets/css/tables.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
   

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="animated fadeIn">
    <div class="mainCont">
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container ingreso animated fadeIn">
                <div class="logoIndex">
                    <!-- <img src="assets/img/logo_invilk.png" alt="" class=""> -->
                    <h2 class="ta-c">Admin</h2>
                </div>

                <form class="form-login animated bounceIn" method="POST" action="sql/session.php">
                    <h2 class="form-login-heading">sign in now</h2>
                    <div class="login-wrap">
                        
                        <div class="cont_input">
                            <label class="label">Email</label>
                            <input type="text" name="user" class="form-control input" id="email">
                        </div>
                        
                        <div class="cont_input mt20">
                            <label class="label">Clave</label>
                            <input type="password" name="password" class="form-control input" id="pass" required="">
                        </div>
                        
                        <button class="btn btn-theme btn-block mt20" type="submit" name="enviar" id="ingreso" required="">
                            <i class="fa fa-lock"></i> 
                            SIGN IN
                        </button>
                    </div>
                </form>
				<!--a data-toggle="modal" data-target="#myModal">Forgot your password ?</a-->
                <div class="footerIndex">
                    <img src="assets/img/logo_UNAD_blanco.png" alt="" class="centrado w10">
                </div>
            </div>
        </div>
    
    </div>

 <!-- ventana modal>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
                <label class="label">Email</label>
                <input type="text" name="user" class="form-control input" id="email">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--fin ventana modal -->





    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        $('.input').each(function(index){
            if($(this).val() == ''){
                $(this).parent().removeClass('ready');
                $(this).parent().removeClass('active');
            } else {
                $(this).parent().addClass('ready');
                $(this).parent().addClass('active');
            }
        });
        $('.input').on('focus',function(){
            $(this).parent().addClass('active ready');
        });
        $('.input').on('focusout',function(){
            if($(this).val() == ''){
                $(this).parent().removeClass('ready');
                $(this).parent().removeClass('active');
            }
        });

    </script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->

</body>

</html>