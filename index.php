<!DOCTYPE html>
<html lang="en" ng-app="login_b_english">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="Owner: booksandbooks, lead UX/UI: David Duque, lead developer frontend: Harley Santos Garzón (@HarleySG), lead developer backEnd: Cesar Porras (cesarduvan91) &amp; Jhon Aldana ()">
    <meta name="copyright" content="booksandbooks">
    <title>B-English</title>
    <link rel="icon" type="image/ico" href="./content/assets/multimedia/images/client/cliente_favicon.ico">
    <link rel="stylesheet" href="./content/assets/css/normalize.css">
    <link rel="stylesheet" href="./content/assets/css/app.css">
    <link rel="stylesheet" href="./content/assets/css/alertify.css">
  </head>
  <body>
    <ui-view name="estilo"></ui-view>
    
    <main class="template" id="viewAppIndex" ng-class="classMainTemplate" ui-view>
      
      <div class="loading_template preloadTemplateAnimation"> <svg width="300px" height="200px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet" style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);" class="loading_svg"> <path stroke="#ededed" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path> <path id="outline-bg" opacity="0.05" fill="none" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path> </svg> </div>
    </main>
    
    <!-- Jquery Scripts v2.1.3-->
    <script src="./content/assets/js/librerias/jquery.min.js"></script>
    <!-- Angularjs Scripts-->
    <!-- Angular.min v1.5.5-->
    <script src="./content/assets/js/librerias/angular/angularJS_1.5.5.min.js"></script>
    <!-- UI ROUTE-->
    <script src="./content/assets/js/librerias/angular/angular-ui-router.js"></script>
    <script src="./content/assets/js/librerias/angular/angular-animate.js"></script>
    <script src="./content/assets/js/librerias/alertify.min.js"></script>
    <!-- Module Angular-->
    <script src="./login/js/ngMainLogin.js"></script>
  </body>
</html>