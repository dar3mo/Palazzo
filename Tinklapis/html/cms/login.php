<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
include("../functions.php");

$admin = getUser();
    
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if($username == $admin['username'] && $password == $admin['password']) {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: cms.php');
        }
        else {
            header('Location: login.php');
        }
        
    } else {
        header('Location: login.php');
    }
} else {
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
    <!--<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../libs/js/livevalidation_standalone.js"></script>
</head>

<body>
   
    <div class="container-fluid login-page">
        <main class="row">
            <div class="col-md-12">
                <h1 class="login-title">Welcome to Palazzo Law Boutique</h1>
                 <form action="" method="post" class="form-group login-form">
                        <label for="name-input">userame</label>
                        <input class="form-control" name="username" id="username" type="text" value="">
                        <label for="surname-input">password</label>
                        <input class="form-control" name="password" id="password" type="password" value="">
                        <button class="btn" id="login-btn" type="submit" value="login">Login</button>
                </form>
                
            </div>
        </main>
    </div>    
<!-----------WRITING--JS-IN-HTML--------->
    <script type="text/javascript" src="../main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
<?php } ?>