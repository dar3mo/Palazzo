<?php

date_default_timezone_set( "Europe/London" );


define( 'DB_NAME', 'palazzo');
define( 'DB_USERNAME', 'root' );
define( 'DB_PASSWORD', 'root' );
define ('DB_HOST', 'localhost');
//define( "CLASS_PATH", "classes" );
//define( "TEMPLATE_PATH", "templates" );
//define( "HOMEPAGE_NUM_ARTICLES", 3 ); // how many articles to display;

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 

if(! $connection) {
    die ("Connection error: " . mysqli_connect_error());
}

function getConnection () {
    global $connection;
    return $connection;
}

//=================
//     IMAGES
//=================
function getImage($imgid) {
    $sql_command = "SELECT * FROM images WHERE id=$imgid;";
    $result = mysqli_query(getConnection(), $sql_command);
    if($result) {
        $result = mysqli_fetch_assoc($result);
        return $result;
    } else {
        echo "Error <br /> " . mysqli_error(getConnection());
        return NULL;
    }
}

function getImages() {
    $sql_command = "SELECT FROM images;";
    $result = mysqli_query(getConnection(), $sql_command);
    if($result) {
        return $result;
    } else {
        echo "Error.";
        return NULL;
    }
}
//======================
//QUERY SAVE IN DATABASE
//======================

function createQuery ($name, $lname, $email, $legalarea, $question) {
    //   $text = " INSERT INTO users
    //             VALUES ('', '$vardas', '$slaptazodis', '$elPastas', '$rights');
    //           ";

    // pasalina spec. simbolius "  ' \n \t < >
    $name = mysqli_real_escape_string(getConnection(), $name);
    $lname = mysqli_real_escape_string(getConnection(), $lname);
    $email = mysqli_real_escape_string(getConnection(), $email);
    $question = mysqli_real_escape_string(getConnection(), $question);

      $sql_command = sprintf(" INSERT INTO queries
                        VALUES ('', '%s', '%s', '%s', '%s', '%s');
                     ",
                        $name, 
                        $lname, 
                        $email, 
                        $legalarea, 
                        $question
                   );
      $query = mysqli_query( getConnection() , $sql_command);
      if (! $query) {
          echo "error" . mysqli_error(getConnection());
      }
  }
//===================
// CREATE AN ARTICLE
//===================

function createArticle($title, $content, $image) {
     $title = mysqli_real_escape_string(getConnection(), $title);
     $content = mysqli_real_escape_string(getConnection(), $content);
     
     $sql_command = sprintf("INSERT INTO articles VALUES ('', NOW(), '%s', '%s', '%s');
                      ",
                        $title,
                        $content,
                        $image
                    );
   
    $query = mysqli_query(getConnection(), $sql_command);
    if(! $query) {
        echo "error" . mysqli_error(getConnection());
    }
}



function getArticle($id) {
    $sql_command = "SELECT * FROM articles WHERE id=$id; ";
    $query = mysqli_query(getConnection(), $sql_command);
    if( $query ) {
        $query = mysqli_fetch_assoc($query);
        return $rezultatai;
    } else {
        echo "error" . mysqli_error(getConnection());
        return NULL;
    }
}

function getArticles() {
    $sql_command = "SELECT * FROM articles;";
    $query = mysqli_query(getConnection(), $sql_command);
    if($query) {
        return $query;
    } else {
        echo "error";
        return NULL;
    }
}

/**/


function getUser() {
      $sql_command = "SELECT * FROM users where id=1; "; // tekstas
      $result = mysqli_query( getConnection(), $sql_command);
    //   print_r( $rezultatai );

      if ($result) {
          $result = mysqli_fetch_assoc($result);
          return $result;
      } else {
          echo "Klaida: " . mysqli_error(getConnection());
          return NULL;
      }
  }