<?php
session_start();
$_SESSION["Last time "] = time();
session_commit();
sleep(10);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Тест стандр фун	</h1>
	<?php
		var_dump($_SESSION);
	?>
</body>
</html>


