<!DOCTYPE html>
<?php include("func.php");

?>
<html>
<head>

<title>Contact Center</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="doc.css" rel="stylesheet" />

<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>

</head>
<body>

<!-- Menu Bar -->
<nav class="navbar navbar-expand-lg navbar navbar-light " style="background-color: #23415C; ">
  <a class="navbar-brand" href="#" style="color: white;"><h3>E_Hospital BD</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 6px;">
    <ul class="navbar-nav mr-auto" style=" padding-right: 5px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: #fff;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #232827;">
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #232827;">Goal & Objective</a>
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #222827;">Message For You </a>
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #222827;">Our Future Plan</a>
          <a class="dropdown-item" href=".php"style="color: #fff;background-color: #222827;">Our Purpose</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          Our srevice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #222829;">
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #222829;">Service Center</a>
          <a class="dropdown-item" href="test_center.php"style="color: #fff;background-color: #222829;">Test & Charges </a>
          <a class="dropdown-item" href="medicine_center.php"style="color: #fff;background-color: #222829;">Medicine Center</a>
          <a class="dropdown-item" href="blood_center.php"style="color: #fff;background-color: #222829;">Blood Center</a>
          <a class="dropdown-item" href="ambulance.php"style="color: #fff;background-color: #222829;">Ambulance Service</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="dr.php"style="color: #fff;">Doctors</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="branch.php"style="color: #fff;">Branches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php"style="color: #fff;">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.php"style="color: #fff;">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: #fff;">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php"style="color: #fff;">LogIn</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="padding-right: 6px;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>

<!-- Fixed Font -->

<div id="home">
    <div class="landing-text">
      <h1>HOSPITAL</h1>
      <h3>The E_hospital is Only for You.</h3>
      <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">learn More</a></button>
      <h2><b>Get A Doctor Appoinment</b></h2>
    <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">appoinment</a></button>  
    </div>
 </div>

<!-- Find Doctor -->
<div class="container-fluid" style="margin-top: 25px;">
  
    <div class="col" style="padding-left: 40px; "> 
      <center><h2 style="font-family:'Alfa Slab One';">Our Contact Center</h2> </center>
    </div>
</div>
<!-- Alignment -->

<main class="mt-5">
<div class="container-fluid" >
  <div class="row" style="margin-left: 18px;">
    <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/6.jpg" class="relative" alt="Paris" style="width:300px;height:200px">
    </div>
    <div class="flip-box-back">
      <h2>Paris</h2>
      <p>What an amazing city</p>
    </div>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/7.jpg" alt="Paris" style="width:300px;height:200px">
    </div>
    <div class="flip-box-back">
      <h2>Paris</h2>
      <p>What an amazing city</p>
    </div>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/2.jpg" alt="Paris" style="width:300px;height:200px">
    </div>
    <div class="flip-box-back">
      <h2>Paris</h2>
      <p>What an amazing city</p>
    </div>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/h1.jpg" alt="Paris" style="width:300px;height:200px">
    </div>
    <div class="flip-box-back">
      <h2>Paris</h2>
      <p>What an amazing city</p>
    </div>
  </div>
</div>
  </div>
</div><br><br>

</main>

<!-- team -->
<div class="container">
  <center><h2  style="font-family:'Alfa Slab One';">Our Team Member</h2></center><br><br>
  <div class="row">
    <div class="col-4">
      <div class="card">
  <img src="images/dr.jpg" alt="John" style="width:100%;height:300px;"><br>
  <h1>Hasibur </h1>
  <p class="title">CEO & Founder</p>
  <p>Pabna University of Science and technology</p>
  <a href="#"><i class="fab fa-dribbble"id="b"></i></a> 
  <a href="#"><i class="fab fa-twitter"id="b"></i></a> 
  <a href="#"><i class="fab fa-linkedin"id="b"></i></a> 
  <a href="#"><i class="fab fa-facebook"id="b"></i></a> <br>
  <p><button id="bo">Contact</button></p>
</div>
    </div>
    <div class="col-4">
      <div class="card">
  <img src="images/tr.jpg" alt="John" style="width:100%;height:300px;"><br>
  <h1>John Doe</h1>
  <p class="title">CEO & Founder</p>
  <p>Pabna University of Science and technology</p>
  <a href="#"><i class="fab fa-dribbble"id="b"></i></a> 
  <a href="#"><i class="fab fa-twitter"id="b"></i></a> 
  <a href="#"><i class="fab fa-linkedin"id="b"></i></a> 
  <a href="#"><i class="fab fa-facebook"id="b"></i></a><br> 
  <p><button id="bo">Contact</button></p>
</div>
    </div>
    <div class="col-4">
      <div class="card">
  <img src="images/dr2.jpg" alt="John" style="width:100%;height:300px;"><br>
  <h1>John Doe</h1>
  <p class="title">CEO & Founder</p>
  <p>Pabna University of Science and technology</p>
  <a href="#"><i class="fab fa-dribbble" id="b"></i></a> 
  <a href="#"><i class="fab fa-twitter" id="b"></i></a> 
  <a href="#"><i class="fab fa-linkedin"id="b"></i></a> 
  <a href="#"><i class="fab fa-facebook"id="b"></i></a><br> 
  <p><button id="bo">Contact</button></p>
</div>
    </div>
  </div>


  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

#bo{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

#b {
  text-decoration: none;
  font-size: 28px;
  color: black;
}


#bo:hover, a:hover {
  opacity: 0.7;
}
</style>
</div>


<!-- dr profile-->

<div class="container cn" style="font-family: 'Alfa Slab One'; ">
  <center><h1 >Cotract Us</h1></center><br>
  <div class="row">
    <div class="col-md-6" >
      
        <div class="form-group">
          <label>Your Name *</label>
           <input type="text" name="user_name" class="form-control" placeholder="Your Name" required >
        </div>

      <div class="form-group">
          <label>Your Email Address *</label>
           <input type="text" name="user_address" class="form-control"  placeholder="Your Enmail Address" required >
    </div>
      <div class="form-group">
          <label>Your Massage *</label>
           <textarea class="form-control" rows="10" required></textarea>
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block ">Send Message
      </button> 
    </div>
    <style type="text/css">
      .cn{

        margin-top: 50px;
        padding: 20px;
       box-shadow: 0px 0px 8px 1px gray;
      }
    </style>
  </div>
  <div class="col-md-6 " >

   <div class="icon-bar" >
  <div class="row" style="margin: 20px;">
    <div class="col-sm-3">
      <a class="active" href="#"><i class='fas fa-globe' style='font-size: 40px; color: green;'></i></a>
    </div>
    <div class="col-sm-9">
      <p>We are always for you.</p>
    </div>
  </div>

  <div class="row" style="margin: 20px;">
    <div class="col-sm-3">
      <a href="#"><i class='fas fa-phone-volume' style='font-size: 40px;padding-top: 6px;'></i></a> 
    </div>
    <div class="col-sm-9">
     <p>Mobile: +8801835429094</p> 
     <p>Mobile: +8801754001091</p> 
    </div>
  </div>
  
  <div class="row" style="margin: 20px;">
    <div class="col-sm-3">
      <a href="#"><i class='fas fa-map-marker-alt' style='font-size: 40px;color: #00984A;'></i></a>
    </div>
    <div class="col-sm-9">
      <p>House #48/5, Road # 5, Dakkhin Bishil, Mirpur-1, Dhaka-1216, Bangladesh</p>
    </div>
  </div>
  
  <div class="row" style="margin: 20px;">
    <div class="col-sm-3">
      <a href="ambulance.php"><i class='fas fa-ambulance' style='font-size: 40px;color: blue;'></i></a>
    </div>
    <div class="col-sm-9">
      <p>Contact For Ambilance Service.</p>
    </div>
  </div>

  <div class="row" style="margin: 20px;">
    <div class="col-sm-3">
      <a href="medicine_center.php"><i class='fas fa-capsules' style='font-size: 40px;color:#B50000;'></i></a>
    </div>
    <div class="col-sm-9">
      <p>Contact For Medicine Service.</p>
    </div>
  </div>
 
 <div class="row" style="margin: 20px;">
    <div class="col-sm-3">
      <a href="test_center.php"><i class='fas fa-stethoscope' style='font-size: 40px;color:#F69000;'></i></a>
    </div>
    <div class="col-sm-9">
      <p>Contact For Test & Charge Service.</p>
    </div>
  </div>

  <div class="row" style="margin: 20px;">
    <div class="col-sm-3">
      <a href="details_staff.php"><i class='fas fa-user-md' style='font-size: 40px;color:#4CAF50; padding-top: 6px;'></i></a>
    </div>
    <div class="col-sm-9">
      <p>Contcat For Our Team Member.They are always ready for You.</p>
   
    </div>
  </div>

</div>
    </div>

    </div>
  </div>
<br>

<!-- Alignment -->

<div class="container" style="font-family: 'Alfa Slab One'; margin-top: 80px; margin-bottom: 80px;">
  <center><h2>Contact Us Our Social Link</h2></center><br><br>
  <div class="icon-bar text-center" id="s-m" >
  <a class="active" href="#"><i class="fab fa-facebook"></i></a> 
  <a href="#"><i class="fab fa-facebook-messenger" ></i></a> 
  <a href="#"><i class="fab fa-google" ></i></a> 
  <a href="#"><i class="fab fa-instagram" ></i></a>
  <a href="#"><i class="fab fa-linkedin" ></i></a> 
  <a href="#"><i class="fab fa-twitter" ></i></a>
  <a href="#"><i class="fab fa-youtube" ></i></a>
</div>
<br>
</div>

<!-- Alignment -->

<!-- Alignment -->

<!-- drr -->

<!-- footer -->

<footer class="container-fluid text-center" >
    <div class="row">
      <div class="col-sm-4">
        <h4>Contact</h4>
        <br>
        <p>House #48/5, Road # 5, Dakkhin Bishil, Mirpur-1, Dhaka-1216, Bangladesh </p>
        <p>Phone : +880 1754001091</p>
        <p>E-mail : hasibur140115@gmail.com</p>
      </div>
      <div class="col-sm-4">
        <h4>Our Social Link</h4>
        <br>
        <div class="icon-bar text-center" id="s-n" >
  <a class="active" href="#"><i class="fab fa-facebook"></i></a> 
  <a href="#"><i class="fab fa-google" ></i></a> 
  <a href="#"><i class="fab fa-twitter" ></i></a>
  <a href="#"><i class="fab fa-youtube" ></i></a>
</div>
      </div>
      <div class="col-sm-4">
        <h4>WE ARE </h4>
        <br>
        <img src="images/m1.jpg" class="rounded-circle" style="height: 120px; width: 120px;" >
      </div>
    </div><br>
  <div>
       <center><p style="font-size: 13px;color: white;">@Copyright By Hasibur Rahman </p></center>
  </div>
  </footer>

<!-- jquary in body -->



<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</body>
</html>