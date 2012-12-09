<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philo's Portfolio</title>
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
        <div id="5" class="title">
          emerGenes
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <iframe src="http://player.vimeo.com/video/33847100?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=aa1111" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </figure>
        <summary>          
          EmerGenes is an application that lets users discover the influence of three simple rules on the behaviour of a flock of artificial creatures. The creatures, called boids, face attractive and repulsive forces from the rules that are so to speak coded in their genes. By altering the influence of each rule on the behaviour of the boids, users discover how complex patterns can emerge from simple rules and the configuration thereof. The colour of each of the creatures is determined by the influence the rules have on its current behaviour.
        </summary>
      </section> <!-- /project -->
      <?php
        require_once("../include/footer.html");
      ?>
    </div> <!-- container -->
  </body>
</html>
