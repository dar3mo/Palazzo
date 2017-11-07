<?php
include("./functions.php");

$id = $_POST["article_id"];

    $sql_command = "SELECT * FROM articles WHERE id=$id;";
    $query = mysqli_query(getConnection(), $sql_command);
    if( $query ) {
        $query = mysqli_fetch_assoc($query);
        echo "<h2>" . $query['title'] . "</h2><br/>";
        echo $query['content'];
    } else {
        echo "error" . mysqli_error(getConnection());
        return NULL;
    }