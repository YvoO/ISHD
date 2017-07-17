<?php define ('TITLE', 'International Student Housing Delft | Apartments');  ?>
<?php 
	$path = 'http://www.ishd.site/';
	$page_id = 'root-1';
	$dir_id = '';
	include("templates/header.php"); 
?>	

 
<div class="container">
    <h1 class="titels">Apartments</h1>
	<div class="row content">


        <div class="col-sm-6 col-md-4">
            
            <a href="paulus-buijsstraat.php" class="no-dec">
                <div class="vak">
                    <img src="images/paulusbuys/other_4.jpg" alt="Paulus Buijsstraat" class="img-responsive" style="width: 100%"/>
                    <h4 class="vaktitle">Paulus Buysstraat</h4>
                    <div class="innervak">
                        <strong>Neighbourhood:</strong> Hof van Delft<br />                    
                        <strong>TU Delft :</strong> 2 bus stops (22 minutes), <br/>10 minutes by bike<br />
                        <strong>Apartment:</strong> 2 large bedroom, 1 medium-sized bedrooms, 1 small bedroom<br />
                        <strong>Share:</strong> kitchen &amp; bathroom
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-4">    
            <a href="vanderlelijstraat.php" class="no-dec">
                <div class="vak">
                    <img src="images/lelijstraat/kitchen_1.jpg" alt="van der Lelijstraat" class="img-responsive" style="width: 100%"/>
                    <h4 class="vaktitle">Van der Lelijstraat</h4>
                    <div class="innervak">
                        <strong>Neighbourhood:</strong> Hof van Delft<br />                    
                        <strong>TU Delft :</strong> 1 bus stop (26 minutes), <br/>13 minutes by bike<br />
                        <strong>Apartment:</strong> 2 large bedroom, 1 medium-sized bedrooms, 1 small bedroom<br />
                        <strong>Share:</strong> kitchen &amp; bathroom
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<?php include("templates/footer.html"); ?>	