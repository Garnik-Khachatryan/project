
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body class="blog-posts">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container align-center">
          <a class="navbar-brand" href="#">
            <img src="img/logo.svg" />
          </a>
          <button
            class="navbazr-toggler"
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" href="./contact.html">Contact</a>
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
    <main class="contact">
      <div class="container">
        <div class="inner">
          <div class="img-block">
            <img src="img/img.png" alt="contact us" />
          </div>
          <div class="right-block">
            <h1>Contact Us</h1>
            <div class="flex">
              <div class="form-block">
                <form class="" action="" method="post">
                  <div class="inp">
                    <label for="full_name">Full Name</label>
                    <input
                      id="full_name"
                      type="text"
                      name="full_name"
                      value=""
                    />
                  </div>
                  <div class="inp">
                    <label for="email">E-mail</label>
                    <input id="email" type="text" name="email" value="" />
                  </div>
                  <div class="inp">
                    <label for="message">Message</label>
                    <input id="message" type="text" name="message" value="" />
                  </div>
                  <button type="submit" name="button">Contact Us</button>
                </form>
              </div>
              <div class="social-block">
                <div class="info">
                  <div class="social">
                    <b>Contact</b>
                    <span>hi@green.com</span>
                  </div>
                  <div class="social">
                    <b>Based in</b>
                    <span>New York,<br />California, Ohio</span>
                  </div>
                </div>
                <div class="icons">
                  <a href="#"><img src="img/fb.png" alt="fb" /></a>
                  <a href="#"><img src="img/insta.png" alt="insta" /></a>
                  <a href="#"><img src="img/twitter.png" alt="twitter" /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
  <footer>
    <div class="container"></div>
  </footer>
</html>
