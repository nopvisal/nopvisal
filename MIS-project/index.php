<?php
    require_once('db.php');
    $query = "SELECT * FROM users WHERE id!=1011";
    $result = mysqli_query($con,$query);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>

</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Team Members</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Age</td>
                                <td>Class</td>
                            </tr>
                            <tr>
                                <?php

                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['age'] ?></td>
                            <td><?php echo $row['class'] ?></td>

                            </tr>
                                <?php


                                    }
                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>