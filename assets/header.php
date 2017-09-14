<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div id="header">
	<div class="mobile">
		<div></div>
		<div></div>
		<div></div>
	</div>
			<div class="logo">
				<img src="img/logo.svg" style="height: 7vw; max-height: 40px">
			</div>
	<div class="nav">
		<div class="exit"></div>
		<div id="links_logo">
			<ul class="links_logo">
				<li scroll="about"><?php echo $language[$lang]['about company']?></li>
				<li scroll=""><?php echo $language[$lang]['services'] ?></li>
				<li scroll=""><?php echo $language[$lang]['contacts'] ?></li>
			</ul>
		</div>

		<div id="links">
			<ul>
				<li><?php echo $language[$lang]['login'] ?></li>
				<li><?php echo $language[$lang]['register'] ?></li>
			</ul>
		</div>

		<div id="lang">
			<ul>
				<li><a href="index.php?lang=en">EN</a></li>
				<li>|</li>
				<li><a href="index.php?lang=ru">RU</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="banner">
	<canvas id="c1"></canvas>
	<div class="banner_text">
		<h1><?php echo $language[$lang]['payflexy'] ?></h1>
		<h2><?php echo $language[$lang]['team_experi'] ?><br><?php echo $language[$lang]['field_ecomerce'] ?></h2>
	</div>
</div><!--COMMENT-->
