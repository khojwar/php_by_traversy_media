<?php
/* --- 
$_GET method pass data through urls and forms
$_POST method pass data through forms only
 -- */

if(isset($_GET['submit'])) {
    echo $_GET['username'];
    echo $_GET['age'];
}

// echo $_GET['username'];
// echo $_GET['age'];
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <div>
    <label for="username">Enter Username:</label>
    <input type="text" name="username" placeholder="Enter Username">
    </div>

    <div>
    <label for="age">Enter Age:</label>
    <input type="text" name="age" placeholder="Enter Age">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>