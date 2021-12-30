<?php
        function signup() {
            $link=mysqli_connect("localhost","raj1","Raj@2005");
            $db=mysqli_select_db($link,"project");

            $uname = mysqli_real_escape_string($link, @$_REQUEST['uname']);
            $pass = mysqli_real_escape_string($link, @$_REQUEST['pass']);
            $fname = mysqli_real_escape_string($link, @$_REQUEST['fname']);
            $lname = mysqli_real_escape_string($link, @$_REQUEST['lname']);
            $email = mysqli_real_escape_string($link, @$_REQUEST['email']);
            $drone = mysqli_real_escape_string($link, @$_REQUEST['gender']);
            $no = mysqli_real_escape_string($link, @$_REQUEST['no']);
            $date1 = date('y-m-d',strtotime($_GET['date1']));
            $city = mysqli_real_escape_string($link, @$_REQUEST['city']);
            $state = mysqli_real_escape_string($link, @$_REQUEST['state']);
            $ladd = mysqli_real_escape_string($link, @$_REQUEST['ladd']);

            $s="INSERT INTO admin(Admin_id, PasswordT, First_Name, Last_Name, Email, Gender, Mobile_No, Date_of_birth, City, StateT, Local_address) VALUES ('$uname','$pass','$fname','$lname','$email','$drone','$no','$date1','$city','$state','$ladd' );";
        

            if(mysqli_query($link, $s)){
                echo "hi";
            } else{
                echo "ERROR: Could not able to execute $s. " . mysqli_error($link);
            }
            
            $link->close();
        }
        signup();
?>
