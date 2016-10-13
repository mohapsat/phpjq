<?php


// checking if data returned is available and not empty
if (isset($_POST['name']) == true && empty($_POST['name']) == false) {
// if true then require db connection
    require 'conn.php';
// query the database

      $sql = "
        SELECT *
        from `names`
        where `names`.`name` like '" . mysql_real_escape_string(trim($_POST['name'])) .'%'. "'
            ";

      $result = $conn->query($sql);

// return the result of the location if row count does not equal to 0

if($result->num_rows > 0) {

          while($obj = $result->fetch_object()){
              $name_id = $obj->name_id;
              $name = $obj->name;
              $location =$obj->location;
          }

      $result->close();
    }

echo $name_id, $name, $location;

}



?>
