<?php

require '../../../functions.class.php';

global $conn;
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

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
            <li><a href="../game/">Add Game</a></li>
            <li class="active"><a href="">Add Score <span class="sr-only">(current)</span></a></li>
            <li><a href="../team/">Add Team </a></li>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add New Game Score</h1>
          <div class="row">
            <form action="run.php" method="POST"> 
                <div class="col-md-4">
                <label for="win">Winner:</label>
                <?php
                  $result = mysqli_query($conn, "SELECT * FROM `teams`");
                  echo "<select name='win'>";
                  echo "<option value='0'>-Select-</option>";
                  while($row = mysqli_fetch_array($result)) {
                      echo "<option value='".$row['TID']."'>".$row['NAME']."</option>";
                  }
                  echo "</select>";
                ?>
              </div>
              <div class="col-md-4">
                <label for="lose">Loser:</label>
                <?php
                  $result = mysqli_query($conn, "SELECT * FROM `teams`");
                  echo "<select name='lose'>";
                  echo "<option value='0'>-Select-</option>";
                  while($row = mysqli_fetch_array($result)) {
                      echo "<option value='".$row['TID']."'>".$row['NAME']."</option>";
                  }
                  echo "</select>";
                ?>
              </div>
             <input class="btn btn-default" type="submit" value="Submit">
              </form>
            </div>




         <!-- <div class="row">
            <form action="run.php" method="POST">
              <div class="col-md-4">
                <label for="game">Game #:</label>
                <?php
                  $result = mysqli_query($conn, "SELECT `GNUM` FROM `schedule`");
                  echo "<select name='game'>";
                  echo "<option value='0'>-Select-</option>";
                  while($row = mysqli_fetch_array($result)) {
                      echo "<option value='".$row['GNUM']."'>".$row['GNUM']."</option>";
                  }
                  echo "</select>";
                ?>
                <br>
                
              </div>
              <div class="col-md-4">
                <label for="win">Winner:</label>
                <?php
                  $result = mysqli_query($conn, "SELECT * FROM `teams`");
                  echo "<select name='win'>";
                  echo "<option value='0'>-Select-</option>";
                  while($row = mysqli_fetch_array($result)) {
                      echo "<option value='".$row['TID']."'>".$row['NAME']."</option>";
                  }
                  echo "</select>";
                ?>
              </div>
              <div class="col-md-4">
                <label for="lose">Loser:</label>
                <?php
                  $result = mysqli_query($conn, "SELECT * FROM `teams`");
                  echo "<select name='lose'>";
                  echo "<option value='0'>-Select-</option>";
                  while($row = mysqli_fetch_array($result)) {
                      echo "<option value='".$row['TID']."'>".$row['NAME']."</option>";
                  }
                  echo "</select>";
                ?>
              </div>
              <input type="submit" value="Submit">
            </form>    
          </div>-->     
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
  
  </body>
</html>
