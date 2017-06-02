<?php
session_start();
if($_SESSION["IDKorisnika"] != NULL){

echo <<< EOT
	<nav>
        <ul>
            <li>
				<a href="Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="pages/news/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="pages/news/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="pages/news/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="pages/news/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<a href="pages/news/KategorijaPolitika.html">Politika</a>            
				<ul>
					<li><a href="pages/news/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="pages/news/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="pages/news/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="pages/news/KategorijaSoftver.html">Softver</a></li>
					<li><a href="pages/news/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="pages/news/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="pages/news/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="pages/news/KategorijaKosarka.html">Ko�arka</a></li>
					<li><a href="pages/news/KategorijaTenis.html">Tenis</a></li>
					<li><a href="pages/news/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="pages/news/KategorijaFilm.html">Film</a></li>
					<li><a href="pages/news/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="pages/news/KategorijaPozoriste.html">Pozori�te</a></li>
				</ul>        
            </li>
		    <li>
				<a href="#">A�uriranje</a>            
				<ul>
					<li><a href="pages/A�urirajVest.html">A�uriraj vest</a></li>
					<li><a href="pages/UnesiVest.html">Unesi vest</a></li>
					<li><a href="pages/IzborNaslovne.html">Izbor naslovne</a></li>
				</ul>
			</li>
			<li><a href='php/IzlogujSe.php'>Izloguj se</a></li>			       
			<li><a href="pages/Kontakt.html">Kontakt</a></li>			
        </ul>
    </nav>
EOT;
	}else{
				

echo <<< EOT
	<nav>
        <ul>
            <li>
				<a href="Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="pages/news/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="pages/news/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="pages/news/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="pages/news/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<a href="pages/news/KategorijaPolitika.html">Politika</a>            
				<ul>
					<li><a href="pages/news/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="pages/news/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="pages/news/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="pages/news/KategorijaSoftver.html">Softver</a></li>
					<li><a href="pages/news/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="pages/news/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="pages/news/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="pages/news/KategorijaKosarka.html">Ko�arka</a></li>
					<li><a href="pages/news/KategorijaTenis.html">Tenis</a></li>
					<li><a href="pages/news/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="pages/news/KategorijaFilm.html">Film</a></li>
					<li><a href="pages/news/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="pages/news/KategorijaPozoriste.html">Pozori�te</a></li>
				</ul>        
            </li>
			<li><a href='pages/UlogujSe.html'>Uloguj se</a></li>   
			<li><a href="pages/Kontakt.html">Kontakt</a></li>			
        </ul>
    </nav>
EOT;




				}
 
?>
	