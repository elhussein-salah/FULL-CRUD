<?php 
    require 'conn.php';

    $data = $conn->query("SELECT * FROM tasks");
    
?>
<?php include("header.php") ?>
    <form action="insert.php" method="post">
        <div class="mb-2 form-group mx-sm-3 ">
            <input type="text" class="form-control" name="task" id="" aria-describedby="helpId" placeholder="Enter Task"/>
            <button type="submit" class="btn btn-primary btn-lg">create</button>
            </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Task Name</th>
                <th scope="col">update</th>
                <th scope="col">update</th>
            </tr>
        </thead>
        <tbody>
        <?php while($rows = $data->fetch(PDO::FETCH_OBJ)):?>
            <tr>
                <th scope="row"><?php echo $rows->id;?></th>
                <td><?php echo $rows->name;?></td>
                <td>
                    <a href="delete.php?id=<?php echo $rows->id ?>" type="button" class="btn btn-danger">
                    Delete
                    </a>
                </td>
                <td>
                    <a href="update.php?upd_id=<?php echo $rows->id ?>" type="button" class="btn btn-warning">
                    update
                    </a>
                </td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
<?php include ("footer.php");?>
   