<html>
<head>
   <!-- Bootstrap CSS --
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-- End bootstrap -->
    
  
<title>Page Title</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://vhseducationprltd.000webhostapp.com/SCHOOLPROJECT/style.css" >
<!--si-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="header">
<img src="logo1.png" class="logo" height="50" width="50">
  <h1>VHS EDUCATION PRLTD</h1>
  <p font-style: cursive;><b>Strong Focus On Education </b></p>
</div>

<div class="topnav" id="myTopnav">
  <a href="#" class="active">Home</a>
  <a href="https://vhseducationprltd.000webhostapp.com/about%20us.html">About Us</a>
  <a href="https://vhseducationprltd.000webhostapp.com/contact%20us.html">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Admission 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      <a href="  https://vhseducationprltd.000webhostapp.com/Enquiry.html">New Apply</a>
      <a href="  https://vhseducationprltd.000webhostapp.com/contact%20us.html ">Enquiry</a>
      <a href="payment.html">Payment</a>
    </div>
  </div> 
  <a href="#">Learning</a>
  <a href=" https://vhseducationprltd.000webhostapp.com/News.html ">News & Event</a>
  <a href="features.html">Features</a>
  <a href=" https://vhseducationprltd.000webhostapp.com/gallery.html">Gallery</a>
  <a href="login.html">Log In</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div class="row">
  
  <!--gl--><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <center><h3> VHS BRAND EDUCATIONAL PRIVATE 
LIMITED</h3></center><br>  <br>

<div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides" src="slideimg3.jpg" style="width:100%">
  <img class="mySlides" src="slideimg2.jpg"style="width:100%">
  <img class="mySlides" src="slideimg1.jpg" style="width:100%">
<img class="mySlides" src="slideimg4.jpg" style="width:100%">
  
  <img class="mySlides" src="slideimg5.jpg" style="width:100%">
</div>
<!--  INTRO  -->
<div class="conmain">
    <div id="yo">
    <div class="card1">
   
	   <h2 >  <div class="dec"></div>Our School</h2>
	     <p>A place where all children grow in knowledge, and wisdom, competence, grooming its intellectual understanding cultivating the right attitude and manifesting talents</p>

	 </div>
	 <br>

    <div class="card2">
	     <div class="dec"></div> 
	     <h2>Our Mission</h2>
		  <p>To show it as a complete human being through value based quality education, helping students to reachtheir full potential &amp;&amp; discover themselves in pursuance of excellence.</p>
	<a href="  " class="read-more">Read more ></a>
</div><br>
    <div class="card2">
	     <div class="dec"></div>
	     <h2>Our Vision</h2>

	<p>Imparting quality education at the cost affordable to all strata of the society And creating a stress free and healthy society</p>
	<a href="  " class="read-more">Read more ></a>
</div>   <br>
<div class="card2">
	   <div class="dec"></div> 
	   <h2>Our Goal</h2>

														   	<p>Catalyze all round development of students and encourage them to soar the skies to become greatachievers. To strive towards creating human centered development and building knowledge centeredsociety.</p>
										
	<a href="  " class="read-more">Read more ></a>
</div>
<br><br>
   <div class="card3">
	   <div class="dec"></div>
	   <h2>Our Motto</h2>
	<p>Good thoughts, Good deeds, Good words.</p>
     	<a href="  " class="read-more">Read more ></a>
   </div>
</div>
</div>
<!-- INTRO END  -->


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>>
<!--end-->
  
    <a name="aboutus"></a>
  <div class="social-media">
  <a href="  https://m.facebook.com/groups/157443039401034/?_rdr" target="_blank" class="facebook" title="Facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://instagram.com/vhsbrandedupri.ltd1017?igshid=3917ezqoiwtc" target="_blank" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a>
   

  <a href="https://youtube.com/channel/UCpGHEEzwTMMYWrpv8_0Qn2g" target="_blank" class="youtube" title="Youtube"><i class="fa fa-youtube"></i></a> 
  <a href="  https://m.me/hemant.wakade.96" class="messenger" target="_blank" title="Facebook Messenger"><i class="fa fa-commenting-o"></i></a> 
  <a href="https://api.whatsapp.com/send?phone=+917558685227&text=Hi" target="_blank" class="whatsapp" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>
  
</div>   

  
</div>


<div class="footer">
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <br>
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p> This Website is Created By VHS BRAND. Primary Classes Start From LKG class to 4th Standerd And Secondary School From 5th to 10Th standerd</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
<br>
        <ul class="list-unstyled">
          <li>
            <a href="about us.html">About Us</a>
          </li>
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="">Help Center</a>
          </li>
          <li>
            <a href="https://www.worldometers.info/coronavirus/country/india/">Corona Help</a>
          </li>
        </ul>

      </div>

      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
<br>
        <ul class="list-unstyled">
          <li>
            <h6>Contact Us</h6>
          </li>
          <li>
            <a href="sms:+917066649832">SMS</a>
          </li>
          <li>
            <a href="tel:+917066649832">Call</a>
          </li>
          <li>
            <a href="mailto:vhseducationprltd@gmail.com">Mail</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="https://vhseducationprltd.000webhostapp.com/SCHOOLPROJECT/register.html" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://www.000webhost.com/">https://000webhostapp.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>


</body>
</html>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
