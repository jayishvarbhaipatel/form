<?php require_once "./connection.php";

if(!isset($_COOKIE['data']))
{
    header("location:login.php");
}


$data=json_decode($_COOKIE['data'],true);

// echo "<pre>";
// print_r($data);


// echo  " Welcome ".$_SESSION['data']['email'];
?>

<form action="logout.php">

    <button type="submit">
        Logout
    </button>

</form>