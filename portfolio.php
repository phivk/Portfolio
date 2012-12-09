<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philo's Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon2.ico">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="css/media-queries.css" media="screen">
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
        <ul>
          <li id="all">All</li>
          <li id="research">Research</li>
          <li id="video">Video</li>
          <li id="storytelling">Storytelling</li>
          <li id="technology">Creative Technology</li>
        </ul>
      </nav>    
      
      <section class="work">
        <figure class="research video storytelling">
          <a href="./projects/human_computation.php">
            <img src="images/1.png" alt="" />
            <dl>
              <dt>Title</dt>
                <dd>Human Computation in Online Video Storytelling</dd>
              <dt>What</dt>
                <dd>MSc Dissertation</dd>
            </dl>
          </a>
        </figure>
        <figure class="research storytelling">
          <a href="./projects/story_to_go.php">
            <img src="images/2.png" alt="" />
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
            <img src="images/3.png" alt="" />
            <dl>
              <dt>Title</dt>
                <dd>Predicting the Propagation of Online Video Content on Twitter</dd>
              <dt>What</dt>
                <dd>BSc Thesis</dd>
            </dl>
          </a>
        </figure>
        <figure class="technology">
          <a href="./projects/cellular_automaton.php">
            <img src="images/4.png" alt="" />
            <dl>
              <dt>Title</dt>
                <dd>Cellular Automaton</dd>
              <dt>What</dt>
                <dd>Robotic Installation</dd>
            </dl>
          </a>
        </figure>
        <figure class="technology">
          <a href="./projects/emergenes.php">
            <img src="images/5.png" alt="" />
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
            <img src="images/6.png" alt="" />
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
        require_once("./include/footer.html");
      ?>
    </div> <!-- container -->
  </body>
</html>
