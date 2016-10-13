<?php


// checking if data returned is available and not empty
if (isset($_POST['name']) == true && empty($_POST['name']) == false) {
// if true then require db connection
    require 'conn.php';
// query the database
      $query = mysql_query("
        SELECT `names`.`location`
        from `names`
        where `names`.`name` = '" . mysql_real_escape_string(trim($_POST['name'])) . "'
      ");

// return the result of the location if row count does not equal to 0

    if (mysql_num_rows($query) !== 0) {
      echo (mysql_result($query, 0, 'location'));
    } else {
      echo ('Name not found');
    }

}

?>
