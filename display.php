<?php
require('dbconnection.php');
$query="select * from admin";
$exec_query=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>name</td>
            <td>username</td>
            <td>password</td>
            <td>confirm</td>
</tr>
<?php
if (mysqli_num_rows($exec_query)>0){
    while($row=mysqli_fetch_assoc($exec_query)){
    

?>
<tr>
    <td><?php echo $row['_name'];?></td>
    <td><?php echo $row['_username'];?></td>
    <td><?php echo $row['_password'];?></td>
    <td><?php echo $row['_confirm_password'];?></td>
</tr>

<?php
    }
}
?>
</body>
</html>