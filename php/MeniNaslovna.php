<?php
session_start();
if($_SESSION["user"] != NULL){

echo <<< EOT
	<nav>
        <ul>
            <li>
				<a href="Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="pages/pages/news/economy/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="pages/pages/news/privreda/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="pages/pages/news/finansije/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="pages/news/biznis/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<a href="pages/news/politika/KategorijaPolitika.html">Politika</a>            
				<ul>
					<li><a href="pages/news/domaca/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="pages/news/regionalna/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="pages/news/svet/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/tehnologija/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="pages/news/softver/KategorijaSoftver.html">Softver</a></li>
					<li><a href="pages/news/komunikacije/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="pages/news/energetika/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/sport/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="pages/news/fudbal/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="pages/news/kosarka/KategorijaKosarka.html">Košarka</a></li>
					<li><a href="pages/news/tenis/KategorijaTenis.html">Tenis</a></li>
					<li><a href="pages/news/atletika/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/kultura/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="pages/news/film/KategorijaFilm.html">Film</a></li>
					<li><a href="pages/news/slikarstvo/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="pages/news/pozoriste/KategorijaPozoriste.html">Pozorište</a></li>
				</ul>        
            </li>
		    <li>
				<a href="#">Ažuriranje</a>            
				<ul>
					<li><a href="pages/AžurirajVest.html">Ažuriraj vest</a></li>
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
				<a href="pages/pages/news/economy/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="pages/pages/news/privreda/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="pages/pages/news/finansije/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="pages/news/biznis/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<a href="pages/news/politika/KategorijaPolitika.html">Politika</a>            
				<ul>
					<li><a href="pages/news/domaca/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="pages/news/regionalna/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="pages/news/svet/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/tehnologija/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="pages/news/softver/KategorijaSoftver.html">Softver</a></li>
					<li><a href="pages/news/komunikacije/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="pages/news/energetika/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/sport/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="pages/news/fudbal/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="pages/news/kosarka/KategorijaKosarka.html">Košarka</a></li>
					<li><a href="pages/news/tenis/KategorijaTenis.html">Tenis</a></li>
					<li><a href="pages/news/atletika/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="pages/news/kultura/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="pages/news/film/KategorijaFilm.html">Film</a></li>
					<li><a href="pages/news/slikarstvo/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="pages/news/pozoriste/KategorijaPozoriste.html">Pozorište</a></li>
				</ul>        
            </li>
			<li><a href='pages/UlogujSe.html'>Uloguj se</a></li>   
			<li><a href="pages/Kontakt.html">Kontakt</a></li>			
        </ul>
    </nav>
EOT;




				}
 
?>
	