<html>
<head>
<?php include('header.php');?>
<style>
.animation{
  animation: fadeInAnimation ease 2s;
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
</style>
<title>Deckard Tech | Hours</title>
</head>
<body>
<div class="container animation">
  <div style="grid-column:1/4;grid-row:2;padding-bottom:20px">
    <h1><b>HOURS OF OPERATION</b></h1>
  </div>
  <div style="grid-column:2;grid-row:3;padding-bottom:20px">
    <h2><b>Week Days</b></h2>
    <h5>Working Hours are From: 9AM - 9PM</h5>
  </div>
  <div style="grid-column:2;grid-row:4;padding-bottom:20px">
    <h2><b>Weekends</b></h2>
    <h5>Working Hours are From: 9AM - 9PM</h5>
  </div>
  <div class="row" style="grid-column:1/4;grid-row:5">
  <ul>
    <li>All service events must be scheduled within working hours. All emergency events outside of working hours will require excess fees.</li>
    <li>All events must be scheduled two hours in advance, but that time frame cannot always be guaranteed.</li>
    <li>At this time, same day service will always be provided if scheduled before 6PM.</li>
    <li>If no one is available by phone, or your inquiry needs addressed outside of working hours, leave a voicemail or submit a ticket through the email listed in the contact tab at the top.</li>
  </ul>
  </div>
</div>
</body>
</html>
