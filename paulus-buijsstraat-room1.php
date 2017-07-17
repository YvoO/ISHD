<?php define ('TITLE', 'International Student Housing Delft | Apartments | Paulus Buijsstraat | Room I');  ?>
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
				$page_id = 'root-22';
				$dir_id = '';
				include("templates/menu10.php");
			?>	
		</div>
			
		<div class="col-md-7">
			<h4>Paulus Buijsstraat</h4>
				
			<p>Room I is around 12 square meter and situated at the front of the apartment</p>
					
			<p>This room is equipped with:</p>
			<ul>
				<li>Double bed including all required bedding</li>
				<li>Full&#150;sized desk including chair</li>
				<li>Decorative paintings</li>
				<li>Ample closet space</li>
			</ul>
					
			<p>Electricity, water, internet, taxes etc. are included in the price</p>
			<p>Please contact us <a href="contact.php">here</a> for availability</p>

		</div>

		<div class="col-md-3">
			<div class="sidebar">
				<div class="interactive-map-paulus">
					<div class="balcony1"></div>
					<div class="hov room3"><p>Room 3</p><a href="paulus-buijsstraat-room3.php"></a></div>
					<div class="hov room4"><p>Room 4</p><a href="paulus-buijsstraat-room4.php"></a></div>
					<div class="inham"></div>
					<div class="hov room2"><p>Room 2</p><a href="paulus-buijsstraat-room2.php"></a></div>
					<div class="hov room1 active"><p>Room 1</p><a href="paulus-buijsstraat-room1.php"></a></div>
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
	                $('.interactive-map').css('cursor', 'pointer');
	            </script>
            </div>			
		</div>
	</div>
</div>

<?php include("templates/footer.html"); ?>	