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
                <div class="static-banner-organisation banner-view fullsize-banner">
                    <img src="images/organisation-bg.png" class="banner-img"/>
                </div>
                <div id="banner-overlay">
                    <div class="organization-banner-content">
                        <div class="banner-content">
                            <h1 class="title">Collaborez avec GSM Master</h1>
                            <p class="content">
                                Rejoignez notre projet de structurer la filière de la réparation de produits nomades 
                                à travers la formation des techniciens et techniciennes.
                            </p>
                            <div class="btn-box-wrapper text-left mt-4">
                                <button type="button" class="btn gsm-outline-transparent btn-gsm-statics-size">Learn more</button>
                                <button type="button" class="btn gsm-bg-white btn-gsm-statics-size mx-3">REGISTER</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
          
            <section class="site-body-container">
                <div class="organization-intro-section container container-65 reset-padding">
                    <div class="intro-section text-center">
                    <h2 class="intro-title">Proposer une formation de <span class="partner-text">QUALITE</span> une exigence GSM Master</h1>
                    <p class="intro-content">
                        Nous proposons une collaboration sur tout le territoire national aux centres de 
                        formations qui souhaitent transmettre les compétences pour réparer en sécurité 
                        et en conformité en adéquation avec les normes constructeurs. Afin d'établir 
                        les démarches pour mettre en place cette collaboration merci de compléter le 
                        formulaire ci-dessous.
                    </p>
                    </div>
                </div> <!-- What we do section -->
                
                <div class="satisfaction-rate d-none d-lg-block" style="background-image: url('images/map-bg.png');">
                  <div class="satisfaction-rate-innersection container container-60 reset-padding" >
                      <div class="title-bar text-center">
                        <h2>Notre taux de  <span class="partner-text text-uppercase">SATISFACTION GLOBAL</span></h2>
                        <p class="intro-content individual-text">Nos taux de réussite de la certification pour "Réparateur(trice) produits nomades" de 2016 à aujourd'hui  </p>
                      </div>
                      <div class="satisfaction-rate-section">
                          <h4>Satisfaction rate</h4>
                          <canvas id="horizontalBar" class="satisfactionBar"></canvas>
                      </div>
                      
                  </div>
                </div>

                <div class="training-tab-section">
                    <h2 class="individual-text text-center mt-2">Ready to collaborate?</h2>
                    
                    <div class="organization-tab-bar">
                        <div class="container container-65 reset-padding">
                            <ul class="nav nav-pills row reset-margin">
                                <li class="col reset-padding"><a data-toggle="pill" href="#home" class="active align-self-center" >Dispenser nos formations</a></li>
                                <li class="col reset-padding"><a data-toggle="pill" href="#menu1" class="align-self-center">Collaborer avec GSM Master</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="container-fluid reset-padding organization-tab-content">
                        <div class="tab-content container container-65 reset-padding">
                            <div id="home" class="tab-pane fade in active show">
                              <div class="organize-register-section">
                                  <form class="organize-registration-form">
                                    <div class="draft-continue-indicator text-right mb-5">
                                      <button type="button" class="btn gsm-bg-company">Continuer à partir d'un brouillon</button>
                                    </div>
                                    
                                    <div class="alert alert-info alert-gsm alert-dismissible fade show">
                                      <span>There are still some files to be uploaded. Do you want to submit now and upload later? .</span>
                                      <button type="button" class="close gsm-bg-white" data-dismiss="alert">Oui</button>
                                    </div>
                                    <div class="form-row twospaces-row reset-margin">
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Nom de l’organisme de formation</label>
                                          <input type="text" class="form-control" placeholder="Nom de votre structure">
                                        </div>
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Nom de l’interlocuteur</label>
                                          <input type="text" class="form-control" placeholder="Prénom et NOM">
                                        </div>
                                    </div>
                                    <div class="form-row twospaces-row reset-margin">
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Email*</label>
                                          <input type="text" class="form-control" placeholder="Adresse mail professionnelle">
                                        </div>
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Numéro de Téléphone</label>
                                          <input type="text" class="form-control" placeholder="01 40 05 03 43">
                                        </div>
                                    </div>
                                    <div class="form-row singlespace-row mb-4">
                                        <div class="form-group gsm-form-group col-md-12">
                                          <label class="gsm-form-label individual-text">Adresse Postale*</label>
                                          <input type="text" class="form-control" placeholder="Numéro et libellé de la voie">
                                        </div>
                                    </div>
                                   <div class="form-row twospaces-row reset-margin">
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Code postal*</label>
                                          <input type="text" class="form-control" placeholder="Code postale">
                                        </div>
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Pays*</label>
                                          <input type="text" class="form-control" placeholder="Pays de résidence">
                                        </div>
                                    </div>
                                    <div class="form-row twospaces-row reset-margin">
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Etat*</label>
                                          <input type="text" class="form-control" placeholder="Etat de résidence">
                                        </div>
                                        <div class="form-group gsm-form-group col-md-6">
                                          <label class="gsm-form-label individual-text">Ville*</label>
                                          <input type="text" class="form-control" placeholder="Ville de résidence">
                                        </div>
                                    </div>
                                    
                                    <div class="form-row singlespace-row mb-4">
                                        <div class="form-group gsm-form-group col-md-12">
                                          <label class="gsm-form-label individual-text">Commentaire</label>
                                          <textarea class="form-control" placeholder="Préciser votre demande en quelqueq lignes" rows="5"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="organize-form-submission text-center">
                                      <button type="button" class="btn gsm-bg-individual btn-gsm-lg">Enregistrer ma demande</button>
                                    </div>
                                    
                                  </form>
                              </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="organize-register-section">
                                      <form class="organize-registration-form">
                                        
                                        <div class="form-row twospaces-row reset-margin">
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Nom de l’organisme de formation</label>
                                              <input type="text" class="form-control" placeholder="Nom de votre structure">
                                            </div>
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Nom de l’interlocuteur</label>
                                              <input type="text" class="form-control" placeholder="Prénom et NOM">
                                            </div>
                                        </div>
                                        <div class="form-row twospaces-row reset-margin">
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Email*</label>
                                              <input type="text" class="form-control" placeholder="Adresse mail professionnelle">
                                            </div>
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Numéro de Téléphone</label>
                                              <input type="text" class="form-control" placeholder="01 40 05 03 43">
                                            </div>
                                        </div>
                                        <div class="form-row singlespace-row mb-4">
                                            <div class="form-group gsm-form-group col-md-12">
                                              <label class="gsm-form-label individual-text">Adresse Postale*</label>
                                              <input type="text" class="form-control" placeholder="Numéro et libellé de la voie">
                                            </div>
                                        </div>
                                      <div class="form-row twospaces-row reset-margin">
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Code postal*</label>
                                              <input type="text" class="form-control" placeholder="Code postale">
                                            </div>
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Pays*</label>
                                              <input type="text" class="form-control" placeholder="Pays de résidence">
                                            </div>
                                        </div>
                                        <div class="form-row twospaces-row reset-margin">
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Etat*</label>
                                              <input type="text" class="form-control" placeholder="Etat de résidence">
                                            </div>
                                            <div class="form-group gsm-form-group col-md-6">
                                              <label class="gsm-form-label individual-text">Ville*</label>
                                              <input type="text" class="form-control" placeholder="Ville de résidence">
                                            </div>
                                        </div>
                                        
                                        <div class="form-row singlespace-row mb-4">
                                            <div class="form-group gsm-form-group col-md-12">
                                              <label class="gsm-form-label individual-text">Commentaire</label>
                                              <textarea class="form-control" placeholder="Préciser votre demande en quelqueq lignes" rows="5"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="organize-form-submission text-center">
                                          <button type="button" class="btn gsm-bg-individual btn-gsm-lg">Enregistrer ma demande</button>
                                        </div>
                                        
                                      </form>
                                </div>
                            </div>

                            <p class="individual-text text-center question-text">Poser une question</p>
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
    new Chart(document.getElementById("horizontalBar"), {
      "type": "horizontalBar",
      "data": {
          "labels": ["9", "7", "5", "3"],
          "datasets": [{
            "data": [2016, 2005, 2010, 2021],
            "fill": false,
            "backgroundColor": ["#4EBDE4", "#4EBDE4",
            "#4EBDE4", "#4EBDE4"
            ],
            borderWidth: 2,
            borderRadius: 12,
            borderSkipped: false,
          }]
      },
      "options": {
        legend: {display: false},
        title: {
          display: false,
          text: "Satisfaction Rate"
        },
        "scales": {
            "xAxes": [{
              "ticks": {
                suggestedMin: 2000,
                suggestedMax: 2030
              }
            }]
        }
      }
    });
  </script>
</body>
</html>