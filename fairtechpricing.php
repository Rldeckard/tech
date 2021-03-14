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
/*hr {
  margin-left: 20px;
  margin-right: 20px;
  color: white;
  border: 0;
  box-shadow: 1px 1px 1px 1px  #ccc;
}*/
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
/** {
  box-sizing: border-box;
}*/
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
<title>Deckard Tech Computer Solutions Pricing Guide</title>
</head>
<body>
<div class="container">
  <div>
    <h1 class="blue" style="text-align:center">Comprehensive guide to fair pricing</h1>
    <p>Below are the prices listed per visit and service request. Questions and quotes can be requested through 
    the contact tab at the top. Any and all inquires are welcome.</p>
    <br>
    <br>
  </div>
  <div class="row">
      <div class="col col-12 col-md-12 col-lg-5 ml-auto mt-4">
        <p><i class="fa fa-home fa-5x" ></i><br><br>Residential Service - $50 per Hour</p><hr><br>
        <p>Will cover most residential jobs. Slow computer repair to Wi-Fi replacement all for $50, and can 
        typically be done in less than an hour! </p>
      </div>
      <div class="col col-12 col-md-12 col-lg-5 ml-auto mt-4">
        <p><i class="fa fa-server fa-5x" ></i><br><br>Business Service - $75 per Hour</p><hr><br>
        <p>Offering anything your business needs! Changes to a website? Look no further. Managing confusing Microsoft Licenses? 
        Let Me handle that burden. Tired of manually upgrading all the computers in your office? I'd be happy to take that off your hands. Much cheaper than hiring a full time IT staff and much more knowledgeable.</p>
      </div>
      <!--<iframe src="https://deckardtechcomputersolutions.setmore.com" scrolling="yes" width="100%" height="100%" frameborder="0"></iframe>-->
      <div class="col col-12 col-md-12 col-lg-5 ml-auto mt-4">
        <p class="title text-center"><i class="fa fa-mobile fa-5x" ></i><br>Android and Apple iPhones</p><hr><br>
          <ul>
            <li>Screen Replacements</li>
            <li>Back Glass Repair</li>
            <li>Battery Replacements</li>
            <li>Diagnostic and Repair</li>
            <li>Software Upgrades and Diagnostic</li>
          </ul>
      </div>
      <div class="col col-12 col-md-12 col-lg-5 ml-auto mt-4">
        <p class="title text-center"><i class="fa fa-laptop fa-5x" ></i><br>Desktops and Laptops</p><hr><br>
          <ul>
            <li>Cable Management</li>
            <li>Computer tower installation</li>
            <li>Parts Addition/Upgrades</li>
            <li>Parts diagnostic and repair</li>
            <li>Custom Computer Builds</li>
          </ul>
      </div>
      <div class="col col-12 col-md-12 col-lg-5 ml-auto mt-4">
        <p class="title text-center"><i class="fa fa-code fa-5x" ></i><br><br>Website Design and Automation</p><hr><br>
          <ul>
            <li>Basic website design, content assistance</li>
            <li>Website Updates</li>
            <li>Powerful timesaving automation</li>
            <li>Data gathering and presenting</li>
            <li>Much, much, more! You think it, we build it</li>
          </ul>
      </div>
      <div class="col col-12 col-md-12 col-lg-5 ml-auto mt-4">
        <p class="title text-center"><i class="fa fa-cogs fa-5x" ></i><br><br>Software</p><hr><br>
          <ul>
            <li>Software Tune ups</li>
            <li>Operating system upgrades</li>
            <li>Virus removal</li>
            <li>Program installation and removal</li>
          </ul>
      </div>
      <div class="col col-12 col-md-12 col-lg-5 ml-auto mt-4">
        <p class="title text-center"><i class="fa fa-wifi fa-5x" ></i><br>Internet</p><hr><br>
          <ul>
            <li>Network installation and setup</li>
            <li>Router / modem diagnostics</li>
            <li>Network troubleshooting</li>
            <li>Firmware upgrades</li>
          </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>
