<!DOCTYPE>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<title>ZG Make Up Portfolio</title>
		<link href="css/main.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
	</head>

<body id="wrapper">
<div>
	<!--Navigation begins -->
	<!--This is the logo of the page also the escape hatch-->

	<div id="logo"><a href="index.html"></a></div> 
	<nav>
	<ul class="nav">	
		<li><a href="contact.html">Contact</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="portfolio.html">Porfolio</a></li>
		<li><a href="blog.html">Blog</a></li>
		<li><a href="index.html">Home</a></li>
	</ul>
	</nav>
</div><!--Navigation ends-->


<!--Portfolio Previews Begins-->
<div id="main">
	<div class="placeholder"></div>
	<div class="placeholder"></div>
	<div class="placeholder"></div>
	<div class="placeholder"></div>
	<div class="placeholder"></div>

<!--About section Begins -->

	<div id="about">
		<h1>About Me</h1>
		<p>Hi! My name is Zahscha, I’m a Make up artist. Since 2008 I’m a self-thought, from the youtube guru’s from around the girl. I’m professional and very energetic. =)</p>
	</div>
<!--About section Ends-->


<!--Newsletter section begins-->
	<div id="newsletter">
		<h1>Newsletter</h1>
		<?php echo form_open('email/send'); ?>
		<?php
	
	$name_data = array(
		'name' => 'name',
		'id' => 'name',
		'value' => set_value('name')
	);
	
	?>
			<input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
			<?php echo form_submit('submit','Submit');?>
			<?php echo form_close();?>

			<?php echo validation_errors('<p class="error">');?>
		?>
	</div>
<!-- Newsletter section Ends-->
</div>
<!--Portfolio Previews Ends-->

<!--Footer links begin-->
<div>
<footer>
	<ul class="footer">
	<li><a href="index.html">Home</a></li>
		<li><a href="blog.html">Blog</a></li>
		<li><a href="portfolio.html">Porfolio</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="contact.html">Contact</a></li>
		<li><a href="privacy.html">Privacy Policy</li>

	</ul>
</footer>
</div>
</body>
