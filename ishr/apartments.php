		<?php define ('TITLE', 'International Student Housing Rotterdam | Apartments');  ?>
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
					$page_id = 'root-10';
					$dir_id = '';
					include("templates/menu.php"); 	
				?>	
				
				<div class="middle">
					<h3>Kralingen, Jaffa Rotterdam</h3>
					
					<p>Fully furnished accommodation in Rotterdam&#180;s university district: Kralingen</p>
					
					<p>Apartment consists of two rooms, both fully furnished including:</p>
					<p> - Double beds and bedding<br />
						- Flatscreen with integrated DVD player<br />
						- Central heating with separate heating points per room<br />
						- Shared wireless printer<br />
						- Ironing equipment<br />
						- Full-sized desks<br />
						- Ample storage space in each room<br />
						- Chairs/ bank<br />
						- Fully equipped bathroom/kitchen (to be shared)
					</p>
					
					<p>Every other week the apartment is serviced by a cleaner</p>
					<p>Electricity, water, internet, taxes etc. are included in the price</p>
					
					<h3>Location</h3>
					<p>
						- Safe neighbourhood, mostly consisting of urban professionals<br />
						- Erasmus University: 7 minutes by bike or three stops by tram <br />
						- City centre: 12 minutes by bike<br />
						- One block from the city&#180;s main urban park, &#147;Het Kralingse Bos&#148;
					</p>

				</div>

				<div class="sidebar">	
					<div class="image_box">
						<img src="images/room1/room3.png" alt="Kralingen" />
					</div>
				</div> 
			</div>
		</div>

		<?php include("templates/footer.html"); ?>	