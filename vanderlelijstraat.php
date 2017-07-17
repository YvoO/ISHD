<?php define ('TITLE', 'International Student Housing Delft | Apartments | van der Lelijstraat');  ?>
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
				$page_id = 'root-31';
				$dir_id = '';
				include("templates/menu11.php");
			?>
		</div>
			
		<div class="col-md-7">
			<h4>van der Lelijstraat</h4>
						
			<p>Fully furnished accommodation in Delft and close to the TU Delft!</p>
						
			<p>Apartment consists of four bedrooms and kitchen area, the bedrooms are all fully furnished including:</p>
			- Double & single beds and bedding<br/>
			- Central heating with separate heating points per room<br/>
			- Ironing equipment<br/>
			- Full-sized desks in all rooms<br/>
			- Ample storage space in each room<br/>
			- Chairs/ couch<br/>
			- Fully equipped bathroom/kitchen (to be shared)<br/>
			Every other week the apartment is serviced by a cleaner</p>
						
			<p>Electricity, water, internet, taxes etc. are included in the price</p>

			<hr>
						
			<h4>Location</h4>
			<p>- Safe neighbourhood, mostly consisting of young professionals<br/>
			- TU Delft: 2 bus stops (15 minutes), 10 minutes by bike<br/>
		</div>

		<div class="col-md-3">
			<div class="sidebar">
				<div class="interactive-map-lelijstraat">
					<div class="hov room3"><p>Room 3</p><a href="vanderlelijstraat-room3.php"></a></div>
					<div class="hov room4"><p>Room 4</p><a href="vanderlelijstraat-room4.php"></a></div>
					<div class="hov room2"><p>Room 2</p><a href="vanderlelijstraat-room2.php"></a></div>
					<div class="hov balcony"><p>Balcony</p><a href="vanderlelijstraat-other.php"></a></div>
					<div class="hov hall"><p>Hall</p><a href="vanderlelijstraat-other.php"></a></div>
					<div class="hov wc"><p>WC</p><a href="vanderlelijstraat-other.php"></a></div>
					<div class="hov bathroom"><p>Bath<br>room</p><a href="vanderlelijstraat-other.php"></a></div>
					<div class="hov kitchen"><p>Kitchen</p><a href="vanderlelijstraat-kitchen.php"></a></div>
					<div class="hov room1"><p>Room 1</p><a href="vanderlelijstraat-room1.php"></a></div>

				</div>
				<script type="text/javascript">
	                $(".hov").click(function(){
			        	window.location = $(this).find("a").attr("href");
			            return false;
			        });
			        $('.interactive-map-lelijstraat').css('cursor', 'pointer');
				</script>
			<br>
			</div>
		</div>
	</div>
</div>	

<?php include("templates/footer.html"); ?>	