<!DOCTYPE HTML>
<html>
	<head>
		<title>The Fair URL Shortner</title>
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
											<h1><a href="<?= View::makeUri('/') ?>" id="logo">Fair</a></h1>
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
									<h2><strong>Fair:</strong> A free URL shortner that protects
									<br />
									your privacy and supports a fair economy.</h2>
									<p>Want to learn more about FairCoin and the fair economy?</p>
									<a href="#" class="button big icon fa-check-circle"> Use FairCoin</a>
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
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>Filler Links</h2>
									<ul class="divided">
										<li><a href="#">Quam turpis feugiat dolor</a></li>
										<li><a href="#">Amet ornare in hendrerit </a></li>
										<li><a href="#">Semper mod quisturpis nisi</a></li>
										<li><a href="#">Consequat etiam phasellus</a></li>
										<li><a href="#">Amet turpis, feugiat et</a></li>
										<li><a href="#">Ornare hendrerit lectus</a></li>
										<li><a href="#">Semper mod quis et dolore</a></li>
										<li><a href="#">Amet ornare in hendrerit</a></li>
										<li><a href="#">Consequat lorem phasellus</a></li>
										<li><a href="#">Amet turpis, feugiat amet</a></li>
										<li><a href="#">Semper mod quisturpis</a></li>
									</ul>
								</section>
						
						</div>
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>More Filler</h2>
									<ul class="divided">
										<li><a href="#">Quam turpis feugiat dolor</a></li>
										<li><a href="#">Amet ornare in in lectus</a></li>
										<li><a href="#">Semper mod sed tempus nisi</a></li>
										<li><a href="#">Consequat etiam phasellus</a></li>
									</ul>
								</section>
						
							<!-- Links -->
								<section>
									<h2>Even More Filler</h2>
									<ul class="divided">
										<li><a href="#">Quam turpis feugiat dolor</a></li>
										<li><a href="#">Amet ornare hendrerit lectus</a></li>
										<li><a href="#">Semper quisturpis nisi</a></li>
										<li><a href="#">Consequat lorem phasellus</a></li>
									</ul>
								</section>
						
						</div>
						<div class="6u">
						
							<!-- About -->
								<section>
									<h2><strong>ZeroFour</strong> by HTML5 UP</h2>
									<p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
									template by <a href="http://n33.co/">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
									It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
									licensed so use it for any personal or commercial project (just credit us
									for the design!).</p>
									<a href="#" class="button alt icon fa-arrow-circle-right">Learn More</a>
								</section>
						
							<!-- Contact -->
								<section>
									<h2>Get in touch</h2>
									<div>
										<div class="row">
											<div class="6u">
												<dl class="contact">
													<dt>Twitter</dt>
													<dd><a href="#">@untitled-corp</a></dd>
													<dt>Facebook</dt>
													<dd><a href="#">facebook.com/untitled</a></dd>
													<dt>WWW</dt>
													<dd><a href="#">untitled.tld</a></dd>
													<dt>Email</dt>
													<dd><a href="#">user@untitled.tld</a></dd>
												</dl>
											</div>
											<div class="6u">
												<dl class="contact">
													<dt>Address</dt>
													<dd>
														1234 Fictional Rd<br />
														Nashville, TN 00000-0000<br />
														USA
													</dd>
													<dt>Phone</dt>
													<dd>(000) 000-0000</dd>
												</dl>
											</div>
										</div>
									</div>
								</section>
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>
