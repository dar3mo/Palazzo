<?php
    session_start();
        if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
            header('Location: login.php');
        }
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
        <script src="../../libs/ckeditor/ckeditor.js"></script>
    </head>

    <body>
        <div class="container-fluid cms-main">
            <main class="row">
                <div class="col-md-12">
                    <header>
                        <button class="btn" id="logout-btn"><a href="./logout.php">LOGOUT</a></button>
                    </header>
                    <h2 class="cms-title">Welcome to content editor</h2>
                    <h4 class="cms-title">Submit a New Article</h4>
                    <form method="post" action="" id="article-editor" class="form-group">
                        <label for="input-file">Upload an image</label>
                        <input type="file" class="form-control-file" id="input-file" name="input-file" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted"></small>

                        <label for="title-input">Title</label>
                        <input class="form-control" type="text" name="title" id="title-input" value="">
                        <label for="content-input">Content</label>
                        <textarea class="form-control article-content-input" name="editor1" id="editor1" rows="10" cols="80">
                            This is my textarea to be replaced with CKEditor.
                       </textarea>
                        <button class="btn" id="article-submit-btn" type="submit">SUBMIT</button><span id="msg"></span>
                    </form>
                </div>
            </main>
        </div>

        <!-----------WRITING--JS-IN-HTML--------->
        <script>
            CKEDITOR.replace('editor1');
        </script>
        <script type="text/javascript" src="./cms.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>

    </html>