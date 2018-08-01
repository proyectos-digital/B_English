<?php session_start(); 
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
?>
<aside>
  <!-- MENU -->
  <div id="menu" class="nano">
    <div class="info-user">
      <span>
        Name:
        <?php echo $nombre; ?>
      </span>
      <span>
        User:
        <?php echo $email; ?>
      </span>
    </div>
    <ul class="nano-content">
      <li class="mnHome">
        <a href="#/"><i class="fa fa-home"></i><span> Home</span></a>
      </li>
          
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-user"></i><span> Users </span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <div class="userCreate">
          <li> <a href="#/crear_usuarios"> Create user </a> </li>
          </div>
          <li><a href="#/Listar_usuarios"> User list </a> </li>
        </ul>
      </li>
          
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-users"></i><span> Groups </span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="#/crear_grupos"> Create group </a> </li>
          <li><a href="#/lista_grupos"> Group list </a> </li>
          <!-- <li><a href="#/lista_modforos"> Forum List </a> </li> -->
        </ul>
      </li>
    </ul>
  </div>
  <!-- MENU -->
</aside>

<script type="text/javascript">
  
  $(function(){
    $("#menu .sub-menu > a").click(function(e) {
      if($('#rolUser').val() === '2'){
          $('.userCreate').hide();
      }
      $('.mnHome').removeAttr("style");
    $("#menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
  e.stopPropagation()
  });
 });
</script>
