<html>
<head>
<?php include('header.php');?>
<style>

.slide_in{
  animation: slideMe 1s ease-in;
}
@keyframes slideMe{
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
.col {
  height: auto;
  width: auto;
}

.align-left {
  text-align: reset;
}
</style>
<title>Deckard Tech Computer Solutions About Our Computer and iPhone Repair Team</title>
</head>
<body>
<div class="container">
  <br>
  <div row="row mt-4">
    <h1 class="blue">About Me</h1>
  </div>
  <div class="row mt-5 justify-content-center">
    <div class="LI-profile-badge text-left"
         data-version="v1"
         data-size="large"
         data-locale="en_US"
         data-type="horizontal"
         data-theme="dark"
         data-vanity="ryanldeckard">
      <a class="LI-simple-link" href='https://www.linkedin.com/in/ryanldeckard?trk=profile-badge'>Ryan Deckard</a>
    </div>
  </div>
  <div class="row mt-5">
   <div >
    <p>My name is Ryan Deckard and I'd love to take a moment to tell you about myself. Computer / Internet work has always been my passion. 
    For the past 6 years I've been pursuing this line of work as a career starting in the Missouri National Guard as a 25B - Information 
    Technology Specialist as well as working at a local internet company in Springfield, MO. My family and I recently moved here to 
    Summerville, SC to continue that same career as a Network Engineer assisting the base in Charleston and I would love to pass on 
    my experience and expertise to all of my neighbors and friends here in the Low Country. If you ever have any issues or need help 
    with anything computer related don't hesitate to get in contact with me anyway you feel comfortable. </p>
  </div>
</div>
</div>
<footer class="bg-dark expand-footer justify-content-center">
    <?php include("footer.php"); ?>
  </footer>
</body>
</html>
