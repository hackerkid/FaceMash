<?php

if(isset($_POST["first"]) && isset($_POST["second"]))
{
	$namea = $_POST["first"];
	$nameb = $_POST["second"];

$sql="SELECT * FROM list WHERE name = '$namea'";


if ($result=mysqli_query($con,$sql))
  {

  $rowcount=mysqli_num_rows($result);



  if($rowcount == 0) {
	$ra = 1000;
	$counta = 0;
	$sql="INSERT INTO list (name, count, rating)
VALUES ('$namea', 0, 1000)";
	mysqli_query($con, $sql);


  } else {
	$row = mysqli_fetch_array($result);
	$ra = $row["rating"];
	$counta = $row["count"];
  }
	

  }


$sql="SELECT * FROM list WHERE name = '$nameb'";


if ($result=mysqli_query($con,$sql))
  {
   $rowcount=mysqli_num_rows($result);
 

  if($rowcount == 0) {
	$rb = 1000;
	$countb = 0;

	$sql="INSERT INTO list(name, count, rating)
VALUES ('$nameb', 0, 1000)";	
	mysqli_query($con, $sql);
	
  } else {
	$row = mysqli_fetch_array($result);
	$rb = $row["rating"];
	$countb = $row["count"];
  }
	

  }
	
  $temp = ($rb - $ra)/400;
  $dem = 1+10*pow(10,$temp);
  $Ea = 1/$dem;
  $newra = $ra + 32*(1 - $Ea);
  $counta++;
 
  $temp = ($ra - $rb)/400;
  $dem = 1+10*pow(10,$temp);
  $Eb = 1/$dem;
  $newrb = $rb + 32*(0 - $Eb);

  mysqli_query($con,"UPDATE list SET count = '$counta'
WHERE name='$namea'");

 mysqli_query($con,"UPDATE list SET rating = '$newra'
WHERE name='$namea'");
 	
  mysqli_query($con,"UPDATE list SET count = '$countb'
WHERE name='$nameb'");

 mysqli_query($con,"UPDATE list SET rating = '$newrb'
WHERE name='$nameb'");
 

}	
?>
