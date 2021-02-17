   <!--    PHP CODE  -->
   <?php

$conn=mysqli_connect("localhost","phpmyadmin","Vivek@7840","phpmyadmin");
 if(!$conn){
     echo "NOT CONNECTED";
     echo mysqli_connect_error();
 }
 else {
     $Name = $_POST['firstname'];
     $Email = $_POST['email'];
     $Address = $_POST['address'];
     $City  = $_POST['city'];
     $State  = $_POST['state'];
     $Zip  = $_POST['zip'];
     $NonC  = $_POST['cardname'];
     $Crdnum  = $_POST['cardnumber'];
     $Expd  = $_POST['expmonth'];
     $Expyd = $_POST['expyear'];
     $CVV  = $_POST['cvv'];
      

     $q="INSERT INTO `PAYM`(`NAME`, `EMAIL`, `ADDRESS`, `CITY`, `STATE`, `ZIP`, `NAMEONC`, `CARDNUM`, `EXPMONTH`, `EXPYEAR`, `CVV`) VALUES ('$Name', '$Email', '$Address', '$City', '$State', '$Zip', '$NonC', '$Crdnum', '$Expd', '$Expyd', '$CVV');";

     $result = mysqli_query($conn,$q);
    
         
 }
 
?>


   <!-- PHP CODE ENDS -->
