<?php

if(!isset($_SESSION['IDKorisnika'])){ 

echo <<< EOT
	<nav>
        <ul>
            <li>
				<a href="../../Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="KategorijaFinansije.html">Finansije</a></li>
					<li><a href="KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li><a href="KategorijaDomaca.html">Domaca</a></li>
					<li><a href="KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="KategorijaSoftver.html">Softver</a></li>
					<li><a href="KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="KategorijaKosarka.html">Ko�arka</a></li>
					<li><a href="KategorijaTenis.html">Tenis</a></li>
					<li><a href="KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="KategorijaFilm.html">Film</a></li>
					<li><a href="KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="KategorijaPozoriste.html">Pozori�te</a></li>
				</ul>        
            </li>
            <li>
            	<a href='../UlogujSe.html'>Uloguj se</a></li>
            </li>
			<li><a href="../Kontakt.html">Kontakt</a></li>			
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
				<a href="../../Naslovna.html">Naslovna</a>
			</li>
            <li>
				<a href="KategorijaEkonomija.html">Ekonomija</a>
				<ul>
					<li><a href="KategorijaPrivreda.html">Privreda</a></li>
					<li><a href="KategorijaFinansije.html">Finansije</a></li>
					<li><a href="KategorijaBiznis.html">Biznis</a></li>
				</ul>
			</li>
			<li>
				<a href="KategorijaPolitika.html">Politika</a>            
				<ul>
					<li><a href="KategorijaDomaca.html">Domaca</a></li>
					<li><a href="KategorijaRegionalna.html">Regionalna</a></li>
					<li><a href="KategorijaSvet.html">Svet</a></li>
				</ul>        
            </li>
			<li>
				<a href="KategorijaTehnologija.html">Tehnologije</a>            
				<ul>
					<li><a href="KategorijaSoftver.html">Softver</a></li>
					<li><a href="KategorijaKomunikacije.html">Komunikacije</a></li>
					<li><a href="KategorijaEnergetika.html">Energetika</a></li>
				</ul>        
            </li>
			<li>
				<a href="KategorijaSport.html">Sport</a>            
				<ul>
					<li><a href="KategorijaFudbal.html">Fudbal</a></li>
					<li><a href="KategorijaKosarka.html">Ko�arka</a></li>
					<li><a href="KategorijaTenis.html">Tenis</a></li>
					<li><a href="KategorijaAtletika.html">Atletika</a></li>
				</ul>        
            </li>
			<li>
				<a href="KategorijaKultura.html">Kultura</a>            
				<ul>
					<li><a href="KategorijaFilm.html">Film</a></li>
					<li><a href="KategorijaSlikarstvo.html">Slikarstvo</a></li>				
					<li><a href="KategorijaPozoriste.html">Pozori�te</a></li>
				</ul>        
            </li>
            <li>
            	<a href="#">Aktivnosti</a>            
				<ul>
					<li><a href="../UnesiVest.html">Unesi vest</a></li>
					<li><a href="../UnesiVest.html">A�uriraj vest</a></li>
					<li><a href="../IzborNaslovne.html">Izbor naslovne</a></li>
				</ul>
            </li>
			<li><a href="../../php/IzlogujSe.php">Izloguj se</a></li>
			<li><a href="../Kontakt.html">Kontakt</a></li>			
        </ul>
    </nav>
EOT;
	
}


?>
