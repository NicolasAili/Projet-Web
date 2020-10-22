<!DOCTYPE html>
<html>
		<head>
			<title>Test PHP</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="">
		</head>
		<body>
		        <h1>Bases de données MySQL</h1>  

		        <?php
		        	echo "bonjour";
		            $servername = 'localhost';
		            $username = 'root';
		            $password = '';
		            $dbname = 'webbd';
		            
		            //On établit la connexion
		            $conn = mysqli_connect($servername, $username, $password, $dbname);
		            echo "coucou";
		            		            //On vérifie la connexion
		            if(mysqli_connect_errno($conn)){
		                echo "Erreur de connexion" .mysqli_connect_error();
		            }
		            else {
		            	echo 'Connexion réussie';
		            }
		        ?>

		</body>
	</html> 