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
        <div id="1" class="title">
          Human Computation in <br> Online Video Storytelling
        </div>
        <a class="nav next" href="#">&gt;</a>
      </header>
      <section class="project">
        <figure>
          <a href="../downloads/human_computation_in_online_video_storytelling.pdf" target="_blank">
            <img src="../images/1b.png" alt="Human Computation in Online Video Storytelling">
            <div class="instruction">click to download</div>
          </a>
        </figure>
        <summary>
          <p>Tasks like retrieval, filtering and reconfiguration of digital video are difficult to solve using current computational techniques. An important cause of this difficulty is the semantic gap between visual representations and the meaning we address to them. A solution commonly sought in AI research is to reduce the gap by feature extraction followed by supervised learning of semantical concepts that are labelled to content. These methods often fail to work both reliably and generally on the unpredictable content found in the large video libraries of user-generated content that account for much of the internet traffic these days.</p>
          <p>Another way of hunting down meaning in visual content is to step over the gap alto- gether and ask people for a meaningful interpretation one wishes to acquire for an item of content. By accessing many people’s interpretations in small bite-sized tasks, collectively grounded annotations can be established. This form of accessing human computational power has seen a major increase in attention and application, for a large part because of the increased connectivity of individuals to the internet and the surging amount of visual content that is uploaded to the web.</p>
          <p>This thesis investigates how tasks involving meaningful interpretation of video content can benefit from the use of human computation. In order to test the validity of these approaches ‘wePorter’ is developed, a system with the purpose of finding local intervals of interest within videos in a set of topically related content. We also investigate how such a system can be used for reconfiguration of content into new and informative stories. We introduce ‘parallel play’ as a useful method for user interest elicitation in time-based media and present our results of reconfiguration of video parts, filtered based on users’ attentional data. Initial user evaluation shows that the content selected by our filtering methods is evaluated as relatively interesting and preferable compared to segments that the system indicates as less interesting.</p>
        </summary>
      </section> <!-- /project -->
        
      <?php
        require_once("../include/footer.html");
      ?>
    </div> <!-- container -->
  </body>
</html>
