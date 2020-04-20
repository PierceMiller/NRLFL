<?php 
include("../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
include(ROOT_PATH . "/app/controllers/tasks.php");
adminOnly(); 
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
    
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!--Custom Styling-->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/756d32276f.js" crossorigin="anonymous"></script>
    
    <title>Admin - Dashboard</title>
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

            <div class="content">
                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <form method="POST" action ="dashboard.php">

                    <h4>Task List</h4>
                    <input type="text" name="task" class="text-input" style="margin-bottom: 10px;" placeholder="Enter a task...">
                    <button type="submit" class="btn task-btn" name="submit">Add Task</button>
                </form>

                <table>
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Tasks</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; while($row = mysqli_fetch_array($tasks)) { ?>
                            <tr>
                            <td><?php echo $i; ?></td>
                            <td class="tasks"><?php echo $row['tasks'];?></td>
                            <td class="delete-task">
                                <a href="dashboard.php?del_task=<?php echo $row['id']; ?>" class="delete">delete</a>
                            </td>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>

                

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
    <script src="../assets/js/scripts.js"></script>


</body>
</html>