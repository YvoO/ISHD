		<?php define ('TITLE', 'International Student Housing Rotterdam | Apartments | Other');  ?>
		<?php 
			$path = 'http://www.ishr-nl.nl05.members.pcextreme.nl/ishr/';
			$page_id = 'root-1';
			$dir_id = '';
			include("templates/header.php"); 
		?>	

		<div id="content" class="group group_standard">
			<h1>Apartment</h1>
			
			<div class="main">
				<?php 
					$path = 'http://www.ishr-nl.nl05.members.pcextreme.nl/ishr/';
					$page_id = 'root-14';
					$dir_id = '';
					include("templates/menu.php"); 	
				?>	
				
				<div class="middle">
					<h3>Other</h3>
					
					<p>When entering the apartment you access an entry-hall with mirror and place to leave your jackets etc.</p>
					
					<p>All areas are connected via a corridor with access to both rooms, kitchen and bath-room</p>
					
					<p>Above the apartment is a significant space which can be used for storage etc. if required</p>
				</div>

				<div class="sidebar">	
					<div class="image_box">
						<img src="images/kitchen/kitchen3.png" alt="Kralingen" />
					</div>
					<img src="images/apartment/other.JPG" alt="Other" width="300" style="margin-top:10px;border:1px solid #CFDDD5;" />
				</div> 
			</div>
		</div>

		<?php include("templates/footer.html"); ?>	