<?php
session_start();
include('dbcon.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
<title>Interns at Innovech</title>
</head>
<body>

<div class="container">
     <div class="row">
         <div class="col-md-8 mt-4">

            <?php if(isset($_SESSION['message'])) : ?>
                <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php endif;
                unset($_SESSION['message'])
            ?>
            <div class="card">
                <div class="card-header">
                    <h3> Interns Details
                        <a href="add.php" class="btn btn-primary float-end">Add</a>
                    </h3>    
                </div>
                <div class="card body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM interns";
                                $statement = $conn->prepare($query);
                                $statement->execute();

                                $result = $statement->fetchAll();

                                if($result)
                                {
                                    foreach($result as $row)
                                    {
                                        ?>
                                             <tr>
                                                <td><?= $row['id']?></td>
                                                <td><?= $row['firstname']?></td>
                                                <td><?= $row['lastname']?></td>
                                                <td>
                                                    <a href="edit.php?id=<?= $row['id']?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <button type="submit" name="delete.btn" value="<?= $row['id']?>" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                    }

                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="4">No Record Found</td>
                                        </tr>
                                    <?php
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div> 

        </div>
     </div>
 </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 