<?php

        session_start();

        $user="root";
        $password="";
        $db="tour";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $Name=$_POST['placeName'];
        $location=$_POST['placeLocation'];
        
        

        $registration= "insert into  place(placeName, placeLocation) values('$Name', ' $location' )";
        $r = mysqli_query($conn,$registration);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Place Add Successful';
		
            header('Location: addplace.php');
        }
        else{
            die('Error in Place Add!!');
        }

?>  