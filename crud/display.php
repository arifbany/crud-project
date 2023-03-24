<?php 
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <div class="container">
    <button type="button" class="btn btn-secondary my-5">
        <a href="user.php"class="text-light">ADD USER</a>
    
            
    
    
    </button>

    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql ="select * from curd";
    $result=mysqli_query($con,$sql);
    if($result){
       while( $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
     <td>
     <button  class="btn btn-outline-secondary"><a href="update.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
     <button class="btn btn-outline-danger"> <a href="delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
     </td>

      </tr>';
       }
        
    }
    ?>


  </tbody>
</table>
    </div>
    
</body>
</html>