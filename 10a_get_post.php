<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset($_GET['username']) && isset($_GET['age'])){
  $username = $_GET['username'];
  $age = $_GET['age'];
  echo "Hello $username, you are $age years old.";
}
?>

<!-- pass data through link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Tika&age=30">Click</a>