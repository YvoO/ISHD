		<?php define ('TITLE', 'International Student Housing Rotterdam | Apartments | Room II');  ?>
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
					$page_id = 'root-12';
					$dir_id = '';
					include("templates/menu.php"); 	
				?>	
				
				<div class="middle">
					<h3>Room II</h3>
					
					<p>Room II is a room of around 16square meter</p>
					
					<p>Room is equipped with:</p>
					<p> - Double bed including all required bedding<br />
						- Flatscreen with integrated DVD player<br />
						- Full&#150;sized desk including desk chair<br />
						- Relax &#145;chair&#146;<br />
						- Light grey painted with blue carpet<br />
						- Ample closet space
					</p>
					
					<p>Price in the range EUR 550 p&#47;m (dependent on period)<br />
					- Electricity, water, internet, taxes etc. are included in the price</p>
					<p>Please contact (link) us for availability</p>

				</div>

				<div class="sidebar">	
					<div class="image_box">
						<div id="fadeshow1"></div>
					</div>
					<img src="images/apartment/roomII.JPG" alt="Room II" width="300" style="margin-top:10px;border:1px solid #CFDDD5;" />
				</div> 
			</div>
		</div>
		
		<script type="text/javascript">
			var mygallery=new fadeSlideShow({
				wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
				dimensions: [286, 164], //width/height of gallery in pixels. Should reflect dimensions of largest image
				imagearray: [
					["images/room2/room1.png", "", "", "Room I."],
					["images/room2/room2.png", "", "", "Room I"],
					["images/room2/room3.png", "", "", "Room I"] //<--no trailing comma after very last image element!
				],
				displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
				persist: false, //remember last viewed slide and recall within same session?
				fadeduration: 500, //transition duration (milliseconds)
				descreveal: "ondemand",
				togglerid: ""
			})
		</script>

		<?php include("templates/footer.html"); ?>	