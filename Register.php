<html>
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
            height: 800px;
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
            position: inline;
            top: 6px;
            outline: none;
            margin-top: 30px;
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
        <center id="title">REGISTER</center>
        <div class="inp">
            <form id="form" method="post" action="insreg.php">

                <!-- INPUT TEXT -->
                <input placeholder="FirstName" name="FirstName" id="FirstName" type="text"><br>
                <input placeholder="LastName" name="LastName" id="LastName" type="text"><br>
                <input placeholder="Number" name="Phone" id="Phone" type="text"><br>
                <input placeholder="Email" name="Email" id="Email" type="email"><br>
                <input placeholder="Set Password" name="SP" id="SP" type="password"><br>
                <input placeholder="Confirm Password" name="CP" id="CP" type="password" onblur="call()"><br>

                <!-- SUBMIT -->
                <input id="sub" type="submit" value="SIGN UP">


            </form>
            <button id="sub" onclick="login()"> have an account </button>
        </div>
    </div>

</body>
<!--  JAVASCRIPT CODE BILOW -->

<script>
    function call() {
        var pas = document.getElementById("SP").value;
        var cpas = document.getElementById("CP").value;
        // var form = document.getElementById("form");
        if (pas != cpas) {
            alert("PASSWORD DOSENOT MATCH")
        }
    }

    function login() {
        window.location.replace("Login.php");
    }
</script>
<!-- END JAVASCRIPT -->

</html>
