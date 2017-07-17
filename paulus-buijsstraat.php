<?php define ('TITLE', 'International Student Housing Delft | Apartments | Paulus Buijsstraat');  ?>
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
				$page_id = 'root-21';
				$dir_id = '';
				include("templates/menu10.php");
			?>
		</div>
			
		<div class="col-md-7">
			<h4>Paulus Buijsstraat</h4>
						
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
				<div class="interactive-map-paulus">
					<div class="balcony1"></div>
					<div class="hov room3"><p>Room 3</p><a href="paulus-buijsstraat-room3.php"></a></div>
					<div class="hov room4"><p>Room 4</p><a href="paulus-buijsstraat-room4.php"></a></div>
					<div class="inham"></div>
					<div class="hov room2"><p>Room 2</p><a href="paulus-buijsstraat-room2.php"></a></div>
					<div class="hov room1"><p>Room 1</p><a href="paulus-buijsstraat-room1.php"></a></div>
					<div class="hov hall"><p>Hall</p><a href="paulus-buijsstraat-other.php"></a></div>
					<div class="hov kitchen">
						<div class="bath"><p>Bath</p></div>
						<div class="wc"><p>WC</p></div>
						<div class="emptyspace"></div>
						<p>Kitchen</p><a href="paulus-buijsstraat-kitchen.php"></a>
						<div class="balcony2"></div>
					</div>
				</div>
				<script type="text/javascript">
	                $(".hov").click(function(){
			        	window.location = $(this).find("a").attr("href");
			            return false;
			        });
			        $('.interactive-map-paulus').css('cursor', 'pointer');
				</script>
			<br>
			</div>
		</div>
	</div>
</div>	

<?php include("templates/footer.html"); ?>	