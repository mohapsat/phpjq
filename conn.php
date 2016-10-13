<?php

  $conn = mysql_connect('localhost','root','');
  if(isset($conn)){
    mysql_select_db('ajaxdb');
  }

?>
