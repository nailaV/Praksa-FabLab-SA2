
<div class="odjavaPrijava">
  <div class="userInfoWrapper">
    <div id="UserInfo" style="display:none">You are signed in!</div>
    <div id="UserInfoOdjava">Sign in for additional features!</div>
  </div>
  <button type="button" id="prijavaDugme" onclick="Prijava()">Sign in</button>
  <button type="button" id="odjavaDugme" onclick="Odjava()" style="display:none">Sign out</button>
</div>

<form id ="editForma" style="display:none;position:fixed;top:0;left:0;width:100%;height:93%;
                background-color:rgba(0,0,0,0.5);">
  
</form>
<div id="overlay2" style="display:none;"></div>



<form id="formaSignIn" style="display:none;position:fixed;top:150;left:0;width:100%;height:50%;
                background-color:rgba(0,0,0,0.5);">
            <div class="footer">
            <h1 id ="naslov"> Sign in  <span class="close-button" onclick="Zatvori()">X</span> </h1>
          </div>
          <div class="form-group">
              <label for="username1">Username</label>
              <input type="text" class="form-control" id="username1" placeholder="Your email/username">
            </div>
            <div class="form-group">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" placeholder="Your password">
            </div>
            <div class="dugmici">
            <button type="button" id="signInDugme" class="btn btn-outline-success" onclick="SignInn()">Sign in </button>
            </div>
          </form>
<div id="overlay" style="display:none;"></div>



<div class="w3-main" style="margin-left:15%;margin-right:15%;box-sizing: border-box !important;">
    <div class="w3-container" id="people" style="margin-top:5%;">
        <h1 class="w3-xxxlarge w3-text-orange centerTitle">Become a team member</h1>
        <hr style="width:80%;border:3px solid #F98329;margin: auto;" class="w3-round">
      </div>
      <div class="edit">
          <p>Becoming a team member or volunteer of FabLab BiH is life changing experience.  </p>
          <p style="text-align:center !important">You are our most valuable assets. </p>
  <p>You allow us to help more people and you can make a significant difference in others life. Because of you, many people are helped who would not be otherwise.  </p>
      </div>

    

<?php
include 'konekcija.php';
$sqlQuery = "SELECT * FROM `teammember` WHERE title = 'CEO'";
$result = mysqli_query($conn, $sqlQuery);
?>
<div class="linijaC" <?php if (mysqli_num_rows($result) == 0) echo 'style="display: none;"'; ?> >
  <p id="PCEO"> CEO </p>
  <hr>
  <div class="CEO">
    <?php
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="card">
            <a class="delete-button" href="brisanjeTeamMembera.php?id=<?php echo $row['id'] ?>"> &#x1F5D1;</a>
            <button class="uredi" type="button" onclick="openEditForm(<?php echo $row['id'] ?>)">&#x270E;</button>
              <div class="profile-picture">
                <img src="../<?php echo $row['image_path'] ?>" alt="Profile Picture">
              </div>
              <div class="info">
                <h2 class="name"><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></h2>
                <p class="title"><?php echo $row['title'] ?></p>
                <blockquote class="quote"><?php echo $row['description'] ?></blockquote>
                <div class="mail">
                  <p> <?php echo $row['email'] ?></p>
                </div>
                <div class="contact">
                  <a href="https://<?php echo $row['linkedin_url'] ?>" target="_blank"> 🗨 LinkedIn</a>
                </div>
              </div>
        </div>
    <?php
      }
    }
    mysqli_close($conn);
    ?>
  </div>
</div>

<?php
include 'konekcija.php';
$sqlQuery = "SELECT * FROM `teammember` WHERE title = 'Manager'";
$result = mysqli_query($conn, $sqlQuery);
?>
<div class="linijaM" <?php if (mysqli_num_rows($result) == 0) echo 'style="display: none;"'; ?>>
  <p id="PMANAGER"> MANAGER </p>
  <hr>
  <div class="Manager">
    <?php
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="card">
            <a class="delete-button" href="brisanjeTeamMembera.php?id=<?php echo $row['id'] ?>"> &#x1F5D1;</a>
            <button class="uredi" onclick="openEditForm(<?php echo $row['id'] ?>)">&#x270E;</button>
              <div class="profile-picture">
                <img src="../<?php echo $row['image_path'] ?>" alt="Profile Picture">
              </div>
              <div class="info">
                <h2 class="name"><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></h2>
                <p class="title"><?php echo $row['title'] ?></p>
                <blockquote class="quote"><?php echo $row['description'] ?></blockquote>
                <div class="mail">
                  <p> <?php echo $row['email'] ?></p>
                </div>
                <div class="contact">
                  <a href="https://<?php echo $row['linkedin_url'] ?>" target="_blank"> 🗨 LinkedIn</a>
                </div>
              </div>
        </div>
    <?php
      }
    }
    mysqli_close($conn);
    ?>
  </div>
</div>



<?php
include 'konekcija.php';
$sqlQuery = "SELECT * FROM `teammember` WHERE title = 'Intern'";
$result = mysqli_query($conn, $sqlQuery);
?>
<div class="linijaI" <?php if (mysqli_num_rows($result) == 0) echo 'style="display: none;"'; ?>>
  <p id="PINTERN"> INTERN </p>
  <hr>
  <div class="Intern">
    <?php
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="card">
            <a class="delete-button" href="brisanjeTeamMembera.php?id=<?php echo $row['id'] ?>"> &#x1F5D1;</a>
            <button class="uredi" onclick="openEditForm(<?php echo $row['id'] ?>)">&#x270E;</button>
              <div class="profile-picture">
                <img src="../<?php echo $row['image_path'] ?>" alt="Profile Picture">
              </div>
              <div class="info">
                <h2 class="name"><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></h2>
                <p class="title"><?php echo $row['title'] ?></p>
                <blockquote class="quote"><?php echo $row['description'] ?></blockquote>
                <div class="mail">
                  <p> <?php echo $row['email'] ?></p>
                </div>
                <div class="contact">
                  <a href="https://<?php echo $row['linkedin_url'] ?>" target="_blank"> 🗨 LinkedIn</a>
                </div>
              </div>
        </div>
    <?php
      }
    }
    mysqli_close($conn);
    ?>
  </div>
</div>

                <form id="forma" 
                onsubmit="return TextInputValidation()" 
                style="display:none;position:fixed;top:0;left:0;width:100%;height:93%;
                background-color:rgba(0,0,0,0.5);"
                action="dodavanjeTeamMembera.php" method="POST" enctype="multipart/form-data">
            <div class="footer">
            <h1 id ="naslov"> Enter team member informations  <span class="close-button" onclick="CloseModal()">X</span> </h1>
          </div>
          <div class="row">
              <div class="col">
                <label>First name </label>
                <input type="text" class="form-control" placeholder="First name" name="firstName" id="firstName">
              </div>
              <div class="col">
              <label>Last name </label>
                <input type="text" class="form-control" placeholder="Last name" name="lastName" id="lastName">
              </div>
            </div>
            <div class="form-group">
            <label for="title">Title</label>
                <select id="title" name="title" class="form-control">
                    <option value="CEO">CEO</option>
                    <option value="Manager">Manager</option>
                    <option value="Intern">Intern</option>
                </select>
            </div>
            <div class="form-group">
            <label for="imageUpload">Upload your image</label>
            <input type="file" class="form-control-file" name="image" id="image" accept="image/jpeg" placeholder="JPEG, PNG, GIF">
            </div>
            <div class="image"></div>

            <div class="form-group">
              <label for="qoute">Leave a qoute</label>
              <textarea class="form-control" name="qoute" id="qoute"  rows="3"> </textarea>
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" placeholder="person@fablab.ba" name="email" id="email">
            </div>
            <div class="form-group">
            <label for="hyperlink">Linkedin</label>
            <input id="hyperlink-input"  name="hyperlink" class="form-control" placeholder="https://www.linkedin.com/in/your-profile-credentials">
            </div>
            <div class="dugmici">
            <button type="submit" name="submit" value="submit" class="btn btn-outline-success" >Submit</button> &nbsp; &nbsp; &nbsp;
            <button type="button" class="btn btn-outline-danger" onclick="CloseModal()">Close</button>
            </div>
          </form>


          <div id="overlay" style="display:none;"></div>


          <form id="formForEditing"  onsubmit="return TextInputValidationEdit()" style="display:none;position:fixed;top:0;left:0;width:100%;height:93%;
                background-color:rgba(0,0,0,0.5);" action="updateTeamMembera.php" method="POST">
            <div class="footer">
            <h1 id ="naslov"> Enter team member informations  <span class="close-button" onclick="closeEditModal()">X</span> </h1>
          </div>
          <div class="row">
            <input type="hidden" id="idMembera" name="idMembera">
              <div class="col">
                <label>First name </label>
                <input type="text" class="form-control" placeholder="First name" name="firstName" id="first" value="">
              </div>
              <div class="col">
              <label>Last name </label>
                <input type="text" class="form-control" placeholder="Last name" name="lastName" id="last">
              </div>
            </div>
            <div class="form-group">
            <label for="title">Title</label>
                <input id="titleE" name="title" class="form-control" disabled>
            </div>
            <div class="form-group">
            <label for="imageUpload">Your image</label>
             <img id="imageElement" class="imageSRC" src="" alt="Member Image" style="height:200px; width:40%; margin-left:30%; margin-right:30%">
            </div>

            <div class="form-group">
              <label for="qoute">Leave a qoute</label>
              <input class="form-control" name="qoute" id="qouteE" >
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" placeholder="person@fablab.ba" name="email" id="emailE">
            </div>
            <div class="form-group">
            <label for="hyperlink">Linkedin</label>
            <input id="hyperlink-inputE"  name="hyperlink" class="form-control" placeholder="https://www.linkedin.com/in/your-profile-credentials">
            </div>
            <div class="dugmici">
            <button type="submit" name="submit" value="submit" class="btn btn-outline-success" >Submit</button> &nbsp; &nbsp; &nbsp;
            <button type="button" class="btn btn-outline-danger" onclick="closeEditModal()">Close</button>
            </div>
          </form>

          <div id="overlay" style="display:none;"></div>
          
      <button id="dugmic" onclick="OpenModal()" style="display:none">Add team member</button>
      <div class="vlntContainerTeam">
        <div class="cardTeam bck">
            <div class="cardTeam-header">
              <a href="?page=pages/en/expert" target="_blank"> <img src="../../slike/Expert team member_.jpg" />
              </a>
            </div>
            <div class="cardTeam-body">
              <h2 class="marginAuto">
                Expert </h2>
    
              <span class="tag tag-teal"><a href="?page=pages/en/expert" target="_blank">Read
                  more</a></span>
            </div>
          </div>
  
          <div class="cardTeam bck">
            <div class="cardTeam-header">
              <a href="?page=pages/en/expert" target="_blank"> <img src="../../slike/Mechanical or education.jpg" />
              </a>
            </div>
            <div class="cardTeam-body">
              <h2 class="marginAuto"> Educator </h2>
              <span class="tag tag-teal"><a href="?page=pages/en/expert" target="_blank">Read
                  more</a></span>
            </div>
          </div>
          <div class="cardTeam">
            <div class="cardTeam-header">
              <a href="?page=pages/en/internship" target="_blank"> <img src="../../slike/educator or intership.png" />
              </a>
            </div>
            <div class="cardTeam-body">
              <h2 class="marginAuto">
                Internship </h2>
              <span class="tag tag-teal"><a href="?page=pages/en/internship" target="_blank">Read
                  more</a></span>
            </div>
          </div>
  
          <div class="cardTeam">
            <div class="cardTeam-header">
              <a href="?page=pages/en/volunteering" target="_blank"> <img src="../../slike/volonter.png" />
              </a>
            </div>
            <div class="cardTeam-body">
              <h2 class="marginAuto"> Volunteering </h2>
              <span class="tag tag-teal"><a href="?page=pages/en/volunteering" target="_blank">Read
                  more</a></span>
            </div>
          </div>
  
      </div>
  
      <div class="w3-container" id="people" style="margin-top:5%">
        <h1 class="w3-xxxlarge w3-text-orange centerTitle">Team</h1>
        <hr style="width:80%;border:3px solid #F98329;margin: auto;" class="w3-round">
      </div>
      <div class="edit">
        <p> We are a group of enthusiasts with various educational backgrounds and extensive professional
          experiences.
          We are dedicated to FabLab, and we always look for exceptional inspiring team members and
          contributors:</p>
      </div>


      
      <!-- content -->
      <div class="flexTeam">
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Edin Skaljić <br> <small>Founder & CEO</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/edin.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>So truly believes in FabLab.</p>
        </div>
        <p class="mailAlignment"> edin<img src="../../slike/at.png" width="19"
            height="19">fablab.ba</p>
          <a href="https://www.linkedin.com/in/skaljic/" target="_blank">
            <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt="">
            </div>
          </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Emir Karamehmedovic<br> <small>E-Lab Manager</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/emir.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Does hocus pocus with lasers, lenses and electronics. </p>              
            </div>
            <p class="mailAlignment"> emir<img src="../../slike/at.png" width="19"
                height="19">fablab.ba</p>
          <a href="https://www.linkedin.com/in/emir-karamehmedovic-66434718/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Mirza Suljagic<br> <small>BioLab Manager</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/mirza.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Has this crazy idea he can print living cells and tissues. </p>
            
        </div>
        <p class="mailAlignment"> mirza.suljagic<img src="../../slike/at.png" width="19"
            height="19">fablab.ba</p>
          <a href="https://www.linkedin.com/in/mirza-suljagic-b9045035/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Anida Cmanjcanin<br> <small>Manager</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/anida.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Connecs the dots and creates a context of a better world that inspires and works for everyone. </p>
        </div>
        <p class="mailAlignment"> anida<img src="../../slike/at.png" width="19"
            height="19">fablab.ba</p>
          <a href="https://ba.linkedin.com/in/anida-cmanjcanin-a4432962" target="_blank">
            <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div>
          </a>
        </div>
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Ahmed Mujkanovic<br> <small>Lab Manager</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/ahmed.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Makes sure our lab runs like a swiss watch.</p>
        </div>
        <p class="mailAlignment">ahmed<img src="../../slike/at.png" width="19"
            height="19">fablab.ba</p>
          <a href="https://www.linkedin.com/company/fablab-bosnia?trk=public_profile_experience-item_profile-section-card_subtitle-click" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">
              Enes Bosnic <br> <small>IT support</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/enes.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Takes great care about our IT infrastructure.</p>
        </div>
        <p class="mailAlignment">enes<img src="../../slike/at.png" width="19"
            height="19">fablab.ba</p>
          <a href="https://n00bs.fablab.ba//">
          <div class="w3-button w3-block liBg">alias: n00b </div></a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Ajna Smajic <br> <small>Patent attorney</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/ajna.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Builds bridges between innovation and law. </p>
        </div>
              <p class="mailAlignment">ajna<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
          <a href="https://www.linkedin.com/in/ajna-smaji&#263;/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div></a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Mirza Behlulovic<br> <small>Legal</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/behlulovic.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Always on the bright side of the law. </p>
        </div>
              <p class="mailAlignment">mirza<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/mirza-behlulovic-ba949429/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Amina Delimustafic <br> <small>Project Coordinator</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/amina.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Makes administrative and paperwork stuff look super fun and easy. </p>
        </div>
        <p class="mailAlignment">amina<img src="../../slike/at.png" width="19"
            height="19">fablab.ba</p>
          <a href="https://www.linkedin.com/in/amina-purivatra-delimustafic-b7908b35" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Edin Behlulovic<br> <small>Patent attorney</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/edinb.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Guides Fab creators and inventors. </p>
        </div>
              <p class="mailAlignment">edin.behlulovic<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/edin-behlulovic-946a48113/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Maja Komilija<br> <small>Court Interpreter</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/maja.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Makes sure we understand each other. </p>
        </div>
              <p class="mailAlignment"> info<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
          <a href="https://www.linkedin.com/in/maja-komilija-a4b36285/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">
              Djavid Sehic <br> <small>Economist</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/djavid.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Supports FabLabers with market and product insights. </p>
        </div>
              <p class="mailAlignment"> info<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/djavid-sehic/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Azra Behlulovic<br> <small>Administrative Manager</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/azra.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Gets things done. </p>
        </div>
              <p class="mailAlignment">azra<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/azra-behlulovic-06243b152/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">
              Dino Hasimbegovic <br> <small>Mechanical Engineer</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/dino.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Plays with mechanical things and experiments with a pinch of creativity.</p>
        </div>
              <p class="mailAlignment">dino.hasimbegovic<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/dino-ha&#353;imbegovi&#263;-141624141/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">
              Sadzida Kosovac <br> <small>Mechanical Engineer</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/sadzida.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>3D (making) printing mechanical hands and (doing) other cool stuff.</p>
        </div>
              <p class="mailAlignment">sadzida.kosovac<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/sad%C5%BEida-kosovac-72499b147/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">
              Nermina Memisevic <br> <small>Machine Learning</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/nermina.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Developing our web. </p>
        </div>
              <p class="mailAlignment">nermina.memisevic<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/nermina-memisevic-012307132/" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div> </a>
        </div>
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Omar Hassan<br> <small>Electrical Engineer</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/omar.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Plays with electronic components and does some programming on the way.</p>
        </div>
              <p class="mailAlignment">omar.hassan<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/in/omar97hassan/" target="_blank"> 
          <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div> </a>
        </div>
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Aid Tabak<br> <small>Electrical Engineer</small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/Aid.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Something about electronics. </p>
        </div>
              <p class="mailAlignment">aid.tabak<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://ba.linkedin.com/in/aid-tabak-557b65215" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/5.png" alt=""> </div></a>
        </div>
  
        <div class="flexInnerTeam lightBg">
          <header>
            <h3 class="NameTitle">Salih Imamovic<br> <small>Intern - Mechanical Engineer </small></h3>
          </header>
          <div class="flexDivInner">
            <img src="../../slike/salih.png" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
            <p>Makes all our ideas functional. </p>
        </div>
              <p class="mailAlignment">salih.imamovic<img src="../../slike/at.png" width="19"
                  height="19">fablab.ba</p>
            
          <a href="https://www.linkedin.com/company/fablab-bosnia?trk=public_profile_experience-item_profile-section-card_subtitle-click" target="_blank">
          <div class="w3-button w3-block liBg"><img src="../../slike/7.png" alt=""> </div> </a>
        </div>
  
        <div class="flexInnerTeam lightBg">
            <header>
              <h3 class="NameTitle">Mahmo Deljkic<br> <small>Intern - Mechanical Engineer </small></h3>
            </header>
            <div class="flexDivInner">
              <img src="../../slike/mahmo.jpg" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
              <p>Thinks engineering is the coolest thing ever. </p>
            </div>
                <p class="mailAlignment">mahmo.deljkic<img src="../../slike/at.png" width="19"
                    height="19">fablab.ba</p>
              
            <a href="https://www.linkedin.com/company/fablab-bosnia?trk=public_profile_experience-item_profile-section-card_subtitle-click" target="_blank">
            <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt=""> </div> </a>
          </div>
  
  
      </div> 
      <!-- end of flex3 -->
  
  </div>
  
  
  <br>
  
  <br>