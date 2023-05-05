<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>ceci est un test de deploiement par <a href="">mendrikarazafimalaza@gmail.com</a></h1>
	<hr>
	<form action="<?= site_url("Test/") ?>" method="post">
		<h2>Entrez votre nom : <input type="text" placeholder="nom" name="nom"></h2>
		<h2>Entrez votre age : <input type="number" placeholder="age" name="age"></h2>
		<button type="submit" >tester</button>
	</form>
</body>
</html>