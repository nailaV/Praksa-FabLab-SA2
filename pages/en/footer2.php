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

          <div class="popup-container" id="formNewsletter" style="display:none;position:fixed;top:25%;left:25%;width:50%;height:50%;
                background-color:white;border:10px solid black;">
             <div>
                  <div style="margin:5px">
                    <!-- <form action="https://fit.us8.list-manage.com/subscribe/post?u=85fe0bd0ad8c72aae661e142a&amp;id=d55371d9d8&amp;f_id=00d27fe0f0" method="post" name="mc-embedded-subscribe-form"> -->
                      <form id="newsletter-form">    
                      <div>
                          <h2>Newsletter form subscription</h2>
                            <div>
                              <label for="email">Email Address</label>
                            <input type="email" name="email" class="required email" id="mce-EMAIL" required="true" placeholder="Enter your email">
                          </div>
                          <div>
                            <label for="fname">First Name </label>
                          <input type="text" name="fname" id="mce-FNAME" placeholder="Enter your first name">
                          
                        </div>
                          <div>
                            <label for="lname">Last Name </label>
                          <input type="text" name="lname" id="mce-LNAME" placeholder="Enter your last name">
                        </div>
                      <div class="optionalParent">
                          <div>
                              <input type="submit" name="subscribe" class="button" value="Subscribe">
                              <p style="margin: 0px auto;">
                            </p>
                          </div>
                          <div>
                              <input type="button" name="close" class="button" onclick="CloseNewsletterForm()" value="Close">
                              <p style="margin: 0px auto;">
                            </p>
                          </div>
                  </div>
              </div>
            </form>
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
      <div>
          <button id="newsletterButton" style="border: 2px solid black; background-color: blue; color:white; height:30px; width: 100%;">Subscribe</button>
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

  <!-- <script type="text/javascript" 
  src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js">
</script>
<script type="text/javascript">
(
  function($) 
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

  function izbaciObavijest()
  {
    var email=document.getElementById("mce-EMAIL").value;
    var fname=document.getElementById("mce-FNAME").value;
    var lname=document.getElementById("mce-LNAME").value;
    if(email!=""&&fname!=""&&lname!="")
      alert('You have successfully subscribed');
    else
      alert('Something went wrong');
      window.location.replace("http://localhost:8000");
  } -->
  <!-- <script src="../../signup_script.js"></script> -->
  <script src="../../hubspot_script.js"></script>
    
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
document.getElementById("mce-EMAIL").value="";
document.getElementById("mce-FNAME").value="";
document.getElementById("mce-LNAME").value="";
}

</script>
