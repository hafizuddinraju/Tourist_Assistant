<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

   <!-------------Bar Start-------------->
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
					<li><a href="about.html"><i class="fa fa-comment"></i>Review</a></li>
					<li><a href="about.html"><i class="fa fa-user"></i>About</a></li>
					<li><a href="contact.html"><i class="fa fa-phone"></i>Contact</a></li>
					<li><a href="#"><i class="fa fa-id-badge"></i>My Account</a>

                        <div class="sub-menu-1">
							<ul>

								<li class="nav-item">
                                <a href="login.php" >Login </a>
                                </li>
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

  <title>Review</title>
  <center><h1>Review</h1></center><br>
</header>
</body>
 <style>
  body{
    width: 100%;
  height: 100vh;
  background:  linear-gradient(57deg, #aed0d0, #81858e);
  }
  table {
    border-collapse: collapse;
    width: 90%;
    color: black;
    font-family: monospace;
    font-size: 25px;
    text-alignL: left;
  }

  th {
    background-color: #588c7e;
    color: white;
  }

  tr:nth-child(odd) {background-color: #f2f2f2}
</style>
</head>
<body>

<table>
   <tr>
      <td><b>Email</b></td>
      <td><b>Name</b></td>
      <td><b>Feedback</b></td>
      

    </tr>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "tour");
    if($conn-> connect_error){
        die("Connection failed :". $conn-> connect_error);
    }

    $sql = "SELECT email, name, Feedback from feedback ";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            echo "<tr><td>" . $row["email"] . "</td><td>" . $row["name"] . "</td><td>" . $row["Feedback"] . 
             "</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo " 0 result";
    }

     $conn-> close();
    ?>


</table>
</body>
</html>