<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');
body
{
    margin: 0;
    padding: 0;
    font-family: 'Source Sans Pro', sans-serif;
    width: 0%;
    height: 100vh;
    background: linear-gradient(30deg, #63f,#081, #ffa, #fac);
   
}
.wrapper
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px;
    padding:40px;
    box-sizing: border-box;
    background: #eee;
    box-shadow: 0 10px 30px rgba(0,0,0,.5);
}
.wrapper h2
{
    color: #666;
    margin: 0;
    padding: 0;
    text-align: center;
    font-size: 30px;
    text-transform: uppercase;
}
.input-field
{
    position: relative;
    width: 100%;
    margin-top: 50px;
}
.input-field input,
.input-field textarea
{
    width: 100%;
    padding: 5px 0;
    box-sizing: border-box;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #666;
    font-size: 16px;
    color: #666;
    font-weight: 700;
    text-transform: uppercase;
    resize: none;
}
.input-field label
{
    position: absolute;
    top: 0;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 16px;
    color: #666;
    font-weight: 700;
    text-transform: uppercase;
    transition: 1s;
}
.input-field input:focus + label,
.input-field textarea:focus + label,
.input-field input:valid + label,
.input-field textarea:valid + label
{
    top: -25px;
    font-size: 16px;
    padding: 2px 5px;
    background: #000;
    color: white;
    border-radius: 4px;
}
.btn
{
    margin-top: 20px;
    background: gray;
    color: #fff;
    padding: 15px 30px;
    border: none;
    outline: none;
    border-radius: 30px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 16px;
    transition: 0.5s;
    float: right;
}
.btn:hover
{
    background: #000;
}

</style>
</head>
<body>
        <div class="wrapper">
    <h2>Contact Us</h2>
    <form method="post" action="inscon.php">
        <div class="input-field">
            <input type="text" name="name">
            <label>Name</label>
        </div>
        <div class="input-field">
            <input type="email" name="email">
            <label>Email</label>
        </div>
        <div class="input-field">
            <input type="tel" name="phone">
            <label>Mobile</label>
        </div>
        <div class="input-field">
            <textarea rows="3" name="massage"></textarea>
            <label>message</label>
        </div>
        <input type="submit" name="" value="Send Message" class="btn">
    </form>
</div>
       

</body>
</html>
