<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />	
	<title>Travel to the cloud</title>
	<script src='plik.js'></script>
	<?php
		if(isset ($_REQUEST['fa'])){
			echo "<script type=\"text/javascript\">";
			echo "function codeAddress() {";
			echo " responsiveVoice.speak(\"Please tell us a number of flight or ask someone to wright it down in this app\");}";
			echo "</script>";
		}
	?>


</head>
<body onload="codeAddress();">

		<div id="header">
			<h1>Insert flight's number:</h1>
		</div>
		
		
		<div id="content">		
		<ul id="navigation">
			<li id="left">
			
			
			
			<?php
				if(isset($_REQUEST['fa']))
					echo "<form action='scenariusz1.php'>";
				else
					echo "<form action='scenariusz2.php'>";

			
			
			
			?>
				<input id="przycisk1" type="text" name="number" value="FR 8451">
				
			</li>
			<li id="right">
				
					<input id="przycisk2" type="submit" value="NEXT">
				</form>
			</li>
		</ul>
		</div>
		
		
		
	
		<footer>
			<form action="help.php" method="post">
			<button type="submit" class="button button-block">I need help</button>
			</form>
		</footer>

</body>
</html>