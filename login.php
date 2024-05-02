<?php require_once "./connection.php";

if(isset($_COOKIE['data']))
{
    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>

<style>

*{
    margin:0;
    padding:0;
    font-family: 'poppins',sans-serif;
}

body
{
    background-color:lightgray;s
    background-size:cover;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    overflow:hidden;
}

.form-box
{
    position:relative;
    width:450px;
    height:500px;
    background-color:white;
    backdrop-filter:blur(8px);
    /* color:white; */
    font-size:20px;
    border:2px solid black;
    border-radius:16px;
    overflow:hidden;
    transition: transform .5s ease, height .3s ease-in-out;
}

.form-box form
{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    position:absolute;
    width:100%;
    height:100%;
    transition: transform .3s ease;
}

.form-box h2
{
    font-size:30px;
    font-weight:600;    
}

.input-box
{
    width:95%;
    display:flex;
    justify-content:space-between;
    position:relative;
    border-bottom:2px solid black;
    margin: 25px;
    padding:0px 4px 10px 4px;  
}

.input-box:first-of-type
{
    margin-top:35px;
}

.input-box input
{
    width:85%;
    position: absolute;
    font-size:20px;
    background:none;
    border:none;
    outline:none;
}

.input-box label
{
    transition: .4s;
    font-size:18px;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label
{
    transform:translateY(-27px);
}

.input-box ion-icon
{
    font-size:22px;
    cursor:pointer;
}

.checkbox
{
    width:76%;
    display:flex;
    justify-content:center;
    align-items:center;
    cursor:pointer;
}

/* .checkbox h6
{
    font-size:16px;
    font-weight:100;
    cursor:pointer;
    user-select:none;
} */

.login-btn
{
    width:50%;
    height:38px;
    cursor:pointer;
    border-radius:6px;
    margin:10px;
    /* border:none; */
    font-size:18px;
    background-color:lightblue;
}

.login-register p
{
    font-size:16px;
    font-weight:500;
    cursor:pointer;
}

.login-register a
{
    text-decoration:none; 
    font-weight:600;  
    font-size:16px; 
}

.login-register a:hover
{
    text-decoration:underline;  
}

.eye
{
    position: absolute;
    right:5px;
    cursor:pointer;
}

#hide1
{
    display:none;
    /* position:relative; */
}

.teer
{
    color:red;
}
</style>

</head>
<body>
<center>
<div class="form-box">
        <!-- <ion-icon name="close-outline" class="close-icon"></ion-icon>   -->
        <form class="login-form" action="loginuser.php" method="POST">
            <h2>Login</h2>
                <div class="input-box">
                    <input type="text" name="uname" required>
                    <label> <b> Username </b>
                        <span class="teer">*</span>
                    </label>
                    <ion-icon name="person-circle"></ion-icon>
                </div>

                <div class="input-box">
                <input type="password" id="myInput" name="pwd" required>
                    <label> <b> Password </b>
                        <span class="teer">*</span>
                    </label>

                    <span class="eye" onclick="myFunction()">
                            <i id="hide1" class="fa fa-eye"></i>
                            <i id="hide2" class="fa fa-eye-slash"></i>
                    </span>
                </div>

                <div class="checkbox">
                    <span>
                        <input type="checkbox" id="login-checkbox">
                        <label for="login-checkbox">Remember Me</label>
                    </span>
                    <!-- <h6>Forgot Password?</h6> -->
                </div>

                <button type="login" class="login-btn" >Login</button>

                <div class="login-register">
                    <p>Don't have an account? <a href="form.php" class="register-btn">Register</a></p>
                </div>
        </form>      
</div>
</center>  

    <script>
            function myFunction()
            {
                var x = document.getElementById("myInput");
                var y = document.getElementById("hide1");
                var z = document.getElementById("hide2");

                      if(x.type === 'password')
                      {
                         x.type = "text";
                         y.style.display = "block";
                         z.style.display = "none";
                      }
                      else
                      {
                         x.type = "password";
                         y.style.display = "none";
                         z.style.display = "block"; 
                      }
            }          
    </script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 

</body>
</html>