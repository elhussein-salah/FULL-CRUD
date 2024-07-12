<?php
    require_once("conn.php");
    if (isset($_GET["id"])):
        $delete = $conn->prepare("DELETE FROM tasks WHERE id=:id");
        $id = $_GET["id"];
        $delete->execute([':id' => $id ]);
        //header("Location: index.php");
    endif;
    header("Location: index.php");
