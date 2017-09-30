<!DOCTYPE html>
<?php
include_once('connectDB.php');
session_start();
if(!$_SESSION['login']){
	$_SESSION['error'] = '<b>Error</b> Please login.';
 	header("Location: login.php");
}
?>
<html lang="en" itemscope itemtype="http://schema.org/WebPage"> <!--Change the lang property to your web's language-->

<head prefix="og: http://ogp.me/ns#">

	<title></title> <!--Up to 60-70 Characters. Optimal Format: Primary Keyword - Secondary Keyword | Brand Name-->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<meta name="description" content=""> <!--Page description. No longer than 155 characters.-->
	<meta name="keywords" content="">
	<meta name="author" content=""> <!--Name of the author.-->

	<!--Facebook Meta Tags-->
	<meta property="og:image" content="http://" /> <!--URL of Image to show-->
	<meta property="og:description" content="" /> <!--Page Description-->
	<meta property="og:site_name" content="" /> <!--The Name Here-->
	<meta property="og:url" content="http://" /> <!--The Web main URL-->
	<meta property="og:title" content="" /> <!--The Title Here-->

	<!--Google Meta Tags-->
	<meta itemprop="name" content=""> <!--The Name or Title Here-->
	<meta itemprop="description" content=""> <!--Page Description-->
	<meta itemprop="image" content="http://"> <!--URL of Image to show-->

	<!--Twitter Meta Tags - You'll have to validate your website here: https://dev.twitter.com/docs/cards/validation/validator-->
	<meta name="twitter:card" content="summary_large_image"> <!--Content Card Type-->
	<meta name="twitter:domain" content=""> <!--Your web's domain-->
	<meta name="twitter:site" content="@"> <!--@publisher-->
	<meta name="twitter:title" content=""> <!--Page Title-->
	<meta name="twitter:description" content=""> <!--Page description less than 200 characters-->
	<meta name="twitter:creator" content="@"> <!--@author-->
	<meta name="twitter:image:src" content="http://"> <!--URL of Image to show-->

	<!--Android Meta Tags-->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="img/icons/icon_192x192.png"> <!--192 x 192 Icon-->
	<link rel="icon" sizes="128x128" href="img/icons/icon_128x128.png"> <!--128 x 128 Icon-->

	<!--Apple Meta Tags-->
	<meta name="apple-mobile-web-app-title" content=""> <!--App Title or Name-->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> <!--Styling for the iOS Status Bar-->
	<link rel="apple-touch-icon" href="img/icons/icon_60x60.png"> <!--60 x 60 Icon-->
	<link rel="apple-touch-icon" sizes="76x76" href="img/icons/icon_76x76.png"> <!--76 x 76 Icon-->
	<link rel="apple-touch-icon" sizes="120x120" href="img/icons/icon_120x120.png"> <!--120 x 120 Icon-->
	<link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon_152x152.png"> <!--152 x 152 Icon-->
	<link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon_167x167.png"> <!--167 x 167 Icon-->
	<link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon_180x180.png"> <!--180 x 180 Icon-->

	<!--Microsoft Tags-->
	<meta name="msapplication-TileColor" content=""> <!--Color of the tile on Windows. In hexadecimal format-->
	<meta name="application-name" content="" /> <!-- App Title -->
	<meta name="msapplication-tooltip" content="" /> <!--Small text on hover-->
	<meta name="msapplication-starturl" content="http://" /> <!-- URL to start in -->
	<meta name="msapplication-square70x70logo" content="img/icons/icon_70x70.png" /> <!--Image for Tile 70x70-->
	<meta name="msapplication-square150x150logo" content="img/icons/icon_150x150.png" /> <!--Image for Tile 150x150-->
	<meta name="msapplication-wide310x150logo" content="img/icons/icon_310x150.png" /> <!--Image for Tile 310x150-->
	<meta name="msapplication-square310x310logo" content="img/icons/icon_310x310.png" /> <!--Image for Tile 310x310-->

	<link rel="publisher" href=""> <!--Publisher's Google+ URL-->

	<meta name="theme-color" content=""><!--Theme color for browsers in hexadecimal format.-->

	<link rel="shortcut icon" href="img/favicon.ico" /> <!--Favicon. Good tool for creating one: http://xiconeditor.com/ Create all sizes.-->
	<link rel="canonical" href=""> <!--Canonical URL of your webpage-->

	<link rel="manifest" href="manifest.json">

	<link rel="stylesheet" href="style/normalize.min.css">
	<link rel="stylesheet" href="style/animate.min.css">
	<link rel="stylesheet" href="style/csshake.min.css">
	<link rel="stylesheet" href="style/font-awesome.min.css">
	<link rel="stylesheet" href="style/monogatari.css">
	<link rel="stylesheet" href="style/main.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/particles.min.js"></script>
	<script src="js/artemis.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/strings.js"></script>
	<script src="js/options.js"></script>
	<script type ='text/javascript'>
	storage.player.Name = "<?php echo $_SESSION['fname']; ?>";
	storage.player.Score = 0;
	engine.Label = "<?php echo $_GET['gameType']; ?>";
	var userId = <?php echo $_SESSION['id']; ?>;
	var character = "<?php echo ($_GET['gameType'] == 'Start') ? "sachi" : "henrik"; ?>";
	</script>
	<script src="js/script.js">
	</script>
	<script type ='text/javascript'>
	
	</script>
	<script src="js/monogatari.js"></script>
	<script src="js/main.js"></script>
	<style>

	</style>

</head>

<body>

	<!-- Fallback when JavaScript is not available -->
	<noscript>
		<div class='middle align-center'>
			<h2>JavaScript Disabled or not Supported.</h2>
			<small>To play this game, please enable JavaScript executing or use a different browser.</small>
		</div>
	</noscript>
	<!-- Notice messages -->
	<div data-notice='exit' class='modal'>
		<div>
			<p data-string="Confirm">Do you want to quit</p>
			<button data-action='quit' data-string="Quit">Quit</button>
			<button data-action='dismiss-notice' data-string="Cancel">Cancel</button>
		</div>
	</div>
	<!--Game Screen -->
	<section id="game">
		<div id="particles-js" data-ui="particles"></div>
		<div id="background" data-ui='background'></div>
		<div>
			<audio type="audio/mpeg" data-component="music"></audio>
			<audio type="audio/mpeg" data-component="voice"></audio>
			<audio type="audio/mpeg" data-component="sound"></audio>
			<div class="video-wrapper align-center vertical middle" data-component="video" data-ui="video-player">
				<video type="video/mp4" data-ui="player" controls="true"></video>
				<button data-action="close-video" data-string="Close">Close</button>
			</div>

			<div data-component="modal" data-ui="messages" class="middle">
				<div data-ui="message-content"></div>
				<div class="horizontal align-center" data-ui="inner-menu">
					<button data-action="close" data-close="messages" data-string="Close">Close</button>
				</div>
			</div>
			<div data-component="modal" data-ui="input" class="middle">
				<p data-ui="input-message" class="block"></p>
				<input type="text"></input>
				<small data-ui="warning" class="block"></small>
				<div>
					<button data-action="submit">Ok</button>
				</div>

			</div>
		</div>
		<ul data-ui="quick-menu" class="align-right dark">
			<span class="fa fa-arrow-left" data-action="back"></span>
			<span class="fa fa-eye" data-action="distraction-free"></span>
			<span class="fa fa-save" data-action="open-menu" data-open="save"></span>
			<span class="fa fa-undo" data-action="open-menu" data-open="load"></span>
			<span class="fa fa-gear" data-action="open-menu" data-open="settings"></span>
			<span class="fa fa-times-circle-o" data-action="end"></span>
		</ul>
		<div data-ui="choices" class="vertical align-center middle">

		</div>
		<div data-ui="text">
			<img data-ui="face">
			<span data-ui="who"></span>
			<p data-ui="say"></p>
		</div>

	</section>

	<!-- Loading Screen -->
	<section data-menu="loading" data-background="">

		<div class="middle">
			<h2 data-string="Loading">Loading</h2>
			<progress data-ui='load-progress' value="0" max="100"></progress>
			<small data-string="LoadingMessage">Wait while the assets are loaded.</small>
		</div>
	</section>

	<!-- Main Screen -->
	<section data-menu="main" data-background="">
		<audio type="audio/mpeg" data-component="ambient"></audio>

		<div class="vertical align-right bottom animated bounceIn " data-ui="inner-menu">
			<button data-action="start" data-string="Startsss">Startsss</button>
		</div>
	</section>

	<!-- Save Screen -->
	<section data-menu="save" data-background="">
		<h2 data-string="Save">Save</h2>
		<div data-ui="slots" class="horizontal align-center"></div>
		<div class="horizontal align-center bottom animated bounceIn" data-ui="inner-menu">
			<button data-action="back" data-string="Back">Back</button>
		</div>
	</section>

	<!-- Load Screen -->
	<section data-menu="load" data-background="">
		<h2 data-string="Load">Load</h2>
		<div data-ui="saveSlots">
			<h3 data-string="LoadSlots">Saved Games</h3>
			<div data-ui="slots" class="horizontal align-center"></div>
		</div>
		<div data-ui="autoSaveSlots">
			<h3 data-string="LoadAutoSaveSlots">Auto Saved Games</h3>
			<div data-ui="slots" class="horizontal align-center"></div>
		</div>
		<div class="horizontal align-center bottom animated bounceIn" data-ui="inner-menu">
			<button data-action="back" data-string="Back">Back</button>
		</div>
	</section>

	<!-- Settings Screen -->
	<section data-menu="settings" data-background="" class="vertical align-center">
		<h2 data-string="Settings">Settings</h2>
		<div data-settings="audio">
			<h3 data-string="Audio">Audio</h3>
			<span data-string="Music">Music Volume:</span>
			<input type="range" min="0.0" max="1.0" step="0.1" data-action="set-volume" data-target="music">
			<span data-string="Sound">Sound Volume:</span>
			<input type="range" min="0.0" max="1.0" step="0.1" data-action="set-volume" data-target="sound">
			<span data-string="Voice">Voice Volume:</span>
			<input type="range" min="0.0" max="1.0" step="0.1" data-action="set-volume" data-target="voice">
		</div>
		<div data-settings="language">
			<h3 data-string="Language">Language</h3>
			<div class="horizontal">
				<select data-action="set-language">
						<option value="English">English</option>
						<option value="Español">Español</option>
						<option value="Français">Français</option>
						<option value="日本語">日本語</option>
					</select>
				<span class="fa fa-unsorted" data-select="set-language"></span>
			</div>

		</div>

		<div data-settings='resolution' data-platform='electron'>
			<h3 data-string='Resolution'>Resolution</h3>
			<div class="horizontal">
				<select data-action='set-resolution'></select>
				<span class="fa fa-unsorted" data-select="set-resolution"></span>
			</div>
		</div>

		<div class="horizontal align-center bottom animated bounceIn" data-ui="inner-menu">
			<button data-action="back" data-string="Back">Back</button>
		</div>
	</section>

	<!--Help Screen -->
	<section data-menu="help" data-background="">
		<h2 data-string="Help">Help</h2>
		<div class="align-left padded">
			<p data-string="AdvanceHelp">To advance through the game, click anywhere on the game screen or press the space key.</p>
			<h3 data-string="QuickButtons">Quick Menu Buttons</h3>
			<p><span class='fa fa-arrow-left'></span> <span data-string="BackButton">Back.</span></p>
			<p><span class='fa fa-times-circle-o'></span> <span data-string="QuitButton">Quit Game.</span></p>
		</div>

		<div class="horizontal align-center bottom animated bounceIn" data-ui="inner-menu">
			<button data-action="back" data-string="Back">Back</button>
		</div>

	</section>

</body>

</html>