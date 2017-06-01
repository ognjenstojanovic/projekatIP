 <html><head><!-- meta ignored --><link rel="stylesheet" type="text/css" href="../../css/site.css"></link><meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon"></head><body>

<div id="wrapper">
	
    <nav>         <ul>             <li> 				<a href=../../../Naslovna.html>Naslovna</a> 			</li>             <li> 				<a href=../../news/economy/KategorijaEkonomija.html>Ekonomija</a> 				<ul> 					<li><a href=../../news/privreda/KategorijaPrivreda.html>Privreda</a></li> 					<li><a href=../../news/finansije/KategorijaFinansije.html>Finansije</a></li> 					<li><a href=../../news/biznis/KategorijaBiznis.html>Biznis</a></li> 				</ul> 			</li> 			<li> 				<a href=../../news/politika/KategorijaPolitika.html>Politika</a>             				<ul> 					<li><a href=../../news/domaca/KategorijaDomaca.html>Domaća</a></li> 					<li><a href=../../news/regionalna/KategorijaRegionalna.html>Regionalna</a></li> 					<li><a href=../../news/svet/KategorijaSvet.html>Svet</a></li> 				</ul>                     </li> 			<li> 				<a href=../../news/tehnologija/KategorijaTehnologija.html>Tehnologije</a>             				<ul> 					<li><a href=../../news/softver/KategorijaSoftver.html>Softver</a></li> 					<li><a href=../../news/komunikacije/KategorijaKomunikacije.html>Komunikacije</a></li> 					<li><a href=../../news/energetika/KategorijaEnergetika.html>Energetika</a></li> 				</ul>                     </li> 			<li> 				<a href=../../news/sport/KategorijaSport.html>Sport</a>             				<ul> 					<li><a href=../../news/fudbal/KategorijaFudbal.html>Fudbal</a></li> 					<li><a href=../../news/kosarka/KategorijaKosarka.html>Košarka</a></li> 					<li><a href=../../news/tenis/KategorijaTenis.html>Tenis</a></li> 					<li><a href=../../news/atletika/KategorijaAtletika.html>Atletika</a></li> 				</ul>                     </li> 			<li> 				<a href=../../news/kultura/KategorijaKultura.html>Kultura</a>             				<ul> 					<li><a href=../../news/film/KategorijaFilm.html>Film</a></li> 					<li><a href=../../news/slikarstvo/KategorijaSlikarstvo.html>Slikarstvo</a></li>				 					<li><a href=../../news/pozoriste/KategorijaPozoriste.html>Pozorište</a></li> 				</ul>                     </li>             <li>             	<a href=#>Ažuriranje</a>             				<ul> 					<li><a href=../../UlogujSe.html>Uloguj se</a></li> 					<li><a href=../../UnesiVest.html>Unesi vest</a></li> 					<li><a href=../../IzborNaslovne.html>Izbor naslovne</a></li> 				</ul>             </li> 			<li><a href=../../Kontakt.html>Kontakt</a></li>			         </ul>     </nav>

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

	    <form id="insertingComment" method="post" action="../../php/InsertComment.php">

	    <div class="comments">
	    	<p style="text-align: left;">Napisi komentar</p>
            <input type="text" name="naslovKomentara" placeholder="Naslov komentara" style="margin-bottom:15px; width: 100%; height: 25px">
	    	<br />
	    	<textarea name="tekstKomentara"  placeholder="Napisite tekst komentara" style="width: 100%; height: 80px" ></textarea>
	    	<button style="margin: 5px" type="submit" name="postavi" >Postavi komentar</button>
	    </div>
	    </form>

	    <div class="comments">
	    	<p style="text-align: left;">Komentari</p>	    	
	    </div>

	       <?php 		
				include '../../php/Komentari.php';
			?>
		
	</div>

		
	
	

	 
	
</div>

</body></html>