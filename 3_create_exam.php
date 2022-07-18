<?php
require('dbconnection.php');
if(isset($_POST['btn_sub'])){
    $title=$_POST['title'];
    
    $query=" INSERT INTO exams(title) values('$title')";
    $exec_query=mysqli_query($connection,$query);
}
if($exec_query){
    header('location:4_add_question.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            margin-left:40px;
            margin-top:70px;
 }
button{
    color:black;
}
        </style>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="style1.css">
<body>
<h1>ADD STUDENTS(ADMIN)</h1>
<form method="POST">
    <div class="main">
        <div class="div1">
            <a href="2_admin.php"><h4>ADD STUDENT</h4>
           <h4>CREATE EXAM</h4></a>
        </div>
        <div class="div2">
       <H1>CREATE EXAM</H1>
            <label>title</label>
            <input type="text" name="title">
            <button type="submit" name=" btn_sub"class="btn btn-primary">submit</button>
</div>

</form>
