<?php
	session_start();
	if(!isset($_SESSION['pytanie']))
		$_SESSION['pytanie']=1;
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/style.css">	
	<title>Travel to the cloud</title>
	<script src='plik.js'></script>
	<?php
		if($_SESSION['pytanie']==1){
			if(!isset($_REQUEST['nie']) && !isset($_REQUEST['tak'])){
				echo "<script type=\"text/javascript\">";
				echo "function codeAddress() {";
				echo " responsiveVoice.speak(\"Do you want to see details about your flight? If yes - tap right\");}";
				echo "</script>";
				
			}
			if(isset($_REQUEST['nie'])){
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
			}
			else if(isset($_REQUEST['tak'])){
				
				echo "<script type=\"text/javascript\">";
				echo "function codeAddress() {";
				echo " responsiveVoice.speak(\"FLIGHT NUMBER. FR 8451. DEPARTURE from Warsaw on eleven of May 2017 at hour 11:52. Arrival in Cracow on eleven of May 2017 at hour 13:03.\");}";
				echo "</script>";
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
				echo '<meta http-equiv=Refresh Content=10; url=scenariusz1.php>';
			}
		}
		else if($_SESSION['pytanie']==2){
			echo "<script type=\"text/javascript\">";
			echo "function codeAddress() {";
			echo " responsiveVoice.speak(\"Do you want to hear special warnings? If yes - tap right\");}";
			echo "</script>";
			if(isset($_REQUEST['nie'])){
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
			}
			else if(isset($_REQUEST['tak'])){
				echo "<script type=\"text/javascript\">";
				echo "function codeAddress() {";
				echo " responsiveVoice.speak(\"No information.\");}";
				echo "</script>";
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
				echo '<meta http-equiv=Refresh Content=4; url=scenariusz1.php>';
			}
			unset($_REQUEST['nie']);
			unset($_REQUEST['tak']);
			
		}
		else if($_SESSION['pytanie']==3){
			echo "<script type=\"text/javascript\">";
			echo "function codeAddress() {";
			echo " responsiveVoice.speak(\"Do you want to contact to assistant (of flight company or us)? If yes - tap right\");}";
			echo "</script>";
			if(isset($_REQUEST['nie'])){
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
			}
			else if(isset($_REQUEST['tak'])){
				echo "<script type=\"text/javascript\">";
				echo "function codeAddress() {";
				echo " responsiveVoice.speak(\"Airport information phone number 8 0 1 0 6 6 8 0 8\");}";
				echo "</script>";
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
				echo '<meta http-equiv=Refresh Content=8; url=scenariusz1.php>';
			}
			unset($_REQUEST['nie']);
			unset($_REQUEST['tak']);
		}
		else if($_SESSION['pytanie']==4){
			echo "<script type=\"text/javascript\">";
			echo "function codeAddress() {";
			echo " responsiveVoice.speak(\"Do you want to hear procedures about flying? If yes - tap right\");}";
			echo "</script>";
			if(isset($_REQUEST['nie'])){
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
			}
			else if(isset($_REQUEST['tak'])){
				echo "<script type=\"text/javascript\">";
				echo "function codeAddress() {";
				echo " responsiveVoice.speak(\"Exit there is from two sides of the terminal.\");}";
				echo "</script>";
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
				echo '<meta http-equiv=Refresh Content=5; url=scenariusz1.php>';
			}
			unset($_REQUEST['nie']);
			unset($_REQUEST['tak']);
		}
		else if($_SESSION['pytanie']==5){
			echo "<script type=\"text/javascript\">";
			echo "function codeAddress() {";
			echo " responsiveVoice.speak(\"Do you want to hear information about Airport that you departure? If yes - tap right\");}";
			echo "</script>";
			if(isset($_REQUEST['nie'])){
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
			}
			else if(isset($_REQUEST['tak'])){
				echo "<script type=\"text/javascript\">";
				echo "function codeAddress() {";
				echo " responsiveVoice.speak(\"You are at the airport terminal in Gdańsk.Get ready to check in.\");}";
				echo "</script>";
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
				echo '<meta http-equiv=Refresh Content=5; url=scenariusz1.php>';
			}
			unset($_REQUEST['nie']);
			unset($_REQUEST['tak']);
		}
		else if($_SESSION['pytanie']==6){
			echo "<script type=\"text/javascript\">";
			echo "function codeAddress() {";
			echo " responsiveVoice.speak(\"Do you want to hear information about Airport that you arrive? If yes - tap right\");}";
			echo "</script>";
			if(isset($_REQUEST['nie'])){
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
			}
			else if(isset($_REQUEST['tak'])){
				echo "<script type=\"text/javascript\">";
				echo "function codeAddress() {";
				echo " responsiveVoice.speak(\"Arrival in Cracow on eleven of May 2017 at hour 13:03.\");}";
				echo "</script>";
				$_SESSION['pytanie']=$_SESSION['pytanie']+1;
				echo '<meta http-equiv=Refresh Content=8; url=scenariusz1.php>';
			}
			unset($_REQUEST['nie']);
			unset($_REQUEST['tak']);
		}
		
	?>
</head>
<body onload="codeAddress();">

		
		
		<div id="content">		
		<ul id="navigation">
			<li id="left">
				<form action="scenariusz1.php" method="post">
					<input id="przycisk1" type="submit" value="NO" name="nie">
				
			</li>
			<li id="right">
			
					<input id="przycisk2" type="submit" value="YES" name="tak">
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
