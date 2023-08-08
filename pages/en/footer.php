 <!-- W3.CSS Container -->
 <div class="w3-light-grey w3-container w3-padding-25">
        <div class="footer">
          <div class="social">
            <a href="https://www.facebook.com/FabLabSarajevo/" target="_blank" title="FaceBook"><i
                class="fab fa-facebook-square fa-2x fb iconBg"></i></a>
            <a href="https://instagram.com/fablab_sarajevo" target="_blank" title="Instagram"><i
                class="fab fa-instagram fa-2x ig iconBg"></i></a>
            <a href="https://www.linkedin.com/company/fablab-bosnia/" target="_blank" title="LinkedIn"><i
                class="fab fa-linkedin fa-2x in iconBg"></i></a>
            <a href="https://www.youtube.com/channel/UCPcQN7iMKPt97w0ktjtk7mQ" target="_blank" title="YouTube"><i
                class="fab fa-youtube fa-2x yt iconBg"></i></a>
            <a href="https://github.com/FabLab-BiH" target="_blank" title="Github"><i
                class="fab fa-github fa-2x gh iconBg"></i></a>
          </div>
          <div class="contactInfo">
            <a href="https://goo.gl/maps/RCPKMmExtiyvqkg87" target="_blank" class="textDecoration"
              title="Click here to see our location"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Zmaja od
              Bosne 8,
              71000 Sarajevo </a><br>
            <a href="mailto: info@fablab.ba" target="_blank" class="textDecoration"
              title="Contact us for all your questions!"><i class="fas fa-envelope"></i>&nbsp; info@fablab.ba</a><br>
            <a href="tel:+387-62-601060" target="_blank" class="textDecoration" title="Click to call us!"> <i
                class="fas fa-phone-alt"></i>&nbsp;+387 62 60 10 60 </a><br>
            &copy; FabLab 2021 &nbsp;Sarajevo
          </div>
          <!-- <br> -->

          <div class="popup-container" id="formNewsletter" style="display:none;position:fixed;top:0;left:0;width:100%;height:93%;
                background-color:rgba(0,0,0,0.5);">
              <div class="popup-content">
                  <h3>Newsletter sign up</h3>
                  <form id="newsletterForma">
                    <label for="fullname">Full name</label>
                    <input id="to_fullname" type="text" name="fullname" placeholder="Your full name">
                      <label for="email">Email</label>
                      <input id="to_name" type="text" name="email" placeholder="Your email address">
                      <!-- <label for="birthday">Birthday</label>
                      <input id="birthday" type="date" name="birthday" placeholder="Your birthday"> -->
                      <input type="submit" id="slanjeButton" value="Send Email" >
                  </form>
                  <div class="popup-buttons">

                      <button type="button" class="closeLogin" onclick="CloseNewsletterForm()">Close</button>
                  </div>
              </div>
          </div>

          <div class="terms">
            <span class="fade"><img src="../../slike/privacy.png" width="20px"><a href="https://fablab.ba/?page=pages/en/terms"
                class="textDecoration" target="_blank"> Terms of service</a></span><br>
            <span class="fade"><img src="../../slike/impressum.png" width="20px"> <a href="https://fablab.ba/?page=pages/en/impressum"
                class="textDecoration" target="_blank"> Impressum</a></span> <br>
            <span class="fade"><img src="../../slike/terms.png" width="20px"> <a href="https://fablab.ba/?page=pages/en/policy"
                class="textDecoration" target="_blank"> Privacy policy</a> </span>
          </div>
        </div>
      <br>
      <div>
          <!-- <form id="formaNewsletter" style="border: 2px solid black;" action="subscribe.php" method="post">     // Ovo je pristup sa direktnim slanjem maila bez popup forme
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Enter your email address" name="email" required>
            <button type="submit">Subscribe</button>
          </form> -->
          <button id="newsletterButton" onclick="OpenNewsletterForm()" style="border: 2px solid black; background-color: blue; color:white; height:30px; width: 100%;">Open subscription form</button>
          </div>
      </div>
    </div>
    
  </div>
  <!-- Cookie Notice plugin v1.3.2 by FabLab Factory https://fablab.ba/ -->
  <div align="center" id="cookie-notice" role="banner"
    class="cookie-notice-hidden cookie-revoke-hidden cn-position-bottom" aria-label="Cookie Notice" style="background-color: rgba(0,0,0,1);">
    <div class="cookie-notice-container" style="color: #fff;font-size:smaller">
      <span id="cn-notice-text" class="cn-text-container">
        We do not use cookies. Your Internet Protocol Address <?php echo $_SERVER['REMOTE_ADDR']; ?> is logged in our database.
      </span><span id="cn-notice-buttons" class="cn-buttons-container"></span>
    </div>

  </div>
  <!-- / Cookie Notice plugin -->

  <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>

  <script> 
  emailjs.init("lHaUrvKDqOO16pVqT");
  </script>

<script>
function sendEmail() {
        var form = document.getElementById("newsletterForma");
        var fullname = document.getElementById("to_fullname").value;
        var name = document.getElementById("to_name").value;

        var template_params = {
          "to_fullname": fullname,
          "to_name": name
        };

        emailjs.send("service_smd9uuu", "template_j4w4kxj", template_params)
            .then(function(response) {
                console.log("Custom email sent:", response);
                alert("Email sent successfully!");
                window.location.reload();
            }, function(error) {
                console.error("Error sending custom email:", error);
                alert("Error sending email. Please try again later.");
                ResetValues();
            });
        
        


    }

    // Attach the form submission to the function
    document.getElementById("newsletterForma").addEventListener("submit", function(event) {
        event.preventDefault();
        sendEmail();
    });

</script>

<script>

 function OpenNewsletterForm()
 {
  document.getElementById("formNewsletter").style.display = "block";
 }

 function CloseNewsletterForm() {
    document.getElementById("formNewsletter").style.display = "none";
    ResetValues();
}

function ResetValues() {
  document.getElementById("to_name").innerHTML="";
  document.getElementById("to_fullname").innerHTML="";

}

</script>
