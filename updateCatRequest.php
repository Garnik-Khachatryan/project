<?php 
$link=mysqli_connect('localhost','root','','projectdb');
$catTitle=$_POST['title'];
$query = "UPDATE cat_table SET `title` = '$catTitle' WHERE `categorie_id` = ". $_POST['categorie_id'];
$res = mysqli_query($link,$query)or die(mysqli_connect_error($link));
echo "<script>alert('Success')</script>";
?>