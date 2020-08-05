<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Health Assistant | Health Pediction </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="images/icon.png">

	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<!--<link rel="stylesheet" type="text/css" href="gallery/css/home.css" />-->
</head>
<body>
	<?php include_once("header.php"); ?>
	<div class="topnav" >
	</div>
	<div  class="totalpage">
		<br>
			<div id="id02" class="modal" style="display:none">
			<center>
					<form class="box2" action="signup_page.php" method="post">
							<h2> REGISTER</h2>
							<input type="text" placeholder="Enter Username" name="uname" required><br>
							<input type="email" placeholder="Email ID" name="uemail" required><br>
							<input type="number" placeholder="Enter your age" name="uage" required><br>
							Gender:
							<input type="radio" id="male" name="ugen" value="male">
									<label for="male">Male</label>
							<input type="radio" id="female" name="ugen" value="female">
									<label for="female">Female</label><br>
							<input type="password" placeholder="Enter Password" name="psw" required><br>
							<input type="password" placeholder="Repeat Password" name="psw1" required><br>
							<button type="submit" class="signupbtn">Sign Up</button><br>
					</form>
			</div>                                                                                          <!-- Close of Register -->
			<div id="id01" class="modal" style="display:none">
			<center>
						<form class="box1" action="login_page.php" method="post">
							<h2>LOGIN</h2>
							<input type="text" placeholder="Username" name="uname" required><br>
							<input type="password" placeholder="Password" name="psw" required><br>
							<button type="submit">Login</button>
						</form>
			</center>
		</div>
		<div class="bgimage"><img src="images/circle.png" width="500px"alt="Health Prediction"></div>                                                                                        <!-- Close of Login -->
		<div class="content">

			<p class="head">Health Assistant</p>
			<p id="line1" ></p>
			<?php
			if(isset($_SESSION['user']))
			{
					echo
					'<button style="background-color:red;border:none;border-radius:10px;"><a href="view.php" style="text-decoration:none;color:white;border:none;">Try Now</a></button>';
			} ?>
		</div>
		<br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>                                                                                              <!-- Close of Total page  -->
	<!--
	<div class="container-fluid p-0">
		<div class="jumbotron w-100 mb-0 p-0 jb jb-mn">
			<div class="card w-100">
			  <img class="card-img-top" src="/gallery/img/circle.png" alt="Card image cap">
			  <div class="card-img-overlay">
			    <h4 class="card-title display-4" style="color:red;">Health Assistant is
						<div class="txVarCont">
							<div class="txCont">
								<div class="txVar">Smart Prediction System</div>
								<div class="txVar">Now Free</div>
								<div class="txVar">Anywhere, Anytime</div>
								<div class="txVar">Bot ? Doctor ?</div>
							</div>
						</div>
					</h4>
			    <p class="card-text" style="color:black;">It can Identify even Bigger Health Problems.</p>
			    <?php
					if(isset($_SESSION['user']))
					{
							echo
							'<a href="view.php" class="btn btn-info btn-lg pl-4 pr-4" style="background-color:red;border:none;">Try Now</a>
							<br>
							<span style="letter-spacing: .1em;color:gray;">It\'s Free</span>';
					} ?>
			  </div>
			</div>
		</div>

		<div class="jumbotron w-100 mb-0 bg-light jb jb-sc">
			<div class="wrk display-4">See How It Works</div>
			<div class="wr-stp row justify-content-center">

				<div class="col-md-3 m-4 ct-a">
					<div class="cnt">1</div>
				  <img class="card-img-top" src="/gallery/img/account.png" alt="Card image cap">
				  <div class="card-body">
				    <p class="card-text display-1">Create Your Free Account</p>
				  </div>
				</div>

				<div class="col-md-3 m-4 ct-b">
					<div class="cnt">2</div>
					<img class="card-img-top" src="/gallery/img/idea.png" alt="Card image cap">
				  <div class="card-body">
				    <p class="card-text display-1">Identify Your Symptoms</p>
				  </div>
				</div>

				<div class="col-md-3 m-4 ct-c">
					<div class="cnt">3</div>
					<img class="card-img-top" src="/gallery/img/notes.png" alt="Card image cap">
				  <div class="card-body">
				    <p class="card-text display-1">Get quick medical advice</p>
				  </div>
				</div>

			</div>
		</div> -->

	<?php include_once("footer.php"); ?>
	<script>
	function showlogin()
	{
		var l2 = document.getElementById('id01');
		var r2 = document.getElementById('id02');
		if(l2.style.display==="none")
		{
			r2.style.display="none";
			l2.style.display="block";
		}
		else
		{
			l2.style.display="none";
		}
	}
	function showregister()
	{
		var l1 = document.getElementById('id01');
		var r1 = document.getElementById('id02');
		if(r1.style.display==="none")
		{
			l1.style.display="none";
			r1.style.display="block";
		}
		else
		{
			r1.style.display="none";
		}
	}
	function show1()
	{
		var a3=document.getElementById("line1");
		a3.innerHTML="is free!";
		setTimeout(show2,1500);
	}
	function show2()
	{
		var a3=document.getElementById("line1");
		a3.innerHTML="is helpful!";
		setTimeout(show1,1500);
	}
	show1();
	</script>
	</body>

	</html>
