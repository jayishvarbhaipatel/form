<?php require_once "./connection.php";
 
//     echo "<pre>" ;
// print_r($_POST);

// die();

if (isset($_POST['submit'])) 
{     

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
    

    if(isset($_FILES['pic']))
    {
       $name = $_FILES['pic']['name'];
       $size = ($_FILES['pic']['size'])/1024;
       $error = $_FILES['pic']['error'];
       $tmp_name = $_FILES['pic']['tmp_name'];
       $type = $_FILES['pic']['type'];
   
       if($error == 0)
   
           if($size<(1024*3))
           {
            $filename = time(). $name;
            $path = "./uploads/".$filename;
            move_uploaded_file($tmp_name,$path);

    $query="INSERT INTO `students` (`fname`,`lname`,`email`,`Mo`,`state`,`city`,`gender`,`uname`,`pass`,`filename`) 
            VALUES('$fname','$lname','$email','$Mo','$state','$city','$gender','$uname','$pass','$filename')";
    $result=mysqli_query($con,$query);

    if($result)
    {
        ?>

        <script>
            alert("Data Saved Successfully");
            window.location.href = "index.php";
        </script>
<?php 
    }
    else
    {
        echo "Error";
    }  
           } 
    else
    {
        echo "File size must be Less than 1 MB";
    } 
    else
    {
        echo "1 Error";
    }
    }
}
?>
