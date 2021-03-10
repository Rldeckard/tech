<?php
#error_reporting(E_ALL);
#ini_set('display_errors', 1);
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header('Permissions-Policy: geolocation=(self "https://tech.deckardenterprises.com"), microphone=()');

$CSPheader .= "default-src 'self';"; 
$CSPheader .= "style-src https: 'self' css/Stylesheet.css *.licdn.com *.cloudflare.com *.jquery.com my.setmore.com *.bootstrapcdn.com 'unsafe-inline';";
$CSPheader .= "font-src https: 'self' css/Stylesheet.com *.cloudflare.com *.jquery.com;";
$CSPheader .= "script-src https: 'self' 'unsafe-inline' badges.linkedin.com *.licdn.com platform.linkedin.com *.setmore.com www.googletagmanager.com *.googleapis.com *.cloudflare.com *.bootstrapcdn.com;"; 
$CSPheader .= "connect-src https: www.google-analytics.com;";
$CSPheader .= "img-src https: 'self' *.setmore.com *.jquery.com *.licdn.com *.cloudflare.com *.googleapis.com;";
$CSPheader .= "frame-src https: 'self' *.setmore.com;"; 
$CSPheader .= "base-uri 'self';"; 
$CSPheader .= "object-src 'none';";

header("Content-Security-Policy: ".$CSPheader);
header("X-Content-Security-Policy: ".$CSPheader);
header("X-WebKit-CSP: ".$CSPheader);
?>
<!DOCTYPE html>
<meta name="referrer" content="origin">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="Images/logo-web-icon.png">
<link href="css/Stylesheet.css" rel="stylesheet">
<link href="css/mobile.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
      crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous"></script>-->
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G0GRDBJPNY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G0GRDBJPNY');
</script>
<meta http-equiv="Content-Security-Policy"
      content="default-src 'self';
               style-src https: 'self' css/Stylesheet.css *.licdn.com *.cloudflare.com 
                                       *.jquery.com my.setmore.com *.bootstrapcdn.com 'unsafe-inline';
               font-src https: 'self' css/Stylesheet.com *.cloudflare.com *.jquery.com;
               script-src https: 'self' 'unsafe-inline' badges.linkedin.com *.licdn.com platform.linkedin.com 
                                        *.setmore.com www.googletagmanager.com *.googleapis.com *.cloudflare.com *.bootstrapcdn.com;
               connect-src https: www.google-analytics.com;
               img-src https: 'self' *.setmore.com *.jquery.com *.licdn.com *.cloudflare.com *.googleapis.com;
               frame-src https: 'self' *.setmore.com;
               base-uri 'self';
               object-src 'none'; ">
<meta http-equiv="X-Content-Security-Policy"
      content="default-src 'self';
               style-src https: 'self' css/Stylesheet.css *.licdn.com *.cloudflare.com
                                       *.jquery.com my.setmore.com *.bootstrapcdn.com 'unsafe-inline';
               font-src https: 'self' css/Stylesheet.com *.cloudflare.com *.jquery.com;
               script-src https: 'self' 'unsafe-inline' badges.linkedin.com *.licdn.com platform.linkedin.com
                                        *.setmore.com www.googletagmanager.com *.googleapis.com *.cloudflare.com *.bootstrapcdn.com;
               connect-src https: www.google-analytics.com;
               img-src https: 'self' *.setmore.com *.jquery.com *.licdn.com *.cloudflare.com *.googleapis.com;
               frame-src https: 'self' *.setmore.com;
               base-uri 'self';
               object-src 'none'; ">
<meta http-equiv="X-WebKit-CSP"
      content="default-src 'self';
               style-src https: 'self' css/Stylesheet.css *.licdn.com *.cloudflare.com
                                       *.jquery.com my.setmore.com *.bootstrapcdn.com 'unsafe-inline';
               font-src https: 'self' css/Stylesheet.com *.cloudflare.com *.jquery.com;
               script-src https: 'self' 'unsafe-inline' badges.linkedin.com *.licdn.com platform.linkedin.com
                                        *.setmore.com www.googletagmanager.com *.googleapis.com *.cloudflare.com *.bootstrapcdn.com;
               connect-src https: www.google-analytics.com;
               img-src https: 'self' *.setmore.com *.jquery.com *.licdn.com *.cloudflare.com *.googleapis.com;
               frame-src https: 'self' *.setmore.com;
               base-uri 'self';
               object-src 'none'; ">
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
<script id="setmore_script" type="text/javascript" src="https://my.setmore.com/webapp/js/src/others/setmore_iframe.js"></script>
<a id="Setmore_button_iframe" style="float:none; position: fixed; right: -2px; top: 25%; display: block; z-index: 20000"
  href="https://my.setmore.com/bookingpage/56bf8c6c-a3fa-4241-93ca-f95966986aa1">
  <img border="none" src="https://my.setmore.com/webapp/images/bookappt/Setmore-Book-Now.png"
  alt="Book an appointment with Deckard Tech Computer Solutions using Setmore" />
</a>
