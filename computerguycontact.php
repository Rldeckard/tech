<html>
<head>
<?php include('header.php');?>
<style>
.row, .col{
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
  text-align: left;
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
  color: #ddd;
}
form {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 5px;
}
input[type="text"] {
  height: 40px;
  background-color: #F2F4F5;
  width: 100%;

}
textarea {
  height: 80px;
  background-color: #F2F4F5;
  width: auto;
}
input[type="submit"] {
  border: 5px solid white;
  padding: 12px;
  width: auto;
}
</style>
</head>
  <body>
    <div class="box background">
      <div class="row" style="grid-column:1/4;grid-row:4">
      <h1 class="blue">Contact Us</h1>
      </div>
      <div class="row" style="grid-column:2;grid-row:5;">
      <p>If you have any questions or inquiries about the services offered here, please fill out the form below and I'll be in touch as soon as possible. </p>
        <form method="post" >
          <input type="text" style="grid-column:1;grid-row:1" id="firstName" name="firstName" placeholder="John">
          <input type="text" style="grid-column:2;grid-row:1" name="lastName" placeholder="Smith">
          <input type="text" style="grid-column:1/3;grid-row:2" name="emailTo" placeholder="user@gmail.com">
          <textarea  style="grid-column:1/3;grid-row:3" name="emailBody" placeholder="Tell me a little about your situation"></textarea>
          <input style="grid-column:1/3;grid-row:4" type="submit" name="submit" value="Submit Request">
        </form>
      </div>
      <div style="grid-column:2;grid-row:6;text-align:left">
      <p>Email Address</p>
      <a href="mailto:consult@deckardenterprises.com">consult@deckardenterprises.com</a>
      <br>
      <br>
      <p>Telephone Number<br><br>(843) 900-4690</p><br>
      <p>Physical Address<br><br>Summerville, SC 29483</p>
      </div>
<?php
if (isset($_POST['submit'])) {
    include_once('Mail.php');
    include_once('Mail/mime.php');
    include 'credentials.php';

    $message = new Mail_mime();

    $message->setTXTBody($_POST['emailBody']);

    $body = $message->get();

    $extraheaders = array("From"=>$_POST['firstName'].' '.$_POST['lastName'].' <'.$companyEmail.'>',
    "To"=>$companyEmail,
    "Subject"=>'New WEB FORM Request',
    "Reply-To"=>$_POST['emailTo'],
    );

    $headers = $message->headers($extraheaders);

/*  Create a credentials file as above and past in the below code filling out the vital information
    $params["host"] = 'smtp.gmail.com'; // The server to connect. Default is localhost.
    $params["port"] = '587'; // The port to connect. Default is 25.
    $params["auth"] = true; // Whether or not to use SMTP authentication. Default is FALSE.
    $params["username"] = ''; // The username to use for SMTP authentication.
    $params["password"] = ''; // The password to use for SMTP authentication. */

    $smtp = Mail::factory('smtp', $params);

    $mail = $smtp->send('ryan@deckardenterprises.com', $headers, $body);

    if (PEAR::isError($mail)) {
      echo '<div class="col" style="grid-column:2;grid-row:3;z-index:1;text-align:center">
              <i class="fa fa-times-cirle fa-5x"></i><br><br>
                Your request has NOT been submitted. Please try again or contact us directly at (843) 900-4690 or by using the contact info below.
            </div>';
    } else {
      echo '<div class="col" style="grid-column:2;grid-row:3;z-index:1;text-align:center">
              <i class="fa fa-check fa-5x"></i><br><br>
                Your request has been submitted and a qualified technician will be with you as soon as possible!
            </div>';
    }
}
?>
 </div>
</body>
</html>
