<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("../include/analyticstracking.php"); ?>
    <title>Game of Life Canvas</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon2.ico">
    <link rel="stylesheet" href="../css/style.css" media="screen">
    <link rel="stylesheet" href="../css/media-queries.css" media="screen">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/project.js"></script>
    <script src="../js/vendor/processing-1.4.1.min.js"></script>
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
        <div id="8" class="title">
          Game of Life Canvas
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <canvas data-processing-sources="gol_canvas/GoL_canvas.pde gol_canvas/Board.pde gol_canvas/Cell.pde "></canvas>
        </figure>
        <summary>
          <p class="quote">&quotThe Game of Life, also known simply as Life, is a cellular automaton devised by the British mathematician John Horton Conway in 1970.
The "game" is a zero-player game, meaning that its evolution is determined by its initial state, requiring no further input. One interacts with the Game of Life by creating an initial configuration and observing how it evolves.&quot</p>
          <p class="ref"><a href="http://en.wikipedia.org/wiki/Conways_Game_of_Life" target="_blank">en.wikipedia.org/wiki/Conways_Game_of_Life</a></p>
          <br>
          <p>The canvas above turns the zero-player game into an interactive experience. </p>
          <p>Draw in the canvas and use SPACE to start the automaton.</p> 
          <p>Hit &quot?&quot for instructions.</p>
        </summary>
      </section> <!-- /project -->
      <?php
        require_once("../include/footer.php");
      ?>
    </div> <!-- container -->
  </body>
</html>
