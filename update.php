<?php require_once "./connection.php";

if (isset($_POST['submit'])) 
{     
    $id=$_POST['uid'];
    $fname=	$_POST['fname'];
    $lname=	$_POST['lname'];
    $email=	$_POST['email'];
    $Mo	= $_POST['phnumber'];
    $state=	$_POST['state'];
    $city= $_POST['city'];
    $gender= $_POST['gender'];
    $uname= $_POST['uname'];
    $pass= $_POST['pass'];
   // $filename = $_POST['pic'];

            $query="UPDATE `students` SET `fname`='$fname',`lname`='$lname',`email`='$email',`Mo`='$Mo',`state`='$state',`city`='$city',`gender`='$gender',`uname`='$uname',`pass`='$pass' WHERE `id` = '$id' ";
            $result=mysqli_query($con,$query);

    if($result)
    {
        ?>

        <script>
            alert("Data Updated Successfully");
            window.location.href ="index.php";
        </script>
        <?php 
        }
        
        else
        {
            echo "Error";
        }  
    } 
    
?>
