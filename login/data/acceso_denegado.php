<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['email'] == null || $_SESSION['email'] == ''){
    print "<script>alert('You must log in'); window.location='../../' </script>";
}
?>
