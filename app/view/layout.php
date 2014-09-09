<!DOCTYPE HTML>
<html>
	<head>
		<title>Fair.to | The Fair URL Shortner</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Privacy aware URL shortner that supports equality and a fair economy." />
		<meta name="keywords" content="privacy, social networks, url, shortner, shortning" />
		<!--[if lte IE 8]><script src="<?= View::makeUri('/css/ie/html5shiv.js') ?>"></script><![endif]-->
		<script src="<?= View::makeUri('/js/jquery.min.js') ?>"></script>
		<script src="<?= View::makeUri('/js/jquery.dropotron.min.js') ?>"></script>
		<script src="<?= View::makeUri('/js/skel.min.js') ?>"></script>
		<script src="<?= View::makeUri('/js/skel-layers.min.js') ?>"></script>
    <script src="<?= View::makeUri('/js/zeroclipboard.js') ?>"></script>
		<script src="<?= View::makeUri('/js/init.js') ?>"></script>
		<noscript>
			<link rel="stylesheet" href="<?= View::makeUri('/css/skel.css') ?>" />
			<link rel="stylesheet" href="<?= View::makeUri('/css/style.css') ?>" />
			<link rel="stylesheet" href="<?= View::makeUri('/css/style-desktop.css') ?>" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?= View::makeUri('/css/ie/v8.css') ?>" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?= View::makeUri('/css/ie/v9.css') ?>" /><![endif]-->
	</head>
	<body class="<?= isset($body_class) ? $body_class : 'no-sidebar' ?>">
<!--
	ZeroFour by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<!-- Header -->
								<header id="header">
									<div class="inner">
                    <div class="row">
										  <!-- Logo -->
											<h1><a href="<?= View::makeUri('/') ?>" id="logo">Fair.to</a></h1>
                      <div class="2u">&nbsp;
                      </div>
											<form action="<?= View::makeUri('/url/shorten') ?>" method="POST" id="url-form" class="10u">
                        <div class="row">
                          <div class="9u">
                          <input type="text" name="url" id="url" placeHolder="http://url.to/shorten" />
                          </div>
                          <div class="2u">
                          <button class="button"><i class="icon fa-thumbs-o-up"></i> Shorten</button>
                          </div>
                        </div>
											</form>
									</div>
								</header>

              <?php if ( $body_class == 'homepage' ) : ?>


							<!-- Banner -->
								<div id="banner">
									<h2><strong>Fair.to</strong> A free URL shortner that <br />
									protects your privacy and supports <br />a fair economy.</h2>
									<p>Want to learn more about FairCoin and the fair economy?</p>
									<a href="http://fair-coin.org" class="button big icon fa-check-circle"> Join FairCoin</a>
								</div>
              <?php endif ?>

						</div>
					</div>
				</div>
			</div>


		<?= $content ?>


		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="4u">
						
							<!-- Links -->
								<section>
									<h2>Learn More</h2>
									<ul class="divided">
										<li><a href="http://fair-coin.org">Faircoin</a></li>
										<li><a href="https://bitcointalk.org/index.php?topic=702675.0">Fair Coop</a></li>
									</ul>
								</section>
						
						</div>
						<div class="4u">
						
							<!-- Links -->
								<section>
									<h2>Faircoin Resources</h2>
									<ul class="divided">
										<li><a href="http://fair-coin.org/#exchanges">Exchanges</a></li>
										<li><a href="http://fair-coin.org/#wallet">Wallet</a></li>
										<li><a href="http://forum.fair-coin.org">Forum</a></li>
										<li><a href="https://twitter.com/FairCoinTeam">Twitter</a></li>
									</ul>
								</section>
						</div>
						<div class="4u">
						
							<!-- Links -->
								<section>
									<h2>Fair Coop Resources</h2>
									<ul class="divided">
										<li><a href="https://bitcointalk.org/index.php?topic=702675.0">Announcement</a></li>
										<li><a href="https://twitter.com/Fair_Coop">Twitter</a></li>
										<li><a href="https://www.facebook.com/thefaircoop">Facebook</a></li>
									</ul>
								</section>
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>
									<span style="-webkit-transform: rotate(180deg); -ms-transform: rotate(180deg); transform: rotate(180deg); display: inline-block" class="icon fa-copyright"> </span> 
									Fair Coop. All rights reversed</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>
