<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philo Elsewhere</title>
    <?php require_once("include/head_styling.php"); ?>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  </head>
  <body>
    <?php
      require_once("./include/nav_bar.php");
    ?>
    <div class="page_container">
      <header class="pageHeader">
        Me, elsewhere
      </header>
      <section class="light link_underline link_hover_red textBackground">
        <ul class="icons">
          <li><i class="icon-twitter"></i> <a href="https://twitter.com/phivk" target="_blank">Twitter</a></li> 
          <li><i class="icon-linkedin"></i> <a href="http://www.linkedin.com/in/philovk" target="_blank">LinkedIn</a></li> 
          <li><i class="icon-github"></i> <a href="https://github.com/phillchill" target="_blank">GitHub</a></li> 
          <li><i class="icon-film"></i> <a href="https://vimeo.com/phillchill" target="_blank">Vimeo</a></li> 
        </ul>
        
      </section>
      <?php
        require_once("./include/footer.php");
      ?>
    </div> <!-- container -->
  </body>
</html>
