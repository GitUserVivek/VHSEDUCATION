<!--  -->


   <!--    PHP CODE  -->
   <?php

$conn=mysqli_connect("localhost","phpmyadmin","Vivek@7840","phpmyadmin");
 if(!$conn){
     echo "NOT CONNECTED";
     echo mysqli_connect_error();
 }



 else {
     $STD=$_POST['STD'];
     $CNAME=$_POST['CNAME'];
     $DOB=$_POST['DOB'];
     $AGEOC=$_POST['AGEOC'];
     $FNAME=$_POST['FNAME'];
     $QALIOF=$_POST['QALIOF'];
     $OCCOF=$_POST['OCCOF'];
     $MNAME=$_POST['MNAME'];
     $QUALIOM=$_POST['QUALIOM'];
     $OCCOM=$_POST['OCCOM'];
     $Email=$_POST['Email'];
     $Phone=$_POST['Phone'];
     $Address=$_POST['Address'];
     $DOCS=$_POST['DOCS'];
             
     $q="INSERT INTO `ADDMISSION01`(`STD`,`CNAME`,`DOB`,`AGEOC`,`FNAME`,`QUEOF`,`ACCOF`,`MNAME`,`QUEOM`,`ACCOM`,`EMAIL`,`PHONE`,`ADDRESS`,`DOCS`) VALUES ('$STD', '$CNAME', '$DOB', '$AGEOC', '$FNAME', '$QALIOF', '$OCCOF', '$MNAME', '$QUALIOM', '$OCCOM', '$Email', '$Phone', '$Address', '$DOCS')";                                                                    
     $result = mysqli_query($conn,$q);
    
         
 }
 
?>


    <!-- PHP CODE ENDS -->
