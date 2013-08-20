<?php 
// Date
$year = 2013;
$month = 8;
$day = 31;

$sdate = mktime(0, 0, 0, 8, 19, 2013, 0); // Start date
$cdate = mktime(0, 0, 0, $month, $day, $year, 0); // Goal date
$today = time();
$left = $cdate - $today; // 
$sincestarted = $sdate - $cdate; // Days since we started

$daysleft = floor($left/60/60/24);
$daystotal = abs(floor($sincestarted/60/60/24));


$percent = $daysleft/($daystotal)*100;
if ($difference < 0) { $difference = 0; }

//echo "There are ". floor($difference/60/60/24)." days remaining";

echo("<!-- $daysleft/($daystotal)*100 -->");
?>


<html>
	<head>
		<title>t h e · g l a s s · d e c a d e</title>
		<meta name="description" content="" /><meta name="keywords" content="" />
		
		
		<style type="text/css">
		body {
		overflow: hidden;
		}
		
		#background {
		width: 100%;
		height: 100%;
		display: block;
		position: absolute;
		top: 0px;
		left: 0px;
		background-image: url(img/background.jpg);
		background-size: cover;
		-webkit-filter: grayscale(<?php echo $percent; ?>%);  
		-moz-filter: grayscale(<?php echo $percent; ?>);  
		filter: grayscale(<?php echo $percent; ?>);
		}
		
		#content {
		width: 100%;
		background-image: url(img/logo.png);
		background-repeat: no-repeat;
		background-position: top center;
		display: block;
		position: absolute;
		top: 15%;
		left: 0px;
		height: 700px;
		}
		</style>
	</head>
	<body>
	
	<div id="background"></div>
	<div id="content"></div>
	
	</body>
</html>
