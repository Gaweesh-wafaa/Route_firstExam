<?php

if(isset($_POST['submit'])){
  $background_color = $_POST['background_color'];
  setcookie('background_color', $background_color, time()+60);
  // echo $background_color;
  header('location: Q11.php');
}else{
  header('location: Q11.php');
}