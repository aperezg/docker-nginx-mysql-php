<html>
<body>
	<h1>Hello Docker!</h1>
	<?php 
		echo "Can use php? ¡yes!";
	?>
	<br/>
	<?php

		$mysqlFlag = "No :(";
		try {
			
			$pdo = new PDO('mysql:host=db;dbname=docker_db','docker','docker');
			$mysqlFlag = "¡yes!";

		} catch(Exception $e) {
			var_dump($e);
		}

		echo "Can use mysql? ".$mysqlFlag;
	?>
</body>
</html>