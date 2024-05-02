<?php
 require_once "./connection.php";

//  echo "<pre>";
//  print_r($_FILES);
//  echo "</pre>";

 if(isset($_FILES['submit']))
 {
    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $type = $_FILES['photo']['type'];

    if($error == 0)

      //   if($size<1024)
      //   {

         $filename = time(). $name;
         $path = "./uploads/".$filename;
         move_uploaded_file($tmp_name,$path);

         $query="INSERT INTO `fies` (`filename`)VALUES('$filename')";
         $result=mysqli_query($con,$query);

            if($result)
            {
            ?>

               <script>
                     alert("Data Saved Successfully");
                     // window.location.href("");
               </script>
            <?php 
            }
            else
            {
               echo "Error";

            }  
//  }else{
//    echo "Size Error";
//  }    
} 
?>