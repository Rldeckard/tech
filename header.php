<?php
#error_reporting(E_ALL);
#ini_set('display_errors', 1);
#@session_start();
#include('connectdb.php');
#  if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
#    header('Location: login.php');
#  }

  $time = $_SERVER['REQUEST_TIME'];

/**
* for a 30 minute timeout, specified in seconds
*/
$timeout_duration = 21600;

/**
* Here we look for the user's LAST_ACTIVITY timestamp. If
* it's set and indicates our $timeout_duration has passed,
* blow away any previous $_SESSION data and start a new one.
*/
if (isset($_SESSION['LAST_ACTIVITY']) &&
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    session_start();
    header('Location: login.php');
}

/**
* Finally, update LAST_ACTIVITY so that our timeout
* is based on it and not the user's login time.
*/
$_SESSION['LAST_ACTIVITY'] = $time;
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="Images/logo-web-icon.png">
<link href="css/Stylesheet.css" rel="stylesheet">
<link href="css/mobile.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<script id="setmore_script" type="text/javascript" src="https://my.setmore.com/webapp/js/src/others/setmore_iframe.js"></script><a id="Setmore_button_iframe" style="float:none; position: fixed; right: -2px; top: 25%; display: block; z-index: 20000" href="https://my.setmore.com/bookingpage/56bf8c6c-a3fa-4241-93ca-f95966986aa1"><img border="none" src="https://my.setmore.com/webapp/images/bookappt/Setmore-Book-Now.png" alt="Book an appointment with Deckard Tech Computer Solutions using Setmore" /></a>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G0GRDBJPNY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G0GRDBJPNY');
</script>

<title>Deckard Tech Computer Solutions</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>

/* Style the tab */
.tab {
  overflow: hidden;
  background-color: rgb(0, 0, 0, .6);
  color: #3A96B8;
  position: fixed;
  top: 0;
  width: 100%;
  text-align: right;
  z-index: 1;
}

/* Style the buttons inside the tab */
.tab button, .tab a, .tab select {
  background-color: inherit;
  text-decoration: none;
  float: left;
  vertical-align: center;
  text-align: right;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 18px 16px;
  transition: 0.3s;
  font-size: 17px;
  color: #3A96B8;
}
.tab select {
  width: auto;
  height: auto;
  margin: auto;
  font-size: 16px;
}

/* Change background color of buttons on hover */
.tab button:hover, .tab select:hover, .tab a:hover{
  background-color: #ddd;
  color: #222;

}

/* Create an active/current tablink class */
.tab button.active, .tab option:active, a.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  border-top: none;
}
}
ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  top: 0;
  text-align: right;
  margin-block-start: 0;
  margin-block-end: 0;

}
</style>
<!--<img src="Images/logo-web.jpg" width='250' alt="Deckard Tech">-->
<div class="tab">
  <div style="float:left">
    <button onclick="location.href='index.php'"><img src="Images/logo-web-transparent.png" width="45"></button>
    <button class="tablinks" onclick="location.href='index.php'">Start Here</button>
    <button class="tablinks" onclick="location.href='fairtechpricing.php'">Brass Tacks</button>
    <button class="tablinks" onclick="location.href='computerservicehours.php'">When do we work?</button>
    <button class="tablinks" onclick="location.href='aboutitguy.php'">Our Mission</button>
    <button class="tablinks" onclick="location.href='computerguycontact.php'">Ask Me Anything!</button>
  </div>
  <div style="float:right">

    <a class="tablinks" href='https://facebook.com/deckardtech' target="_blank"><i class="fa fa-facebook"></i></a>
    <a class="tablinks" href='https://www.linkedin.com/in/ryanldeckard/' target="_blank"><i class="fa fa-linkedin"></i></a>
    <a class="tablinks" href='mailto:ryan@deckardenterprises.com'><i class="fa fa-envelope"></i></a>
  </div>
</div>
