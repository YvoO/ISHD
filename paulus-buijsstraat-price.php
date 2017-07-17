		<?php define ('TITLE', 'International Student Housing Rotterdam | Apartments | Price');  ?>
		<?php 
			$path = 'http://www.ishd.site/';
			$page_id = 'root-1';
			$dir_id = '';
			include("templates/header.php"); 
		?>	

		<div class="container">
		<h1 class="titels">Paulus Buijsstraat</h1>
			
			<div class="row content">
					<div class="col-md-2">
						<?php 
							$path = 'http://www.ishd.site/';
							$page_id = 'root-29';
							$dir_id = '';
							include("templates/menu10.php");
						?>	
					</div>

					<div class="col-md-7">
						<h4>Paulus Buijsstraat</h4>
						<p>Room prices are dependent on the rental period, as well as the season of the year.</p>
						
						<p>Prices September - June:</p>
						<ul> 
							<li>Room I: EUR 550 p/m</li>
							<li>Room II: EUR 500 p/m</li>
							<li>Room III: EUR 650 p/m</li>
							<li>Room IV: EUR 675 p/m</li>

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