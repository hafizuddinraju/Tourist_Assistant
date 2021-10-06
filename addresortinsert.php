<?php

        session_start();

        $user="root";
        $password="";
        $db="tour";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $Name=$_POST['resortName'];
        $cPlace=$_POST['resortLocation'];
        
        
        

        $registration= "insert into  resort(resortName, resortLocation) values('$Name',  '$cPlace' )";
        $r = mysqli_query($conn,$registration);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Resort Add Successful';
		
            header('Location: addresort.php');
        }
        else{
            die('Error in Resort Add!!');
        }

?>  