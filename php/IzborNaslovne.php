<?php

$email = $_POST["email"];
$password = $_POST["password"];
	
$sql = "SELECT * FROM Korisnici WHERE email = '$email' AND sifra = '$password'";
	
$servername = "localhost";
$username = "ognjen@gmail.com";
$dbPassword = "123";
$defaultDatabase = "portalvesti";
	
// Create connection
$conn = new mysqli($servername, $username, $dbPassword, $defaultDatabase);
	
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);		
}
	
if(!$result = $conn->query($sql)){
	die($conn->connect_error);
}
		
if ($row = $result->fetch_assoc()){

    echo '<table id="bottomTable">';

    $postavka = $row["PostavkaNaslovneStrane"];

    $nizCelija = explode(";", $postavka);

    echo '<tr>';

    echo '</table>';

}
else{
    echo '<table id="bottomTable">
		<tr>
			<td class="bottomTableTd">
				<p id="blockTitle">
					<h4 style="text-align: center; padding-top: 10px; ">
						<a href="pages/news/economy/KategorijaEkonomija.html">Ekonomija</a>
					</h4>
				</p>
				
				<img src="images/economy/evro_sutra_12380.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/economy/KrahBerze.html">Krah berze u Budimpešti</a>
						</li>
						<li>
							<a href="pages/news/economy/SaradnjaSaKinom.html">ISTRAŽUJEMO Koliko je saradnja sa Kinom isplativa</a>
						</li>
						<li>
							<a href="pages/news/economy/AleksicKupujeJUMBES.html"> ALEKSIĆ KUPUJE JUBMES? Još jedna banka na srpskom tržištu na prodaju </a>
						</li>
						<li>
							<a href="pages/news/economy/BrijatnijaNezavisnost.html">Britanija krenula putem NEZAVISNOSTI! Šta će se dogoditi sa funtom? </a>
						</li>
						<li>
							<a href="pages/news/economy/Dinar_stagnira.html">Dinar stagnira, kurs 123,8112 </a>
						</li>
						<li>
							<a href="pages/news/economy/EvroSutra12382.html">Evro sutra 123,82 dinar </a>
						</li>
						<li>
							<a href="pages/news/economy/GosaProdatKiparskojFirmi.html">"Goša" iz Smederevske Palanke prodata kiparskoj firmi</a>
						</li>
						<li>
							<a href="pages/news/economy/KoverteUzmiRacun.html">Evo šta će biti sa više od 8,5 miliona koverti iz nagradne igre "Uzmi račun i pobedi" </a>
						</li>
						<li>
							<a href="pages/news/economy/NajvaznijeStoDaljeOdPOlitike.html">NAJVAŽNIJE: ŠTO DALJE OD POLITIKE</a>
						</li>
						<li>
							<a href="pages/news/economy/NedostatakVlage.html"> Nedostatak vlage ugrožava prinose pšenice u Srbiji </a>
						</li>
						<li>
							<a href="pages/news/economy/PKSVodiKompanije.html">PKS vodi 50 kompanija na Sajam privrede u Mostaru </a>
						</li>
						<li>
							<a href="pages/news/economy/PremijerHrvatske.html"> Premijer Hrvatske otvorio Sajam privrede u Mostaru </a>
						</li>
						<li>
							<a href="pages/news/economy/PovecaniUvoziIzvoz.html"> POVEĆANI UVOZ I IZVOZ Suficit sa regionom i SAD, deficit sa Kinom i Rusijom </a>
						</li>
						<li>
							<a href="pages/news/economy/PromenaVlasnika.html">Promena vlasnika "Goše" iznenađenje i za Vulina </a>
						</li>
						<li>
							<a href="pages/news/economy/RastPrometa.html"> Rast prometa u Srbiji u februaru, pad idustrijske proizvodnje</a>
						</li>
						<li>
							<a href="pages/news/economy/RazvojPreduzetnistvaMladih.html">	 Razvoj preduzetništva mladih jedno od rešenja za smanjenje nezaposlenosti  </a>
						</li>
						<li>
							<a href="pages/news/economy/Uručeniključevi.html">Uručeni ključevi autmobila FIAT 500L dobitnicima nagradne</a>
						</li>
						<li>
							<a href="pages/news/economy/SlovačkiDIrektorGose.html">Slovački direktor Goše: Više ne možemo da dotiramo Gošu </a>
						</li>
						<li>
							<a href="pages/news/economy/SrbijaIzvoziVodu.html">Srbija izvozi vodu u Kuvajt</a>
						</li>
						<li>
							<a href="pages/news/">		 Svetska banka: Snažni rezultati na srpskom tržištu rada</a>
						</li>
				
					</ul>
				</div>
 
			</td>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/privreda/KategorijaPrivreda.html">Privreda</a>
				</h4>
				
				<img src="images/privreda/nbs.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/privreda/Brcko.html">  Siniša Milić, gradonačelnik Brčkog: „Privreda i nova radna mesta su nam prioritet“</a>
						</li>
						<li>
							<a href="pages/news/privreda/Cadez.html"> Čadež: Jedinstveni komorski sistem za rast srpske privrede</a>
						</li>
						<li>
							<a href="pages/news/privreda/Dodik.html"> Dodik se jedini pita u Srpskoj: HEROJ ili UZURPATOR vlasti</a>
						</li>
						<li>
							<a href="pages/news/economy/Finska.html">  Eh, ta Finska: Problem su im PREVISOKE PLATE</a>
						</li>
						<li>
							<a href="pages/news/privreda/Fiskalizacija.html">ONLAJN FISKALIZACIJA Privrednici će morati da menjaju 180.000 fiskalnih kasa</a>
						</li>
						<li>
							<a href="pages/news/privreda/Goldstin.html">Goldstin: Srbija i Albanija prednjače po rastu u regionu</a>
						</li>
						<li>
							<a href="pages/news/privreda/Grcka.html">Neočekivani pad grčke privrede</a>
						</li>
						<li>
							<a href="pages/news/privreda/Knezevic.html"> Knežević: Nastavićemo da unapređujemo privredni ambijent</a>
						</li>
						<li>
							<a href="pages/news/privreda/Miscevic.html">  Miščević: Privrednici više da koriste fondove EU</a>
						</li>
						<li>
							<a href="pages/news/privreda/NBS.html">  NBS: Bankari očekuju inflaciju od 2,4%, privreda od 2,0%</a>
						</li>
						<li>
							<a href="pages/news/privreda/PKS.html">  PKS: Parlamenti privrednika do 9. juna</a>
						</li>
						<li>
							<a href="pages/news/privreda/Popis.html"> Na popisu zanatlije, taksisti, rudnici: Od početka godine blokirana 3.753 računa poslovnih subjekata</a>
						</li>
						<li>
							<a href="pages/news/privreda/Porez.html">SMANJITE POREZE NA ZARADE 10 ključnih preporuka privrednika VLADI</a>
						</li>
						<li>
							<a href="pages/news/privreda/Privreda.html"> Privreda u RS stenje, a svi bi DRŽAVNI POSAO </a>
						</li>
						<li>
							<a href="pages/news/privreda/Problemi.html">PROBLEMI U PRIVREDI NA SKENERU MINISTRA Knežević: Kinezi idealni za RTB "Bor", oni misle 10 godina unapred</a>
						</li>
						<li>
							<a href="pages/news/privreda/Putin.html">  NEVEROVATAN ISHOD "Putin pre tri godine zabranio uvoz hrane sa Zapada, PRIVREDA OŽIVELA"</a>
						</li>
						<li>
							<a href="pages/news/privreda/Reforme.html"> NASTAVAK REFORMI KAO SVETO PISMO Ovo su najjači utisci učesnika Biznis foruma</a>
						</li>
						<li>
							<a href="pages/news/privreda/Tirana.html"> Tirana i Priština formiraju zajedničku privrednu kancelariju</a>
						</li>
						<li>
							<a href="pages/news/privreda/UcesceSajmovi.html"> Za učešće na sajmovima u svetu država spremila 80 miliona dinara</a>
						</li>
						
					</ul>
				</div>
				
			</td>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/finansije/KategorijaFinansije.html">Finansije</a>
				</h4>
				
				<img src="images/finansije/pesnice.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/finansije/Asocijacija.html">  Asocijacija: Ispravljanje nepravde nanete bivšim štedišama</a>
						</li>
						<li>
							<a href="pages/news/finansije/Budzet.html"> Budžet na kraju 2016. u deficitu 7,9 milijardi dinara, javni dug 25,02 milijarde evra</a>
						</li>
						<li>
							<a href="pages/news/finansije/BudzetVlada.html">  Budžet za 2017. sutra pred Vladom</a>
						</li>
						<li>
							<a href="pages/news/finansije/Global.html"> Global rejtings: Uspešnom fiskalnom konsolidacijom do unapređenja kreditnog rejtinga</a>
						</li>
						<li>
							<a href="pages/news/finansije/Izmene.html">   Od 1. aprila IZMENE Zakona o PDV, ovo su tri najvažnije</a>
						</li>
						<li>
							<a href="pages/news/finansije/Izvoznici.html">   Najveći IZVOZNICI Fijat, Hestil i Tigar, javni dug 24,71 milijarde evra</a>
						</li>
						<li>
							<a href="pages/news/finansije/JavniDug.html">   Javni dug Srbije u januaru 69,1 odsto BDP ili 24,5 milijarde evra</a>
						</li>
						<li>
							<a href="pages/news/finansije/Jedan.html"> Jedan "nebitan" detalj može da vas KOŠTA STANA u nagradnoj igri</a>
						</li>
						<li>
							<a href="pages/news/finansije/Ministarstvo.html">  Ministarstvo finansija pozvalo STARE ŠTEDIŠE banaka u Srbiji da prijave potraživanja</a>
						</li>
						<li>
							<a href="pages/news/finansije/Neocekivano.html">  NEOČEKIVANI RASPLET Paket sa eksplozivom pronađen u Ministarstvu finansija Nemačke poslat je IZ GRČKE</a>
						</li>
						<li>
							<a href="pages/news/finansije/Netfliks.html"> NETFLIKS, FEJSBUK OGLAŠAVANJE, IGRICE, ONLAJN KURSEVI... Digitalne usluge iz inostranstva biće 20 odsto SKUPLJE</a>
						</li>
						<li>
							<a href="pages/news/finansije/Pausal.html">  POČELA DA STIŽU REŠENJA O PAUŠALU: Preduzetnici za sada plaćaju porez po staroj uredbi</a>
						</li>
						<li>
							<a href="pages/news/finansije/Penzioneri.html"> DOBRA VEST ZA PENZIONERE Sutra počinje isplata 5.000 dinara</a>
						</li>
						<li>
							<a href="pages/news/finansije/Pesnice.html">   SEVALE PESNICE Potukle se službenice Ministarstva finansija</a>
						</li>
						<li>
							<a href="pages/news/finansije/PoreskaUprava.html"> Ministarstvo finansija drugostepeni organ za žalbe na rešenja Poreske uprave</a>
						</li>
						<li>
							<a href="pages/news/finansije/Povratak.html">  POVRATAK BIVŠEG POTPREDSEDNIKA VLADE Labus češlja Vujovićevo ministarstvo</a>
						</li>
						<li>
							<a href="#"> Suficit budžeta od 27,2 milijardi dinara</a>
						</li>
						<li>
							<a href="pages/news/finansije/Tramp.html">TRAMPOV RAT Amerika uvela nove sankcije Iranu!</a>
						</li>
						<li>
							<a href="pages/news/finansije/TriMeseca.html"> U prva tri meseca suficit u budžetu sedam milijardi dinara</a>
						</li>
						<li>
							<a href="pages/news/finansije/Vujovic.html">   Vujović u Londonu razgovarao o većoj pomoći EBRD Srbija</a>
						</li>
						
					</ul>
				</div>
				
			</td>
		</tr>
		<tr>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/politika/KategorijaPolitika.html">Politika</a>
				</h4>
				
				<img src="images/politika/krah.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/politika/Albanija.html">Albanija je danas upozorila na "pokušaje da se politička kriza pretvori u međunacionalnu" u susednoj Makedoniji.</a>
						</li>
						<li>
							<a href="pages/news/politika/Cepurin.html">  Čepurin: Vučić dobio mandat da nastavi svoju politiku</a>
						</li>
						<li>
							<a href="pages/news/politika/Eskobar.html"> AMBICIOZNI POPAJ Eskobarov ubica hoće u politiku</a>
						</li>
						<li>
							<a href="pages/news/politika/Gvozdena.html">  "GVOZDENE ŽENE" Zbog njih Putin vlada ČVRSTOM RUKOM</a>
						</li>
						<li>
							<a href="pages/news/politika/Istoricarka.html"> Istoričarka Dubravka Stojanović: Srbija se nije odrekla Miloševićeve politike</a>
						</li>
						<li>
							<a href="pages/news/politika/Istrazujemo.html"> ISTRAŽUJEMO Da li na Balkanu ekonomija može da pobedi nacionalizam</a>
						</li>
						<li>
							<a href="pages/news/politika/Krah.html">  KRAH PUTINOVIH SLEDBENIKA U EU Nakon Holandije, i Bugarska rekla NJET, Evropa uzvraća udarac</a>
						</li>
						<li>
							<a href="pages/news/politika/Lepe.html">  Lepe, obrazovane, uspešne: Sve više žena i devojaka iz BiH ULAZI U POLITIKU, a evo ko su one</a>
						</li>
						<li>
							<a href="pages/news/politika/NovaStranka.html">   Nova stranka na političkom nebu BiH: Izvornu Srpsku formirao Vitomir Popović</a>
						</li>
						<li>
							<a href="pages/news/politika/Posledice.html"> Posledice lošeg vođenja politike lidera SDA: S Bakirom Izetbegovićem niko u BiH NE ŽELI DA RAZGOVARA</a>
						</li>
						<li>
							<a href="pages/news/politika/Tramp.html">TRAMPOV VLADAR IZ SENKE Ko su ljudi koji vuku konce američke politike </a>
						</li>
					</ul>
				</div>
				
			</td>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/kultura/KategorijaKultura.html">Kultura</a>
				</h4>
				
				<img src="images/kultura/jedna.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/kultura/Festival.html">  Festival igre: SVE RASPRODATO do kraja!</a>
						</li>
						<li>
							<a href="pages/news/kultura/Gorcin.html">  Gorčin Stojanović: Kad bi Beograd imao...</a>
						</li>
						<li>
							<a href="pages/news/kultura/Hana.html">Hana Selimović dobila nagradu i posvetila je studentima koji protestuju</a>
						</li>
						<li>
							<a href="pages/news/kultura/Jedna.html">Jedna od najboljih predstava sezone večeras u Beogradu: Stanje šoka na sceni Sava centra </a>
						</li>
						<li>
							<a href="pages/news/kultura/Kolarac.html">  Kolarac potpisao ugovor sa Ministarstvom kulture o sufinansiranju dela troškova</a>
						</li>
						<li>
							<a href="pages/news/kultura/Od.html">Od Čerčila do Trampa RUŽNA STRANA POLITIKE na karikaturama </a>
						</li>
						<li>
							<a href="pages/news/kultura/Penzioneri.html"> "STAZAMA BEZIMENIH" Izložba fotografija kolektiva Kamerades u Beogradu</a>
						</li>
						<li>
							<a href="pages/news/kultura/Prvi.html">"Prvi put mogu da gledam suprugu u oči kada uveče ostanemo sami"</a>
						</li>
						<li>
							<a href="pages/news/kultura/Smoki.html">  Smoki, idemo dalje</a>
						</li>
						<li>
							<a href="pages/news/kultura/Suze.html">SUZE NA KONCERTU U FILHARMONIJI Mirjana Nešković oživela skoro zaboravljeno delo Petra Stojanovića </a>
						</li>
					</ul>
				</div>
				
			</td>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/tehnologija/KategorijaTehnologija.html">Tehnologije</a>
				</h4>
				
				<img src="images/tehnologija/mark.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/tehnologija/Arktik.html">  "OD ARKTIKA DO SAHARE" Ruska vojska se oprema moćnim ROBOTIMA-UBICAMA</a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Buducnost.html"> BUDUĆNOST JE STIGLA Ruski inženjeri napravili leteći motocikl</a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Jezivi.html">Tehnologija toliko napreduje da uskoro nećemo moći da razlikujemo robote od ljudi.</a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Mark.html">  Mark Zakerberg je prvi put u životu izašao pred SUD, a sa njim i velike TAJNE FEJSBUKA</a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Naivno.html">  Naivno?</a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Ostvarenje.html">  OSTVARENJE SNA Fejsbuk radi na razvoju tehnologije za TELEPATIJU </a>
						</li>
						<li>
							<a href="pages/news/tehnologija/San.html">   U San Francisku je otvorio crkvu za hakere i osnivače startapa - i naravno da je RUS</a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Sibir.html"> SIBIRSKO ČUDOVIŠTE Pogledajte novo rusko supervozilo za sve terene </a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Suhoj.html">Otkud ruski "suhoji" na nebu iznad NEVADE? </a>
						</li>
						<li>
							<a href="pages/news/tehnologija/Zamrzavanje.html"> Zamrzavanje organa - SPAS za medicinu </a>
						</li>
					</ul>
				</div>
				
			</td>
		</tr>
		<tr>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/sport/KategorijaSport.html">Sport</a>
				</h4>
				
				<img src="images/sport/najbrzi.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/sport/Amerika.html"> Amerikanci ne odustaju od polufinala Dejvis kupa, smanjili prednost Australije </a>
						</li>
						<li>
							<a href="pages/news/sport/Busta.html">Karenjo Busta: Ovo je Viktorov najbolji meč ove sezone </a>
						</li>
						<li>
							<a href="pages/news/sport/Kralj.html">KRALJ KVALIFIKACIJA Hamiltonu pol-pozicija u Kini, rekordi Sene i Šumahera sve dostižniji </a>
						</li>
						<li>
							<a href="pages/news/sport/Maestralno.html"> MAESTRALNO Troicki preslišao Bustu i doveo Srbiju na korak od pobede! </a>
						</li>
						<li>
							<a href="pages/news/sport/Najbrzi.html">Najbrži cirkus na svetu napušta Maleziju posle "punoletstva"</a>
						</li>
						<li>
							<a href="pages/news/sport/Nisu.html">  NISU DOVOLJNO BRZI Hamilton: Mercedes mora da se popravi, ako želi da pobedi Ferari u Kini </a>
						</li>
						<li>
							<a href="pages/news/sport/Srbija.html">SRBIJA VODI Nole ekspresno poveo tim ka polufinalu Dejvis kupa! </a>
						</li>
						<li>
							<a href="pages/news/sport/Stadion.html"> STADION USRED TVRĐAVE Smederevo dobija neobičan sportski objekat u čast kraljice sportova</a>
						</li>
						<li>
							<a href="pages/news/sport/Uspeh.html">NEMA USPEHA BEZ NAŠIH Stefan Mitrović, Ćuk i Avramović osvojili vaterpolo Evrokup</a>
						</li>
						<li>
							<a href="pages/news/sport/Vamos.html"> VAMOS TENIS Španci trenirali tri sata pred meč sa Srbijom, a Nole vežbao na parkingu! /VIDEO/ </a>
						</li>
					</ul>
				</div>
				
			</td>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/fudbal/KategorijaFudbal.html">Fudbal</a>
				</h4>
				
				<img src="images/economy/muslin.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/fudbal/Bundesliga.html"> BUNDESLIGA Strelac Gaćinović čuva Ajntraht!</a>
						</li>
						<li>
							<a href="pages/news/fudbal/Iskorak.html">ISKORAK KA LIGI ŠAMPIONA Viljareal "torpedovao" Bilbao </a>
						</li>
						<li>
							<a href="pages/news/fudbal/Kockice.html"> KOCKICE SU SE SLOŽILE Ivan Obradović za Blicsport: Muslin ima odlične ideje, konačno je došao selektor sa autoritetom </a>
						</li>
						<li>
							<a href="pages/news/fudbal/Legende.html">  "LEGENDE MARAKANE" On je dao prvi gol na stadionu Zvezde!</a>
						</li>
						<li>
							<a href="pages/news/fudbal/Partizan.html"> PARTIZANOVA UZDANICA Marko Janković za Blicsport: Da pobedimo prvo Radnik, pa Zvezdu</a>
						</li>
						<li>
							<a href="pages/news/fudbal/Posebni.html"> "POSEBNI" MU VERUJE Lingard ostaje u Junajtedu do 2021. godine</a>
						</li>
						<li>
							<a href="pages/news/fudbal/Salah.html">"NOVI SALAH" STIŽE U SRBIJU Evo zašto je Egipćanin Anter interesantan Partizanu i Voždovcu</a>
						</li>
						<li>
							<a href="pages/news/fudbal/Skupo.html"> SKUPO PLAĆENE ISTRAGE - FIFA imala gubitak od 369 miliona dolara u 2016. godini</a>
						</li>
						<li>
							<a href="pages/news/fudbal/Titula.html"> TITULA KAO PREPORUKA Rodžers produžio ugovor sa Seltikom do 2021. godine</a>
						</li>
						<li>
							<a href="pages/news/fudbal/Uskrs.html">  USKRŠNJI TURNIR U BARSELONI Sanjamo da budemo kao Mesi</a>
						</li>
					</ul>
				</div>
				
			</td>
			<td class="bottomTableTd">
				<h4 style="text-align: center; padding-top: 10px; ">
					<a href="pages/news/kosarka/KategorijaKosarka.html">Košarka</a>
				</h4>
				
				<img src="images/economy/efesucetvrtfinalu.jpg" class="blockImage" />
				
				<div id="newsBlockParagraph">
					<ul>
						<li>
							<a href="pages/news/kosarka/Biser.html">  BISER MEGE Mušidi zablistao u timu sveta, niko Amerikancima nije dao toliko trojki  
							</a>
						</li>
						<li>
							<a href="pages/news/kosarka/Crveno.html">  CRVENO-BELI IMALI PODRŠKU Zvezda i IDEA nagradili navijače putovanjem u Istanbul</a>
						</li>
						<li>
							<a href="pages/news/kosarka/Evroliga.html">  EVROLIGA Poznati svi parovi četvrtfinala: Žoc protiv “svojih” </a>
						</li>
						<li>
							<a href="pages/news/kosarka/Jokic.html">Jokić je toliko dobro odigrao da je NBA logo promenjen zbog njega </a>
						</li>
						<li>
							<a href="pages/news/kosarka/Najbolja.html">  NAJBOLJA NBA PARTIJA U KARIJERI Noć rekorda Bobana Marjanovića!</a>
						</li>
						<li>
							<a href="pages/news/kosarka/Olimpijakos.html">OLIMPIJAKOS POSRNUO U MOSKVI Fantastični Teo nadigrao crveno-bele za 22. recku!  </a>
						</li>
						<li>
							<a href="pages/news/kosarka/Popust.html"> ZVEZDIN POPUST ZA NAVIJAČE Počinje prodaja karata za finale ABA lige </a>
						</li>
						<li>
							<a href="pages/news/kosarka/Radonjic.html"> Radonjić: Darušafaka zasluženo u Top 8, ponosan sam na sve u Evroligi </a>
						</li>
						<li>
							<a href="pages/news/kosarka/Rekord.html">REKORDERU NE DAJU MIRA Američki reprezentativac prekinuo Bobijev intervju      </a>
						</li>
						<li>
							<a href="pages/news/kosarka/Vestbruk.html"> Vestbruk ušao u istoriju NBA lige, obezbedio sezonu sa tripl-dabl prosekom </a>
						</li>
					</ul>
				</div>
				
			</td>
		</tr>
	</table>';
}



?>