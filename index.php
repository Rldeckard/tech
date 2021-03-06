<html>
<head>
<?php include('header.php');?>
<style>
.col {
  animation: fadeInAnimation ease 3s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}
@keyframes fadeInAnimation {
0% {
    opacity: 0;
}
100% {
    opacity: 1;
}
}
.col:hover {
  opacity: 1; 
  text-decoration: none;
}
.col:action {
  box-shadow: 5px 5px 5px 2px  gray;
}
a {
  color: black;  
}
ul {
  list-style-type: square;
  list-style-position: inside;
}
hr {
  margin-left: 20px;
  margin-right: 20px;
  color: white;
  border: 0;
  box-shadow: 1px 1px 1px 1px  #ccc;
}
.background {
  background-image: url("Images/iphone-broken.jpg");
  /* Set a specific height */

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.row {
  background: inherit;  
  text-align: center;
  width: auto;

}
* {
  box-sizing: border-box;
}
.blue {
  color: #3A96B8;
  font-weight: normal;
}
.title {
  text-align: center;
}
ul {
  text-align: left;
  padding: 10px;
}
li {
  padding-top: 5px;
  padding-bottom: 5px;
  text-decoration: none;
}
a {
  text-decoration: none;
}
.booknow {
  border: 4px solid white;
  color: white;
  padding: 15px 60px;
  text-decoration: none;
  margin-top: 50px;
}
</style>
<title>Deckard Tech Computer Solutions and iPhone Repair</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center" style="padding-top:50px">
      <div class="col-sm col-lg justify-content-center">
        <div class="col-lg col-sm mt-3">
          <img src="Images/computer-repair.jpg" width="200">
        </div>
        <div class="col-lg col-sm mt-3">
          <img src="Images/iphone-repair.jpg" width="200">
        </div>
      </div>
      <div class="col-lg text-left" style="padding-top:50px;">
        <h2>Expert device repair, and troubleshooting.</h2>
        iPhone screen replacement, 
        <br>Computer Diagnostics, 
        <br>In home device troubleshooting, and much more!
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row justify-content-center mt-4 mb-5">
      <h1 style="font-size:80px;">Why choose Deckard Tech?</h1>
    </div>
    <div class="row justify-content-center mt-5">
      <h3>Compassionate Customer Service</h3>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-lg col-md">
        <br><img src="Images/cs-review-1.png" class="img-fluid" loading="lazy">
      </div>
      <div class="col-lg col-md">
        <br><img src="Images/cs-review-2.png" class="img-fluid" loading="lazy">
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <h3>Next Level Diagnostics</h3>
    </div>
    <div class="row justify-content-center mt-5">
      <br><img src="Images/skill-review.png" class="img-fluid" loading="lazy">
    </div>
    <div class="row justify-content-center mt-5">
      <h3>30 Day Guarentee</h3>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8 col-md">
        <p class="text-left">
        With any service performed you have 30 days of one-on-one direct access to our knowledgeable 
        staff through text or a scheduled phone call. No need to worry if you forget the list of steps given to you by the 
        technician. We're always here to make sure you're the most empowered to use your new Tech!
        </p>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
        <h2 class="blue">Ready to Get Started?</h2>
    </div>
    <div class="row justify-content-center">
        Click Book Now below to review a list of services and pricing.
    </div>
    <div class="row justify-content-center">
      <div class="col-lg col-md">
      </div>
      <div class="col-lg col-md mt-5">
        <script id="setmore_script" 
                type="text/javascript" 
                src="https://my.setmore.com/webapp/js/src/others/setmore_iframe.js"></script>
        <a id="Setmore_button_iframe" 
           style="float:none" 
           href="https://my.setmore.com/bookingpage/56bf8c6c-a3fa-4241-93ca-f95966986aa1">
          <img border="none" 
               src="https://storage.googleapis.com/setmore-assets/2.0/Images/Integration/book-now-blue.svg" 
               alt="Book an appointment using Setmore" />
        </a>
      </div>
      <div class="col-lg col-md mt-5">
        <a href="tel:8439004690" class="btn btn-secondary p-2 pr-3 pl-3">Call</a>
      </div>
      <div class="col-lg col-md">
      </div>
    </div>
    <div class="row justify-content-center mt-5 mb-5">
      <img src="Images/black-white-phone.jpg"  class="img-fluid" loading="lazy">
    </div>
    <br>
    <br>
    
  </body>
</html>
