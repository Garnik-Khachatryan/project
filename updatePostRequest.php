<?php 
$link=mysqli_connect('localhost','root','','projectdb');
if (isset($_POST['update_post_submit']))
{
    $postTitle=$_POST['update_title'];
    $postContent=$_POST['update_content'];
    $target_dir="upload/";
    $img_name=$_FILES['updateImg']['name'];
    $img_tmp_name=$_FILES['updateImg']['tmp_name'];
    $target_file = basename($img_name);
    move_uploaded_file( $_FILES['updateImg']['tmp_name'], $target_file);
    $query = "UPDATE post_table SET `title` = '$postTitle', `content` = '$postContent', `img` = '$target_file' WHERE `id` = ". $_POST['id'];
    $res = mysqli_query($link,$query)or die(mysqli_connect_error($link));;
    echo "<script>alert('Success')</script>";
}
?>