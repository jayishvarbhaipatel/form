<?php require_once "./connection.php";

if(isset($_POST["submit"]))
{

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $Mo =$_POST['phnumber'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    $query="INSERT INTO `students` (`fname`,	`lname`,	`email`,	`Mo`,	`state`,	`city`,	`gender`,	`uname`,	`pass`) 
            VALUES('$fname','$lname','$email','$Mo','$state','$city','$gender','$uname','$pass')";
    $result=mysqli_query($con,$query);

    if($result)
    {
        echo "Data Saved Succesfully";
    }
    else
    {
        echo "Insert Error";
    }
}

?>


<?php
require_once "./connection.php";

// echo "<pre>";
// print_r("$_FILES");
// echo "</pre>";

if(isset($_POST['submit']))
{

    if(isset($_FILES['photo']))
    {
        $name = $_FILES['photo']['name'];
        $size = ($_FILES['photo']['size'])/1024;
        $error = $_FILES['photo']['error'];
        $tmp_name = $_FILES['photo']['tmp_name'];  

        // if($error == 0)
        // {
        //    (if$size<1024)
        //    {

            $filename = time() . $name;
            $path = "./uploads/".$filename;
            move_uploaded_file($tmp_name,$path);
           
    $query="INSERT INTO `files` (`filename`) VALUES('$filename')";
    $result=mysqli_query($con,$query);

        if($result)
        {
        ?>

        <script>
            alert("Data Saved Successfully");
        </script>
        
        <?php 
        }
        else
        {
            echo "Error";
        }
        // else
        // {
        //     echo "File size must be Less than 1 MB";
        // }    
        //     }
        }  
}
?>

<script>
        function validation()
        {
            fnvalidation();
        }


        if(picvalidation())
            {
                 document.getElementById("studentbtn").click();
            }   
            
        function  picvalidation()
            {
                let pic = document.getElementById("formFileLg").value;
                let ferror = document.getElementsByClassName("error");

                if(pic == '')
                {
                    ferror[0].style="display:block";
                    return false;
                }
                else
                {
                    ferror[0].style="display:none";
                    return true;
                }
            }
</script>   