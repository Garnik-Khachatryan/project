<?php
  $link=mysqli_connect('localhost','root','','projectdb');
  $id = isset($_GET['id']) ? $_GET['id'] : null;
    $query = "SELECT * FROM cat_table  where categorie_id='$id'";
    $res =mysqli_query($link,$query);
  $updateTitle;
  while($row=mysqli_fetch_array($res)){ 
    $updateTitle=$row['title'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add Categoire</title>
    <style>
        label{
            font-size:25px;
        }
    </style>
</head>
<body>
<h1 class="text-center text-warning m-3">Update Categories</h1>
<form action="updateCatRequest.php" method="post" class="w-50 m-auto m-3" >
    <div class="form-group" >
        <label for="title" class="text-warning">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $updateTitle?>">
    </div>
    <div>
        <button class="btn btn-outline-warning" name="updateCat">Update  Categorie</button>
        <input type="hidden" name="categorie_id" value=<?php echo $id ?>>
    </div>
</form>
</body>
</html>