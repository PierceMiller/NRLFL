<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://allfont.net/allfont.css?fonts=shanghai" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://everythingfonts.com/font/face/0I2QRA8Tx3q_Wr3LvlRUIweF" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!--Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/756d32276f.js" crossorigin="anonymous"></script>
    
    <title><?php echo $post['title']; ?> | NRLFL</title>
</head>
<body>

    <!--Facebook Page Plugin-->
    <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=900528873668020&autoLogAppEvents=1">
    </script>
    <!--//Facebook Page Plugin-->

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!--Content-->
        <div class="content clearfix">

            <!--Main Content Wrapper-->
            <div class="main-content-wrapper">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>

                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>
            </div>
        </div>

            <!--//Main Content-->

            <!--Sidebar-->
            <div class="sidebar single">

                <div class="fb-page" data-href="https://www.facebook.com/nrlfantasybutters/" data-tabs="" data-width="" data-height="" data-small-header="false" 
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/nrlfantasybutters/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/nrlfantasybutters/"></a>
                    </blockquote>
                </div>

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach($posts as $p): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <h4><a href="" class="title"><a href="single.php?id=<?php echo $p['id']; ?>"><?php echo $p['title'] ?></a><h4>
                        </a>
                    </div>
                    <?php endforeach; ?>

                </div>
   
                <div class="section topics">
                <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!--//Sidebar-->
        </div>

        <!--//Content-->

    </div>
    <!--//Page Wrapper-->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <!--Slick Content-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Custom Script-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>