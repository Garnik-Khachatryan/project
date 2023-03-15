<?php 
     $link=mysqli_connect('localhost','root','','projectdb');
     $query = "SELECT * FROM post_table  WHERE `id` = ". $_POST['item_id'];
     $res = mysqli_query($link,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="blog-posts">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container align-center">
            <a class="navbar-brand" href="#">
              <img src="img/logo.svg" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end align-center"
              id="navbarNavDropdown"
            >
              <ul class="navbar-nav">
                <li class="nav-item mt-2">
                  <a class="nav-link active" aria-current="page" href="index.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link" href="#">About Me</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link" href="#">
                    <img src="img/icons/vector.svg" />
                    Search</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <button class="btn btn-md navbar-button">
                      <img src="img/icons/coffee.svg" />buy Me a Coffee
                    </button>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
          <main>
        <div class="container">
            <div class="container-heading mt-2">
                <h1>Page Name</h1>
            </div>
            <?php while($val=mysqli_fetch_array($res)):?>
                <div class="post-item p-3">
                    <img src="<?= $val['img']?>">
                    <h2><?= $val['title'];?></h2>
                    <p><?= $val['content']; ?></p>
                </div>
            <?php endwhile; ?>
      </main>
    <footer></footer>
</body>
</html>