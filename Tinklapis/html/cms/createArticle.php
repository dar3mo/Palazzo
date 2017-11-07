   <?php 
    include("../functions.php");

    $image = $_POST['imgname'];
    $title = $_POST['title'];
    $content = $_POST['editor1'];
    
    createArticle($title, $content, $image);
    ?>