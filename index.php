<!DOCTYPE html>
<html>
	<head>
		<title>Title!</title>
		<link rel="stylesheet" href="view/core.css">
		<link rel="stylesheet" href="view/css/bootstrap.css">
		<script src="view/js/bootstrap.js"></script>
		<script src="script.js"></script>
	</head>

	<body>
		<?php
			include "view/navbar.php"
		?>
		<div class="kf-container">
			<?php
				$page = $_GET['p'];

				include "page/$page.php";
			?>
		</div>
	</body>
</html>
