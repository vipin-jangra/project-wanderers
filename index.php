
<html>


	<head>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/brands.min.css">

			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Font Awesome Icon Library -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					
				
	</head>
	
	<body class="back">
	
		
			<div class="logo">
				<center><b>THE LOST WANDERERS</b><center>
			
			</div>

			
			
			<nav class="ssnav">
				
				<ul>

					
					<li class ="active"><a href="index.php">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					
					
					<li ><a href="#"><button  data-target="#loginmodal" data-toggle="modal"> LOGIN </button></a></li>
					<li ><a href="#"><button  data-target="#signupmodal" data-toggle="modal"> SIGNUP</button></a></li>
											
				
				</ul>
				<div>
			</nav>
			<br><br>

							<nav class="sidenav">
						<ul class="b">
							  <li class="c" ><a class="d" href="#" id="student"><button class="btna" data-target="#studentmodal" data-toggle="modal">Student</button></a></li>
							  <br><br><br> <br> <br>

							  <li class="c" ><a  class="d" href="#" id="SIGN" ><button class="btna" data-target="#signupmodal" data-toggle="modal">SIGN UP</button></a></li>
							  <br><br> <br> <br> <br>
							 
							  
							  <li class="c"><a class="d" href="#" id="LOGIN"><button class="btna" data-target="#loginmodal" data-toggle="modal">LOGIN</button></a></li>
							  <br><br> <br> <br> <br>

							  <li class="c"><a class="d" href="https://forms.gle/aHQPgtWS1gFLrZDC9" id="feedback"><button class="btna" data-target="#feedbackmodal" data-toggle="modal">feedback</button></a></li>
							  
							  
							  
						</ul>
				</nav>
			</div>


			
			
			
			<div class="modal fade " id="loginmodal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">

							<button type="button" class="close" data-dismiss="modal">&times;</button>
							
							<center><div class="box ">
								

								<form method="POST" action="login.php">
									<div class="modal-title">
									<h1>LOGIN MENU</h1>

									<p>Please fill in this form to login in account.</p>
									</div>
									<br>
									<div class="modal-body">
									
										<div class="inputbox">

										<input type="text" placeholder="USERNAME" value="" name="username">
										<label>USERNAME</label>
										</div>
										<br>
										
										<div class="inputbox">
										<input type="password" placeholder="PASSWORD" name="password" value="">
										<label>PASSWORD</label>
										</div>
										<br>
										
										<input type="submit"  value="Sign In" >
										
									</div>
									</form>
								
		
							</div></center>
		
						</div>

					</div>

				</div>
			</div>


			<div class="modal fade" id="signupmodal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
						
							<button type="button"class="close cl" data-dismiss="modal">&times;</button>
							

							<center><div class="box ">

								<form method="POST" action="signup.php">
									<div class="modal-title">
										<br> <br> <br>
									<h1>SIGNUP MENU</h1>
									<hr>
									<p>Please fill in this form to create an account.</p>

									</div>
									
									
										<div class="inputbox">
										<input type="text" placeholder="firstname" name="firstname">
										<label>FIRSTNAME</label>
										</div>
										<br>

										<div class="inputbox">

										<input type="text" placeholder="lastname" name="lastname">
										<label>LASTNAME</label>
										</div>
										<br>

										<div class="inputbox">

										<input type="text" placeholder="username" name="usename">
										<label>USERNAME</label>
										</div>
										<br>
										
										<div class="inputbox">
										<input type="password" placeholder="password" name="password" >
										<label>PASSWORD</label>
										</div>

										<br>
										<div class="inputbox">
										<input type="password" placeholder="repeat password" name="repassword" >
										<label>PASSWORD</label>
										</div>
										<br>
										
										


										
										
										<div >
										<input type="submit" name="LOG IN" value="Sign In" >
										</div>
									
								</form>
								
		
							</div></center>
		
							
						</div>
						
					</div>
					

				</div>



			</div>

			<div class="modal fade" id="studentmodal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button"class="close cl" data-dismiss="modal">&times;</button>
							<h1 class="logo">Students Special Offers</h1>
							<hr>
						<div class="col-container">
							<div  style=" width: 500px;float:right;">
								<div class="coupon col">
								  <div >
								    <h3>welcome students</h3>
								  </div>
								  <img src="https://images.pexels.com/photos/869258/pexels-photo-869258.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%;height: 50%;">
								  <div  style="background-color:white">
								    <h2><b>40% OFF YOUR PURCHASE</b></h2> 
								    <p>Lorem ipsum dolor sit amet, et nam pertinax gloriatur. Sea te minim soleat senserit, ex quo luptatum tacimates voluptatum,  mnesarchum.</p>
								  </div>
								  <div >
								    <p>Use Promo Code: <span class="promo">BOH232</span></p>
								    <p class="expire">Expires: Jan 03, 2021</p>
								  </div>
								</div>
							</div>
							<div  style=" width: 400px;">
								<div class="coupon col">
								  <div >
								    <h3>welcome students</h3>
								  </div>
								  <img src="https://images.pexels.com/photos/1183986/pexels-photo-1183986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%;height: 50%;">
								  <div  style="background-color:white">
								    <h2><b>50% OFF YOUR PURCHASE</b></h2> 
								    <p>Lorem ipsum dolor sit amet, et nam pertinax gloriatur. Sea te minim soleat senserit, ex quo luptatum tacimates voluptatum mnesarchum.</p>
								  </div>
								  <div >
								    <p>Use Promo Code: <span class="promo">HOH235</span></p>
								    <p class="expire">Expires: Jan 03, 2021</p>
								  </div>
								</div>
							</div>
						</div>
							
						
							
						</div>

						

					</div>
					

				</div>
				

			</div>


			<div class="image">

			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		
			<div class=" right middle">

				<span class="heading">User Rating</span>
				<span class="fa fa-star fa-lg checked"></span>
				<span class="fa fa-star fa-lg checked"></span>
				<span class="fa fa-star fa-lg checked"></span>
				<span class="fa fa-star fa-lg checked"></span>
				<span class="fa fa-star fa-lg"></span>
				<p style="color: white;font-size: 20px;">4.1 average based on 254 reviews.</p>
				<hr style="border:3px solid #f1f1f1; margin-left:90px;">

				<div class="row">
				  <div class="side">
				    <div class="tx">5 star</div>
				  </div>
				  <div class="middle">
				    <div class="bar-container">
				      <div class="bar-5"></div>
				    </div>
				  </div>
				  <div class="side right">
				    <div class="tx">150</div>
				  </div>
				  <div class="side">
				    <div class="tx">4 star</div>
				  </div>
				  <div class="middle">
				    <div class="bar-container">
				      <div class="bar-4"></div>
				    </div>
				  </div>
				  <div class="side right">
				    <div class="tx">63</div>
				  </div>
				  <div class="side">
				    <div class="tx">3 star</div>
				  </div>
				  <div class="middle">
				    <div class="bar-container">
				      <div class="bar-3"></div>
				    </div>
				  </div>
				  <div class="side right">
				    <div class="tx">15</div>
				  </div>
				  <div class="side">
				    <div class="tx">2 star</div>
				  </div>
				  <div class="middle">
				    <div class="bar-container">
				      <div class="bar-2"></div>
				    </div>
				  </div>
				  <div class="side right">
				    <div class="tx">6</div>
				  </div>
				  <div class="side">
				    <div class="tx">1 star</div>
				  </div>
				  <div class="middle">
				    <div class="bar-container">
				      <div class="bar-1"></div>
				    </div>
				  </div>
				  <div class="side right">
				    <div class="tx">20</div>
				  </div>
				</div>
			</div>
	
	




			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	
		
	
		
	</body>

</html>
