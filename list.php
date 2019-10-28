
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Nom: <input type="text" name="name"><br><br>
		Prénom: <input type="text" name="firstname"><br><br>
		<input type="submit" name="" value="Ajouter">
	</form>
	<?php 
		if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['firstname']) && !empty($_POST['firstname']) ) {
			echo $_POST['name'].' '.$_POST['firstname'];
		}
 ?>
</body>
</html>