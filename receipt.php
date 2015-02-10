<?php 
$firstName = $_GET["firstName"];
$lastName = $_GET["lastName"];
$productName = $_GET["productName"];
$streetAddress = $_GET["streetAddress"];
$cityStateZip = $_GET["cityStateZip"];
$fullName = $firstName . " " . $lastName
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<title>Receipt</title>
</head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>
	<h1>Thank you <?php echo $firstName; ?>!</h1><br>
	<p>We appreciate your business and look forward to you ordering from us again.  Please accept this notice as confirmation of your order of <span class="colored-underline"><?php echo $productName; ?>.</span>  We are already beginning to fulfill your order and hope this is the start of a fabulous relationship!</p>
	<br>
	<div class="receipt">
		<p><?php echo $fullName; ?></p>
		<p><?php echo $streetAddress; ?></p>
		<p><?php echo $cityStateZip; ?></p>
		<p>Item ordered: <?php echo $productName; ?></p>
	</div>
</body>
</html>