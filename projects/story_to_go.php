<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("../include/analyticstracking.php"); ?>
    <title>A story to go, please</title>
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
        <div id="6" class="title">
          A story to go, please
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <a href="../downloads/ICIDS_nack2010.pdf" target="_blank">
            <img src="../images/2b.png" alt="A story to go, please">
            <div class="instruction">click to download</div>
          </a>
        </figure>
        <summary>
          In this paper we present an approach for an association- based story environment, in which a priori unrelated experiences repre- sented in images, are stitched together to guide users through interesting city spaces. We describe the associative stories generated by this system, and outline how the notion of 'hypespot' facilitates linking the real world with the structure of the story. We outline the overall architecture of the system and provide a generated story example.
        </summary>
      </section> <!-- /project -->
      
      <?php
        require_once("../include/footer.php");
      ?>
    </div> <!-- container -->
  </body>
</html>
