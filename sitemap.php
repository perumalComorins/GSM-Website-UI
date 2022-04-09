<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home | GSM website</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/theme.css'>
    <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
 
  <div id="wrapper">
      <div class="overlay"></div>

      <!-- Sidebar -->
      <?php include 'includes/sidepanel.php'; ?>

      <div id="page-content-wrapper" class="container-fluid reset-padding">
          <header class="site-header site-navbar site-navbar-target">
              <?php include 'includes/header.php'; ?>
          </header>
          <div class="site-bannersection">
              <div class="sitemap-banner" style="background-image: url('images/sitemap-banner.png');">
                      <div class="container container-75 reset-padding sitemap-container">
                          <h1>Site Map</h1>
                      </div>
              </div>
              
          </div>
          
          <section class="site-body-container">
              <div class="container container-75 reset-padding sitemap-container">
                <div class="sitemap-row row">
                    <div class="col-md-8 reset-padding align-self-center">
                        <div class="sitebar-row row">
                          <div class="col-md-4 reset-padding">
                              <div class="sitebar-box">
                                <h2>Main Content</h2>
                                <ul>
                                  <li><a href="index.php">Home</a></li>
                                  <li>The Body</li>
                                  <li><a href="contact-faq.php">Contact &amp; FAQ</a></li>
                                  <li><a href="certificate.php">Certification</a></li>
                                  <li><a href="recritment.php">Career</a></li>
                                  <li><a href="blog.php">Blog</a></li>
                                </ul>
                              </div>
                          </div>
                          <div class="col-md-4 reset-padding">
                              <div class="sitebar-box">
                                <h2>Individual</h2>
                                <ul>
                                  <li><a href="individual.php">Formations</a></li>
                                </ul>
                              </div>
                              <div class="sitebar-box">
                                <h2>Company</h2>
                                <ul>
                                  <li><a href="qualified_staff.php">Team recruitment</a></li>
                                  <li><a href="qualified_staff.php">Upgrade Team</a></li>
                                </ul>
                              </div>
                              <div class="sitebar-box">
                                <h2>Organization</h2>
                                <ul>
                                  <li><a href="organisation.php">Registration - Organization</a></li>
                                </ul>
                              </div>
                          </div>
                          <div class="col-md-4 reset-padding">
                              <div class="sitebar-box">
                                <h2>Connections</h2>
                                <ul>
                                  <li><a href="terms-privacy.php">CGUG</a></li>
                                  <li><a href="legal-notice.php">Credits</a></li>
                                  <li><a href="terms-privacy.php">Legal Notice</a></li>
                                  </li><li><a href="terms-privacy.php">DPR</a></li>
                                  <li><a href="sitemap.php">Sitemap</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 reset-padding">
                      <img src="images/information-architecture.png" class="img-fluid"/>
                    </div>
                </div>
              </div>
          </section>

          <footer class="site-footer">
            <?php include 'includes/footer.php'; ?>
          </footer>  
      </div>
  </div>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="js/main.js"></script>
  <script type="text/javascript">

        function bootstrapTabControl(){
            var i, items = $('.tab-nav-link'), pane = $('.tab-pane');
            // next
            $('.nexttab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i < items.length - 1){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i+1]).addClass('active');
                    // for pane
                    $(pane[i]).addClass('left')
                    
                    setTimeout(function() {
                        $(pane[i]).removeClass('left');
                        $(pane[i]).removeClass('show active');
                        $(pane[i+1]).addClass('show active');
                    }, 500);
                    
                }

            });
            // Prev
            $('.prevtab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                
                if(i != 0){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i-1]).addClass('active');
                    // for pane
                    $(pane[i]).addClass('left');
                    setTimeout(function() {
                        $(pane[i]).removeClass('left');
                        $(pane[i]).removeClass('show active');
                        $(pane[i-1]).addClass('show active');
                    }, 500);
                }
            });
        }
        bootstrapTabControl();
    </script>
</body>
</html>