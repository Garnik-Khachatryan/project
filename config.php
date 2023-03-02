<?php 
 
  $link=mysqli_connect('localhost','root','','projectdb');
  $create_db="CREATE DATABASE IF NOT EXISTS projectdb";
  $create_db_query=mysqli_query($link,$create_db)or die(mysqli_error($link));

  $create_admin="CREATE TABLE IF NOT EXISTS admin(
             id int not null  AUTO_INCREMENT,
             name varchar(55),
             email varchar(55),
             password varchar(55),
             PRIMARY KEY (id)

  )";
  $create_admin_query=mysqli_query($link,$create_admin);

  $create_category="CREATE TABLE IF NOT EXISTS cat_table(
           categorie_id int not null AUTO_INCREMENT,
           title varchar(55),
           PRIMARY KEY(categorie_id)
   
  )";
  $create_category_query=mysqli_query($link,$create_category);

  $insert_admin="INSERT INTO admin(name,email,password) values('root','root@mail.ru','root')";
  $insert_admin_query=mysqli_query($link,$insert_admin)or die(mysqli_error($link));

  $create_post="CREATE TABLE IF NOT EXISTS post_table(
        id int not null AUTO_INCREMENT,
        title varchar(55),
        content varchar(255),
        img varchar(55),
        PRIMARY KEY(id),
        catID int FOREIGN KEY REFERENCES cat_table(categorie_id)
  )";

  $create_post_query=mysqli_query($link,$create_post);

?>