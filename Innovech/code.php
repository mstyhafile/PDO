<?php
session_start();
include('dbcon.php');

//Insert into database
if(isset($_POST['add_btn']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    try{

            $query = "INSERT INTO interns (firstname,lastname) VALUES (:firstname, :lastname)";
            $query_run = $conn->prepare($query);

            $data = [

                ':firstname' => $firstname,
                ':lastname' => $lastname,

            ];
            $query_execute = $query_run->execute($data);

                if($query_execute)
            {
                $_SESSION['message'] = "Inserted Successfully";
                header('Location: index.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Not Inserted";
                header('Location: index.php');
                exit(0);
            }

        }catch(PDOException $e) {

            echo "Something went wrong" .$e->getMessage();

        }
}

//Update existing data
if(isset($_POST['update_btn']))
{
    $student_id = $_POST['student_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

     try{

            $query = "UPDATE interns SET firstname=:firstname, lastname=:lastname WHERE id=:stud_id";
            $statement = $conn->prepare($query);

            $data = [

                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':stud_id' => $student_id
            ];

            $statement->execute = $statement->execute($data);


            if($query_execute)
            {
                $_SESSION['message'] = "Updated Successfully";
                header('Location: index.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Updated Successfully";
                        header('Location: index.php');
                        exit(0);
            }

        } catch (PDOException $e){
            echo "Something went wrong" .$e->getMessage();
        }
}

//Delete records on database
if(isset($_POST['delete_btn']))
{
    $student_id = $_POST['delete_btn'];

    try{

            $query = "DELETE FROM interns WHERE id=:stud_id";
            $statement = $conn->prepare($query);

            $data = [

                ':stud_id' => $student_id
            ];

            $query_execute = $statement->execute($data);

            if($query_execute)
            {
                $_SESSION['message'] = "Deleted Successfully";
                header('Location: index.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Not Deleted";
                        header('Location: index.php');
                        exit(0);
            }

        } catch (PDOException $e){
        echo "Something went wrong" .$e->getMessage();
        }
    
}
 
?>