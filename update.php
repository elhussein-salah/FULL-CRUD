<?php
    require_once("conn.php");

    if (isset($_GET["upd_id"])):

        $id = $_GET["upd_id"];

        $data = $conn->query("SELECT * FROM tasks where id = $id");
        $row = $data->fetch(PDO::FETCH_OBJ);

        if(isset($_POST["submit"])) {
            
            $task = $_POST["task"];
    
            $update = $conn->prepare("UPDATE tasks SET name = :name WHERE id='$id'");
            $update->execute(["name" => $task]);
            header("Location: index.php");
        }

    endif;

?>
<?php include "header.php";?>

<form action="update.php?upd_id=<?php echo $id ?>" method="post">
    <div class="mb-2 form-group mx-sm-3 ">
        <input type="text" class="form-control" name="task" id="" aria-describedby="helpId" value="<?php echo $row->name?>" placeholder="Enter Task"/>
        <input name="submit" type="submit" class="btn btn-primary btn-lg" value="update">
        </div>
</form>

<?php include "footer.php";?>