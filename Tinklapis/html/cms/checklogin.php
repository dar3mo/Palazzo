<?php

define( 'DB_NAME', 'palazzo');
define( 'DB_USERNAME', 'palazzo' );
define( 'DB_PASSWORD', 'plbadmin2017' );
define ('DB_HOST', 'localhost');
//define( "CLASS_PATH", "classes" );
//define( "TEMPLATE_PATH", "templates" );
//define( "HOMEPAGE_NUM_ARTICLES", 3 ); // how many articles to display;

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

if($connection) {
    echo "Login successful";
}else {
    die ("Connection error: " . mysqli_connect_error());
}

$db = mysqli_select_db(DB_NAME);

if(! $db) {
    die ("Database connection error: " . mysqli_connect_error());
}

function getConnection () {
    global $connection;
    return $connection;
}
//========================

//sending information to database:
$username=$_POST['username']; 
$password=$_POST['password']; 

//protection:
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql_command = "SELECT * FROM admin WHERE username='$username' and password='$password'";

$result = mysqli_query(getConnection(), $sql_command);

// Mysql_num_row is counting table row
//$count = mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
//if($count==1){

    if($result) {
        // Register and redirect to "loginsuccess.php"
        session_register("myusername");
        session_register("mypassword"); 
        header("location:./loginsuccess.php"); //redirect
    }else {
        echo "Error. Wrong Username or Password";
    }
?>