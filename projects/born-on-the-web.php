<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("../include/analyticstracking.php"); ?>
    <title>Born on the web - reFraming storytelling of the web</title>
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
        <div id="10" class="title">
          Born on the web
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <iframe src="//slid.es/phivk/born-on-the-web/embed" width="576" height="420" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </figure>
        <summary>
          <p>As part of Brighton Digital Festival I was invited by <a href="http://lighthouse.org.uk/" target="_blank">Lighthouse</a> to speak at their conference <a href="http://www.lighthouse.org.uk/programme/reframed-the-great-storyscape" target="_blank">reFramed Film - the Great Storyscape</a> about
            how technology allows for new forms of collaboration in independent filmmaking. In the talk I gave an explanation of what I mean with "web-native storytelling" and spoke about the way we are encouraging multidisciplinary collaboration with the <a href="http://popathon.org/" target="_blank">Popathon</a> activities.
          </p>
        </summary>
      </section> <!-- /project -->
      <?php
        require_once("../include/footer.php");
      ?>
    </div> <!-- container -->
  </body>
</html>
