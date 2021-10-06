<?php
    session_start();
	
	if(isset($_SESSION['reg_check']))
	{
		echo $_SESSION['reg_check'];
		unset($_SESSION['reg_check']);
    }
    /*if($_POST['user_Password']!==$_POST['confirmpassword']) {
        echo "Your passwords did not match";
        } else {
        // success page here
        }*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
<style> 

.Menu
{
	background: rgb(0, 0, 128);
	text-align: center;
}
.Menu ul
{
	display: inline-flex;
	list-style: none;
	color: #fff;
}

.Menu ul li
{
	width: 130px;
	margin: 10px;
	padding: 10px;
}

.Menu ul li a
{
	text-decoration: none;
	color: #fff;
}
.active,.Menu ul li:hover
{
   background: #2bab0d;
   border-radius: 3px;
}
.Menu .fa
{
	margin-right: 8px;
}
.sub-menu-1
{
	display: none;

}
.Menu ul li:hover .sub-menu-1
{
	display: block;
	position: absolute;
	background: rgb(0,100,0);
	margin-top: 15px;
	margin-left: -15px;
	z-index: 2;
}
.Menu ul li:hover .sub-menu-1 ul
{
	display: block;
	margin: 10px;

}
.Menu ul li:hover .sub-menu-1 ul li
{
	width: 150px;
	padding: 10px;
	border-bottom: 1px dotted #fff;
	background: transparent;
	border-radius: 0;
	text-align: left;

}
.Menu ul li:hover .sub-menu-1 ul li:last-child
{
	border-bottom: none;
	
}
.Menu ul li:hover .sub-menu-1 ul li a:hover
{
	color: #b2ff00;
	
}
Body {  
    
    font-family: Calibri, Helvetica, sans-serif;  
    background-color: #a19ae8;
    
  }  
  button {   
         background-color: #052c52;   
         width: 100%;  
          color: #e0deec;
          border-radius: 10px;   
          padding: 15px;   
          margin: 10px 0px;   
          border: none;   
          cursor: pointer;   
           }   
   form {   
          border: 400px ; 
          border-top-width: 80px; 
          border-radius: 10px;
         
      }   
   input[type=text], input[type=password], input[type=email] {   
          width: 100%;   
          margin: 8px 0;  
          padding: 12px 20px;   
          display: inline-block;   
          border: 2px #dfeadf;   
          box-sizing: border-box;
          border-radius: 3px;
         
      }  
   button:hover {   
          opacity: 0.7;   
      }   
    .cancelbtn {   
          width: auto;   
          padding: 10px 18px;  
          margin: 10px 5px;  
      }  
     
          
       
   .container {   
          padding: 400px;
          padding-top: 50px;
          background-image: url(images/cox2.jpg);
          background-repeat: no-repeat;
          background-size: cover;   
          
           
      }
   .container h1 {
  
          text-align: center;
  
     }  
  
</style> 
</head>
<body>

<header class="site-headers">
		<nav>
          
			
			<div class="Menu">

			
				<ul>
					<li class="active"><a href="index.html"><i class="fa fa-home"></i>Home</a></i></li>
					<li><a href="#"><i class="fa fa-map-marker"></i>Tourist Spot</a>
						<div class="sub-menu-1">

							<ul>
                                
								<li class="nav-item">
                                <a href="saint-martin.html" class="nav-link" href="#">Saint-martin</a>
                                </li>
                                <li class="nav-item">
                                <a href="cox-bazar.html" class="nav-link" href="#">Cox-bazar</a>
                                </li>
								<li class="nav-item">
                                <a href="khaiyyachora.html" class="nav-link" href="#">Khaiyyachora</a>
                                </li>
								 <li class="nav-item">
                                <a href="shajek-valley.html" class="nav-link" href="#">Shajek-valley</a>
                                </li>
								 <li class="nav-item">
                                <a href="jafflong.html" class="nav-link" href="#">Jafflong</a>
                                </li>
								<li><a href="#">See more</a></li>


							</ul>
						</div>




					</li>
					<li><a href="#"><i class="fa fa-home"></i>Resorts</a>

                    <div class="sub-menu-1">

							<ul>
                                
								<li class="nav-item">
                                <a href="Hotel_Sea_Cox.html" class="nav-link" href="#">Hotel Sea Cox</a>
                                </li>
                                <li class="nav-item">
                                <a href="Prince_haven_resort.html" class="nav-link" href="#">Prince haven resort</a>
                                </li>
								<li class="nav-item">
                                <a href="SKD_Resort.html" class="nav-link" href="#">SKD Resort</a>
                                </li>
								<li><a href="resorts.html" class="nav-link" href="#">See more</a></li>


							</ul>
						</div>
                    
                    
                    
                    
                    </li>
					<li><a href="about.html"><i class="fa fa-user"></i>About</a></li>
					<li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
					<li><a href="#"><i class="fa fa-id-badge"></i>My Account</a>

                        <div class="sub-menu-1">
							<ul>

								<li class="nav-item">
                                <a href="login.php" >Login </a>
                                </li>
								
								


							</ul>
							
						</div>

					</li>
					

					</li>
					
				</ul>
			</div>
		</nav>
		</header>







    <div>
        <form action="registrationinsert.php" method="post">
            <div class="container">
                <h1>SignUp</h1>
                <p></p>

                <label for="user_FirstName"><b>First Name: </b></label>
                <input type="text" name="user_FirstName" placeholder="Enter First Name" required><br>

                <label for="user_LastName"><b>Last Name: </b></label>
                <input type="text" name="user_LastName" placeholder="Enter Last Name" required><br>

                <label for="user_age"><b>Age: </b></label>
                <input type="text" name="user_age" placeholder="Enter Your Age" required><br>

                <label for="user_Email"><b>Email Address: </b></label>
                <input type="email" name="user_Email" placeholder="Enter Your Email Address" required><br>

                <label for="user_Phone"><b>Phone Number: </b></label>
                <input type="text" name="user_Phone" placeholder="Enter Your Phone Number" required><br>

                <label for="user_Address"><b>Address: </b></label>
                <input type="text" name="user_Address" placeholder="Enter Your Address"  required><br>

                <label for="user_Password"><b>Password: </b></label>
                <input type="password" name="user_Password" placeholder="Enter Your Password"  required><br>

                <label for="confirmpassword"><b>Confirm Password: </b></label>
                <input type="password" name="confirmpassword" placeholder="Enter Your Confirm Password"  required><br>

                <label for="user_city"><b>City: </b></label>
                <input type="text" name="user_city" placeholder="Enter Your City"  required><br>

                <label for="user_country"><b>Country: </b></label>
                <input type="text" name="user_country" placeholder="Enter Your Country"  required><br>

				
                
                <button type="submit">SignUp</button>
            </div>
        </form>
    </div>

</body>
</html>