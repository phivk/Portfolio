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
        <div id="4" class="title">
          Servo Automaton
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <iframe src="http://player.vimeo.com/video/41533040?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=aa1111" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </figure>
        <summary>
          <p>Cellular Automata (CA) are mathematical models of complex natural systems. The models consist of a group of identical components who's behaviour is determined by local interactions with neighbouring components. Each component has a current state that is updated synchronously along with the states of all other components. For this update, components use identical rules that determine the next state depending on one's own state and that of their neighbours.</p>
          <p>Although these systems are defined by simple local rules, it has been shown that CA have the capacity to show different classes of complex behaviour. This project uses a three-piece modular robotic installation to enact these different classes of CA behaviour in physical space.</p>
        </summary>
      </section> <!-- /project -->
      <?php
        require_once("../include/footer.html");
      ?>
    </div> <!-- container -->
  </body>
</html>
