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
		<!-- French Lime
		#c0b769 -->
		<div id='page' data-role='page' style="background:#33ccff; height: 100%;">
			<img src="img/bcnlogo.png" id='splashimg' class='splashimg' style=" width: 50%; margin: auto;"/>
			<br/>
			<div style="position: fixed; bottom: 0px; width: 100%;">
				<a href="http://41.242.113.3/retaileraccount/index.php" data-role="button" data-icon="home" data-corners="false" data-theme="b">LOGIN</a>
				<a href="#contact" name="logout" data-role="button" data-icon="grid" data-corners="false" data-theme="b">Contact Support</a>
				<a href="http://41.242.113.3/retaileraccount/logout.php" data-role="button" data-icon="delete" data-corners="false"  data-theme="e">LOGOUT</a>
			</div>
		</div>
		<div id='contact' data-role='page' style="background:#33ccff;">
			<img src="img/bcnlogo.png" id='splashimg' class='splashimg' style=" width: 50%;"/>
			<div data-role='content' style="width: 100%;">

				<div style="width: 90%; text-align: center;">
					<h1>CONTACT US</h1>
					<form action="logout.php" method="post" accept-charset="utf-8">
						<input type="text" name="name"  id="name" placeholder="Fullname" data-mini="true"/>
						<input type="email" name="email"  id="email" placeholder="Email" data-mini="true"/>
						<input type="text" name="subject"  id="subject" placeholder="Subject" data-mini="true"/>
						<textarea type="text" rows="8" cols="40" name="message"  id="message" placeholder='Message'/>
						</textarea>

						<p>
							<input type="submit" name="mail" value="mail"/>
						</p>
					</form>
				</div>
			</div>
		</div>
		<div id='mail' data-role='page' style="background:#33ccff;">
			<?php
			if (isset($_POST['mail'])) {
				echo "string";
			}
			$to = "somebody@example.com";
			$subject = "My subject";
			$txt = "Hello world!";
			$headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";

			mail($to, $subject, $txt, $headers);
			?>
		</div>
	</body>
</html>
