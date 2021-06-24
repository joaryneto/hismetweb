<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/google-map.css">
        <link rel="stylesheet" href="css/styleswitcher.css"/>

    <!--<link rel="stylesheet" href="css/mailform.css">-->
    <link rel="stylesheet" href="css/rd-mailform.css"/>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/device.min.js"></script>
  </head>
  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="./">Family</a></h1>
            <p class="brand_slogan">Therapeutist</p>
          </div><a href="callto:#" class="fa-phone">800-2345-6789</a>
          <p>One of our representatives will happily contact you within 24 hours. For urgent needs call us at</p>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li><a href="./">Home</a>
                </li>
                <li><a href="index-1.html">Bio</a>
                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Conse ctetur adipisicing</a></li>
                    <li><a href="#">Elit sed do eiusmod</a>
                      <ul>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Conse adipisicing</a></li>
                        <li><a href="#">Sit amet dolore</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Incididunt ut labore</a></li>
                    <li><a href="#">Et dolore magna</a></li>
                    <li><a href="#">Ut enim ad minim</a></li>
                  </ul>
                </li>
                <li><a href="index-2.html">Services</a>
                </li>
                <li><a href="index-3.html">Appointments</a>
                </li>
                <li class="active"><a href="index-4.html">Contacts</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="map">
          <div id="google-map" class="map_model"></div>
          <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180">
              <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
            </li>
          </ul>
        </section>
        <section class="well3 bg-secondary">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>4578 Marmora Road,Glasgow<br/> D04 89GR</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="/cdn-cgi/l/email-protection#eac9"><span class="__cf_email__" data-cfemail="abc2c5cdc4ebcfcec6c4c7c2c5c085c4d9cc">[email&#160;protected]</span></a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6789</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6790</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="well1">
          <div class="container">
            <h2>Feedback</h2>
            <!-- RD Mailform -->
            <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
              <!-- RD Mailform Type -->
              <input type="hidden" name="form-type" value="contact"/>
              <!-- END RD Mailform Type -->
              <fieldset>
                <div class="row">
                  <div class="grid_4">
                    <label data-add-placeholder>
                      <input type="text"
                             name="name"
                             autocomplete="off"
                             placeholder="Your Name:"
                             data-constraints="@NotEmpty @LettersOnly"/>
                    </label>
                  </div>

                  <div class="grid_4">
                    <label data-add-placeholder>
                      <input type="text"
                             name="phone"
                             autocomplete="off"
                             placeholder="Telephone:"
                             data-constraints="@Phone"/>
                    </label>
                  </div>


                  <div class="grid_4">
                    <label data-add-placeholder>
                      <input type="text"
                             name="email"
                             autocomplete="off"
                             placeholder="Email:"
                             data-constraints="@NotEmpty @Email"/>
                    </label>
                  </div>
                  <div class="grid_12">
                    <label data-add-placeholder>
                      <textarea name="message" placeholder="Message:" data-constraints="@NotEmpty"></textarea>
                    </label>
                  </div>
                  <div class="mfControls grid_12">
                    <button type="submit" class="btn">Sumbit comment</button>
                  </div>
                </div>
                <div class="mfInfo"></div>
              </fieldset>
            </form>
          </div>
        </section>
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section>
          <div class="container">
            <div class="copyright">Family Therapeutist  © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.html">Privacy Policy</a>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>