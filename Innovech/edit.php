<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
<title>Update intern</title>
</head>
<body>

 <div class="container">
     <div class="row">
         <div class="col-md-8 mt-4">

            <div class="card">
                <div class="card-header">
                    <h3> Update intern details
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>    
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $student_id = $_GET['id'];

                        $query = "SELECT * FROM interns WHERE id=:stud_id";
                        $statement = $conn->prepare($query);
                        $data = [':stud_id' => $student_id];
                        $statement->execute($data);

                        $result= $statement->fetch(PDO::FETCH_ASSOC);

                        
                    }
                    
                    ?>
                    <form action="code.php" method="POST">

                        <input type="hidden" name="student_id" value="<?= $result['id'] ?>"/>
                        <div class="mb-3">
                            <label>First Name</label>
                            <input type="text" name="firstname" value="<?= $result['firstname']?>" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Last Name</label>
                            <input type="text" name="lastname" value="<?= $result['lastname']?>" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div> 

        </div>
     </div>
 </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>