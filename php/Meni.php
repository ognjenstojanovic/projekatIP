<?php

session_start();
if(!isset($_SESSION['IDKorisnika'])){ 

echo <<< EOT
	<nav>
        <ul>
            <li>
				<a href="../Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="news/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="news/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="news/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="news/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li><a href="news/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="news/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="news/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="news/KategorijaSoftver.html">Softver</a></li>
					<li><a href="news/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="news/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="news/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="news/KategorijaKosarka.html">Ko�arka</a></li>
					<li><a href="news/KategorijaTenis.html">Tenis</a></li>
					<li><a href="news/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="news/KategorijaFilm.html">Film</a></li>
					<li><a href="news/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="news/KategorijaPozoriste.html">Pozori�te</a></li>
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
				<a href="news/KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="news/KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="news/KategorijaFinansije.html">Finansije</a></li>
					<li><a href="news/KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li><a href="news/KategorijaDomaca.html">Domaca</a></li>
					<li><a href="news/KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="news/KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="news/KategorijaSoftver.html">Softver</a></li>
					<li><a href="news/KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="news/KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="news/KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="news/KategorijaKosarka.html">Ko�arka</a></li>
					<li><a href="news/KategorijaTenis.html">Tenis</a></li>
					<li><a href="news/KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="news/KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="news/KategorijaFilm.html">Film</a></li>
					<li><a href="news/KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="news/KategorijaPozoriste.html">Pozori�te</a></li>
				</ul>        
            </li>
            <li>
            	<a href="#">Aktivnosti</a>            
				<ul>
					<li><a href="UnesiVest.html">Unesi vest</a></li>
					<li><a href="Azuriranje.html">A�uriraj vest</a></li>
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
