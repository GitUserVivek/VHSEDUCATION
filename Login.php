<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN FORM</title>
    <style>
        * {
            margin: auto;
        }
        
        body {
            background-image: url("Back1.jpg");
            background-size: cover;
            align-content: center;
        }
        
        .form {
            position: absolute;
            height: 450px;
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
            top: 5%;
        }
        
        #Name,
        #Pass {
            width: 200px;
            padding: 10px;
            margin-top: 30px;
            border: solid white;
            border-radius: 10px;
            background: #334;
            color: white;
            outline: none;
        }
        
        #Name:hover,
        #Pass:hover {
            width: 300px;
            padding: 10px;
            margin-top: 30px;
            border: solid cyan;
            border-radius: 20px;
            background: #345;
            outline: none;
        }
        
        #sub {
            margin-top: 30px;
            padding: 10px;
            border: solid transparent;
            border-radius: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            background-color: steelblue;
        }
        
        #sub:hover {
            margin-top: 30px;
            padding: 10px;
            border: solid transparent;
            border-radius: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            background-color: steelblue;
            box-shadow: white 0px 0px 25px;
        }
        
        #title {
            margin-top: 30px;
            font-size: 40px;
            color: white;
            text-shadow: cyan 0px 0px 20px;
        }
        
        .button {
            position: absolute;
            top: 409px;
            left: 585px;
            background-color: transparent;
            color: white;
            padding: 8px;
            border: none;
        }
        
        .button:hover {
            position: absolute;
            top: 409px;
            left: 585px;
            background-color: transparent;
            color: white;
            padding: 10px;
            border: solid;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="form">
        <center id="title"> LOGIN </center>
        <div class="inp">
            <form method="post" action="Destination.php">
                <!-- INPUT TEXT -->
                <input id="Name" type="text"><br>
                <input id="Pass" type="text"><br>
                <!-- SUBMIT -->
                <input id="sub" type="submit" value="SIGN IN">

            </form>
            <a href="Register.php"> <input id="sub" type="button" value="Register For Free"></a>
        </div>
    </div>


</body>

</html>