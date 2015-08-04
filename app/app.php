<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Job_Opening.php";

  $app = new Silex\Application();

  $app->get("/", function() {
    return "PUT FORM HERE";
  });

  $app->get("/Job_opening", function() {
    return "OTHER HTML HERE";
  });

 ?>
