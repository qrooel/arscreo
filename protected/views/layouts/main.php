<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  <title><?= $this->page->seo_title; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.ico" />
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/public/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/public/css/flexslider.css" type="text/css" media="all" />
	
	<script src="<?= Yii::app()->request->baseUrl; ?>/public/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="<?= Yii::app()->request->baseUrl; ?>public/js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="<?= Yii::app()->request->baseUrl; ?>/public/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?= Yii::app()->request->baseUrl; ?>/public/js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div  id="wrapper">
		<!-- header -->
		<header>
			<div class="shell">
				<h1 id="logo"><a href="#">Core</a></h1>
				<div class="contact">
					<p class="ico phone-ico"><span></span>+132 456 789</p>
					<p class="ico mail-ico"><span></span><a href="#">sales@core.com</a></p>
				</div>
			</div>	
		</header>
		<!-- end of header -->

    <? $this->renderPartial('//layouts/shared/_navigation'); ?>

    <?
      if($this->page->isHomePage()) {
        $this->renderPartial('//layouts/shared/_slider', ['page' => $this->page]); 
      }
    ?> 

		<!-- services -->
		<section class="services">
			<div class="shell">
				<div class="boxes">
					<h2>What Do We Do?</h2>
					<a href="#" class="all-services">+ Explore All Services</a>
					<div class="cl">&nbsp;</div>
					<div class="box">
						<a href="#">
							<img src="/public/images/print-design.png" alt="" />
							<h3>PRINT DESIGN</h3>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<img src="/public/images/graphic-design.png" alt="" />
							<h3>GRAPHIC DESIGN</h3>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<img src="/public/images/logo-design.png" alt="" />
							<h3>LOGO DESIGN</h3>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<img src="/public/images/vector-characters.png" alt="" />
							<h3>VECTOR CHARACTERS</h3>
						</a>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
		</section>
		<!-- end of services -->
		<!-- main -->
		<div class="main">
			<div class="shell">
				<section>
					<!-- content -->

          <?= $content; ?>

				</section>
			</div>
		</div>
		<!-- end of main -->
		<div id="footer-push"></div>
	</div>
	<!-- end of wrapper -->
	<div id="footer">
		<div class="shell">
			<nav class="footer-nav">
				<a href="#" class="active">HOME</a>
				<a href="#">ABOUT</a>
				<a href="#">SERVICES</a>
				<a href="#">PORTFOLIO</a>
				<a href="#">BLOG</a>
				<a href="#">CONTACT US</a>
			</nav>
			<p class="copy">Copyright &copy; 2012 Design by <a href="http://chocotemplates.com" target="_blank">www.ChocoTemplates.com</a></p>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
</body>
</html>
