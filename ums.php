<html>
<head>
  <link href="style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
   integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'
  crossorigin='anonymous'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<?php
include('config.php');
$sql3="  SELECT * FROM sample WHERE id='3'";
     $result = mysqli_query($db,$sql3);

     while($row = $result->fetch_assoc())
   {

     $name=$row["name"] ;
     $attendence=$row["attendence"] ;
}
?>
<body>
<div class="fix_head">
<img class="logo" src="">

</div>
<div class="fix_profile">
    <div class="name">
        <label class="headings welcome">Welcome ,<b><?php  echo $name ; ?></b>  </label>
        <svg height="100" width="270">
         <line x1="0" y1="98" x2="270" y2="98" style="stroke:rgb(41,218,240);stroke-width:2" />
       </svg>
    </div>
    <div class=nav>

          <ul>
            <li><a href="#map">Location</a></li>
            <li><a href="gallery.html">Emanulkole</a></li>
            <li><a href="contactus.html">Messages</a></li>
            <li><a href="Login.html">Events</a></li>
            <li><a href="#">Recent Comments</a></li>
            <li><a href="gallery.html">Events</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="Login.html">Log in</a></li>



          </ul></div>


</div>
<div class="mydashboard">

  <label class="headings myd">My Dashboard</label>
  <div class="dash one"><label class="dash-heads ">Messages<label></div>
  <div class=" dash two"><label class="dash-heads">Attendence<label>
    <label class="per"> <?php  echo $attendence; ?>%</label></div>
  <div class=" dash three"><label class="dash-heads">CGPA<label></div>
  <div class=" dash four"><label class="dash-heads">Attendence<label></div>
  <label class="headings location">Location</label>
  <label class="headings emanukole">Emanukole</label>
  <a id="map"><div class=" dash-location">
    <div class="mapouter"><div class="gmap_canvas">
      <iframe width="350" height="250" id="gmap_canvas"
      src="https://maps.google.com/maps?q=chilakalu%20Nirmal%20Hruday%20English%20Medium%20school&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
  </div></div>
</div></a>
  <div class=" dash-emanukole"></div>
  <label class="headings my_messages">My Messages</label>
  <div class=" dash-messages"></div>
  <label class="headings events">Events</label>
  <div class=" dash-events">
    <div class="e1"><label class="event-1"><?php echo"SPEELL BEE 2k19"; ?></label>
    <label class="event-1b"><?php echo "Manideep.P"?></label></div>
    <div class="e2"><label class="event-1"><?php echo"WebM@nia 2k19"; ?></label>
    <label class="event-1b"><?php echo "Govardhan"?></label></div>
    <div class="e1"><label class="event-1"><?php echo"Man of the match"; ?></label>
    <label class="event-1b"><?php echo "Jashvanth"?></label></div>
    <div class="e2"><label class="event-1"><?php echo"Power star"; ?></label>
    <label class="event-1b"><?php echo "Nani"?></label></div>
    <div class="e1"><label class="event-1"><?php echo"Pulihoraa raja"; ?></label>
    <label class="event-1b"><?php echo "Maddy"?></label></div>
    <div class="e2"><label class="event-1"><?php echo"Pathi vithanalu"; ?></label>
    <label class="event-1b"><?php echo "maddy"?></label></div>
    <div class="e1"><label class="event-1"><?php echo"Silent star"; ?></label>
    <label class="event-1b"><?php echo "Shiva"?></label></div>
    <div class="e2"><label class="event-1"><?php echo"Settelment start"; ?></label>
    <label class="event-1b"><?php echo "Sasi"?></label></div>


  </div>
  <label class=" comments">Recent Comments</label>
  <div class=" dash-comments">
  <div class="pic1"></div>

  <label class="comment-name">Ravi shankar  ,</label>
  <label class="comment-date">September 29 2019</label>
  <label class="comment-one">Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</label>

  <div class="pic2"></div>
  <label class="comment2-name">Sasi preetham  ,</label>
  <label class="comment2-date">August 16 2019</label>
  <label class="comment-two">Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</label>

    </div>
  <div class="footer">

  <i class='fas fa-map-marker-alt' style='font-size:24px;color:grey;position:absolute; top:80px;left:100px;'></i>
       <p class="loc">Bootstrap company Inc<br>
   JC Main Road, Near Silnile tower<br>
   Pin-21542 NewYork US </p>
   <i class='fas fa-phone' style='font-size:20px;
       position: absolute;top:150px;left:100px;color:grey'></i>
       <p class="num">(+91)123-456-7890</p>
    <a href="#">   <i class='far fa-envelope' style='font-size:20px;color:grey;position:absolute; top:190px;left:100px;'></i>
       <p class="mail">nirmal.hrudey@gmail.com</p>

       <p class="pfooter1">Quick Links</p>
       <a href="home.html"> <p class="terms">Home</p></a>
       <a href="gallery.html"> <p class="privacy">Events</p></a>
         <a href="contactus.html"> <p class="contact">Contact us</p></a>
         <a href="login.html"> <p class="login">Log In</p></a>


    <p class="pfooter"> About Us</p>
    <p class="faddress">Bootstrap company Inc
JC Main Road, Near Silnile tower<br>
Pin-21542 NewYork US
(123) 456-789 - 1255-12584<br>
email@domainname.com</p>

<a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a>
<a href="https://twitter.com/login?lang=en" class="fa fa-twitter" target="_blank"></a>
<a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google" target="_blank"></a>
<a href="https://www.linkedin.com/uas/login" class="fa fa-linkedin"  target="_blank"></a>

  </div>


</div>


</body>

</html>
