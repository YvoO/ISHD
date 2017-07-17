<?php define ('TITLE', 'International Student Housing Delft | Apartments | Paulus Buijsstraat | Other');  ?>
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
			$page_id = 'root-27';
			$dir_id = '';
			include("templates/menu10.php");
		?>	
		</div>

		<div class="col-md-7">
		<h4>Paulus Buijsstraat</h4>
							
			<p>
			When entering the apartment you access an entry-hall with mirror and closet to leave your jackets etc. <br/><br/>
			All areas are connected via this entry-hall which offers access to all rooms, kitchen, bathroom and separate toilet <br/><br/>
			The bathroom consists of a shower and has sufficient room to store all necessary toilet requirements.
			</p>
		
		</div>

		<div class="col-md-3">
			<div class="sidebar">	
				<div class="interactive-map">
					<div class="balcony1"></div>
					<div class="hov room3"><p>Room 3</p><a href="paulus-buijsstraat-room3.php"></a></div>
					<div class="hov room4"><p>Room 4</p><a href="paulus-buijsstraat-room4.php"></a></div>
					<div class="inham"></div>
					<div class="hov room2"><p>Room 2</p><a href="paulus-buijsstraat-room2.php"></a></div>
					<div class="hov room1"><p>Room 1</p><a href="paulus-buijsstraat-room1.php"></a></div>
					<div class="hov hall active"><p>Hall</p><a href="paulus-buijsstraat-other.php"></a></div>
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
				<br />
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
					    <img src="images/paulusbuys/other_2.jpg" alt="...">
				    	<div class="carousel-caption">
				        Hallway
				      	</div>
				    </div>
				    <div class="item">
					    <img src="images/paulusbuys/other_1.jpg" alt="...">
				    	<div class="carousel-caption">
				        Bathroom				
				    	</div>
				    </div>
				    <div class="item">
					    <img src="images/paulusbuys/other_3.jpg" alt="...">
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