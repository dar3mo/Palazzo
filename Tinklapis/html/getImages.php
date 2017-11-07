<?php

define( 'DB_NAME', 'palazzo');
define( 'DB_USERNAME', 'palazzo');
define( 'DB_PASSWORD', 'plbadmin2017');
define( 'DB_HOST', 'localhost');
//define( "CLASS_PATH", "classes" );
//define( "TEMPLATE_PATH", "templates" );
//define( "HOMEPAGE_NUM_ARTICLES", 3 ); // how many articles to display;

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 

if(!$connection) {
    die ("Connection error: " . mysqli_connect_error());
}

function getConnection () {
    global $connection;
    return $connection;
}
//================
//GET IMAGE
//================

     

?>