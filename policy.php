<!DOCTYPE html>
<html lang = "en" dir= "ltr">
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel = "stylesheet" href = "css/styles_policy.css">
    <link rel="icon" href="images/plant.ico">
    <link href="https://fonts.googleapis.com/css2?family=Six+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Ephemera Studios.</title>
  </head>
  <body>
    <div class = "wrapper">
      <div class = "navbar_cover" id = "navbar_cover">
        <div class = "navbar">
          <div id = "mySidenav" class = "sidenav">
            <img class = "nav_back" src = "images/nav-back.svg">
            <a href = "javascript:void(0)" class = "close" onclick = "closeNav()"><img src = "images/close.svg"></a>
            <a href = "index1.php" class = "tab">Home</a>
            <a href = "shop.php" class = "tab">Shop</a>
            <a href = "account.php" class = "tab">Account</a>
            <a href = "faq.php" class = "tab">FAQ</a>
            <a href = "cart1.php" class = "tab">Cart</a>
          </div>
          <div class = "logo">
            <div class = "ephemera">
      				<span><a href = "index1.php">ephemera</a></span>
      			</div>
      			<div class = "studios">
      				<span><a href = "index1.php">STUDIO</a></span>
      			</div>
      		</div>
          <div class = "flex_icons" id = "flexIcons">
            <!--
            <div class = "icon search">
              <a href = ""><img src = "images/search.svg"></a>
              <div>
                <span>search</span>
              </div>
            </div>
            -->
            <div class = "icon home">
              <a href = "index1.php"><img src = "images/home.svg"></a>
              <div>
                <span>home</span>
              </div>
            </div>
            <div class = "icon shop">
              <a href = "shop.php"><img src = "images/shop.svg"></a>
              <div>
                <span>shop</span>
              </div>
            </div>
            <div class = "icon person">
                <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

                <?php else: ?>

                <?php endif ?>
                <a href="logout.php"><img src = "images/person.svg"></a>
              <div>
                <span>Logout</span>
              </div>
            </div>
            <div class = "icon faq">
              <a href = "faq.php"><img src = "images/faq.svg"></a>
              <div>
                <span>faq</span>
              </div>
            </div>
            <div class = "icon cart">
              <a href = "cart1.php"><img src = "images/cart.svg"></a>
              <div>
                <span>cart</span>
              </div>
            </div>
            <div class = "icon menu option">
              <span onclick="openNav()"><img src = "images/menu.svg"></span>
              <div>
                <span>menu</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class = "back_top" src = "images/back-top-1.svg">
      <div class = "body_content">
        <div class = "policy_content">
          <p class = "policy_heading">Privacy Policy</p>
          <p>This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from ephemerastudio.in (the “Site”).</p>
          <div class = "section">
            <p class = "heading">Personal information we collect</p>
            <p>When you visit the Site, we automatically collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device. Additionally, as you browse the Site, we collect information about the individual web pages or products that you view, what websites or search terms referred you to the Site, and information about how you interact with the Site. We refer to this automatically-collected information as “Device Information”.</p>
            <p>We collect Device Information using the following technologies:<br>- “Cookies” are data files that are placed on your device or computer and often include an anonymous unique identifier. For more information about cookies, and how to disable cookies, visit http://www.allaboutcookies.org.<br>- “Log files” track actions occurring on the Site, and collect data including your IP address, browser type, Internet service provider, referring/exit pages, and date/time stamps.<br>- “Web beacons”, “tags”, and “pixels” are electronic files used to record information about how you browse the Site.</p>
            <p>Additionally, when you make a purchase or attempt to make a purchase through the Site, we collect certain information from you, including your name, billing address, shipping address, payment information (including credit card numbers, email address, and phone number. We refer to this information as “Order Information”.</p>
            <p>When we talk about “Personal Information” in this Privacy Policy, we are talking both about Device Information and Order Information.</p>
          </div>

          <div class = "section">
            <p class = "heading">How do we use your Personal Information?</p>
            <p>We use the Order Information that we collect generally to fulfill any orders placed through the Site (including processing your payment information, arranging for shipping, and providing you with invoices and/or order confirmations). Additionally, we use this Order Information to:<br>- Communicate with you<br>- Screen our orders for potential risk or fraud<br>- When in line with the preferences you have shared with us, provide you with information or advertising relating to our products or services.</p>
            <p>We use the Device Information that we collect to help us screen for potential risk and fraud (in particular, your IP address), and more generally to improve and optimize our Site (for example, by generating analytics about how our customers browse and interact with the Site, and to assess the success of our marketing and advertising campaigns).</p>
          </div>
          <div class = "section">
            <p class = "heading">Sharing your Personal Information</p>
            <p>We share your Personal Information with third parties to help us use your Personal Information, as described above. For example, we use Google Analytics to help us understand how our customers use the Site -- you can read more about how Google uses your Personal Information here: https://www.google.com/intl/en/policies/privacy/. You can also opt-out of Google Analytics here: https://tools.google.com/dlpage/gaoptout.</p>
            <p>Finally, we may also share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful requests for information we receive, or to otherwise protect our rights.</p>
          </div>
          <div class = "section">
            <p class = "heading">Behavioural Advertising</p>
            <p>As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications we believe may be of interest to you. For more information about how targeted advertising works, you can visit the Network Advertising Initiative’s (“NAI”) educational page at http://www.networkadvertising.org/understanding-online-advertising/how-does-it-work. However, you can opt out of targeted advertising.</p>
          </div>
          <div class = "section">
            <p class = "heading">Do not track</p>
            <p>Please note that we do not alter our Site’s data collection and use practices when we see a Do Not Track signal from your browser.</p>
          </div>
          <div class = "section">
            <p class = "heading">Your Right</p>
            <p>You have the right to access personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below.</p>
          </div>
          <div class = "section">
            <p class = "heading">Data retention</p>
            <p>When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete this information.</p>
          </div>
          <div class = "section">
            <p class = "heading">Changes</p>
            <p>We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.</p>
          </div>
          <div class = "section">
            <p class = "heading">Contact us</p>
            <p>For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e‑mail at hello@ephemera.studio</p>
          </div>
        </div>
      </div>
      <div class = "footer">
        <div class = "footer-links">
          <ul>
          <li><a class = "foot" href = "index1.php">&copy; 2020 EPHEMERA STUDIOS.</a></li>
            <li><a class = "foot" href = "about.php">ABOUT</a></li>
            <li><a class = "foot" href = "contact.php">CONTACT</a></li>
            <li><a class = "foot" href = "shipping.php">SHIPPING AND RETURNS</a></li>
            <li><a class = "foot" href = "policy.php">PRIVACY POLICY</a></li>
            <li><a class = "foot" href = "terms.php">TERMS AND CONDITIONS</a></li>
          </ul>
        </div>
        <div class = "footer-payment">
          <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path></g></svg>
          <title id="pi-american_express">American Express</title>
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path></svg>
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal"><title id="pi-paypal">PayPal</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path></svg>
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path></svg>
        </div>
      </div>
      <img class = "back_bottom" src = "images/back-bottom.svg">
    </div>
    <script>
      function openNav()
      {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav()
      {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
    <script type="text/javascript">
      var header = document.getElementById("mySidenav");
      var tabs = header.getElementsByClassName("tab");
      for(var i = 0; i < tabs.length; i++)
      {
        btns[i].addEventListener("click", function()
        {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
    </script>
    <script type="text/javascript">
      var header = document.getElementById("flexIcons");
      var tabs = header.getElementsByClassName("icon");
      for(var i = 0; i < tabs.length; i++)
      {
        btns[i].addEventListener("click", function()
        {
          var current = document.getElementsByClassName("current");
          current[0].className = current[0].className.replace(" current", "");
          this.className += " current";
        });
      }
    </script>
    <script type="text/javascript">
      var header = document.getElementById("footer-links");
      var tabs = header.getElementsByClassName("foot");
      for(var i = 0; i < tabs.length; i++)
      {
        btns[i].addEventListener("click", function()
        {
          var current = document.getElementsByClassName("now");
          current[0].className = current[0].className.replace(" now", "");
          this.className += " now";
        });
      }
    </script>
    <script>
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("navbar_cover").style.top = "0";
        } else {
          document.getElementById("navbar_cover").style.top = "-150px";
        }
        prevScrollpos = currentScrollPos;
      }
    </script>
  </body>
</html>