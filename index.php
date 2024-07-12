<?php 
    require 'conn.php';

    $data = $conn->query("SELECT * FROM tasks");
    
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FULL CURD</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>