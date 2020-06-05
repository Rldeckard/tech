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
.LI-profile-badge {
  text-align: left;
}
.align-left {
  text-align: left;
}
</style>
</head>
<body>
<div class="box background">
  <div class="row" style="grid-column:1/4;grid-row:2">
    <div class="slide_in"><h1 class="blue">About Me</h1></div>
  </div>
  <div class="col" style="grid-column:2;grid-row:5">
   <div class="slide_in">
    <p>My name is Ryan Deckard and I'd love to take a moment to tell you about myself. I've lived in this area almost my entire life, growing up in Springfield, and later
     moving out to Summerville. Computer / Internet work has always been my passion. For the past couple of years I began pursuing this line of work as a career in the
     Missouri National Guard as a 25B - Information Technology Specialist and I would love to pass on my experience and expertise to all of my neighbors and just any
     individual in general having trouble making the transition into this new technological age. I'm starting this little project as a helper and an assistant to you
     as a way to ease the burden of this new confusing world. If you ever have any issues or need help with anything computer related don't hesitate to get in contact
     with me anyway you feel comfortable. </p>
  </div>
</div>
  <div class="row" style="grid-column:2;grid-row:4">
    <div class="LI-profile-badge align-left"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="dark" data-vanity="ryanldeckard"><a class="LI-simple-link" href='https://www.linkedin.com/in/ryanldeckard?trk=profile-badge'>Ryan Deckard</a></div>
  </div>
  <div class="row" style="grid-column:2;grid-row:6">
    <img src="Images/logo-web.jpg" width='300'>
  </div>
</div>
</body>
</html>
