<?php
if(session_status() == PHP_SESSION_NONE)
{
    //session has not started
    session_start();
}
if(!isset($_SESSION['user']))
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('You have no permission to view this page, Login First!')
	window.location.href='index.php';
	</SCRIPT>");
}
else
{
    ini_set( "display_errors", 0);
    include ("connection.php");

    $query="SELECT * FROM user_details WHERE uname='$_SESSION[user]'";

    if($result = $con->query($query))
    {
        $row = $result->fetch_assoc();
        $bmi=$row["ubmi"];
        $gender = $row["ugen"];
    }


    $sug1=' ';$w1=0;$w2=0;
    if($bmi==0)   // if bmi = 0, user didnt entered atleast step-1
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Enter correct Height & Weight')
        window.location.href='view.php';
        </SCRIPT>");
    }
    else        //
    {
        $sug1 = 'Hey '.$_SESSION[user].',';
        $h = $_SESSION["h"];
        $w = $_SESSION["w"];
        $w1 = (18.5*$h*$h)/10000;
        $w2 = (24.9*$h*$h)/10000;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Health Assistant | Health Pediction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="images/icon.png">
  <link rel="stylesheet" type="text/css" href="css/bmi.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
<?php require_once("header.php"); ?>
<div class="topnav">

</div>
<div class="totalpage">
  <br>

  <div class="bgimage"><img src="images/circle.png" width="500px"alt="Health Prediction"></div>
  <div class="output" style="color:black;align:left;margin-left:50px;">
    <?php

        if( $gender == 'male' )
        {
          echo '<div class="image"><img src="images/manbmi.jpg" width="500px"alt="BODY_MASS_INDEX"></div>';
        }
        else
        {
          echo '<div class="image"><img src="images/womenbmi.jpg" width="500px"alt="BODY_MASS_INDEX"></div>';
        }
        echo '<p style="font-size:25px;">'.$sug1.' <br>';
        echo 'Your <b>BMI</b> = '.round($bmi,2).'<br>';
        echo 'Weight of a <b>'.$gender.'</b> with your height should range from <b>'.round($w1,1).'Kg</b> to <b>'.round($w2,1).'Kg</b><br><br>';
    include ("symptom_prediction.php");

        echo 'According to your symptoms,<br> It seems like you may have the chance of having ';
        echo '<b>'.$suggestion.'</b><br>';
    include ("data.php");
        echo '</p>';
     ?>
  </div>

  <br><br>
  <br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
	<?php require_once("footer.php"); ?>
</body>
</html>
