		<?php define ('TITLE', 'International Student Housing Rotterdam | Apartments | Neighborhood');  ?>
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
					$page_id = 'root-15';
					$dir_id = '';
					include("templates/menu.php"); 	
				?>	
				
				<div class="middle">
					<h3>Neighborhood</h3>
					
					<p>The apartment is located in a sought after part of Kralingen:</p>
					<p>
						- Safe neighbourhood, mostly consisting of urban professionals<br />
						- Erasmus University: 7 minutes by bike or three stops by tram (stop around the corner)<br />
						- City centre: 12 minutes by bike<br />
						- One block from the city&#180;s main urban park, &#147;Het Kralingse Bos&#148;
					</p>
					
					<p>Safety: located in a well-kept small-scale apartment block:</p>
					<p>
						- Own entrance<br />
						- Located on top floor (not disturbed by top neighbours; one floor underneath)<br />
						- Fire-alarm/extinguishers installed
					</p>
				</div>

				<div class="sidebar">	
					<div class="image_box">
						<img src="images/hood.png" alt="Kralingen" />
					</div>
					<iframe style="margin-top:10px;" width="300" height="275" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=jaffa+16c,+rotterdam&amp;sll=52.469397,5.509644&amp;sspn=6.333528,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Jaffa+16,+3061+Rotterdam,+Zuid-Holland&amp;ll=51.93166,4.503656&amp;spn=0.012517,0.026157&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.nl/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=jaffa+16c,+rotterdam&amp;sll=52.469397,5.509644&amp;sspn=6.333528,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Jaffa+16,+3061+Rotterdam,+Zuid-Holland&amp;ll=51.93166,4.503656&amp;spn=0.012517,0.026157&amp;z=14" style="color:#0000FF;text-align:left">Grotere kaart weergeven</a></small>
				</div> 
			</div>
		</div>

		<?php include("templates/footer.html"); ?>	