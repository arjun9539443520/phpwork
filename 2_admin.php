<?php
require('dbconnection.php');
if(isset($_POST['btn_sub'])){
    $admin_name=$_POST['_name'];
    $admin_username=$_POST['_username'];
    $admin_password=$_POST['_password'];
    $admin_confirm_password=$_POST['_confirm_password'];
    $query="insert into admin(_name,_username,_password,_confirm_password) values('$admin_name', '$admin_username','$admin_password','$admin_confirm_password')";
    $exec_query=mysqli_query($connection,$query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style1.css">
<body>
<h1>ADD STUDENTS(ADMIN)</h1>
<form method="post">
    <div class="main">
        <div class="div1">
            <h4>ADD STUDENT</h4>
            <a href="3_create_exam.php"><h4>CREATE EXAM</h4></a>
        </div>
        <div class="div2">
            <H3>ADD STUDENT</H3>
           <table>
            <tr>
                <th>name</th>
                
                <td><input type="text" name="_name" id="name" required></td>
                
</tr>
<tr>
<th>username</th>
                <td><input type="text" name="_username" id="username" required></td>
               
</tr>
<tr>
<th>password</th>
                <td><input type="password" name="_password" id="password" required></td>
               
</tr>
<th>confirm password</th>
                <td><input type="password" name="_confirm_password" id="confirm" required></td>
               
</tr>
</table>
<button type="buttton" name="btn_sub" id="button" onclick="validate()">submit</button>
</form>
            
          
            
           
    </div>
    

</body>
</html>