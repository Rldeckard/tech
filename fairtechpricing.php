<html>
<head>
<?php include('header.php');?>
<style>
.slide_in_off{
  animation: slideMe 1s ease-in;
}
@keyframes slideMeOFF{
  0%{
    transform: skewX(53deg) translateX(-500px);
  }
  60%{
    transform:translateX(0px);
  }
  62%{
    transform:skewX(0deg) translateX(30px);
  }
  70%{
    transform: skew(-20deg);
  }
  100%{
    transform:skew(0deg);
  }
}
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
.col:hover {
  opacity: 1; 
}
.container {
  text-align: center;
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
  background-image: url("Images/stars.png");
  /* Set a specific height */
  height: 1200px;
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
  animation: fadeInAnimation ease 3s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
  

}
* {
  box-sizing: border-box;
}
.blue {
  color: #3A96B8;
  font-weight: normal;
}
p {
  text-align: center;
}
ul {
  text-align: left;
}
li {
  padding-top: 5px;
  padding-bottom: 5px;
  text-decoration: none;
}
a {
  text-decoration: none;
}
</style>
<title>Deckard Tech | Pricing</title>
</head>
<body>
<div class="container">
  <div>
    <h1 class="blue" style="text-align:center">Comprehensive guide to fair pricing</h1>
    <p>Below are the prices listed per visit and service request. Questions and quotes can be requested through the contact tab at the top. Any and all inquires are welcome.</p>
    <br>
    <br>
  </div>
    <a href="computerguycontact.php" style="grid-row:2;">
      <div class="col">
        <p><i class="fa fa-home fa-5x" ></i><br><br>Residential Service - $50 per Hour</p><hr><br>
        <p>Will cover most residential jobs. Slow computer repair to Wi-Fi replacement all for $50, and can typically be done in less than an hour! </p>
      </div>
    </a>
    <a href="computerguycontact.php" style="grid-row:3;">
      <div class="col">
        <p><i class="fa fa-server fa-5x" ></i><br><br>Business Service - $75 per Hour</p><hr><br>
        <p>Offering anything your business needs! Changes to a website? Look no further. Managing confusing Microsoft Licenses? Let Me handle that burden. Tired of manually upgrading all the computers in your office? I'd be happy to take that off your hands. Much cheaper than hiring a full time IT staff and much more knowledgeable.</p>
      </div>
    </a>
</div>
</body>
</html>
