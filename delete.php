<?php
 require_once "./connection.php";


 if(isset($_GET['id']))
 {

    $id=$_GET['id'];

    $query="SELECT * FROM `students` WHERE `id`='$id'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        $data=mysqli_fetch_assoc($result);
        $filename=$data['filename'];

        if(unlink("./uploads/$filename"))
        {
            
        $query="DELETE FROM `students` WHERE `id`='$id'";
        $result=mysqli_query($con,$query);

    if($result)
    {
        ?>

        <script>
            window.location.href = "index.php";
        </script>
<?php 
    }
            }
else
{
    echo "File Delete Failed";
}
    }

 }

?>