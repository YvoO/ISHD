<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="scripts/image-rotator.js"></script>
		<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="scripts/jquery.timer.js"></script>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/fadeslideshow.js"></script>
		
		<!--[if lt IE 7]>
		<link rel="stylesheet" href="ie.css" type="text/css" />
		<![endif]-->
		
	<!-- 	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
		<script type="text/javascript" src="scripts/script.js"></script> -->
		
		<title><?php if (defined ('TITLE')) {
                    print TITLE;
                } else {
                    print 'International Student Housing Rotterdam';
                    }
        ?></title>
	</head>
	
	<body>
		<p id="skipto"><a href="#main">Skip to content</a></p>

		<div id="header" class="group">
			<a id="logo" href="/">International Student Housing Rotterdam</a>
			<h2>A private initiative to offer quality housing at affordable prices</h2>
			<ul id="nav">
				<li><?php if ($page_id == 'root-0') { echo '<a class="selected" href="'.$path.'index.php">Home</a>'; } else { echo '<a href="'.$path.'index.php">Home</a>';} ?></li>
				<li><?php if ($page_id == 'root-1') { echo '<a class="selected" href="'.$path.'apartments.php">Apartments</a>'; } else { echo '<a href="'.$path.'apartments.php">Apartments</a>';} ?></li>
				<li><?php if ($page_id == 'root-2') { echo '<a class="selected" href="'.$path.'service.php">Service</a>'; } else { echo '<a href="'.$path.'service.php">Service</a>';} ?></li>
				<li><?php if ($page_id == 'root-4') { echo '<a class="selected" href="'.$path.'price.php">Price</a>'; } else { echo '<a href="'.$path.'price.php">Price</a>';} ?></li>
				<li><?php if ($page_id == 'root-5') { echo '<a class="selected" href="'.$path.'agreement.php">Agreement</a>'; } else { echo '<a href="'.$path.'agreement.php">Agreement</a>';} ?></li>
				<li><?php if ($page_id == 'root-6') { echo '<a class="selected" href="'.$path.'contact.php">Contact</a>'; } else { echo '<a href="'.$path.'contact.php">Contact</a>';} ?></li>
			</ul>
		</div>