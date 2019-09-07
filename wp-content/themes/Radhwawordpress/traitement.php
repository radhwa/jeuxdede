<?php 
try{
    $conn = new PDO('mysql:host=localhost;dbname=wordpressdemo;charset=utf8', 'root', '');
    }
catch(Exception $e)
{
      echo("probleme de connexion");
}

if(isset($_POST['submit'])){
	
		echo('email present');
		if($_POST['email'] != "" && $_POST['pass'] != ""){
			$email=$_POST['email'];
			$pass=$_POST['pass'];

			$insertion = "INSERT INTO jeuxdes(email, pass) VALUES('$email', '$pass')";

			$execute = $conn->query($insertion);

			if($execute == true){
				$msgSuccess = "Enregistrement réussi";
			}else{
				$msgErreur = "Enregistrement échoué";

			}
		}
	
}