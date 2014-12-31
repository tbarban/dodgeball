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
            <li class="active"><a href="">Standings</a></li>
            <li><a href="../schedule/">Schedule</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <h1>League Standings <small>Sorted by points</small></h1>
      <hr>
      <div class="row" style="margin-top: 50px;">
        <div class="col-md-8">
          <table class="table table-borderaed">
            <thead>
              <tr>
                <th>Team</th>
                <th>GP</th>
                <th>W</th>
                <th>L</th>
                <th>PTS</th>
                <th>W-L</th>
              </tr>
            </thead>
            <tbody>
                <?php getStandings(); ?>
            </tbody>
          </table>
        </div>
      <div class="col-md-4">
        <div class="well">
          <h3>Legend</h3>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <b>GP</b> - Games Played
            </div>  
            <div class="col-md-6">
              <b>W</b> - Wins
            </div>  
          </div>
          <div class="row" style="padding-top: 10px;">
            <div class="col-md-6">
              <b>L</b> - Losses
            </div>  
            <div class="col-md-6">
              <b>PTS</b> - Total Points
            </div>  
          </div>
          <div class="row" style="padding-top: 10px; padding-bottom: 20px;">
            <div class="col-md-6">
              <b>W-L</b> - Team Record
            </div>  
            <div class="col-md-6">
              <b>PTS</b> - 2 PTS per WIN
            </div>  
          </div>


        </div>

      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>