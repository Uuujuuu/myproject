<!DOCTYPE html>
<html>

<head>
	<title>HNG4</title>
	<style type="text/css">
	          body{
				background-image: url(minion.jpg);
				background-size: cover;
				background-color: yellow;
			}
			.text{
				position: absolute;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -50%);
				width: 335px;
				height: 41px;

				font-family: Roboto;
				font-style: normal;
				font-weight:bold;
				line-height: normal;
				font-size: 36px;
				lin

				color: #000000;
				mix-blend-mode: darken;

			}
			#date{
				position: absolute;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -50%);
				width: 129px;
				height: 29px;

				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				line-height: 100%;
				font-size: 24px;
				color: #000000;
			}

	</style>
	
	<body>


		<div class="text">HNG Internship 4.0</div><br>

		<p id="date"><?php
		echo date("Y/m/d") . "<br>";
		?>

		<?php
		echo date("h:i:s") . "<br>";
		?></p>

</body>
</html>