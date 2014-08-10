<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="vishnu" >
    <link rel="shortcut icon" href="bootstrap-master/assets/ico/favicon.ico">

    <title>Leader Board</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-master/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-master/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-master/assets/js/ie10-viewport-bug-workaround.js"></script>
    <style>
    .bow
    {
    position:relative;
    left: 400px;
    top:-305px;
    }
    </style>
	<style>
	.down{
	position:relative;
	top:220px;	
	}

	.upper{
	position:relative;
	top:-220px;	
	}
	</style>    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Comparo</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="leaderboard.php">Leader Board</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
		
<div class="container">
<div class="col-md-2"></div>
<div class="col-md-8">

<br>
<br>

<?php
include('database.php');

$sql = "SELECT * from list ORDER BY rating DESC";
$result = mysqli_query($con,$sql);
$i = 0;
while($row = mysqli_fetch_array($result)) {
	
  $k = $row["name"];
  $p = trim($k);
  if(strlen($p) >= 4) {
	
  echo '<img height="200px" width="200px" src= "images/'.$row["name"];
  echo '">';
  echo "&nbsp&nbsp&nbsp";
   
 

  $i++;
  if($i == 3) {
	echo '<br><br>';
	$i =0;  
  }
  }
}

?>
</div>
</div>
