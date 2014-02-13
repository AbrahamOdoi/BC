<!DOCTYPE html>
<html>
	<title>ICGC Devotional</title>
	<head>

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

	</head>
	<body>
		<div id='mail' data-role='page' style="background:#33ccff;">
			<?php
			$name = $_POST['name'];
			$address = $_POST['email'];
			$subject = $_POST['subject'];
			$_POST['message'];

			$to = "abrahamodoi2002@gmail.com";
			$txt = "Hello world!";
			$headers = "From:" . $address . "\r\n" . "CC:" . $name;

			mail($to, $subject, $txt, $headers);
			if (mail) {
				header('location:mainpage.php');
			} else {
				echo "noo";
			}
			?>
		</div>
	</body>
</html>
