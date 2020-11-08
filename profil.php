<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<head>
		<meta charset="UTF-8" />
				<title>mention</title>
				<meta name="Author" content="BUSQUET_TOURNU" />
				<meta name="Keywords" content="ConcertAll" />
				<meta name="Description" content="Contact" />
				<link rel="stylesheet" type="text/css" href="css/header.css" media="screen" />	
				<link rel="stylesheet" type="text/css" href="css/formulaire.css" media="screen" />	
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
			<header><h1>Le php c'est easy</h1><hr /></header>
			<?php 
			echo $_SESSION['pseudo'];
			?>
	</body>
	<script type="text/javascript" src="./js/scrollnav.js"></script> 
</html>
