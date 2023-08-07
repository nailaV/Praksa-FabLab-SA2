<div class="odjavaPrijava">
  <div class="userInfoWrapper">
    <div id="UserInfo" style="display:none">Prijavljeni ste!</div>
    <div id="UserInfoOdjava">Prijavite se za dodatne opcije</div>
  </div>
  <button type="button" id="prijavaDugme" onclick="Prijava()">Prijavi se</button>
  <button type="button" id="odjavaDugme" onclick="Odjava()" style="display:none">Odjavi se</button>
</div>

<form id ="editForma" style="display:none;position:fixed;top:0;left:0;width:100%;height:93%;
                background-color:rgba(0,0,0,0.5);">
  
</form>
<div id="overlay2" style="display:none;"></div>

<form id="formaSignIn" style="display:none;position:fixed;top:150;left:0;width:100%;height:50%;
                background-color:rgba(0,0,0,0.5);">
            <div class="footer">
            <h1 id ="naslov"> Prijavi se <span class="close-button" onclick="Zatvori()">X</span> </h1>
          </div>
          <div class="form-group">
              <label for="username1">Korisničko ime</label>
              <input type="text" class="form-control" id="username1" placeholder="Vaše korisničko ime/mail">
            </div>
            <div class="form-group">
              <label for="password1">Lozinka</label>
              <input type="password" class="form-control" id="password1" placeholder="Vaša lozinka">
            </div>
            <div class="dugmici">
            <button type="button" id="signInDugme" class="btn btn-outline-success" onclick="SignInn()">Prijavi se</button>
            </div>
          </form>
<div id="overlay" style="display:none;"></div>



<form id="forma" style="display:none;position:fixed;top:0;left:0;width:100%;height:93%;
                background-color:rgba(0,0,0,0.5);">
            <div class="footer">
            <h1 id ="naslov"> Unesite informacije o članu tima <span class="close-button" onclick="CloseModal()">X</span> </h1>
          </div>
          <div class="row">
              <div class="col">
                <label>Ime </label>
                <input type="text" class="form-control" placeholder="Ime" id="firstName">
              </div>
              <div class="col">
              <label>Prezime</label>
                <input type="text" class="form-control" placeholder="Prezime" id="lastName">
              </div>
            </div>
            <div class="form-group">
            <label for="title">Pozicija</label>
                <select id="title" name="title" class="form-control">
                    <option value="CEO">CEO</option>
                    <option value="Menadžer">Menadžer</option>
                    <option value="Praktikant">Praktikant</option>
                </select>
            </div>
            <div class="form-group">
            <label for="imageUpload">Priložite sliku</label>
            <input type="file" class="form-control-file" id="fileUpload" accept="image/jpeg,image/png,image/gif" placeholder="JPEG, PNG, GIF">
            </div>
            <div class="image"></div>

            <div class="form-group">
              <label for="qoute">Citat</label>
              <textarea class="form-control" id="qoute" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" placeholder="ime(.prezime)@fablab.ba" id="email">
            </div>
            <div class="form-group">
            <label for="hyperlink">Linkedin</label>
            <input id="hyperlink-input" type="url" name="hyperlink" class="form-control" placeholder="https://www.linkedin.com/in/ime-prezime-brojevi">
            </div>
            <div class="dugmici">
            <button type="button" class="btn btn-outline-success" onclick="AddTeamMember()">Postavi</button> &nbsp; &nbsp; &nbsp;
            <button type="button" class="btn btn-outline-danger" onclick="CloseModal()">Zatvori</button>
            </div>
          </form>


          <div id="overlay" style="display:none;"></div>

         
      

<div class="w3-main" style="margin-left:15%;margin-right:15%;box-sizing: border-box !important;">
    <div class="w3-container" id="people" style="margin-top:5%;">
        <h1 class="w3-xxxlarge w3-text-orange centerTitle">Postanite član tima</h1>
        <hr style="width:80%;border:3px solid #F98329;margin: auto;" class="w3-round">
    </div>
    <div class="edit">
        <p>Postati član tima ili volonter FabLab BiH je iskustvo koje vam mijenja život.</p>
        <p style="text-align:center !important">Vi ste naš najvrijedniji resurs.</p>
        <p>Omogućavate nam da pomognemo mnogima i možete napraviti značajnu razliku u životu drugih. Zahvaljujući vama,
            osigurat će se podrška za mnoge, koji inače ne bi dobili pomoć.</p>
    </div>
    <div class="linijaC">
<p id="PCEO"> CEO </p>
<hr>
<div class="CEO">
</div>
</div>

<div class="linijaM">
<p id="PMANAGER"> MENADŽER </p>
<hr>
<div class="Manager">
</div>
</div>



<div class="linijaI">
<p id="PINTERN"> PRAKTIKANT </p>
<hr>
<div class="Intern">
</div>
</div>
    <button id="dugmic" onclick="OpenModal()" style="display:none">Dodajte člana tima</button>
    <div class="vlntContainerTeam">
        <div class="cardTeam bck">
            <div class="cardTeam-header">
                <a href="?page=pages/bhs/expert" target="_blank"> <img src="../../slike/Expert team member_.jpg" />
                </a>
            </div>
            <div class="cardTeam-body">
                <h2 class="marginAuto">
                    Ekspert </h2>

                <span class="tag tag-teal"><a href="?page=pages/bhs/ekspert" target="_blank">Detaljnije</a></span>
            </div>
        </div>

        <div class="cardTeam bck">
            <div class="cardTeam-header">
                <a href="?page=pages/bhs/ekspert" target="_blank"> <img src="../../slike/Mechanical or education.jpg" />
                </a>
            </div>
            <div class="cardTeam-body">
                <h2 class="marginAuto"> Educator </h2>
                <span class="tag tag-teal"><a href="?page=pages/bhs/ekspert" target="_blank">Detaljnije</a></span>
            </div>
        </div>

        <div class="cardTeam">
            <div class="cardTeam-header">
                <a href="?page=pages/bhs/staziranje" target="_blank"> <img
                        src="../../slike/educator or intership.png" />
                </a>
            </div>
            <div class="cardTeam-body">
                <h2 class="marginAuto">
                    Stažiranje </h2>
                <span class="tag tag-teal"><a href="?page=pages/bhs/staziranje" target="_blank">Detaljnije</a></span>
            </div>
        </div>

        <div class="cardTeam">
            <div class="cardTeam-header">
                <a href="?page=pages/bhs/volontiranje" target="_blank"> <img src="../../slike/volonter.png" />
                </a>
            </div>
            <div class="cardTeam-body">
                <h2 class="marginAuto"> Volontiranje </h2>
                <span class="tag tag-teal"><a href="?page=pages/bhs/volontiranje" target="_blank">Detaljnije</a></span>
            </div>
        </div>

    </div>

    <div class="w3-container" id="people" style="margin-top:5%">
        <h1 class="w3-xxxlarge w3-text-orange centerTitle">Tim</h1>
        <hr style="width:80%;border:3px solid #F98329;margin: auto;" class="w3-round">
    </div>
    <div class="edit">
        <p>Mi smo grupa entuzijasta sa različitim stručnim kvalifikacijama i bogatim profesionalnim iskustvom. Posvećeni
            smo FabLabu i uvijek tražimo izuzetne inspirativne članove tima i saradnike:</p>
    </div>


    <!-- content -->
    <div class="flexTeam">
        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Edin Škaljić <br> <small>Osnivač i izvršni direktor</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/edin.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Istinski vjeruje u FabLab.</p>
            </div>
            <p class="mailAlignment"> edin<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://www.linkedin.com/in/skaljic/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt="">
                </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Emir Karamehmedović<br> <small>E-Lab menadžer</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/emir.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Čini čuda s laserima, lećama i elektronikom.</p>
            </div>
            <p class="mailAlignment"> emir<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://www.linkedin.com/in/emir-karamehmedovic-66434718/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Mirza Suljagić<br> <small>BioLab menadžer</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/mirza.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Ima tu ludu ideju da može printati žive ćelije i tkiva.</p>

            </div>
            <p class="mailAlignment"> mirza.suljagic<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://www.linkedin.com/in/mirza-suljagic-b9045035/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Anida Cmanjčanin<br> <small>Menadžerica</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/anida.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Povezuje stvari i stvara kontekst boljeg svijeta koji inspiriše i radi za sve.</p>
            </div>
            <p class="mailAlignment"> anida<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://ba.linkedin.com/in/anida-cmanjcanin-a4432962" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div>
            </a>
        </div>
        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Ahmed Mujkanović<br> <small>Lab menadžer</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/ahmed.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Brine o tome da naša laboratorija radi kao švicarski sat.</p>
            </div>
            <p class="mailAlignment">ahmed<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://www.linkedin.com/company/fablab-bosnia?trk=public_profile_experience-item_profile-section-card_subtitle-click"
                target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">
                    Enes Bosnić <br> <small>IT podrška</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/enes.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Vodi računa o našoj IT infrastrukturi.</p>
            </div>
            <p class="mailAlignment">enes<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://n00bs.fablab.ba//">
                <div class="w3-button w3-block liBg">alias: n00b </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Ajna Smajić<br> <small>Zastupnica za patente</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/ajna.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Gradi mostove između inovacija i zakona.</p>
            </div>
            <p class="mailAlignment">ajna<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://www.linkedin.com/in/ajna-smaji&#263;/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Mirza Behlulović<br> <small>Pravnik</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/behlulovic.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Uvijek na svijetloj strani zakona.</p>
            </div>
            <p class="mailAlignment">mirza<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/mirza-behlulovic-ba949429/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Amina Delimustafić<br> <small>Koordinatorica projekata</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/amina.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Čini da administracija i papirologija izgledaju super zabavno i jednostavno.</p>
            </div>
            <p class="mailAlignment">amina<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://www.linkedin.com/in/amina-purivatra-delimustafic-b7908b35" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Edin Behlulović<br> <small>Zastupnik za patente</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/edinb.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Vodi Fab-ove kreatore i inovatore.</p>
            </div>
            <p class="mailAlignment">edin.behlulovic<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/edin-behlulovic-946a48113/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Maja Komilija<br> <small>Sudski tumač</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/maja.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Brine o tome da se međusobno razumijemo.</p>
            </div>
            <p class="mailAlignment"> info<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>
            <a href="https://www.linkedin.com/in/maja-komilija-a4b36285/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">
                    Đavid Šehić<br> <small>Ekonomista</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/djavid.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Podržava FabLaber-e uvidom u tržište i proizvode.</p>
            </div>
            <p class="mailAlignment"> info<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/djavid-sehic/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Azra Behlulović<br> <small>Administrativna menadžerica</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/azra.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Završava stvari.</p>
            </div>
            <p class="mailAlignment">azra<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/azra-behlulovic-06243b152/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">
                    Dino Hašimbegović<br> <small>Mašinski inženjer </small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/dino.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Igra se s mehaničkim stvarima i eksperimentiše s daškom kreativnosti.</p>
            </div>
            <p class="mailAlignment">dino.hasimbegovic<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/dino-ha&#353;imbegovi&#263;-141624141/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">
                    Sadžida Kosovac <br> <small>Mašinska inženjerka</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/sadzida.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>3D štampanje (izrada), mehaničke ruke i druge sjajne stvari.</p>
            </div>
            <p class="mailAlignment">sadzida.kosovac<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/sad%C5%BEida-kosovac-72499b147/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">
                    Nermina Memišević<br> <small>Mašinsko učenje</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/nermina.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Razvoj naše web stranice.</p>
            </div>
            <p class="mailAlignment">nermina.memisevic<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/nermina-memisevic-012307132/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div>
            </a>
        </div>
        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Omar Hassan<br> <small>Elektrotehnički inženjer</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/omar.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Igra se s elektroničkim komponentama i usput radi nešto programiranja.</p>
            </div>
            <p class="mailAlignment">omar.hassan<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/in/omar97hassan/" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div>
            </a>
        </div>
        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Aid Tabak<br> <small>Elektrotehnički inženjer</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/Aid.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Nešto o elektronici.</p>
            </div>
            <p class="mailAlignment">aid.tabak<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://ba.linkedin.com/in/aid-tabak-557b65215" target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Salih Imamović<br> <small>Pripravnik – mašinski inženjer</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/salih.png" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Čini sve naše ideje funkcionalnima.</p>
            </div>
            <p class="mailAlignment">salih.imamovic<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/company/fablab-bosnia?trk=public_profile_experience-item_profile-section-card_subtitle-click"
                target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div>
            </a>
        </div>

        <div class="flexInnerTeam lightBg">
            <header>
                <h3 class="NameTitle">Mahmo Deljkić<br> <small>Pripravnik – mašinski inženjer</small></h3>
            </header>
            <div class="flexDivInner">
                <img src="../../slike/mahmo.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
                <p>Misli da je inženjering nešto najbolje što postoji.</p>
            </div>
            <p class="mailAlignment">mahmo.deljkic<img src="../../slike/at.png" width="19" height="19">fablab.ba</p>

            <a href="https://www.linkedin.com/company/fablab-bosnia?trk=public_profile_experience-item_profile-section-card_subtitle-click"
                target="_blank">
                <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div>
            </a>
        </div>


    </div>
    <!-- end of flex3 -->

</div>


<br>

<br>