   <!--    PHP CODE  -->
<?php

        $conn=mysqli_connect("localhost","phpmyadmin","Vivek@7840","phpmyadmin");
         if(!$conn){
             echo "NOT CONNECTED";
             echo mysqli_connect_error();
         }
         else {
             $Name = $_POST['name'];
             $Email = $_POST['email'];
             $Phone = $_POST['phone'];
             $Msg  = $_POST['massage'];
                      
             
             $q="INSERT INTO `CONTACTUS`(`NAME`,`EMAIL`,`PHONE`,`MASSAGE`) VALUES ('$Name','$Email','$Phone','$Msg')";
             $result = mysqli_query($conn,$q);
            
                 
         }
         $r5="DELETE FROM `CONTACTUS` WHERE `CONTACTUS`.`SR` = 5";
         $r6="DELETE FROM `CONTACTUS` WHERE `CONTACTUS`.`SR` = 6"; 
         mysqli_query($conn,$r5);
         mysqli_query($conn,$r6);

         
?>
        
        
            <!-- PHP CODE ENDS -->
        