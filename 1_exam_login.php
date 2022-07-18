<?php
require('dbconnection.php');
$msg='';

if(isset($_POST['btn_save'])){
    $stud_username=$_POST['username'];
    $stud_password=$_POST['password'];
    $query="SELECT * FROM admin WHERE _username='$stud_username' and _password='$stud_password'";
    $exec_query=mysqli_query($connection,$query);
    if(mysqli_num_rows($exec_query)>0){
        $userdata=mysqli_fetch_array($exec_query);
        header('location:5_student_home_page.php');
        session_start();
        $_SESSION['userid']=$userdata[4];


    }
    else{
   $msg ="error";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
 <form action="" method="post">
    <h1>login</h1>
    <label>username</label>
    <input type="text" name="username"><br><br>
    <label>password</label>
    <input type="password" name="password"><br><br>    <button name="btn_save">login</button>
</form>
<?php 
 echo $msg; 
?>

</div>
</body>
</html>