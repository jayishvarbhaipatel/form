<?php require_once "./connection.php";

if(isset($_POST['uname'])) 
{
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $query="SELECT * FROM `students` WHERE `uname`='$uname' AND `pass`='$pwd'";
    $result=mysqli_query($con,$query);

    if($result)
    {
        
        if(mysqli_num_rows($result)>0)
        {
            $data=mysqli_fetch_assoc($result);
            // $_SESSION['data']=$data;
            
            $jsondata=json_encode($data);
            $exp=time()+864000*365;
            setcookie('data',$jsondata, $exp,"/");

            ?>
            <script>
                    alert("Login Successfull");
                    window.location.href = "dashboard.php";
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                    alert("Invalid Username and Password...!!!");
           </script>
           <?php
        }
    }   
}
?>