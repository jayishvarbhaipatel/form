<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    
<style>
*{
    padding: 0;
    margin: 0;
}


body
{
    display: flex;
    height: 100vh;
    width: 100vw;
    justify-content: center;
    align-items: center;
    background-color:lightgray;
    /* background-repeat:no-repeat; */
    /* background-position:bottom; */
    /* background-attachment:fixed; */
    /* background-size:cover; */
    /* background-image:url(https://wallpapers.com/images/featured/ship-gcdqo1r425rrwsdg.jpg); */
}

.container
{
    max-width: 900px;
    width: 100%;
    padding:30px;
    margin: 15px;
    background-position:bottom;
    background-attachment:fixed;
    background-size:cover;
    
    background-color:white;
    border: 3px solid;
    border-radius:28px;
    font-:white;
    /* backdrop-filter:blur(7px); */
    /* background:transparent; */
}

/* .checkmark
{
   height:20px;
   width:20px;
} */

.error
{
    display:none;
    color:red;
}

.teer
{
    color:red;
}

.logo img
{
    height:120px;
    align-items:center;
    width:120px;
    display:block;
    margin:auto;
    margin-bottom:20px;
}

#img
{
    display:none !important;
}

</style>

</head>
<body>

<center>
<div class="container">
    <form action="insert.php" method="POST"  enctype="multipart/form-data">
        <h2>Registration Form</h2> 
        <hr>

        <!-- <div class="box1-sm-6">
                <img src="uploads\noprofile.jpg">
            </div> -->

        <div class="row mt-2">
            <div class="input-box col-sm-6">
                <label > <b> First Name: </b>
                <span class="teer"> * </span>
                <input onkeyup="fnvalidation()" type="text" class="form-control" value="" id="fname" name="fname" placeholder="Your First Name">
                <label class="error">First name is required</label>
                </label>

            </div>

            <div class="input-box  col-sm-6">
                <label> <b> Last Name: </b>
                <span class="teer"> * </span>
                <input onkeyup="flvalidation()" type="text" class="form-control" id="lname" name="lname" placeholder="Your Last Name">
                <label class="error">Last name is required</label>
                </label>
            </div>
</div>
<br />

<div class="row mt-2">
            <div class="input-box col-sm-6">
                <label> <b>Email: </b>
                <span class="teer"> * </span>
                    <input onkeyup="evalidation()" type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    <label class="error">Email is required</label>
                </label>
            </div>

            <div class="input-box col-sm-6">
                <label><b> Phone Number: </b>
                <span class="teer"> * </span>
                <select>
                    <option value="91+" cheaked>91+</option>
                </select>
                <input onkeyup= "phvalidation()" type="tel" class="form-control" id="ph" name="phnumber" placeholder="Phone Number">
                <label class="error">Phone number is required</label>
                </label>
            </div>
</div>
<br />

<div class="row mt-2">
    <div class="input-box col-sm-6">
        <label><b> State: </b>  </label>
        <span class="teer"> * </span>
            <select onchange="stvalidation()" id="st" name="state" value="1">
            <option value="Select State">Select State</option>
                <option value="Gujarat" checked>Gujarat</option>
            </select>
            <label class="error">State is required</label>
    </div>  
    
    <div class="input-box col-sm-6">
        <label for="City"><b> City: </b>
        <span class="teer"> * </span>
            <select onchange="cvalidation()" name="city" id="citi">
            <option value="Select City">Select City</option>
                <option value="Surat">Surat</option>
                <option value="Bharuch">Bharuch</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Navsari">Navsari</option>
                <option value="Vadodara">Vadodara</option>
                <option value="Surendranagar">Surendranagar</option>
                <option value="Porbandar">Porbandar</option>
                <option value="Rajkot">Rajkot</option>
                <option value="Patan">Patan</option>
                <option value="Bhavnagar">Bhavnagar</option>
                <option value="Gandhinagar">Gandhinagar</option>    
            </select>

            <label class="error">City is required</label>
        </label>     
    </div>
</div>
<br />

<div class="row mt-2"> 
            <span name="gender" id="gen"><b> Gender: </b> 
            <span class="teer"> * </span>        
                <div class="gender-category col-sm-12">
                    <input onchange="gvalidation()" type="radio" name="gender" id="male" value="1">
                        <label for="male"> Male
                            <span class="checkmark"></span>
                        </label>
                    <input onchange="gvalidation()" type="radio" name="gender" id="female" value="2">
                        <label for="female"> Female 
                        </label>
                </div>
                <label class="error">Choice is required</label>
</div>   
<br />         

            <div class="input-box">
                <label><b> Username: </b>
                <span class="teer"> * </span>
                    <input type="text" onkeyup="uvalidation()" class="form-control" id="un" name="uname" placeholder="Username">
                    <label class="error">Username is required</label>
                </label>
            </div>
<br />

            <div class="row mt-2">            
            <div class="input-box col-sm-6">
                <label> <b> Password: </b>
                <span class="teer"> * </span>
                      <input type="password" onkeyup="pvalidation()" class="form-control" id="pwd" name="pass" value="" placeholder="Password">
                      <label class="error">Correct password is required</label>
                </label>
            </div>

            <div class="input-box col-sm-6">
                <label> <b> Confirm-password: </b>
                <span class="teer"> * </span> 
                    <input type="password" onkeyup="cpvalidation()" class="form-control" id="cpwd" name="confirm" value="" placeholder="Confirm-Password">
                    <label class="error">Confirm password is required</label>
                </label>
            </div>
</div>
<br />
            <div class="box col-sm-6">
                <label class="form-label"> <b>Upload Image: </b>
                <span class="teer"> * </span> 
                <img src="./uploads/" id="img">
                <input  onchange="picvalidation()" class="form-control" id="formFileLg" type="file" name="pic" value="<?php echo $filename; ?>">
                <label class="error">Please Upload an Image</label>
                </label>
            </div>  

            <div class="button-container">
                <button type="button" class="btn btn-success" onclick="validation()" value="submit" name="submit">Submit</button>

                <button type="reset" class="btn btn-danger" value="reset" style="background-color:red">Reset</button>

                <button type="submit" style="display:none" name="submit" id="studentbtn"></button>

            </div>

            
    </form>
</div>
</center>
    
    <script>
        function validation()
        {
            fnvalidation();
            flvalidation();
            evalidation();
            phvalidation();
            stvalidation();
            cvalidation();
            gvalidation();
            uvalidation();
            pvalidation();
            cpvalidation();
            picvalidation();

             if(fnvalidation() && flvalidation() && evalidation() && phvalidation() && stvalidation() && cvalidation() && gvalidation() && uvalidation() && pvalidation() && cpvalidation() && picvalidation())
            {
                 document.getElementById("studentbtn").click();
            }
        
        }

        function fnvalidation()
        {
            let fname = document.getElementById("fname").value;
            let ferror = document.getElementsByClassName("error");

            if(fname == '')
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

        function  flvalidation()
        {
            let lname = document.getElementById("lname").value;
            let ferror = document.getElementsByClassName("error");

            if(lname == '')
            {
                ferror[1].style="display:block";
                return false;
            }
            else
            {
                ferror[1].style="display:none";
                return true;
            }
        }

        function  evalidation()
        {
            let email = document.getElementById("email").value;
            let ferror = document.getElementsByClassName("error");

            if(email == '')
            {
                ferror[2].style="display:block";
                return false;
            }
            else
            {
                ferror[2].style="display:none";
                return true;
            }
        }

        function phvalidation()
        {
            let phnumber = document.getElementById("ph").value;
            let ferror = document.getElementsByClassName("error");

            if(phnumber == '')
            {
                ferror[3].style="display:block";
                return false;
            }
            else
            {
                ferror[3].style="display:none";
                return true;
            }
        }

        function stvalidation()
        {
            let state = document.getElementById("st").value;
            let ferror = document.getElementsByClassName("error");

            if(state == 0)
            {
                ferror[4].style="display:block";
                return false;
            }
            else
            {
                ferror[4].style="display:none";
                return true;
            }
        }

        function cvalidation()
        {
            let city = document.getElementById("citi").value;
            let ferror = document.getElementsByClassName("error");

            if(city == 0)
            {
                ferror[5].style="display:block";
                return false;
            }
            else
            {
                ferror[5].style="display:none";
                return true;
            }
        }

        function gvalidation()
        {
            let male = document.getElementById("male");
            let female = document.getElementById("female");
            let ferror = document.getElementsByClassName("error");

            if(male.checked || female.checked) 
            {
                ferror[6].style="display:none";
                return true;
            }
            else
            {
                ferror[6].style="display:block";
                return false;
            }
        }

        function uvalidation()
        {
            let uname  = document.getElementById("un").value;
            let ferror = document.getElementsByClassName("error");

            if(uname == '')
            {
                ferror[7].style="display:block";
                return false;
            }
            else
            {
                ferror[7].style="display:none";
                return true;
            }
        }

        function pvalidation()
        {
            let pass = document.getElementById("pwd").value;
            let ferror = document.getElementsByClassName("error");

            if(pass == '')
            {
                ferror[8].style="display:block";
                return false;
            }
            else
            {
                ferror[8].style="display:none";
                return true;
            }
        }
        
        function cpvalidation()
        {
            let confirm = document.getElementById("cpwd").value;
            let ferror = document.getElementsByClassName("error");

            if(confirm == '')
            {
                ferror[9].style="display:block";
                return false;
            }
            else
            {
                ferror[9].style="display:none";
                return true;
            }
        }

        function  picvalidation()
        {
            let pic = document.getElementById("formFileLg").value;
            let ferror = document.getElementsByClassName("error");

            if(pic == '')
            {
                ferror[10].style="display:block";
                return false;
            }
            else
            {
                ferror[10].style="display:none";
                return true;
            }
        }
        </script>
</body>
</html>