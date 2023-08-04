<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FabLab - Sarajevo">
    <title>FabLab Sarajevo - Home To Fabulous FabLab in Sarajevo</title>
    <meta name="robots" content="noindex,nofollow">
    <meta name="google-signin-client_id" content="532943031464-scqpb6lbolpis09cs1f2tei6j5hasscr.apps.googleusercontent.com">
    <link rel="icon" type="image/png" href="../../slike/fav.png">
    
    <link rel="stylesheet" href="../../styles/icons.css">
    <link rel="stylesheet" href="../../styles/w3.css">
    <link rel="stylesheet" href="../../styles/drugi.css">
    <link rel="stylesheet" href="../../styles/poppins.css">
    <link rel="stylesheet" href="../../styles/card.css">

  
    <script src="../../js/fotoramaMin.js"></script>
    <script src="../../js/script.js"></script>
    <script src="../../js/icons.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
   <script defer src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
   <script defer src="../../js/Varijable.js"></script>
   <script defer src="../../js/Auth.js"></script>
    <script defer src="../../js/addProject.js"></script>


  <style>
	 .dugmence {

            position: absolute !important;
				   left:middle;
            bottom: 10px !important;
			text-align: middle;
			vertical-align: bottom;
          

        }
  </style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169288348-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-169288348-1');
</script>
<!-- End Global site tag (gtag.js) - Google Analytics -->


<!-- Hotjar Tracking Code for www.fablab.ba -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1812854,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- End Hotjar Tracking Code for www.fablab.ba -->


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1158314620935416');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1158314620935416&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<script>
    function onSignIn(googleUser) {
      alert("You are signed in");
      
    }
</script>
<!-- navigation -->
<div class="navbar navbarProjects navPosition">
  <div class="nav-head">
    <img class="homeeProjects navLogo" src="../../slike/logo.png">
    <div id="hamburger" onclick="toggleNav()">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div class="nav-content" id="nav-content">
        <a href="?page=pages/en/index" class="home">Home</a>
        <a href="?page=pages/en/about">About us</a>
        <a href="?page=pages/en/ourlabs">Our Labs</a>
        <a href="?page=pages/en/education">Education</a>
        <a href="?page=pages/en/services">Services</a>
        <a href="?page=pages/en/projects">Projects</a>
<a href="?page=pages/en/fabinitiative">Initiatives</a>
    <a href="?page=pages/en/team">Team</a>
        <a href="https://fablab.ba/htmly/" target="_blank">News</a>
        <a href="?page=pages/en/support">Support Fab</a>
        <a href="?page=pages/en/membership">Membership</a>
        <a href="https://www.facebook.com/pg/FabLabSarajevo/shop/?rid=100340428073233&rt=6&referral_code=page_shop_card&preview=1"
            target="_blank">Shop</a>
        <a href="?page=pages/en/job">FabJob</a>
        <a href="#" class="pulsate w3-text-blue">Live</a>
	           <span class="lanFlags">
	  <a href="changelang.php?lang=bhs" class="noHover">
                <img src="/slike/bosnia-and-herzegovina.png" width="20px" alt="">
              </a>
              <a href="changelang.php?lang=en" class="noHover">
                <img src="/slike/united-states.png" width="20px" alt="">
              </a>
	  </span>
  </div>
</div>
<!-- end of nav -->
<span class="lanFlagsDesk">
        <a href="http://localhost:8000/?page=pages/bhs/projekti" class="noHover">                  <!-- prijašnji kod "changelang.php?lang=bhs" -->
            <span <?php if ($language!=='bhs' ){?>style="color:#2B2B2B;opacity:0.5;"
                <?php } ?>>BHS
            </span>
        </a>
        <span style="color:#2B2B2B;">|</span>
        <a href="http://localhost:8000/?page=pages/en/projects" class="noHover">
            <span <?php if ($language==='en' ){?>style="color:#4D4D4D;"
                <?php } ?>>EN
            </span>
	   </a>
    </span>