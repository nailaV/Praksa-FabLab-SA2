# Praksa-FabLab-SA2

Na već postojećem kodu za logiku na tabu Projects smo razvili remove button koji se pojavljuje prilokom dodavanja novog projekta. U zavisnosti od statusa korisnika (user, not user) dugme se pojavljuje. Promjene su reflektovane u addProject.js. Dodali smo funkciju RemoveTile() koje prima index te briše tile sa tim indexom u local storage-u.

Na Team tabu, razvili smo skroz novi pristup koji koristi SQL lite bazu podataka. Tu bazu podataka možete naći exportanu u sklopu projekta pod nazivom "teammembers.sql". U bazi se nalazi jedna tabela koja pohranjuje podatke o članovima tima. Skriptu je potrebno pokrenuti unutar razvojnog okruženja. Za autentifikaciju i pristup ovim funkcionalnostima, koristili smo firebase autentifikaciju čiju smo logiku preuzeli iz već gotovog addProject.js fajla. Za učitavanje podataka iz baze i prikaz istih na stranici u obliku kartica, koristi se php skripta unutar koje se izvršava sql query, pojedinačno za svaku od pozicija (CEO, Manager, Intern). U slučaju da nema podataka za određenu poziciju odjeljak za tu poziciju se uopšte ne prikazuje.
U slučaju dodavanja novog člana tima, postoji button "Add team member" koji se jedino prikazuje ako je user logiran. Klikom na taj button otvara se pop-up forma koja sadrži podatke o imenu i prezimenu, poziciji u vidu drop-down liste kako bi se izbjeglo "smeće" u bazi, slika člana (kada se ista dodaje, smješta se u floder slike/team, a u bazi se spašava putanja do te slike) , kratki opis, email te linkedIn link. Također, važno je napomenuti da su u svakom slučaju dodavanja i izmjene podataka, sva polja validirana. Istu validaciju možete pronaći u addTeamMember.js fajlu. Prilikom dodavanja, ukoliko su svi kriteriji validacije zadovoljeni, poziva se php skripta "dodavanjeTeamMembera.php" koja pomoću upita insertuje podatke u bazu. Nakon što je zahtjev prošap, stranica se reload-a te su podaci vidljivi i smješteni u odgovarajuće div-ove.
Svaki od dodanih zapisa se može i obrisati. Za to je potrebno da ste logirani korisnik. Klikom na ikonicu koja se nalazi u gornjem desnom uglu kartice, ID korisnika se šalje php skripti "brisanjeTeamMembera.php" te se zapis briše iz baze i taj član tima više nije vidljiv niti postoji.
U gornjem lijevom uglu kartice se nalazi ikonica u obliku olovke koja asocira na edit. Klikom na tu ikonicu opet se otvara već popunjena pop-up forma sa preuzetim podacima o tom članu, opet preko ID-a uz korištenje skripte "getTeamMembera.php". Neki od podataka ne mogu biti editovani poput slike i pozicije, to bi trebalo da rade useri sa nekim većim privilegijama. Nakon što je forma submit-ana podaci su promijenjeni i u bazi ali i na samoj stranici. Sve to će se izvršiti uz korištenje "updateTeamMembera.php" skripte. 

*Napomena:
Skripta za konekciju na bazu nije vidljiva u samom projektu iz sigurnosnih razloga te je potrebno napraviti svoju. U konekcijskom stringu je potrebno navesti adresu servera (lokalni ili bilo koji drugi), username i password te ime baze. 

<?php
$username= "your_username";
$password="your_password";
$_SERVER="server_ip/localhost";
$dbName="dbName";


$conn=mysqli_connect($_SERVER, $username, $password, $dbName);
?>