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
                            <li><a href="#">Indicateurs de qualit??</a></li>
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
              <div class="banner-view threebyfourth-size-banner">
                <img src="images/contact-faq-bg.png" class="banner-img"/>
              </div>
              <div class="threebyfour-banner-cover-overlay">
                  <div class="threebyfour-banner-cover contactfaq-banner-content threebyfourth-banner">
                      <div class="banner-content text-center">
                          <h1 class="title">Une question ?</h1>
                          <form name="contactfaq-searchForm" class="container container-45 contactfaq-searchForm search-form my-2">
                              <input name="search-for-contactfaq" class="search-for-contactfaq form-control mr-sm-0 rounded-0 border-right-0" type="search" placeholder="Comment pouvons-nous vous aider ?" aria-label="Search">
                              <button class="btn btn-search-gsm gsm-bg-individual border-0 rounded-0 my-sm-0 waves-effect waves-light" type="subuttonbmit"><img src="images/icon-feather-search.png" style="width:16px;height:16px;"></button>
                          </form>
                      </div>
                      
                  </div>
                  
              </div>
          </div>
          
          <section class="site-body-container">
              <div class="contactfaq-tab-section">
                    <div class="contactfaq-tab-bar">
                        <div class="container container-50 reset-padding">
                            <ul id="contactfaq-nav" class="nav nav-pills row reset-margin">
                                <li class="col text-center list-active">
                                  <a data-toggle="pill" href="#home" class="active" >
                                    <img src="images/noun_individual.png" />
                                    <h2>Particulier</h2>
                                    <p>Vous n???avez pas d???exp??rience dans la r??paration et vous souhaitez vous former. </p>
                                  </a>
                                </li>
                                <li class="col text-center">
                                  <a data-toggle="pill" href="#menu1">
                                    <img src="images/noun_user_favorite.png" />
                                    <h2>Entreprise</h2>
                                    <p>Vous ??tes un professionnel du secteur et vous voulez faire monter vos ??quipes en comp??tence 
                                      ou reconna??tre leur qualification.</p>
                                  </a>
                                </li>
                                <li class="col text-center">
                                  <a data-toggle="pill" href="#menu2">
                                    <img src="images/noun_organization.png" />
                                    <h2>Partenaire</h2>
                                    <p>Vous ??tes un organisme de formation ou une association 
                                      et vous souhaitez proposer une collaboration ?? GSM Master. </p>
                                  </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="container-fluid reset-padding organization-tab-content">
                        <div class="tab-content container container-55 reset-padding">
                              <div id="home" class="tab-pane fade in active show">
                                <div id="contact-faq-accordian" class="col-md-12 reset-padding faq-accordian-list">
                                  <h2 class="title">Questions fr??quentes - particulier</h2>
                                  <div class="accordion" id="faq">
                                      <div class="card">
                                          <div class="card-header" id="faqhead1">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
                                              aria-expanded="true" aria-controls="faq1">Entrer votre question ici</a>
                                          </div>

                                          <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                              <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqhead2">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                              aria-expanded="true" aria-controls="faq2">Entrer votre question ici</a>
                                          </div>

                                          <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                              <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqhead3">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                              aria-expanded="true" aria-controls="faq3">Entrer votre question ici</a>
                                          </div>

                                          <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                              <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqhead3">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                              aria-expanded="true" aria-controls="faq3">Entrer votre question ici</a>
                                          </div>

                                          <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                              <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqhead3">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                              aria-expanded="true" aria-controls="faq3">Entrer votre question ici</a>
                                          </div>

                                          <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                              <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqhead3">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                              aria-expanded="true" aria-controls="faq3">Entrer votre question ici</a>
                                          </div>

                                          <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                              <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                          </div>
                                      </div>

                                      
                                  </div>
                              </div>
                              <div id="menu1" class="tab-pane fade">
                                        <h2>asdfasdf asdf adsf </h2>
                              </div>
                        </div>
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
  <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.20.0/js/mdb.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/main.js"></script>

  <script type="text/javascript">
      jQuery(document).ready(function($) {
            $('#contactfaq-nav li a').on('click', function(event) {
                    $("#contactfaq-nav li").removeClass("list-active");
                    $(this).parent().addClass("list-active");
                    event.preventDefault();
            });
      });
  </script>
</body>
</html>