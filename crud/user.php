
<?php
 include 'connect.php';


 if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into  curd(name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo"data inserted successfully";
        header('location:display.php');
    }
    else {
        die (mysqli_error($con));
    }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" >
    <link href="style.css" rel="stylesheet" type= "text/css">
    <title>crud operation</title>
</head>
<body>


    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label >NAME</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name"required="true" autocomplete="off">

                
            </div>
            <div class="form-group">
                <label >EMAIL</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">

                
            </div>
            <div class="form-group">
                <label >MOBILE</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">

                
            </div>
            <div class="form-group">
                <label >PASSWORD</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">

                
            </div>
            <button type="submit" class="btn btn-primary"name="submit"> submit</button>
        </form>
     
    </div>

</body>
</html>
