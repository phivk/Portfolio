<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Video with Popcorn</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon2.ico">
    <link rel="stylesheet" href="../css/style.css" media="screen">
    <link rel="stylesheet" href="../css/media-queries.css" media="screen">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/project.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
      require_once("../include/nav_bar.php");
    ?>
    <div class="container light link_hover_red">
      <header>
        <a class="nav prev" href="#">&lt;</a>
        <div id="7" class="title">
          Interactive Video with Popcorn
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <iframe src='http://popcorn.webmadecontent.org/u8h_' width='640' height='403' frameborder='0' mozallowfullscreen webkitallowfullscreen allowfullscreen></iframe>
        </figure>
        <summary>
          Together with Gilles Pradeau, I organised a workhop about interactive and dynamic video using Mozilla's <a class="link_underline" href="https://popcorn.webmaker.org/">Popcorn Maker</a> and <a href="http://popcornjs.org/">Popcorn.js</a>. See what we got up to in the Popcorn video above or check out the slides below.
        </summary>
        <p><iframe src="http://www.rvl.io/phillchill/getting-started-with-popcorn/embed/" width="640" height="426"></iframe></p>
      </section> <!-- /project -->
      <?php
        require_once("../include/footer.php");
      ?>
    </div> <!-- container -->
  </body>
</html>
