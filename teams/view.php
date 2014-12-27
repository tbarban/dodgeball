<?php

include '../functions.class.php';
$teamID = $_GET['id'];

?>
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
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
  </head>
  <body style="margin-top: 80px;">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <li><a href="../standings">Standings</a></li>
            <li><a href="../schedule/">Schedule</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    	<div class="row">
	    	<div class="col-md-8">
	    		<h1><?php getTeamName($teamID);?></h1><small><a href="../standings/">Return to Standings</a></small>
	    		<hr>
	    		<?php getPlayers($teamID);?>
	    	</div>
	    	<div class="col-md-4">
	    		<div class="well well-sm">
		          <h3>Team Record</h3>
		          <table class="table" style="text-align: center;">
		          	<?php getTeamRecord($teamID);?>
		      		</table>
		        </div>
	    	</div>
	    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>