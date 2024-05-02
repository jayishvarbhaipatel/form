<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Upload</title>

    <style>

    .h2
    {
        color:red;
    }

    .box
    {
        height:50vh;
        width:40%;
        margin:100px;
        padding:50px;
        justify-content:center;
        align-items:center;
        background:lightgreen;
        border:2px solid black;
        border-radius:50px;
    }

    .btn
    {
        border-radius:10px;
        position:relative;
        padding:10px;
    }
    </style>
</head>
<body>
    
<center>
    <form action="file_upload.php" method="POST" enctype="multipart/form-data">
        <div class="box">
            <h2>Upload Image</h2>
                <hr>
                <div class="input-box ">
                <label class="form-label"> <b>Upload Image: </b>
                <span class="teer"> * </span> 
                <input  onchange="picvalidation()" class="form-control" id="formFileLg" type="file" name="pic">
                <label class="error">Please Upload an Image</label>
                </label>
            </div>
                    <br>
                        <button id="btn" type="submit" class="btn btn-success" name="submit">Submit</button>
                        <button id="btn" type="cancle" class="btn btn-danger" name="cancle">Cancle</button>
                        <button type="submit" style="display:none" name="submit" id="studentbtn"></button>
        </div>
    </form>
</center>

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
</body>
</html>