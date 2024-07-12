<?php 
    require "conn.php";

    print_r($_POST);
    if(isset($_POST["task"])) {

        $task = $_POST["task"];

        $insert = $conn->prepare("INSERT INTO tasks  (name) VALUES(:name)");
        $insert->execute(["name" => $task]);
        header("Location: index.php");

    }