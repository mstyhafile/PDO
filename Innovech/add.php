<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
<title>Add intern</title>
</head>
<body>

 <div class="container">
     <div class="row">
         <div class="col-md-8 mt-4">

            <div class="card">
                <div class="card-header">
                    <h3> Add new intern
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>    
                </div>
                <div class="card-body">

                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter your first name"/>
                        </div>
                        <div class="mb-3">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter your last name"/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="add_btn" class="btn btn-primary">Save</button>
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