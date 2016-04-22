<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel=icon href="./assets/img/favicon.ico">

  <!-- TITLE -->
  <title>Contact | Jason Vuong</title>
  <!-- BOOTSTRAP CORE CSS -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome Icons -->
  <link href="./assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Google Fonts-->
  <!-- Custom CSS -->
  <link href="./assets/css/custom.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
  <!--
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<?php
  $email_to = "contact@vuonghia.com";
  $name = $_POST['contact-name'];
  $email_from = $_POST['contact-email'];
  $message = $_POST['contact-words'];

  function died($error) {
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
  }

  // validation expected data exists
  if(!isset($_POST['contact-name'])  ||
     !isset($_POST['contact-email']) ||
     !isset($_POST['contact-words'])) {
       died('We are sorry, but there appears to be a problem with the form you submitted.');
  }

  $sending_message  = "Hey Jason, You have a message from your website's dropbox.\n";
  $sending_message .= "The message was sent by " . $name . "<" . $email_from . ">\n\n";
  $sending_message .= $message . "\n";

  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $sending_message, $headers);
?>

<body class="full-width contact">
  <!-- HEADER -->
  <header class="site-header" role="banner">
    <!-- NAVBAR -->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation ">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="./assets/img/logo.png" alt="Bootstrap to WordPress"></a>
          </div> <!-- navbar header -->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html"><b>Home</b></a></li>
              <li class="active"><a href="contact.html"><b>Contact</b></a></li>
            </ul> <!-- nav -->
          </div> <!-- navbar collapse -->
        </div>
      </div>
    </div> <!-- navbar-wrapper -->
  </header> <!-- END HEADER -->

  <!--FEATURE IMAGE -->
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title">Contact</h1>
  </section> <!-- END FEATURE IMAGE -->

  <!-- MAIN CONTENT -->
  <div class="container">
    <div class="row" id="primary">
      <div id="content" class="col-sm-12">
          <section class="main-content">
            <p class="lead">Thanks for contacting me, We will be in touch with you very soon.</p>
          </section> <!-- main-content -->
      </div> <!-- content -->
    </div> <!-- row -->
  </div> <!-- container -->
   <!-- END MAIN CONTENT -->

  <!-- SIGNUP SECTION -->
  <section id="signup" data-type="background" data-speed="4">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- container -->
  </section> <!-- END SIGNUP SECTION -->

<!-- FOOTER -->
<footer>
  <div class="container">
      <div class="col-sm-3">
        <p><a href="#"><img src="./assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
      </div> <!-- col -->
      <div class="col-sm-6">
        <nav>
          <ul class="list-unstyled list-inline">
            <li><a href="index.html">Home</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div> <!-- col -->
      <div class="col-sm-3">
        <p class="pull-right">&copy; 2016 Jason Vuong</p>
      </div> <!-- col -->

  </div> <!-- container -->
</footer> <!-- END FOOTER -->

<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="./assets/js/jquery-2.1.4.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>
