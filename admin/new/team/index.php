<?php

require '../../../functions.class.php';
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

    <title>Add Team - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/bootstrap-theme.css" rel="stylesheet">
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
          <a class="navbar-brand" href="../../">AAA Dodgeball</a>
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
            <li><a href="../../">Standings</a></li>
            <li><a href="../../schedule/">Schedule</a></li>
            <li><a href="../../teams/">Teams</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="../new/game/">Add Game</a></li>
            <li><a href="../new/score/">Add Score</a></li>
            <li class="active"><a href="">Add Team <span class="sr-only">(current)</span></a></li>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add New Dodgeball Team</h1>
            <form class="form-horizontal" method="post" action="run.php">
              <fieldset>


              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">Team Name*</label>  
                <div class="col-md-6">
                <input id="name" name="NAME" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>
              <hr>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player1">Member One*</label>  
                <div class="col-md-6">
                <input id="player1" name="MEM1" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player2">Member Two*</label>  
                <div class="col-md-6">
                <input id="player2" name="MEM2" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player3">Member Three*</label>  
                <div class="col-md-6">
                <input id="player3" name="MEM3" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player4">Member Four*</label>  
                <div class="col-md-6">
                <input id="player4" name="MEM4" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player5">Member Five*</label>  
                <div class="col-md-6">
                <input id="player5" name="MEM5" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player6">Member Six*</label>  
                <div class="col-md-6">
                <input id="player6" name="MEM6" type="text" placeholder="" class="form-control input-md" required="">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player7">Member Seven</label>  
                <div class="col-md-6">
                <input id="player7" name="MEM7" type="text" placeholder="" class="form-control input-md">
                  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="player8">Member Eight</label>  
                <div class="col-md-6">
                <input id="player8" name="MEM8" type="text" placeholder="" class="form-control input-md">
                  
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </fieldset>
              </form>

             
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
  
  </body>
</html>
