<?php
    session_start();
	
	if(isset($_SESSION['login_check']) && $_SESSION['login_check'] != '')
	{
		echo $_SESSION['login_check'];
		$_SESSION['login_check'] = '';
	}
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
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



.bg-success {
    background-image: url(images/cox.jpg);
    background-repeat: no-repeat;
    background-size: cover;  
    background-color: #212522!important;
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
                                <a href="registration.php" >SignUp </a>
                                </li>
								


							</ul>
							
						</div>

					</li>
					

					</li>
					
				</ul>
			</div>
		</nav>
		</header>





    <center> <h1> Login </h1> </center>   
    <form method="post" action="index.php">  
        <div class="container">   
            <label>Email : </label>   
            <input type="text" placeholder="Enter Email" name="user_Email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="user_Password" required>
			
			
								
            <button type="submit">Login</button>   
            Not a member? <a href="registration.php"> Sign Up </a>   
        </div>   
    </form>     
</body>     
</html>