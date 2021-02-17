<!DOCTYPE html>
<html lang="en">
<?php 
     
$mysqli = mysqli_connect('localhost','phpmyadmin', 'Vivek@7840','phpmyadmin'); 

$sql = "SELECT * FROM REGISTER ORDER BY SR ASC"; 
$result = mysqli_query($mysqli,$sql)
?>

<head>

    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
        
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        
        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <h1>REGISTERED USRES</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>NAMES</th>
                <th>LASTNAMES</th>
                <th>USERNAMES</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->
                <td>
                    <?php echo $rows['FNAME'];?>
                </td>
                <td>
                    <?php echo $rows['LNAME'];?>
                </td>
                <td>
                    <?php echo $rows['USERNAME'];?>
                </td>

            </tr>
            <?php 
                } 
             ?>
        </table>
    </section>
</body>

</html>

