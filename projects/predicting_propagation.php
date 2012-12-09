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
        <div id="3" class="title">
          Predicting Propagation <br>
          of Video Content on Twitter
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <a href="../downloads/predicting_propagation_of_video_content_on_twitter.pdf" target="_blank">
            <img src="../images/3b.png" alt="Predicting Propagation of Video Content on Twitter">
            <div class="instruction">click to download</div>
          </a>
        </figure>
        <summary>
          <p>Online social networks have become widespread and increasingly popular. A common activity on these networks is sharing of content. Since the advent of social media host- ing sites, users have vast repositories of external content to share. For content creators interested in the impact of their work, prediction of the propagation of their content is a valuable asset.</p> 
          <p>In this thesis we work on predicting the spread of online video content on the social network Twitter. We take two perspectives in extracting information about videos and how they are shared. A feature-based model identifies the content and meta data of a video. Our propagation model describes how the sharing of a video develops over time. By indicating correlations between features of the video content on one side and characteristics of propagation patterns on the other, we show how videos spread differently depending on their category, length and age. We use these findings to form a non-linear prediction model, that forecasts social propagation of a video based on it’s features and an initial propagation period. Our evaluations show that using our description models in combination with extended initial periods, can yield results of predicting slightly under 90% of the instances in our experiment within a relative error margin of 20%.</p>
        </summary>
      </section> <!-- /project -->
        
      <?php
        require_once("../include/footer.html");
      ?>
    </div> <!-- container -->
  </body>
</html>
