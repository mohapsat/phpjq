##Purpose:
Return the value from a desired column from a mysql database based on the data passed in a text input.

###Overview:

1. User enters a name on the text input
2. Use jquery to invoke a post method on the button (grab) click from the data passed from name.php
3. Test database connection in conn.php
4. Inside name.php
  1. check of the post value of name is non empty
  2. if non empty, connect to the database
  3. query the database
  4. check if #rows returned in the query object are not equal to 0
  5. if not 0, echo the result.
  6. ajaxdb.js picks the name from the post method using a json and passes it to an anonymous function that passes it to name.php and updates the text attribute of the name-data id with the value returned by name.php
