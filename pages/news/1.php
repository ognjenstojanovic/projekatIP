 <html><head><!-- meta ignored --><link rel="stylesheet" type="text/css" href="../../css/site.css"></link><meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon"></head><body>

<div id="wrapper">
	
    <?php 
		include '../../php/MeniZaVesti.php';
	?>

    <div id="newsDiv">

	    <p id="date">01.06.2017.</p>

	    <h1 id="newsTitle">
	    	 Vlado ovo je test vest
	    </h1>

	    <img src="{link}">

	    <br />
		
		<p>
			Grčka statistička služba saopštila je da je privreda u poslednja tri meseca prošle godine pala za 0,4 odsto, posle rasta u prethodnom tromesečju od 0,9 odsto, naveo je Blumberg (Bloomberg), dodajući da se očekivao rast od 0,4 odsto.
		</p>
	    
	    <?php 
	    	include '../../php/LikeHate.php';
	    ?>

	    <?php

		if(isset($_SESSION["IDKorisnika"]))
		{		 
			include '../../php/FormaZaKomentare.php';
		}

		?>

	    <div class="comments">
	    	<p style="text-align: left;">Komentari</p>	    	
	    </div>

	       <?php 		
				include '../../php/Komentari.php';
			?>
		
	</div>

		
	<script src="../../js/Cookies.js"></script>
	

	 
	
</div>

</body></html>