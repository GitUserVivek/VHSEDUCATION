<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration FORM</title>


    <!-- CSS CODE BILOW -->


    <style>
        * {
            padding: auto;
            margin: auto;
            color: white;
        }
        
        body {
            background-image: url("Back1.jpg");
            background-size: cover;
            margin: auto;
            padding: auto;
            align-content: center;
        }
        
        .form {
            position: absolute;
            height: 1498px;
            left: 30%;
            top: 5%;
            width: 400px;
            background: #333;
            text-align: center;
            border: solid transparent;
            border-radius: 20px;
        }
        
        .inp {
            position: relative;
            align-items: center;
            float: center;
            top: 5%;
            outline: none;
        }
        
        #FirstName,
        #LastName,
        #Phone,
        #Email,
        #SP,
        #CP {
            width: 300px;
            padding: 10px;
            margin-top: 30px;
            border: solid white;
            border-radius: 10px;
            background: #334;
            color: white;
            outline: none;
        }
        
        #FirstName:hover,
        #LastName:hover,
        #Phone:hover,
        #Email:hover,
        #SP:hover,
        #CP:hover {
            width: 300px;
            padding: 10px;
            margin-top: 30px;
            border: solid cyan;
            border-radius: 10px;
            background: transparent;
            outline: none;
        }
        
        #sub {
            padding: 10px;
            border: solid transparent;
            border-radius: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            background-color: steelblue;
            position: relative;
            top: 6px;
            outline: none;
        }
        
        input {
            width: 104px;
            padding: 10px;
            margin-top: 20px;
            border: solid cyan;
            border-radius: 10px;
            background: transparent;
        }
        
        #sub:hover {
            padding: 10px;
            border: solid transparent;
            border-radius: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            background-color: steelblue;
            position: relative;
            top: 6px;
            background-color: steelblue;
            box-shadow: white 0px 0px 25px;
        }
        
        #title {
            margin-top: 30px;
            font-size: 40px;
            color: white;
            text-shadow: cyan 0px 0px 20px;
        }
    </style>
</head>

<!-- HTML BODY BILOW -->

<body>
    <div class="form">
        <center id="title">ADMISSION FORM</center>
        </center>
        <div class="inp">


            <form id="form" method="post" action="Insadd.php">

                <h3>About the child</h3>
                <!-- INPUT TEXT -->
                <input placeholder="Admission of Standard" name="STD" id="FirstName" type="text">

                <br>
                <input placeholder="Name of child" name="CNAME" id="FirstName" type="text">

                <br>
                <input placeholder="Date of Birth the child" type="Date" name="DOB" id="FirstName">
                <h6 style:align:center;>Date of Birth</h6>
                <input placeholder="Age of child" name="AGEOC" id="FirstName" type="text">

                <br> <br>
                <h3>About the father</h3>
                <input placeholder="Name of Father" name="FNAME" id="FirstName" type="text">

                <br>
                <input placeholder="Qualifications of father" name="QALIOF" id="FirstName" type="text">

                <br>
                <input placeholder="Occupation of father" name="OCCOF" id="FirstName" type="text">

                <br><br>
                <h3>about the mother</h3>
                <input placeholder="Name of Mother" name="MNAME" id="FirstName" type="text">

                <br>
                <input placeholder="Qualifications of Mother" name="QUALIOM" id="FirstName" type="text">

                <br>
                <input placeholder="Occupation of Mother" name="OCCOM" id="FirstName" type="text">

                <br><br>
                <h3 style:color:red;> Your Contact Details </h3>
                <input placeholder="Email" name="Email" id="Email" type="email">

                <br>
                <input placeholder="Number" name="Phone" id="Phone" type="text">

                <br>

                <input placeholder="Address" name="Address" id="LastName" type="text">

                <br>

                <input placeholder="DOCS" name="DOCS" id="LastName" type="file">

                <br>
                <!-- SUBMIT -->
                <input id="sub" type="submit" value="Submit">
            </form>

        </div>
    </div>

</body>

</html>