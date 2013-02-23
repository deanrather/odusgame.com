<?php

$twitterURL = 'http://twitter.com/odus_game';
$facebookURL = 'http://facebook.com/odusgame';
$versionHistoryURL = '/?versions';
$devToolsURL = '/?dev';
$thanksURL = '/?thanks';
$playURL = 'http://play.odusgame.local';
$devLoginURL = 'http://dev.odusgame.local';
$trelloURL = 'https://trello.com/board/odus/503c8214fbd50b857f1004ee';

$tagline = "Odus hopes to be the SNES-style RPG we all love.. except with multiplayer. And time travel.";
$description = "Odus is still very early in development. Feel free to have a play, and let me know what you think by <a href='$twitterURL'>twitter</a>, or on our <a href='$facebookURL'>facebook</a>.";

$heading1 = "Current Features";
$dialogue1 = "
- turn-based battle against random opponents
- pvp w/ any number of players and npc's
- loyalty system -- creatures join / leave your team
- works on desktop, mobile, or console
- currency to win, lose, or spend on in-battle items
And <a href='$versionHistoryURL'>so many more!</a>
";

$heading2 = "In Progess";
$dialogue2 = "
- playing without needing an account
- bug: the final win/loss message of a battle is never displayed
- better grammar / dialogue
- battle animations
";

$heading3 = "In the pipeline";
$dialogue3 = "
- music
- actually walking around on the map...
- map editor for dev tools
- quests, dungeons, etc.
<a href='$trelloURL'>Loads More</a>
";

$heading4 = "You can help!";
$dialogue4 = "
I don't want your money... Only your time! Precious, precious time.
The <a href='$devToolsURL'>Odus Development Tools</a> allow you to easily contribute creatures & attacks, artwork, and much more!
";

$bottomMessage = "To keep up to date on new features, follow us on <a href='$twitterURL'>twitter</a>, or <a href='$facebookURL'>facebook</a>";

$devToolsDialogue = "<p>Video coming soon! To help with development, just contact us on <a href='$twitterURL'>twitter</a>, or <a href='$facebookURL'>facebook</a>.</p>";

$thanksDialogue = "I have to thank my friends who've helped build this. Namely Shaun and Reese for creating almost all the Creatures and Attacks. But also heaps of other people, who I'll list in more detail shortly. Including various artists who's work I've graciously borrowed from the internet. I will updating this with more detail shortly, but if I've used your work without permission, please let me know! Thanks!! Dean.";

$dialogue1=nl2br($dialogue1);
$dialogue2=nl2br($dialogue2);
$dialogue3=nl2br($dialogue3);
$dialogue4=nl2br($dialogue4);


?><!DOCTYPE html>
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
	
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a href="<?php echo $devLoginURL; ?>">Developer Login</a></li>
              <li><a href="<?php echo $devToolsURL; ?>">Dev Tools</a></li>
              <li><a href="<?php echo $trelloURL; ?>">Task List</a></li>
              <li><a href="<?php echo $versionHistoryURL; ?>">Version History</a></li>
              <li><a href="<?php echo $thanksURL; ?>">Thanks</a></li>
              <li><a href="<?php echo $playURL; ?>">Play</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    
	<div class="container">
      <div class="row" id="header">
      	<div class="span12">
       	 <h1><a href="/"><img src="assets/img/website-icon.png" alt="Odus Logo"></a></h1>
        </div><!--end span12-->        
      </div><!--end row-->
      
      <div class="row" id="catchycontent">
      	<div class="span12">
        <h2><?php echo $tagline; ?></h2>
        <p><?php echo $description; ?></p>
        </div><!--end span12-->
      </div><!--end row-->
      
      <div class="row" id="subscribe">
        <div id="mc_embed_signup">
            <form action="<?php echo $playURL.'/login'; ?>" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank"> 
            <input type="text" name="playerName" class="span4 input-large email" id="mce-EMAIL" placeholder="player name" required>
            <input type="hidden" name="demo" value="true">
            <input type="submit" value="New Game" id="mc-embedded-subscribe" class="btn btn-success btn-large" style="width:150px; height:50px;">
            <p style="padding: 6px;">No need to create an account, login, or download anything!</p>
        </form>
        <img src="/assets/img/or.png" style="padding-bottom:16px" alt="or">
        </div>
        <div id="mc_embed_signup">
            <form action="<?php echo $playURL; ?>" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank"> 
            <input type="text" name="userName" class="span4 input-large email" id="mce-EMAIL" placeholder="username" required>
            <input type="submit" value="Continue" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success btn-large" style="width:150px; height:50px;">
        </form>
        </div>
      </div><!--end row-->
      
      
      
      <?php if(isset($_GET['versions'])) { ?>
      <div class="row section">
        <h2>Version History</h2>
        <pre><?php echo file_get_contents("versions.txt"); ?></pre>
      </div>
      <?php } ?>
      <?php if(isset($_GET['dev'])) { ?>
      <div class="row section">
        <h2>Development Tools</h2>
        <?php echo $devToolsDialogue; ?>
      </div>
      <?php } ?>
      <?php if(isset($_GET['thanks'])) { ?>
      <div class="row section">
        <h2>Thanks To</h2>
        <?php echo $thanksDialogue; ?>
      </div>
      <?php } ?>
      
      <div class="row" id="features">
        <div class="span3 divider">
          <div class="featureicon"><i class="icon-check"></i></div>
            <h3><?php echo $heading1; ?></h3>
            <p><?php echo $dialogue1; ?></p>
        </div>        
        <div class="span3 divider">
          <div class="featureicon"><i class="icon-edit"></i></div>
            <h3><?php echo $heading2; ?></h3>
            <p><?php echo $dialogue2; ?></p>
        </div>       
        <div class="span3 divider">
          <div class="featureicon"><i class="icon-thumbs-up"></i></div>
            <h3><?php echo $heading3; ?></h3>
            <p><?php echo $dialogue3; ?></p>
        </div>
         <div class="span3">
          <div class="featureicon"><i class="icon-heart"></i></div>
            <h3><?php echo $heading4; ?></h3>
            <p><?php echo $dialogue4; ?></p>
        </div>
      </div><!--end row-->
      
      
      <div class="row" id="footer">
      <h4><?php echo $bottomMessage; ?></h4>
      <div class="footericon">
        <a href="<?php echo $twitterURL; ?>"><i class="icon-twitter-sign"></i></a>
        <a href="<?php echo $facebookURL; ?>"><i class="icon-facebook-sign"></i></a>
      </div>
      <p>&copy;2013 Odus. All rights reserved.</p>
      </div><!--end row-->      
      </div><!--end container-->
      <!-- For IE 7 and 8 Media Query Support -->    
      <script type="text/javascript" src="assets/js/respond.js"></script>
  </body>
</html>