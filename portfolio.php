<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philo van Kemenade</title>
    <?php require_once("include/head_styling.php"); ?>
    <?php require_once("include/analyticstracking.php"); ?>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/portfolio.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
      require_once("./include/nav_bar.php");
    ?>    
    <div class="container">
      <header>
        <div class="title light">
          Philo van Kemenade
        </div>
      </header>
      <nav id="project_nav">
        <ul class="link_light_trans link_hover_red_trans">
          <li id="all">All</li>
          <li id="research">Research</li>
          <li id="video">Video</li>
          <li id="storytelling">Storytelling</li>
          <li id="technology">Creative Technology</li>
          <li id="interactive">Interactive</li>
        </ul>
      </nav>    
      
      <section class="work">
        <figure class="interactive storytelling video">
          <a href="./projects/popathon.php">
            <img src="images/popathon.png" alt="Popathon" />
            <dl>
              <dt>Title</dt>
                <dd>Popathon</dd>
              <dt>What</dt>
                <dd>Web-native Storytelling Hackathon</dd>
            </dl>
          </a>
        </figure>
        <figure class="technology interactive">
          <a href="./projects/game_of_life_canvas.php">
            <img src="images/gol_canvas.png" alt="game of life canvas" />
            <dl>
              <dt>Title</dt>
                <dd>Game of Life Canvas</dd>
              <dt>What</dt>
                <dd>Interactive Application</dd>
            </dl>
          </a>
        </figure>
        <figure class="video storytelling interactive">
          <a href="./projects/interactive_video.php">
            <img src="images/7.png" alt="popcorn" />
            <dl>
              <dt>Title</dt>
                <dd>Interactive Video with Popcorn</dd>
              <dt>What</dt>
                <dd>Workshop</dd>
            </dl>
          </a>
        </figure>
        <figure class="research video storytelling interactive">
          <a href="./projects/human_computation.php">
            <img src="images/1.png" alt="human computation" />
            <dl>
              <dt>Title</dt>
                <dd>Human Computation in Online Video Storytelling</dd>
              <dt>What</dt>
                <dd>MSc Dissertation</dd>
            </dl>
          </a>
        </figure>
        <figure class="research storytelling interactive">
          <a href="./projects/story_to_go.php">
            <img src="images/2.png" alt="a story to go" />
            <dl>
              <dt>Title</dt>
                <dd>A story to go, please</dd>
              <dt>What</dt>
                <dd>ICIDS 2010 Publication</dd>
            </dl>
          </a>
        </figure>
        <figure class="research video">
          <a href="./projects/predicting_propagation.php">
            <img src="images/3.png" alt="predicting video propagation" />
            <dl>
              <dt>Title</dt>
                <dd>Predicting the Propagation of Online Video Content on Twitter</dd>
              <dt>What</dt>
                <dd>BSc Thesis</dd>
            </dl>
          </a>
        </figure>
        <figure class="technology interactive">
          <a href="./projects/cellular_automaton.php">
            <img src="images/4.png" alt="servo automaton" />
            <dl>
              <dt>Title</dt>
                <dd>Cellular Automaton</dd>
              <dt>What</dt>
                <dd>Robotic Installation</dd>
            </dl>
          </a>
        </figure>
        <figure class="technology interactive">
          <a href="./projects/emergenes.php">
            <img src="images/5.png" alt="emergenes" />
            <dl>
              <dt>Title</dt>
                <dd>emerGenes</dd>
              <dt>What</dt>
                <dd>Interactive Application</dd>
            </dl>
          </a>
        </figure>
        <figure class="video storytelling">
          <a href="./projects/the_essence.php">
            <img src="images/6.png" alt="the essence" />
            <dl>
              <dt>Title</dt>
                <dd>Amsterdam... the Essence</dd>
              <dt>What</dt>
                <dd>Video Production</dd>
            </dl>
          </a>
        </figure>
        
 
        
      </section>
      <?php
        require_once("./include/footer.php");
      ?>
    </div> <!-- container -->
  </body>
</html>
