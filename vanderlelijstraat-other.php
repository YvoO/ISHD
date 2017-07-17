<?php define ('TITLE', 'International Student Housing Delft | Apartments | van der Lelijstraat | Other');  ?>
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
			$page_id = 'root-37';
			$dir_id = '';
			include("templates/menu11.php");
		?>	
		</div>

		<div class="col-md-7">
		<h4>van der Lelijstraat</h4>
							
			<p>
			When entering the apartment you access an entry-hall with mirror and closet to leave your jackets etc. <br/><br/>
			All areas are connected via this entry-hall which offers access to all rooms, kitchen, bathroom and separate toilet <br/><br/>
			The bathroom consists of a shower and has sufficient room to store all necessary toilet requirements.
			</p>
		
		</div>

		<div class="col-md-3">
			<div class="sidebar">
				<div class="interactive-map-lelijstraat">
					<div class="hov room3"><p>Room 3</p><a href="vanderlelijstraat-room3.php"></a></div>
					<div class="hov room4"><p>Room 4</p><a href="vanderlelijstraat-room4.php"></a></div>
					<div class="hov room2"><p>Room 2</p><a href="vanderlelijstraat-room2.php"></a></div>
					<div class="hov balcony active"><p>Balcony</p><a href="vanderlelijstraat-other.php"></a></div>
					<div class="hov hall active"><p>Hall</p><a href="vanderlelijstraat-other.php"></a></div>
					<div class="hov wc active"><p>WC</p><a href="vanderlelijstraat-other.php"></a></div>
					<div class="hov bathroom active"><p>Bath<br>room</p><a href="vanderlelijstraat-other.php"></a></div>
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

	<div class="row content">
		<div class="col-md-offset-1 col-md-10">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
			    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				  <!-- Wrapper for slides -->
				 <div class="carousel-inner" role="listbox">
				    <div class="item active">
					    <img src="images/lelijstraat/other_3.jpg" alt="Balcony">
				    	<div class="carousel-caption">
				        Balcony
				      	</div>
				    </div>
				    <div class="item">
					    <img src="images/lelijstraat/other_1.jpg" alt="Bathroom">
				    	<div class="carousel-caption">
				        Bathroom				
				    	</div>
				    </div>
				    <div class="item">
					    <img src="images/lelijstraat/other_2.jpg" alt="WC">
				    	<div class="carousel-caption">
				        WC
				    	</div>
				    </div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>

<?php include("templates/footer.html"); ?>	