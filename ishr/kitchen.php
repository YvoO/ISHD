		<?php define ('TITLE', 'International Student Housing Rotterdam | Apartments | Kitchen');  ?>
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
					$page_id = 'root-13';
					$dir_id = '';
					include("templates/menu.php"); 	
				?>	
				
				<div class="middle">
					<h3>Kitchen</h3>
					
					<p>The kitchen will be used by both users of the room</p>
					
					<p>Kitchen contains a little table seating two to have dinner etc.</p>
					
					<p>Room is equipped with:</p>
					<p> - Fridge<br />
						- Washing machine<br />
						- Clothes dryer<br />
						- Cooking plate<br />
						- Coffee machine<br />
						- Hot water boiler<br />
						- All necessary plates and cutlery etc.
					</p>
				</div>

				<div class="sidebar">	
					<div class="image_box">
						<div id="fadeshow1"></div>
					</div>
					<img src="images/apartment/kitchen.JPG" alt="Kitchen" width="300" style="margin-top:10px;border:1px solid #CFDDD5;" />
				</div> 
			</div>
		</div>
		
		<script type="text/javascript">
			var mygallery=new fadeSlideShow({
				wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
				dimensions: [286, 164], //width/height of gallery in pixels. Should reflect dimensions of largest image
				imagearray: [
					["images/kitchen/kitchen1.png", "", "", "The kitchen."],
					["images/kitchen/kitchen2.png", "", "", "The kitchen"],
					["images/kitchen/kitchen3.png", "", "", "The kitchen."] //<--no trailing comma after very last image element!
				],
				displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
				persist: false, //remember last viewed slide and recall within same session?
				fadeduration: 500, //transition duration (milliseconds)
				descreveal: "ondemand",
				togglerid: ""
			})
		</script>

		<?php include("templates/footer.html"); ?>	