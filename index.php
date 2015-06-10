<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="vishnu" >
    <link rel="shortcut icon" href="bootstrap-master/assets/ico/favicon.ico">
    <link href="sticky-footer.css" rel="stylesheet">

    <title>FaceMash</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-master/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-master/assets/js/ie-emulation-modes-warning.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-52771528-1', 'auto');
                ga('send', 'pageview');

                </script>
    <script src='expand/jquery.vishnu.js'></script>
    <link rel="stylesheet" type="text/css" href="expand/vishnu.css" media="all" />

    <link href="bootstrap-master/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
      $(function() {
        $(".about-me, .example2, .example3").expando();

     
      
      });
      
     
		</script>
		
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
	#footer {
    clear: both;
    position: relative;
    z-index: 10;
    height: 3em;
    margin-top: -3em;
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
          <a  class="navbar-brand" href="index.php">Comparo</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="leaderboard.php">Leader Board</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    
			


<?php
include('database.php');
include('data.php');
/////////////////////////////////////////////////////////////////////
// This is the only portion of the code you may need to change.
// Indicate the location of your images 
$root = '';
// use if specifying path from root
//$root = $_SERVER['DOCUMENT_ROOT'];

$path = 'images/';

// End of user modified section 
/////////////////////////////////////////////////////////////////////
 
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            //if ( preg_match("/(\.gif|\.jpg|\.png|\.jpeg|\.JPEG)$/", $img_file) ) {
                $images[] = $img_file;
            //}
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}	


// Obtain list of images from directory 
$imgList = getImagesFromDir($root . $path);
//$imgList1 = getImagesFromDir($root . $path);
$img1 = getRandomFromArray($imgList);
 $img2 = getRandomFromArray($imgList);
 
 while($img1 == $img2) {
  $img1 = getRandomFromArray($imgList);
 $img2 = getRandomFromArray($imgList);
 }

while(strlen($img1) <3) {
$img1 = getRandomFromArray($imgList);
}

while(strlen($img2) <3) {
$img2 = getRandomFromArray($imgList);
}
 

?> 



		
    <br>
    <br>
    <br>
    <br>
      
   


    <div class="container">
    <div class="col-md-2"></div> 
    <div class="col-md-8">
	
	<form method = "post" action="index.php" name="hello">
	<input type="hidden"  name ="first" value="<?php
	 echo $img1;?>
	 
	 ">	
	 <input type="hidden"  name ="second" value="<?php
	 echo $img2;?>
	 ">
	 
	 
	<input  height = "300" width = "300" type="image" src="
	<?php echo $path.$img1;?>
	  
	
	" alt="Submit Form"/>
	
	</form>
	
	
	<div class="bow">
	<form method = "post" action="index.php" name="two">
	<input type="hidden"  name ="first" value="<?php
	 echo $img2;?>
	 
	 ">	
	 <input type="hidden"  name ="second" value="<?php
	 echo $img1;?>
	 
	 ">	
	 
	 
	<input type="image" height = "300" width = "300" type="image" src="
	<?php echo $path.$img2;?>
	
	" alt="Submit Form"/>
	
	</form>
	</div>
	
	 </div>
	  <div id="footer">
    <center><b>Karate Kick BY Vishnu KS, Kung Fu by Sameer and Rajani Kanthisation by SP Harish<b></center>
    </div>
      </div>
	

    </div><!-- /.container -->
     
     
    
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-master/dist/js/bootstrap.min.js"></script>
  </body>
</html>
