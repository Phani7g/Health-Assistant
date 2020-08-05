	<link rel="stylesheet" type="text/css" href="css/header.css" />
	<div class="navigationbar">
		<ul>

						<li><a href="index.php"><img src="images/logo.png" width="100px" alt="Logo"></a></li>
						<li><a href="reset.php" style="text-decoration:none;"><h1>Health Assitant</h1></a></li>


				<?php
				if(session_status() == PHP_SESSION_NONE)
				{
				    //session has not started
				    session_start();
				}
				if(!isset($_SESSION['user']))
				{
						echo '<li class="lista"><button onclick="showlogin()">Login</button></li>';
						echo '<li class="listb"><button onclick="showregister()">Register</button></li>';
				}
				else
				{
						$u = $_SESSION["user"];
						echo '<li class="listb">
						  <button onclick="showlogout()">
						    Hello, '.$u.'
						  </button></li>
						  <li class="lista" id="logout"><a href="logout.php">Logout</a></li>';;
				}
				?>
			</ul>
			<div class="red">
				<br>
			</div>
			<script>
			function showlogout()
			{
				var s = document.getElementById("logout");
				if(s.style.display==="none")
				{
					s.style.display="block";
				}
				else {
					s.style.display="none";
				}
			}
			</script>
	</div>
