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
      <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
          <div class="sidebar-wrapper-container">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                      <span class="hamb-top"></span>
                      <span class="hamb-bottom"></span>
            </button>
            <div class="row reset-margin">
                <div class="navbarTitle-col reset-padding">
                  <h1 class="pannel-title">Together, let's be the future</h1>
                </div>
                <div class="navbarMenu-col reset-padding">
                    <img src="images/site-logo-color.png" style="width:180px;"/>
                    <nav class="sidenav-Menu">
                      <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Qui sommes-nous ?</a></li>
                        <li><a href="#"> Blog</a></li>
                        <li class="btn-group dropright">
                          <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              Certification <i class="fa fa-angle-right right-arrow"></i>
                          </a>
                          <ul class="dropdown-menu" style="">
                            <li><a href="#">Certification niveau 4</a></li>
                            <li><a href="#">Certification niveau 3</a></li>
                            <li><a href="#">Indicateurs de qualité</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Demande de devis</a></li>
                        <li><a href="#">GSM Recrute</a></li>
                        <li><a href="#">Contact & FAQ</a></li>
                      </ul>
                    </nav>

                    <div class="course_Section mt-5">
                        <a href="#" class="applyTag individualColor"><img src="images/cornershadow.png" />Individual</a>
                        <a href="#" class="applyTag companyColor"><img src="images/companyshadow.png" />Company</a>
                        <a href="#" class="applyTag organisationColor"><img src="images/organizationshadow.png" />Organization</a>
                    </div>

                    <div class="sidepanelCopyright">
                      <span>&copy; 2020 GSM Master. All rights reserved</span>
                    </div>
                    <div class="sidepanelSocialicons">
                        <a href="#"><img src="images/linkedin-in.png" class="icon" /></a>
                        <a href="#"><img src="images/facebook-square.png" class="icon" /></a>
                        
                    </div>
                </div>
            </div>
          </div>
      </nav>

      <div id="page-content-wrapper" class="container-fluid reset-padding">
          <header class="site-header site-navbar site-navbar-target">
              <?php include 'includes/header.php'; ?>
          </header>
          <div class="site-bannersection">
              <div class="sitemap-banner" style="background-image: url('images/sitemap-banner.png');">
                      <div class="container container-75 reset-padding">
                          <h1>Site Map</h1>
                      </div>
              </div>
              
          </div>
          
          <section class="site-body-container">
              <div class="container container-75 reset-padding">
                <div class="sitemap-row row">
                    <div class="col-md-8 reset-padding align-self-center">
                        <div class="sitebar-row row">
                          <div class="col reset-padding">
                              <div class="sitebar-box">
                                <h2>Main Content</h2>
                                <ul>
                                  <li>Home</li>
                                  <li>The Body</li>
                                  <li>Contact & FAQ</li>
                                  <li>Certification</li>
                                  <li>Career</li>
                                  <li>Blog</li>
                                </ul>
                              </div>
                          </div>
                          <div class="col reset-padding">
                              <div class="sitebar-box">
                                <h2>Individual</h2>
                                <ul>
                                  <li>Formations</li>
                                </ul>
                              </div>
                              <div class="sitebar-box">
                                <h2>Company</h2>
                                <ul>
                                  <li>Team recruitment</li>
                                  <li>Upgrade Team</li>
                                </ul>
                              </div>
                              <div class="sitebar-box">
                                <h2>Organization</h2>
                                <ul>
                                  <li>Registration - Organization</li>
                                </ul>
                              </div>
                          </div>
                          <div class="col reset-padding">
                              <div class="sitebar-box">
                                <h2>Connections</h2>
                                <ul>
                                  <li>CGUG</li>
                                  <li>Credits</li>
                                  <li>Legal Notice</li>
                                  <li>DPR</li>
                                  <li>Sitemap</li>
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