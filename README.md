Purpose:
Return the value from a desired column from a mysql database based on the data passed in a text input.

Overview:
1. User enters a name on the text input
2. Use jquery to invoke a post method on the button (grab) click from the data passed from name.php
3. Test database connection in conn.php
4. Inside name.php
  a) check of the post value of name is non empty
  b) if non empty, connect to the database
  c) query the database
  d) check if #rows returned in the query object are not equal to 0
  e) if not 0, echo the result.
  f) ajaxdb.js picks the name from the post methood using a json and passes it to an anonymous function that updates the text attribute of the name-data id.
