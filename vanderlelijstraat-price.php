		<?php define ('TITLE', 'International Student Housing Rotterdam | Apartments | van der Lelijstraat |Price');  ?>
		<?php 
			$path = 'http://www.ishd.site/';
			$page_id = 'root-1';
			$dir_id = '';
			include("templates/header.php"); 
		?>	

		<div class="container">
		<h1 class="titels">van der Lelijstraat</h1>
			
			<div class="row content">
					<div class="col-md-2">
						<?php 
							$path = 'http://www.ishd.site/';
							$page_id = 'root-39';
							$dir_id = '';
							include("templates/menu11.php");
						?>	
					</div>

					<div class="col-md-7">
						<h4>van der Lelijstraat</h4>
						<p>Room prices are dependent on the rental period, as well as the season of the year.</p>
						
						<p>Prices September - June:</p>
						<ul> 
							<li>Room I: EUR 525 p/m</li>
							<li>Room II: EUR 575 p/m</li>
							<li>Room III: EUR 600 p/m</li>
							<li>Room IV: EUR 550 p/m</li>

						</ul>

						<p>Price July - August:</p>
						<ul> 
							<li>Room I: variable</li>
							<li>Room II: variable</li>
							<li>Room III: variable</li>
							<li>Room IV: variable</li>
						</ul>
						
						<p>Please contact <a href="contact.php">(link)</a> us for availability</p>
	
					</div>

					<div class="col-md-3">
						<div class="sidebar">								
						</div> 
					</div>
			</div>
		</div>

		<?php include("templates/footer.html"); ?>	