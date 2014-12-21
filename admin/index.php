<?php

require '../functions.class.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Dashboard - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">AAA Dodgeball</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="">Standings <span class="sr-only">(current)</span></a></li>
            <li><a href="schedule/">Schedule</a></li>
            <li><a href="teams/">Teams</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="new/game/">Add Game</a></li>
            <li><a href="new/score/">Add Score</a></li>
            <li><a href="new/team/">Add Team</a></li>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">League Standings</h1>
          <div class="table-responsive">
            <table class="table table-striped">
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
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  
  </body>
</html>
