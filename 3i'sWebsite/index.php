<!--
Authour: Jonathan Luke Ocampo
         Kyle Dumbrique
         Joshua Jefferson Baello
Descrip



-->



<?php

//php connect to MySQL database
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "articledb";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);





?>

<!DOCTYPE html>
<html>
<head>
	<title>3I's</title>
	
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link rel="stylesheet" href="style.css">
	 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--Link for the card slider-->
   <link rel="stylesheet" type="text/css" href="./slick/slick.css">
   <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
   <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 90%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
      height: 15vw;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: 1;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>
<body>

<!-- Start NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#">3I's</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#industry">Industry</a>
          <a class="dropdown-item" href="#infrastructure">Infrastructure</a>
          <a class="dropdown-item" href="#innovation">Innovation</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- End NAVBAR-->

<div class="front-page">
<div class="ctr">
  <!--Start of Front Page-->
	<h1><b>Augmented Reality</b></h1>
	<p style="color: white;">A Website About SDG#9 Industry, Infrastructure, Innovation Under Augmented Reality Topics.</p>
	
	<div class="container">
  		<div class="row">
    		<div class="col-sm">
      			<div class="d-flex justify-content-center"><img src="img/idea.png" style="margin:auto; width: 70%;"></div><h5>Innovation</h5>
   			 </div>
   			 <div class="col-sm">
  			    <div class="box">
  			    	<div class="d-flex justify-content-center"><img src="img/crane.png" style="margin:auto; width: 70%;"></div><h5>Infrastructure</h5>
  			    </div>
    		</div>
   			 <div class="col-sm">
    			  <div class="box">
      				<div class="d-flex justify-content-center"><img src="img/factory.png" style="margin:auto; width: 70%;"></div><h5>Industry</h5>
				</div>
    </div>
  </div>
</div>
</div>
</div>
 <img src="img/bg.jpeg" style="width: 100%;  box-shadow: 20px 20px grey;">

<!--End of Front Page-->

<!--Start of Info Page-->
<div style="margin-top: 5vw;"></div>
<div class="container1">
  <div class="row">
    <div class="col">
    	<h2>Augmented Reality</h2>
      <div class="d-flex justify-content-center"style="margin-top: 2vw;">Augmented reality is an interactive experience of a real-world environment where the objects that reside in the real world are enhanced by computer-generated perceptual information.</div>
    </div>
    <div class="col">
    <div class="d-flex justify-content-center"><img src="https://www.verdict.co.uk/wp-content/uploads/2019/06/augmented-reality.jpg" style="width: 30vw; box-shadow: 15px 15px #5555559c;"></div>
    </div>
  </div>
</div>


<div style="margin-top: 5vw;"></div>
<div class="container1">
  <div class="row">
    <div class="col">
    
      <div class="d-flex justify-content-center"><img src="https://img.freepik.com/free-vector/concept-augmented-reality-background_46706-831.jpg?size=626&ext=jpg" style="width: 30vw; box-shadow: -15px -15px #5555559c;"></div>
    </div>
    <div class="col">
   <h2>ABOUT</h2>
      <div class="d-flex justify-content-center"style="margin-top: 2vw;">The website focuses on SDG#9 - Industry, Innovation, Infrastructure
Specifically, about Augmented Reality</div>
    </div>
  </div>
</div>

<!--End of Front Page-->

<!--SDG-->

<hr>
<h2 style="text-align: center;">Sustainable Development Goals</h2>
<br>
<div class="container">
  <div class="row">
    <div class="col">
     <img src="https://www.un.org/sustainabledevelopment/wp-content/uploads/2018/05/E_SDG-goals_icons-individual-rgb-01.png?resize=148%2C148&ssl=1" style="width: 90%;">
    </div>
    <div class="col">
      <img src="https://www.un.org/sustainabledevelopment/wp-content/uploads/2017/10/E_SDG-goals_Goal-02.png" style="width: 90%;">
    </div>
     <div class="col">
     <img src=https://www.un.org/sustainabledevelopment/wp-content/uploads/2018/05/E_SDG-goals_icons-individual-rgb-03.png?resize=148%2C148&ssl=1" style="width: 90%;">
    </div>
     <div class="col">
     <img src="https://sustainabledevelopment.un.org/content/sdgsummit/images/E_SDG%20goals_icons-individual-rgb-04.png" style="width: 90%;">
    </div>
     <div class="col">
    <img src="https://sustainabledevelopment.un.org/content/sdgsummit/images/E_SDG%20goals_icons-individual-rgb-05.png" style="width: 90%;">
    </div>
     <div class="col">
    <img src="https://www.un.org/sustainabledevelopment/wp-content/uploads/2017/10/E_SDG-goals_Goal-06.png" style="width: 90%;">
    </div>
     <div class="col">
      <img src="https://sustainabledevelopment.un.org/content/sdgsummit/images/E_SDG%20goals_icons-individual-rgb-07.png" style="width: 90%;">
    </div>
     <div class="col">
    <img src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-08.png" style="width: 90%;">
    </div>
     <div class="col">
     <img src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-09.png" style="width: 90%;">
    </div>
  </div>
  <br>
  <div class="row" style="margin-left: 0.25vw;">
    <div class="col">
     <img src="https://www.un.org/sustainabledevelopment/wp-content/uploads/2018/05/E_SDG-goals_icons-individual-rgb-10.png?resize=148%2C148&ssl=1" style="width: 80%;">
    </div>
    <div class="col">
     <img src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-11.png" style="width: 80%;">
    </div>
    <div class="col">
     <img src="https://www.un.org/sustainabledevelopment/wp-content/uploads/2018/05/E_SDG-goals_icons-individual-rgb-12.png?resize=148%2C148&ssl=1" style="width: 80%;">
    </div>
     <div class="col">
      <img src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-13.png" style="width: 80%;">
    </div>
     <div class="col">
      <img src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-14.png" style="width: 80%;">
    </div>
     <div class="col">
      <img src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-15.png" style="width: 80%;">
    </div>
     <div class="col">
     <img src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-16.png" style="width: 80%;">
    </div>
     <div class="col">
      <img src="https://sustainabledevelopment.un.org/content/sdgsummit/images/E_SDG%20goals_icons-individual-rgb-17.png" style="width: 80%;">
    </div>
  </div>
  <div class="divider1"></div>
  <p style="text-align: justify;">The Sustainable Development Goals or Global Goals are a collection of 17 interlinked goals designed to be a "blueprint to achieve a better and more sustainable future for all". The SDGs were set in 2015 by the United Nations General Assembly and are intended to be achieved by the year 2030.</p>
</div>
<hr>
<!--SDG END-->
<div class="divider"></div>






<!--SDG 9 and 3i's-->
	
	<div class="container">

		<h3>Sustainable Development Goal #9</h3>
		<div class="divider1"></div>
		<img class="mx-auto d-block"src="https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-09.png" style="width: 20%;">
  		<div class="row">
  			<div class="divider1"></div>
    		<div class="col-sm">
      			<div class="d-flex justify-content-center"><img src="img/idea.png" style="margin:auto; width: 50%;"></div><h5>Innovation</h5>
   			 </div>
   			 <div class="col-sm">
  			 
  			    	<div class="d-flex justify-content-center"><img src="img/crane.png" style="margin:auto; width: 50%;"></div><h5>Infrastructure</h5>
    		</div>
   			 <div class="col-sm">
      				<div class="d-flex justify-content-center"><img src="img/factory.png" style="margin:auto; width: 50%;"></div><h5>Industry</h5>
		    </div>

		  </div>
		<div class="row">
			<div class="col-sm"><p>Innovation can refer to something new or to a change made to an existing product, idea, or field.</p>
			</div>
			<div class="col-sm"><p>Infrastructure is the basic physical and organizational structures and facilities (e.g. buildings, roads, power supplies) needed for the operation of a society or enterprise.</p>
			</div>
			<div class="col-sm"><p>Infrastructure is the basic physical and organizational structures and facilities (e.g. buildings, roads, power supplies) needed for the operation of a society or enterprise.</p>
			</div>
		</div>
	</div>
	<hr>
<!--End SDG 9 and 3i's-->

<!--Start of Programmable search engine -->
<div class="divider"></div>
<h3> All Results are AR Related</h3>
<div class="divider1"></div>
<div class="container"><script async src="https://cse.google.com/cse.js?cx=fd93bdf1f90e33732"></script>
<div class="gcse-searchbox-only"></div></div>
<!--End of of Programmable search engine-->

<div class="divider"></div>
<hr>
<div class="divider"></div>


<!--Start of Article Library-->
<h3>Articles Relating Augmented Reality</h3>

<section id="industry"></section>
<div class="divider"></div>


<!--Start of Industry Article-->
<h3>Industry <button  id="flip" type="button" class="fa fa-caret-square-o-down" style="font-size:24px; color: #007bff;"></button></h3> 
<!--CARD SLIDER-->
<div id="panel">
<?php 

//get data from industry table in database
$sql1= "SELECT * FROM industry";
$result = mysqli_query($conn,$sql1);

echo '<section class="center slider">';

//fetch all data and pint it until all the rows have gone through
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){
    echo'  <div class="card" style="width: 18rem;">
            <div> 
               <img   src="'.$row["image"].'"  >
                  <div class="card-body">
                    <h5 class="card-title">'.$row["article"].'</h5>
                    <p class="card-text">'.$row["description"].'</p>
                    <a href="'.$row["link"].'" target="_blank" class="btn btn-primary pull-right">More</a>
                    <br>
                  </div>
                  
              </div>
            </div>';
              }
          }
 echo '</section>';
 ?>
</div>





<!--Start of infrastructure Articles-->

<section id="infrastructure"></section>
<div class="divider"></div>
<h3>Infrastructure <button  id="flip1" type="button" class="fa fa-caret-square-o-down" style="font-size:24px; color: #007bff;"></button></h3> 

<!--CARD SLIDER-->
<div id="panel1">
 <?php 

//get data from industry table in database
$sql1= "SELECT * FROM infrastructure";
$result = mysqli_query($conn,$sql1);

//fetch all data and pint it until all the rows have gone through
echo '<section class="center slider">';
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){

  
    echo'  <div class="card" style="width: 18rem;">
            <div> 
               <img   src="'.$row["image"].'"  >
                  <div class="card-body">
                    <h5 class="card-title">'.$row["article"].'</h5>
                    <p class="card-text">'.$row["description"].'</p>
                    <a href="'.$row["link"].'" target="_blank" class="btn btn-primary pull-right">More</a>
                    <br>
                  </div>
                  
              </div>
            </div>
';
    
   
}}
 echo '</section>';

  ?>
</div>

<!--Start of Innovation Articles-->

<section id="innovation"></section>
<div class="divider"></div>


<h3>Innovation <button  id="flip2" type="button" class="fa fa-caret-square-o-down" style="font-size:24px; color: #007bff;"></button></h3> 
<!--CARD SLIDER-->
<div id="panel2">
<?php 

//get data from industry table in database
$sql1= "SELECT * FROM innovation";
$result = mysqli_query($conn,$sql1);

//fetch all data and pint it until all the rows have gone through
echo '<section class="center slider">';
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){

  
    echo'  <div class="card" style="width: 18rem;">
            <div> 
               <img   src="'.$row["image"].'"  >
                  <div class="card-body">
                    <h5 class="card-title">'.$row["article"].'</h5>
                    <p class="card-text">'.$row["description"].'</p>
                    <a href="'.$row["link"].'" target="_blank" class="btn btn-primary pull-right">More</a>
                    <br>
                  </div>
                  
              </div>
            </div>
';
    
   
}}
 echo '</section>';

  ?>
</div>
<!--Script for html/css libraries-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Function to hide and display article card-->
<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>


<script>


$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});
</script>
<script>


$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  });
});
</script>
<!--end-->
<!--Function to get setting of card slider-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
     
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
     
    });
</script>
<!--end-->
</body>
</html>