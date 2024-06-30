
<?php
  /*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */

  // session_id("lkjsdklfjksdfsdf");

  session_start();

  // echo session_id();



  isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

  echo  " Views Count Is " . $_SESSION['views'];

setcookie("name","mera",time()+86400*3,"/");


  // destroy the session
//session_destroy();
