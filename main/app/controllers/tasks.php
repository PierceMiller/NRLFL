<?php

$errors = "";

if (isset($_POST['submit'])) {

    global $conn;
    $tasks = $_POST['task'];
    if (empty($tasks)) {
        $_SESSION['message'] = "Task form is empty";
        $_SESSION['type'] = "error";
        header("location: " . BASE_URL . "/admin/dashboard.php");
        exit();
    }else {
        $_SESSION['message'] = "Task successfully added";
        $_SESSION['type'] = "success";
        mysqli_query($conn, "INSERT INTO tasks (tasks) VALUES ('$tasks')");
        header("location: " . BASE_URL . "/admin/dashboard.php");
        exit();
    }
}

if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    $_SESSION['message'] = "Task successfully deleted";
    $_SESSION['type'] = "success";
    mysqli_query($conn, "DELETE FROM tasks WHERE id=$id" );
    header("location: " . BASE_URL . "/admin/dashboard.php");
    exit();
}

$tasks = mysqli_query($conn, "SELECT * FROM tasks");

?>