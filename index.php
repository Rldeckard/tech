<html>
<head>
<?php include('header.php');?>
<style>
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
</head>
<body>
<div class="box background">
  <div class="row" style="grid-row:3">
      <img src="Images/logo-web-transparent.png" width='300'>  
    <h4>YOUR NEIGHBORHOOD TECH GUY AND NETWORK ENGINEER</h4>
    <br>
    <br>
    <a href="https://facebook.com/deckardtech" class="booknow">Book Now &nbsp;<i class="fa fa-facebook"></i></a>
  </div>
  <div class="row" style="grid-row:4;text-align:left">
    <p>
  Welcome to my page! I strive to help my neighbors in Summerville and Charleston by providing the best customer experience when it comes to all 
  things tech. Anything from computers to mobile phone service to small business server build outs. Below I have listed a small outline of the 
  services I can provide to you. Of course if there is something you are unsure of or would like to ask about just shoot me a message using the 
  contact tab above! Thank you for checking out my page and I look forward to hearing from you!
    </p>
  </div>
  <a href="fairtechpricing.php" style="grid-row:5;">
      <div class="col">
        <p class="title"><i class="fa fa-mobile fa-5x" ></i><br>Android and Apple iPhones</p><hr><br>
          <ul>
            <li>Screen Replacements</li>
            <li>Back Glass Repair</li>
            <li>Battery Replacements</li>
            <li>Diagnostic and Repair</li>
            <li>Software Upgrades and Diagnostic</li>
          </ul>
      </div>
    </a>
    <a href="fairtechpricing.php" style="grid-row:6;">
      <div class="col">
        <p class="title"><i class="fa fa-laptop fa-5x" ></i><br>Desktops and Laptops</p><hr><br>
          <ul>
            <li>Cable Management</li>
            <li>Computer tower installation</li>
            <li>Parts Addition/Upgrades</li>
            <li>Parts diagnostic and repair</li>
            <li>Custom Computer Builds</li>
          </ul>
      </div>
    </a>
    <a href="fairtechpricing.php" style="grid-row:7;">
      <div class="col">
        <p class="title"><i class="fa fa-code fa-5x" ></i><br><br>Website Design and Automation</p><hr><br>
          <ul>
            <li>Basic website design, content assistance</li>
            <li>Website Updates</li>
            <li>Powerful timesaving automation</li>
            <li>Data gathering and presenting</li>
            <li>Much, much, more! You think it, we build it</li>
          </ul>
      </div>
    </a>
    <a href="fairtechpricing.php" style="grid-row:8;">
      <div class="col" style="grid-column:2;grid-row:3;">
        <p class="title"><i class="fa fa-cogs fa-5x" ></i><br><br>Software</p><hr><br>
          <ul>
            <li>Software Tune ups</li>
            <li>Operating system upgrades</li>
            <li>Virus removal</li>
            <li>Program installation and removal</li>
          </ul>
      </div>
    </a>
    <a href="fairtechpricing.php" style="grid-row:9;">
      <div class="col">
        <p class="title"><i class="fa fa-wifi fa-5x" ></i><br>Internet</p><hr><br>
          <ul>
            <li>Network installation and setup</li>
            <li>Router / modem diagnostics</li>
            <li>Network troubleshooting</li>
            <li>Firmware upgrades</li>
          </ul>
      </div>
    </a>
</div>
</body>
</html>