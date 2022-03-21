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
    <!-- <link rel="stylesheet" href="css/responsive.css" /> -->
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

                    <div class="course_Section mt-5 d-none d-lg-block">
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
              <div class="indicator-view fullsize-banner" style="background-image: url('images/background_banner.png');">
                      <div class="container container-70 indicator-content reset-padding">
                          <div class="row content-row">
                            <div class="col-md-7 title-banner text-left align-self-center">
                                <h2>Indicateurs de qualité</h2>
                                <p>Pour toujours vous accueillir dans les meilleurs conditions, 
                                  GSM Master est dans une démarche d’amélioration continue. 
                                  Dans une démarche de transparence nous vous proposons une courte 
                                  explication de nos indicateurs de qualité (logos, certification, label....).</p>
                                  <button type="button" class="btn gsm-bg-white btn-gsm-md">En savoir plus</button>
                            </div>
                            <div class="col-md-5 picture-banner">
                                <img src="images/squre.jpg" class="img-fluid rounded-circle"/>
                            </div>
                          </div>
                      </div>
              </div>
              
          </div>
          
          <section class="site-body-container">
             

              <div class="container container-70 reset-padding indicator-container">
                  <h2 class="individual-text title">Nos labels de qualité</h2>
                  <ul id="qualityTab" class="nav nav-tabs"  role="tablist">
                    <li>
                      <a class="tab-nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">
                        <img src="images/indicators-logo-1.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">
                        <img src="images/indicators-logo-2.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">
                        <img src="images/indicators-logo-3.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">
                        <img src="images/indicators-logo-4.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="false">
                        <img src="images/indicators-logo-3.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="six-tab" data-toggle="tab" href="#six" role="tab" aria-controls="six" aria-selected="false">
                        <img src="images/indicators-logo-2.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="seven-tab" data-toggle="tab" href="#seven" role="tab" aria-controls="seven" aria-selected="false">
                        <img src="images/indicators-logo-4.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="eight-tab" data-toggle="tab" href="#eight" role="tab" aria-controls="eight" aria-selected="false">
                        <img src="images/indicators-logo-2.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link active" id="nine-tab" data-toggle="tab" href="#nine" role="tab" aria-controls="nine" aria-selected="true">
                        <img src="images/indicators-logo-1.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="ten-tab" data-toggle="tab" href="#ten" role="tab" aria-controls="ten" aria-selected="false">
                        <img src="images/indicators-logo-2.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="eleven-tab" data-toggle="tab" href="#eleven" role="tab" aria-controls="eleven" aria-selected="false">
                        <img src="images/indicators-logo-4.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="twelve-tab" data-toggle="tab" href="#twelve" role="tab" aria-controls="twelve" aria-selected="false">
                        <img src="images/indicators-logo-3.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="threeteen-tab" data-toggle="tab" href="#threeteen" role="tab" aria-controls="threeteen" aria-selected="false">
                        <img src="images/indicators-logo-1.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="fourteen-tab" data-toggle="tab" href="#fourteen" role="tab" aria-controls="fourteen" aria-selected="false">
                        <img src="images/indicators-logo-4.png" />
                      </a>
                    </li>
                    <li>
                      <a class="tab-nav-link" id="fifteen-tab" data-toggle="tab" href="#fifteen" role="tab" aria-controls="fifteen" aria-selected="false">
                        <img src="images/indicators-logo-2.png" />
                      </a>
                    </li>
                    
                  </ul>
                  <div id="qualityTab-Content" class="tab-content" >
                    <div class="tab-pane  show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                      <img src="images/indicators-logo-1.png" class="indicator-icon" />
                      <h1>Qualiopi</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>


                    <div class="tab-pane " id="two" role="tabpanel" aria-labelledby="two-tab">
                      <img src="images/indicators-logo-2.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="three" role="tabpanel" aria-labelledby="three-tab">
                      <img src="images/indicators-logo-3.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="four" role="tabpanel" aria-labelledby="four-tab">
                      <img src="images/indicators-logo-4.png" class="indicator-icon" />
                      <h1>MONCOMPTE</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="five" role="tabpanel" aria-labelledby="five-tab">
                      <img src="images/indicators-logo-3.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="six" role="tabpanel" aria-labelledby="six-tab">
                      <img src="images/indicators-logo-2.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="seven" role="tabpanel" aria-labelledby="seven-tab">
                      <img src="images/indicators-logo-4.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="eight" role="tabpanel" aria-labelledby="eight-tab">
                      <img src="images/indicators-logo-2.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="nine" role="tabpanel" aria-labelledby="nine-tab">
                      <img src="images/indicators-logo-1.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="ten" role="tabpanel" aria-labelledby="ten-tab">
                      <img src="images/indicators-logo-2.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="eleven" role="tabpanel" aria-labelledby="eleven-tab">
                      <img src="images/indicators-logo-4.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="twelve" role="tabpanel" aria-labelledby="twelve-tab">
                      <img src="images/indicators-logo-3.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="threeteen" role="tabpanel" aria-labelledby="threeteen-tab">
                      <img src="images/indicators-logo-1.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="fourteen" role="tabpanel" aria-labelledby="fourteen-tab">
                      <img src="images/indicators-logo-4.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <div class="tab-pane " id="fifteen" role="tabpanel" aria-labelledby="fifteen-tab">
                      <img src="images/indicators-logo-2.png" class="indicator-icon" />
                      <h1>Paris</h1>
                      <p>
                        Nous avons voulu donner à tous la possibilité de réussir à s'épanouir grâce à la certification. 
                        Pour cela nous avons mis des prérequis accessibles au plus grand nombre (parler, comprendre, 
                        lire le français et connaitre les quatre opérations mathématiques). Si tu es intéressé par la 
                        formation et que tu n'as aucune expérience tu peux t'inscrire ici
                      </p>
                      <button type="button" class="btn gsm-bg-individual btn-gsm-md">Learn more</button>
                    </div>

                    <a class="prevtab"><i><img src="images/prev-i.png" /></i> Prev</a>
                    <a class="nexttab">Next <i><img src="images/next-i.png" /></i></a>
                  </div>
                  
              </div>      <!-- /.container -->
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