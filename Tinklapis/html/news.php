<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
    <!--<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../libs/js/livevalidation_standalone.js"></script>
</head>

<body>
    <div class="container-fluid" id="brandtitle">
        <header class="row">
            <div class="col-md-12 home-header">
                <h1 class="header-title">Palazzo <span id="blue-title-part">News</span></h1>
            </div>
        </header>
    </div>
    <div class="container-fluid invisible-div" id="invisiblediv">
        <header class="row">
            <div class="col-md-12 home-header">
                <h1 class="header-title">Palazzo <span>News</span></h1>
            </div>
        </header>
    </div>
    <div class="container-fluid" id="navigation">
        <section class="row">
            <nav class="col-md-12">
                <ul class="list-inline">
                    <li class="list-inline-item">Home</li>
                    <li class="list-inline-item">About</li>
                    <li class="list-inline-item">Legal Advisors</li>
                    <li class="list-inline-item">FAQ</li>
                    <li class="list-inline-item">News</li>
                    <li class="list-inline-item">Contact</li>
                </ul>
            </nav>
        </section>
    </div>
    <div class="container-fluid invisible-div" id="invisiblediv2">
        <section class="row">
            <nav class="col-md-12">
                <ul class="list-inline">
                    <li class="list-inline-item">Home</li>
                    <li class="list-inline-item">About</li>
                    <li class="list-inline-item">Legal Advisors</li>
                    <li class="list-inline-item">FAQ</li>
                    <li class="list-inline-item">News</li>
                    <li class="list-inline-item">Contact</li>
                </ul>
            </nav>
        </section>
    </div>
    <!--============-->

    <!--============-->
    <div class="container-fluid news-page">
        <main class="row">
            <div class="col-md-12">
                <?php include("./functions.php");
    
                    $allArticles = getArticles();
                    if($allArticles !=NULL) {        
        
                    while($article = mysqli_fetch_assoc($allArticles)) : 
                ?>
                <div class="card news-card">
                    <img class="card-img-top" src="../resources/images/<?php echo $article['image']?>" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">
                            <?php echo $article['title']?>
                        </h4>
                        <button type="button" class="btn btn-primary view_data" id="<?php echo $article['id']?>" data-toggle="modal" data-target="#dataModal">Read more</button>
                    </div>
                </div>

                <?php
                    endwhile;
                    }
                ?>
            </div>
        </main>
    </div>
    <?php
        include("./footer.php");
    ?>
        <!-- Modal -->
        <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="dataModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="article-title">
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <p id="article-content">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button name="view" value="view" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-----------WRITING--JS-IN-HTML--------->
        <script type="text/javascript" src="./cms/cms.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>