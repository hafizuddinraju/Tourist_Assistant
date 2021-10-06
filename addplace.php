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
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Update</title>
<style>   
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
        background-image: url(images/bg.jpg);
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
         <a class="navbar-brand" href="index.html"><h3><p style="color:white">Tourist Assistant</p></h3></a>
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
					<li><a href="reviewread.php"><i class="fa fa-comment"></i>Review</a></li>
					<li><a href="about.html"><i class="fa fa-user"></i>About</a></li>
					<li><a href="contact.html"><i class="fa fa-phone"></i>Contact</a></li>
					<li><a href="index.html"><i class="fa fa-id-badge"></i>Logout</a>

                      

					</li>
					

					</li>
					
				</ul>
			</div>
		</nav>
		</header>



    <div>
        <form action="addplaceinsert.php" method="POST">
            <div class="container">
                <h1>Add Place</h1>
                <p></p>
                <br>
                <label for="placeName"><b>Place Name </b></label>
                <input type="text" name="placeName" placeholder="Enter Place Name">
               
  <br>
  <br>

                

                

                

               <label for="placeLocation"><b>Place Location </b></label>
                <input type="text" name="placeLocation" placeholder="Enter place Location" required><br><br>



               

            

            

            

				
                
                <br><center> <button onclick="window.location.href='addplaceinsert.php'">Submit</button></center><br>
            </div>
        </form>
    </div>
</body>
</html>