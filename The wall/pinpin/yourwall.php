<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PINPIN.INC</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Pascal Kuiper 12851 || ">
  <meta name="copyright" content="Pascal Kuiper PinPin.Inc" />
  <meta name="keywords" content="Wall, MessageBoard, Pintrest" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="img/Pinpin_-_rgb_1000px.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="/path/to/masonry.pkgd.min.js"></script>

  <body>
    <header>
      <div class="container">

        <a href="index.php"><div class="logo"></div></a>

        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="yourwall.php">Your Wall</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="wrapper">
      <div class="form-wall">
        <h1 class="form2">YOUR WALL</h1>
        <form class="center" action="" method="POST" enctype="multipart/form-data"> <!-- Upload pictures -->
          <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
					<label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
        </form>

        <form class="form2" action="yourwall.php" method="post"> <!-- Image displaying -->
          <div class="">

          </div>
        </form>

      </div>
    </div>

    <!-- <footer class="bottom">

    </footer> -->
  </body>
</html>
