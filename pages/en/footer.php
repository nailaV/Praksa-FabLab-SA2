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

          <div class="popup-container" id="formNewsletter" style="display:none;position:fixed;top:25%;left:25%;width:50%;height:60%;
                background-color:white;padding: 5px; border:10px solid black;">
              <div id="mc_embed_signup">
        <form action="https://fit.us8.list-manage.com/subscribe/post?u=85fe0bd0ad8c72aae661e142a&amp;id=d55371d9d8&amp;f_id=00d27fe0f0" 
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    <div id="mc_embed_signup_scroll">
                      <h2 style="margin: 10px 0 10px 40%;">Subscribe</h2>
                        <label for="mce-EMAIL">Email Address </label>
                        <input type="email" style="border: 2px solid black;margin:10px 0 10px 0;" name="EMAIL" class="required email" id="mce-EMAIL" required="true" value="">
                        <br>
                        <label for="mce-FNAME">First name</label>
                        <input type="text" style="border: 2px solid black;margin:10px 0 10px 0;" name="FNAME" id="mce-FNAME" value="">
                        
                        <label for="mce-LNAME">Last name</label>
                        <input type="text" style="border: 2px solid black;margin:10px 0 10px 0;" name="LNAME" id="mce-LNAME" value="">
                        
                        <div class="response" id="mce-error-response" style="display: none;"></div>
                        <div class="response" id="mce-success-response" style="display: none;"></div>
                        
                        <div style="margin: 10px; padding: 0 0 0 30%">
                        <input type="submit" name="subscribe" onclick="validateForm()" id="mc-embedded-subscribe" class="button" value="Subscribe">
                        <input type="button" onclick="CloseNewsletterForm()" name="close" id="mc-embedded-close" class="button" value="Close">
                      </div>

                  </div>
          </form>
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
        <button id="newsletterButton" onclick="OpenNewsletterForm()" style="border: 2px solid black; background-color: blue; color:white; height:30px; width: 100%;">
        Open subscription form
        </button>
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

  <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>

  <script> 
  emailjs.init("lHaUrvKDqOO16pVqT");
  </script>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
  
<script type="text/javascript">
  (function($) 
  {
  window.fnames = new Array(); 
  window.ftypes = new Array();
  fnames[0]='EMAIL';
  ftypes[0]='email';
  fnames[1]='FNAME';
  ftypes[1]='text';
  fnames[2]='LNAME';
  ftypes[2]='text';
  }(jQuery));
  var $mcj = jQuery.noConflict(true);
</script>

<script>
 function OpenNewsletterForm()
 {
  document.getElementById("formNewsletter").style.display = "block";
 }

function validateForm()
{
  var email = document.getElementById("mce-EMAIL");
  var fname = document.getElementById("mce-FNAME");
  var lname = document.getElementById("mce-LNAME");
  if(email.value==""||fname.value==""||lname.value=="")
  {
    document.getElementById("mce-error-response").value="Enter valid credentials";
  }
}

 function CloseNewsletterForm() {
   document.getElementById("formNewsletter").style.display = "none";
   document.getElementById("mce-EMAIL").value="";
   document.getElementById("mce-FNAME").value="";
   document.getElementById("mce-LNAME").value="";
   document.getElementById("mce-error-response").innerHTML="";
   document.getElementById("mce-success-response").innerHTML="";
   
}

</script>

<script>
function sendEmail() {
  var form = document.getElementById("mc-embedded-subscribe-form");
  var email=document.getElementById("mce-EMAIL").value;
  var fname = document.getElementById("mce-FNAME").value;
  var lname = document.getElementById("mce-LNAME").value;

  var fullname=fname+' '+lname;

  var template_params = {
    "to_fullname": fullname,
    "to_name": email
  };

  emailjs.send("service_smd9uuu", "template_j4w4kxj", template_params)
      .then(function(response) {
          console.log("Custom email sent:", response);
      }, function(error) {
          console.error("Error sending custom email:", error);
      });
    }
    document.getElementById("mc-embedded-subscribe-form").addEventListener("submit", function(event) {
        event.preventDefault();
        sendEmail();
    });
</script>
