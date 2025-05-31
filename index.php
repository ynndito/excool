<!DOCTYPE html>
<?php
    // 1. Default to "welcome" if no ?p is provided
    if (!isset($_GET['p']) || $_GET['p'] === '') {
        header("Location: index.php?p=welcome");
        exit;
    }

    $page = $_GET['p'];

    // 2. Redirect to err404 if the page file doesn't exist
    if (!file_exists("page/$page.php")) {
        header("Location: index.php?p=err404");
        exit;
    }
?>
<html>
	<head>
		<title>Excool - <?= $page ?></title>
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
				include "page/$page.php";
			?>
		</div>
		<dialog id="formDialog">
			<form method="POST" action="action/proses_ekstra.php">
				<h3>Tambah Ekstrakulikuler</h3>
				<label>Name: <input type="text" name="nama"></label><br>
				<button type="submit">Submit</button>
				<button type="button" onclick="document.getElementById('formDialog').close()">Cancel</button>
			</form>
		</dialog>
	</body>
</html>
