<footer>
  <p>&copy; <?php echo date('Y')?> Philo van Kemenade</p>
  <?php
    // if project: include tweet button 
    $url = $_SERVER['REQUEST_URI']; //returns the current URL    
    if (strpos($url, "/projects/") === false) {
    }
    else {
      echo(
        '<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-dnt="true" data-count="none" data-via="phivk">Tweet this</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>'
        );
    }
  ?>
  
  <a href="https://twitter.com/phivk" class="twitter-follow-button" data-show-count="false" data-lang="en" data-dnt="true">Follow @phivk</a>
  
  <br/>
  <br/>
  
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</footer>

