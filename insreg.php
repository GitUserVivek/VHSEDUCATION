<?php

$conn=mysqli_connect("localhost","phpmyadmin","Vivek@7840","phpmyadmin");
 if(!$conn){
     echo "NOT CONNECTED";
     echo mysqli_connect_error();
 }
 else {
     $Fname = $_POST['FirstName'];
     $Lname = $_POST['LastName'];
     $Phone = $_POST['Phone'];
     $Email = $_POST['Email'];
     $Pass  = $_POST['SP'];
     $Cpass = $_POST['CP'];

     if($Pass != $Cpass){
         echo "<script>alert('PASSWORD DOESNT MACH WITH CONFIRMPASSWORD')</script>";
         header("refresh:0;Register.php");
         die();
     }
     
     $q="INSERT INTO `REGISTER`(`FNAME`,`LNAME`,`PHONE`,`EMAIL`,`USERNAME`,`PASSWORD`) VALUES ('$Fname','$Lname','$Phone','$Email','$Fname@User','$Pass')";
     $result = mysqli_query($conn,$q);
     if($result && $Pass == $Cpass){
         
         echo "<script>window.alert('$Fname You have Successfully Registered With Us..Press OK Redirect to Login page..');</script>";
         echo "<script>alert('YOUR USERNAME IS $Fname@User')</script>";
         header("refresh:0;Login.php");
         

     }
     else{
         echo "FAILUER  BCZ ";
         die(mysqli_error($conn)); 
         
     }
     
     
     
 }
 




                                // FOR EXTRA INFORMATION FOLLOW COMAANDS GIVEN BELOW..

/*
                             -: IMP QUERIES  :-
  To ADD TABLECOLUMN :    :"ALTER TABLE `REGISTER` ADD `PASSWORD` VARCHAR(50) NOT NULL AFTER `EMAIL`, ADD `CPASSWORD` VARCHAR(50) NOT NULL AFTER `PASSWORD`; ";
  TO INSERT DATA IN TABLE :"INSERT INTO `REGISTER`(`FNAME`,`LNAME`,`PHONE`,`EMAIL`) VALUES ('$Fname','$Lname','$Phone','$Email')";

*/








?>
