  <?php 
      $link=mysqli_connect('localhost','root','','projectdb');
      $select_cat="SELECT * FROM cat_table";
      $select_cat_query=mysqli_query($link,$select_cat);
      $select_post="SELECT *FROM post_table";
      $select_post_query=mysqli_query($link,$select_post);
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="wraper blog-posts">
      <header>
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
                  <a class="nav-link" href="./contact.php">Contact</a>
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
        <section class="banner">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <h1>Hi, i’m Dasteen Front end dev</h1>
                <div class="banner-description">
                  <p>
                    On this blog I share tips and tricks, frameworks, projects,
                    tutorials, etc Make sure you subscribe to get the latest
                    updates
                  </p>
                </div>
                <form >
                  <div>
                    <input type="text" class="mail-input"/>
                    <button class="main-button">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="col-md-5">
                <img src="img/learn-coding.png" alt="hero" />
              </div>
            </div>
          </div>
        </section>
        <main class="container-fluid">
          <?php while($row=mysqli_fetch_array( $select_cat_query)):?>
                <h2><?= $row['title']?></h2>
           <?endwhile;?>
           <div class="d-flex content">
            <?php while($val=mysqli_fetch_array( $select_post_query)): ?>
              <div class="post-item p-3">
                <img src="<?= $val['img']?>">
                <h2><?= $val['title'];?></h2>
                <p><?= $val['content']; ?></p>
                <form action="" method="post" class="d-flex">
                  <a href="item.php?id=<?= $val['id'] ?>>" class="btn btn-outline-danger">Show</a>
                  <input type="hidden" name="item_id" value=<?php echo $id ?>>
                </form>
              </div>
            <?php endwhile; ?>
           </div>
           
        </main>
      
         
        <section class="subscribe d-flex justify-content-center">
          <div class="text-center">
            <div class="email-img">
              <img src="img/email.svg" alt="email" />
            </div>
            <p class="subscribe-title">Subscribe For the lastest updates</p>
            <p class="subscribe-subtitle">
              Subscribe to newsletter and never miss the new post every week.
            </p>
            <form>
              <div>
                <input type="text" class="mail-input"/>
                <button class="main-button">Subscribe</button>
              </div>
            </form>
          </div>
        </section>
      </main>
      <footer>
        <div class="container"></div>
      </footer>
    </div>
  </body>
</html>
