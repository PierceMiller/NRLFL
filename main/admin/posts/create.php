<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();?>
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
    
    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/756d32276f.js" crossorigin="anonymous"></script>
    
    <title>Admin - Add Post</title>
</head>
<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">

        <!--Left Side Bar-->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--//Left Side Bar-->

        <!--Admin Content-->
        <div class="admin-content">
            <div class="btn-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Post</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input" value="<?php echo $title; ?>" placeholder="Keep to three words max if possible">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label for="topic">Topic</label>
                        <select name="topic_id" class="text-input">
                        <option value=""></option>

                        <?php foreach($topics as $key => $topic): ?>
                            <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                            <?php else: ?>
                                <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if(empty($published)): ?>
                            <label>
                                <input type="checkbox" name="published">Publish
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>Publish
                            </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
        <!--//Admin Content-->

    </div>
    <!--//Admin Page Wrapper-->

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--Text Editor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

    <!--Custom Script-->
    <script src="../../assets/js/scripts.js"></script>


</body>
</html>