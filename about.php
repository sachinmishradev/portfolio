<?php

include_once('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome to | site</title>
  <meta charset="utf-8">
  <meta name="viewport"  content="width=device-width ,initial-width=1.0,minimum-scale=1.0,maximum-scale=1.0,userscallable=no min">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/fc3e85f604.js"></script>
</head>
<body id="myPage" data-spy='scroll' data-target='.navbar'  data-offset='60'>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggle" data-target="#mynavbar" data-toggle="collapse" type="button">
      <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
    </button>
    <a href="mailto:sachinmishra199747@gmail.com" class="navbar-brand">Sachin</a>
     </div> 
     <div id="mynavbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ABOUT</a></li>
        <li><a href="#skills">SKILLS</a></li>
        <li><a href="#gallary">PROJECTS</a></li>
        <li><a href="#contact">CONTACT</a></li >
        </ul>
     </div>
  </div>
</nav>
<div id='jumb' class="jumbotron text-center" >
<div id='jumb1' class="sub_jum">
  <h1 class="wow rollIn" style="font-weight:bolder;font-family:Montserrat">sachin mishra</h1>
  <p style"font-family:Lato" class="wow slideInRight">professional developer & programmer</p>
<form action="" method="post" class="form-inline">
<div class="input-group">
<input  class="form-control wow zoomInDown" name='emaill' type="text" size="60" placeholder="Enter email" required>
<div class="input-group-btn">
<a href="https://sachinmishra.000webhostapp.com/about/about.php/#myPage"><input class="btn btn-danger wow zoomInDown"  size="40"  name="subs"  type="submit" value="sub"/></a>
</div>
</div>
</form>
</div>
<?php
if(isset($_POST['subs'])) 
{
 $e = $_POST['emaill'];
 $sql = "INSERT INTO maillist(email,date) VALUES ('$e','time.time()')";
 $query = mysqli_query($con,$sql);
   if($query){
  echo '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong><br> suscribed successfully we will catch you soon".
</div>';
             }
 }
?>
</div>
<div class="container-fluid" id="about">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-question-sign logo wow zoomInDown data-wow-duration='4s' data-wow-delay="1s""></span>
    </div>
    <div class="col-sm-8 wow slideInUp">
      <h2>Who Am i</h2>
      <h4>#Sachin mishra</h4>
      <p class="text-justify">
          I am a web developer Love to work with python, i am a die harted fan of computer vision and machine learning These are the future of computers . as i thinks programming is a tool that we use to solve and making our life easy and efficient.
          I live in New Delhi (ncr) India studying Computer Science and Engineering.
      </p>
      <a href="#contact" class="btn btn-default btn-lg" type="button">Get in Touch</a>
    </div>
   
  </div>
</div>

<!--
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8 wow slideInLeft">
      <p><strong>VISION:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo wow slideInDown"></span> 
    </div>
  </div>
</div>
-->

<div class="container text-center box" id='skills'>
  <h2 class="wow bounceInUp">Technologies...</h2>
  <hr>
  <h4 >I am Good In</h4>
  <br>
  <div class="row text-center " >
  <div class="col col-md-12 ">
<div class="progress wow bounceInLeft">
<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:70%">
    <h4 class="pro-text">HTML</h4>
  </div>
</div>

<div class="progress wow bounceInRight">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:50%">
    <h4 class="pro-text">CSS</h4>
  </div>
</div>

<div class="progress wow bounceInLeft">
  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
    <h4 class="pro-text">Java Script</h4>
  </div>
</div>

<div class="progress wow bounceInRight">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <h4 class="pro-text">Bootstrap</h4>
  </div>
</div>
<div class="progress wow bounceInLeft">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <h4 class="pro-text">Php</h4>
  </div>
</div>
<!--
<div class="progress wow bounceInRight">
<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:70%">
    <h4 class="pro-text">C</h4>
  </div>
</div>
<div class="progress wow bounceInLeft">
<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:70%">
    <h4 class="pro-text">C++</h4>
  </div>
</div>

-->
<div class="progress wow bounceInRight">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <h4 class="pro-text">Python</h4>
  </div>
</div>
<div class="progress wow bounceInLeft">
  <div class="progress-bar progress-bar-danger  progress-bar-striped" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <h4 class="pro-text">Java</h4>
  </div>
</div>
  </div>
</div>
</div>
<div class="container-fluid text-center">
<h1 class=" wow slideInUp">Way of Work</h1>
<hr class="wow bounceInLeft">
<h4 class="wow bounceIn">I beleave in</h4>
<br>
<div class="row">
   
<!--    
<div class="col col-sm-4 wow bounceInDown">
<span  class="glyphicon glyphicon-certificate logo-small  "></span>
<h4>CERTIFIED</h4>
<P>sachin mishra g h </P>
</div>
-->

<div class="col col-sm-4 col-sm-push-2 wow bounceInDown">
<span class="glyphicon glyphicon-wrench logo-small"></span>
<h4>HARD WORK</h4>
<P>This is something that i  have immanence belive in if you wants to create somethong you will have to do work hard.</P>
</div>
<div class="col col-sm-4 col-sm-push-2 wow bounceInDown">
<span class="glyphicon glyphicon-lock logo-small"></span>
<h4>JOB DONE</h4>
<P>Getting job done is the ultimate goel to everyone as i said that hard work is important but that's really don't mean that you shouldn't work smart smart working is the key factor of finishing the job. but it can't replace the hardwork. </P>
</div>  
</div>
</div>



<!--
<div class="container-fluid ">
<div class="row neatgreen">
<div class="col col-sm-4">
<div  class="glyphicon glyphicon-leaf logogreen wow rubberBand" id="gallary"></div>
</div>

<div class="col col-sm-8">
<h2>I love nature</h2>
  <p class="wow fadeInLeft">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</div>
</div>
</div>
-->


<div class="container-fluid text-center bg-grey" >
<h1>My PROJECTS</h1>
<h4>Have a look</h4>
  <div class="row text-center ">
    <div class="col col-sm-4">
      <div class="thumbnail">
        <img src="images/p1.png" class=" wow bounceInDown data-wow-duration='5s'">
          <hr>
          <p><strong>SNAKE GAME</strong></p>
        <a href='https://github.com/sachinmishradev/snakegame' class='btn btn-primary btn-lg'>View</a>
        <a href='#' class='btn btn-primary btn-lg disabled'>Demo</a>
      </div>
    </div>
    <div class="col col-sm-4 ">
      <div class="thumbnail">
        <img src="images/p2.png" class="wow bounceInUp data-wow-duration='5s'">
          <hr>
          <p><strong>ECOMMERCE</strong></p>
        <a href='https://github.com/sachinmishradev/Ecommerce' class='btn btn-primary btn-lg'>View</a>
         <a href='#' class='btn btn-primary btn-lg disabled'>Demo</a>
      </div>
    </div>
    <div class="col col-sm-4">
      <div class="thumbnail">
        <img src="images/p3.png" class=" wow bounceInUp data-wow-duration='5s'">
          <hr>
          <p><strong>SOCIAL MEDIA</strong></p>
        <a href='https://github.com/sachinmishradev/socialmedia' class='btn btn-primary btn-lg'>View</a>
         <a href='http://lifeistylistore.000webhostapp.com/' class='btn btn-primary btn-lg '>Demo</a>
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col col-sm-4">
      <div class="thumbnail">
        <img src="images/p4.png" class=" wow bounceInUp data-wow-duration='5s'">
          <hr>
          <p><strong>GRPOUP CHAT</strong></p>
        <a href='https://github.com/sachinmishradev/groupchat' class='btn btn-primary btn-lg'>View</a>
         <a href='' class='btn btn-primary btn-lg disabled'>Demo</a>
      </div>
      
    </div>
    <div class="col col-sm-4">
      <div class="thumbnail">
        <img src="images/p5.png" class=" wow bounceInUp data-wow-duration='1s'">
        <hr>
          <p><strong>SIMPLE BLOG</strong></p>
        <a href='https://github.com/sachinmishradev/blog' class='btn btn-primary btn-lg'>View</a>
         <a href='sachinmishra.000webhostapp.com' class='btn btn-primary btn-lg'>Demo</a>
      </div>
    </div>
    <div class="col col-sm-4">
      <div class="thumbnail">
        <img src="images/p6.png" class=" wow bounceInDown data-wow-duration='1s'">
          <hr>
          <p><strong>PORTFOLIO</strong></p>
        <a href='https://github.com/sachinmishradev/portfolio' class='btn btn-primary btn-dark'>View</a>
         <a href='https://sachinmishra.000webhostapp.com/about/about.php' class='btn btn-primary btn-lg'>Demo</a>
      </div>
    </div>
  </div>
</div>


<!--
<div class="container-fluid text-center " id="feedback">
<h2>I love shayari :) ( poetry )</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  -->
  <!-- Indicators -->
<!--  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  -->
  <!-- Wrapper for slides -->
 <!-- <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4 class=" wow bounceInDown data-wow-duration='5s'">"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
    </div>
    <div class="item">
      <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
    </div>
    <div class="item">
      <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
    </div>
  </div>
  -->

  <!-- Left and right controls -->
<!--  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


-->

<!-- Contact form -->
 <div id="contact">
<div  id='l'  class="container-fluid bg-grey jumbotron" >
  <h2 class="text-center" style="font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p class="wow bounceInLeft data-wow-duration='5s'">Contact us and we'll get back to you within 24 hours.</p>
      <p class="wow bounceInLeft data-wow-duration='5s'"><span class="glyphicon glyphicon-map-marker"></span>&nbsp  India faridabad(121003)</p>
      <p class="wow fadeInLeft data-wow-duration='5s'"><span class="glyphicon glyphicon-phone"></span>&nbsp  +91 8285300742</p>
      <p class="wow fadeInLeft data-wow-duration='5s'"><span class="glyphicon glyphicon-envelope"></span>&nbsp sachinmishra199747@gmail.com</p> 
    </div>
    <div class="col-sm-7">
    <form action="" method="post">  

      <div class="row">
              <div class="col-sm-6 form-group">
          <input class="form-control wow fadeInLeft"  id="name" name="username" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control wow fadeInRight" id="email" name="useremail" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control wow slideInUp" id="comments" name="usercomments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
      <a href="#contact" data-target="#contact"><input class="btn btn-default pull-right" name='usersubmit'  type="submit" value="Send"/></a>
        </div>
      </div> 
    </div>
    </form>


  </div>
  <?php 
if(isset($_POST['usersubmit']))
{
  if(!empty($_POST['username']))
  {
    
  $name = $_POST['username'];
  $email = $_POST['useremail'];
  $comment = $_POST['usercomments'];
  $to = 'sachinmishra199747@gmail.com';
  #$mai = mail($to,$name,$email,$comment);
  $mai=true;
  if($mai) {

 // echo "<script>alert('success');</script>";
?>
    <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Great!</strong><br> Thanks for that, i'll catch you soon..
</div>
  <?php }
  }
}
?>
</div>
<!--
Form processing and mail processing
-->
<!-- Add Google Maps -->

<div class="container text-center ">
  
<h2 style="font-family:Montserrat  wow slideInUp">You can track me hear</h2>
</div>
<div id="googleMap" class="wow bounceInLeft data-wow-duration='5s'" style="height:400px;width:100%;wow slideInDown"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(28.4814100,77.3238270 );
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1llj4Vccf3ksTP8jr6VpCveRoP7ROwIQ&callback=myMap"></script>
<!-- map -->
<hr>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>All right's &#169 reserverd by <a href="mailto:sachinmishra199747@gmail.com" title="mail him">author</a> 2017</p> 
  <div class="row slogo">
  <a href="http://facebook.com/mishraji987"><i class="fa fa-facebook-square social"></i></a>
  <a href="https://youtu.be/VFAGWVFAmhO"><i class="fa fa-youtube social" style='color:#e74c3c'></i></a>
  <a href="#"><i class="fa fa-instagram social" style='color:#c0392b'></i></a>
  <a href="#"> <i class="fa fa-google-plus social" style='color:#f1c40f'></i></a>
    </div>
</footer>



<script type="text/javascript">
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript">
              new WOW(  {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }).init();
</script>

</body>
</html>
