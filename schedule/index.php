<?php

include '../functions.class.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>AAA Dodgeball</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
  </head>
  <body style="margin-top: 80px;">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">AAA Dodgeball</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="../">Home</a></li>
            <li><a href="../standings/">Standings</a></li>
            <li class="active"><a href="">Schedule</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <h1>League Schedule</h1>
      <hr>
      <div class="row">
        <?php getPools(); ?>
      </div>
  <table class="table table-borderaed" style="margin-top: 50px;">
    <thead>
      <tr>
        <th>Game #</th>
        <th>Date</th>
        <th>Time</th>
        <th>Home</th>
        <th>Away</th>
      </tr>
    </thead>
    <tbody>
        <?php getGames(); ?>
    </tbody>
  </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>