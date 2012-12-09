<?php
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'portfolio.html';
  header("Location: http://$host$uri/$extra");
  exit;
?>