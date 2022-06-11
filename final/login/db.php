 <?php
  session_start();
  
  $db = new mysqli("localhost","project","dnpfzja","0811member");
  $db->set_charset("utf-8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>
