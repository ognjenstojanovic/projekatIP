<?php

if(!isset($_SESSION['IDKorisnika'])){ 

echo <<< EOT
	<nav>
        <ul>
            <li>
				<a href="../Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="news/economy/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="news/privreda/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="news/finansije/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="news/biznis/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li><a href="news/domaca/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="news/regionalna/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="news/svet/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/tehnologija/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="news/softver/KategorijaSoftver.html">Softver</a></li>
					<li><a href="news/komunikacije/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="news/energetika/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/sport/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="news/fudbal/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="news/kosarka/KategorijaKosarka.html">Košarka</a></li>
					<li><a href="news/tenis/KategorijaTenis.html">Tenis</a></li>
					<li><a href="news/atletika/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/kultura/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="news/film/KategorijaFilm.html">Film</a></li>
					<li><a href="news/slikarstvo/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="news/pozoriste/KategorijaPozoriste.html">Pozorište</a></li>
				</ul>        
            </li>
            <li>
            	<a href='UlogujSe.html'>Uloguj se</a></li>
            </li>
			<li><a href="Kontakt.html">Kontakt</a></li>			
        </ul>
    </nav>
EOT;


}
else
{						
					
echo <<< EOT
	<nav>
        <ul>
            <li>
				<a href="../Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="news/economy/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="news/privreda/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="news/finansije/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="news/biznis/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<a href="news/politika/KategorijaPolitika.html">Politika</a>            
				<ul>
					<li><a href="news/domaca/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="news/regionalna/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="news/svet/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/tehnologija/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="news/softver/KategorijaSoftver.html">Softver</a></li>
					<li><a href="news/komunikacije/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="news/energetika/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/sport/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="news/fudbal/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="news/kosarka/KategorijaKosarka.html">Košarka</a></li>
					<li><a href="news/tenis/KategorijaTenis.html">Tenis</a></li>
					<li><a href="news/atletika/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/kultura/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="news/film/KategorijaFilm.html">Film</a></li>
					<li><a href="news/slikarstvo/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="news/pozoriste/KategorijaPozoriste.html">Pozorište</a></li>
				</ul>        
            </li>
            <li>
            	<a href="#">Aktivnosti</a>            
				<ul>
					<li><a href="UnesiVest.html">Unesi vest</a></li>
					<li><a href="UnesiVest.html">Ažuriraj vest</a></li>
					<li><a href="IzborNaslovne.html">Izbor naslovne</a></li>
				</ul>
            </li>
			<li><a href="../php/IzlogujSe.php">Izloguj se</a></li>
			<li><a href="Kontakt.html">Kontakt</a></li>			
        </ul>
    </nav>
EOT;
	
}


?>
