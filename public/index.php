<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Odus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page,Subscribe">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/style-responsive-red.css" rel="stylesheet">    
    <link href="assets/css/style-switcher.css" rel="stylesheet">
    <!-- Google Web Font-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--[if IE 7]><link rel="stylesheet" href="assets/css/font-awesome-ie7.css"><![endif]-->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- fav icons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
</head>
<body>
	
	<div class="container">
      <div class="row" id="header">
      	<div class="span12">
       	 <h1><a href="#"><span id="it"></i>ITS</i></span><span id="beta">ODUS</span></a></h1>
        </div><!--end span12-->        
      </div><!--end row-->
      
      <div class="row" id="catchycontent">
      	<div class="span12">
        <h2>Game still in early development phase...</h2>        
        <p>Odus is still very early in development. It's not ready for a public beta yet, but drop me a line and we'll let let more people into testing as we can accomodate them.</p>        
        </div><!--end span12-->            
      </div><!--end row-->
      
      <div class="row" id="subscribe">
      <?php
        session_start();
        if(isset($_SESSION['done']))
        {
          echo "<h3>Will get back to you shortly!</h3><br>";
        } else { ?>
      	<div id="mc_embed_signup">
            <form action="register.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank">	
            <input type="email" value="" name="EMAIL" class="span4 input-large email" id="mce-EMAIL" placeholder="email address" required>
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success btn-large">
        </form>
        </div>
        
        <?php } ?>
      </div><!--end row-->
      
      <div class="row" id="features">
      	<div class="span3 divider">
        	<div class="featureicon"><i class="icon-resize-full"></i></div>
            <h3>Fun</h3>
            <p>Odus will be a very fun game.</p>
        </div>        
        <div class="span3 divider">
        	<div class="featureicon"><i class="icon-flag"></i></div>
            <h3>Not Done Yet</h3>
            <p>Been working on the game a while now, gonna be awesome.</p>
        </div>       
        <div class="span3 divider">
        	<div class="featureicon"><i class="icon-envelope"></i></div>
            <h3>Cool Mail Icon</h3>
            <p>I'm not going to sign you up for spam. I wouldn't even know how.</p>
        </div>
         <div class="span3">
        	<div class="featureicon"><i class="icon-font"></i></div>
            <h3>Check out this A</h3>
            <p>It's such an awesome A. I could tell you more about the game, but I won't.</p>
        </div>
      </div><!--end row-->
      
      <div class="row" id="footer">
      <h4>To keep up to date during development <br/>follow us on twitter</h4>
      <div class="footericon"><a href="https://twitter.com/odus_game"><i class="icon-twitter-sign"></i></a></div>
      <p>&copy;2012 Odus. All rights reserved.</p>
      </div><!--end row-->      
      </div><!--end container-->
      <!-- For IE 7 and 8 Media Query Support -->    
      <script type="text/javascript" src="assets/js/respond.js"></script>
  </body>
</html>