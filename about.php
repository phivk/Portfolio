<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Philo</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon2.ico">
    <link rel="stylesheet" href="./css/style.css" media="screen">
    <link rel="stylesheet" href="css/media-queries.css"
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  </head>
  <body>
    <?php
      require_once("./include/nav_bar.php");
    ?>
    <div class="page_container">
      <header class="pageHeader">
        About
      </header>
      <section class="light link_underline link_hover_red textBackground">
        <p>Hi, my name is Philo. I'm currently living in London, where I graduated from the MSc Cognitive Computing at Goldsmiths College. I'm originally from Amsterdam, where I studied Artificial Intellingence and got into <a href="http://vimeo.com/phillchill" target="_blank">filmmaking</a>.</p> 
        <p>I came to London to merge my expertise in AI with my passion for video and work on ways to use online interaction data to <a href="/projects/human_computation.php" target="_blank">filter and reconfigure</a> large collections of user-generated video.</p>
        <p>I am interested in innovative ways of telling stories online through video, images, text and sound and like to play with <a href="http://popcornjs.org/" target="_blank">technologies</a> that enable new opportunities. I like to think about how technology can support learning and teaching and like to <a href="http://picniclondon.tumblr.com" target="_blank">share my skills</a> with people around me.</p>
        <p>I love cycling and walking on my hands.</p>
        
      </section>
      <?php
        require_once("./include/footer.html");
      ?>
    </div> <!-- container -->
  </body>
</html>
