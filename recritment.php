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
          <div class="site-bannersection requirement-bannersection">
              <div class="banner-view threebyfourth-size-banner">
                <img src="images/recuritment-banner.png" class="banner-img"/>
              </div>
              <div class="threebyfour-banner-cover-overlay">
                  <div class="threebyfour-banner-cover requirement-banner-content threebyfourth-banner">
                        <div class="banner-content text-center">
                            <h1 class="title">Nous sommes un puzzleaux multiples solutions</h1>
                        </div>
                        <div class="training-tab-section requirement-tab-section">
                            <div class="organization-tab-bar">
                                <div class="container container-60 reset-padding">
                                    <ul class="nav nav-pills row reset-margin">
                                        <li class="col reset-padding">
                                            <span class="needs_span">Nos besoins</span>
                                            <a data-toggle="pill" href="#particulier" class="active" >
                                                Les offres d'emploichez GSM Master
                                            </a>
                                        </li>
                                        <li class="col reset-padding align-self-end">
                                            <a data-toggle="pill" href="#entreprise">
                                                Les offres d'emploi chez nos partenaires
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                </div>
                  
              </div>
          </div>
          
          <section class="site-body-container">
              <div class="training-tab requirement-tab">
                   <div class="container-fluid reset-padding organization-tab-content">
                        <div class="tab-content reset-padding">
                            <div id="particulier" class="tab-pane fade in active show">
                                <div class="tab-pane-titleblog reset-padding">
                                    <h2 class="individual-text">Les offres d'emploi chez GSM Master</h2>
                                    <p class="individual-text">
                                        Vous voulez rejoindre une entreprise établie dans la réparation avec 
                                        une qualité de service reconnue ? Vous êtes passionné/e et dynamique et 
                                        vous cherchez de nouvelles opportunités. Si vous souhaitez contribuer à 
                                        la structuration de la filière, rejoignez notre équipe !
                                    </p>
                                </div>
                                <div class="tab-pane-banner">
                                    <img src="images/taba-banner-requirement.png" class="img-fluid"/>
                                </div>

                                
                                <div class="tab-pane-filterform">
                                    <form name="job-filterform" class="job-filterform row reset-margin">
                                        <div class="col job-filterform-col">
                                            <div class="form-group row mb-4 mx-0">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Rechercher</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="form-group gsmform-search-group has-search">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <span class="fa fa-search form-control-feedback filter-search-icon"></span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row reset-margin">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Ville</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="dropdown gsmDropdown">
                                                        <a class="dropdown-toggle gsm-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Location
                                                        </a>
                                                        <ul class="dropdown-menu gsm-dropdown-menu" style="">
                                                            <hr />
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Paris
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Italy
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Germany
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1 job-filterform-col"></div>
                                        <div class="col job-filterform-col">
                                            <div class="form-group row mb-4 mx-0">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Nom du poste</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="dropdown gsmDropdown">
                                                        <a class="dropdown-toggle gsm-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Designation
                                                        </a>
                                                        <ul class="dropdown-menu gsm-dropdown-menu" style="">
                                                            <hr />
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Designer
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Developer
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row reset-margin">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Type de contrat</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="dropdown gsmDropdown">
                                                        <a class="dropdown-toggle gsm-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Part time / Full time
                                                        </a>
                                                        <ul class="dropdown-menu gsm-dropdown-menu" style="">
                                                            <hr />
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Part time
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Full time
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>

                                </div>

                                <div id="jobs-accordian" class="col-md-12 reset-padding job-accordian-list">
                                  <div class="accordion" id="job">
                                      <div class="card">
                                          <div class="card-header" id="jobhead1">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#job1"
                                              aria-expanded="true" aria-controls="job1">
                                                    <div class="col-md-3 job-company-icon reset-padding">
                                                        <img src="images/gsmmaster_logo.png" class="img-fluid"/>
                                                    </div>
                                                    <div class="col-md-9 job-title align-self-center">
                                                        <h2>Trainer Business Expert</h2>
                                                        <span class="company-name">Company name: GSM Master</span>
                                                        <span class="company-location">Location: Paris</span>
                                                    </div>
                                              </a>
                                          </div>

                                          <div id="job1" class="collapse" aria-labelledby="jobhead1" data-parent="#job">
                                              <div class="card-body">
                                                <ul class="job-info-list">
                                                    <li>Location: Paris</li>
                                                    <li>Experience: 1+ Year</li>
                                                    <li>Department: Marketing</li>
                                                    <li>Salary: 5,000Euro</li>
                                                </ul>
                                                <div class="job_editors">
                                                    <p>
                                                        We are looking for o Ul/UX designer with a special place in his heart 
                                                        for designing and the ability to work in a fast-paced entrepreneurial 
                                                        environment. You should get excited about creating beautiful-looking 
                                                        consumer products (Apps/ Websites/Graphics) that are simple to use, 
                                                        intuitive and responsive.
                                                    </p>
                                                    <h4>Responsibilities</h4>
                                                    <ul>
                                                        <li>
                                                            Execute all visual design stages from concept to final hand over 
                                                            to the technology team 
                                                        </li>
                                                        <li>
                                                            Collaborate with product managers and tech team throughout the design 
                                                            life cycle such as product wireframes, user flows, information architecture. mockups, and visual design. 
                                                        </li>
                                                        <li>
                                                            Design new products, user interfaces. and user experiences from scratch 
                                                            across multiple platforms mobile, desktop, applications. 
                                                        </li>
                                                    </ul>
                                                    <h4>Requirements</h4>
                                                    <ul>
                                                        <li>
                                                            3+ years of experience in Graphics, Illustration & UI/UX design, Formal education in UX/Ul Design, 
                                                            Interaction Design, Motion, Graphic Design, or related field of study is a plus. 
                                                        </li>
                                                        <li>Good aesthetic sense especially in the domains of typography and color theory. </li>
                                                        <li>Strong online portfolio showcasing your best work.</li>
                                                        <li>You must have proven skills with Adobe Suite (Photoshop. 
                                                            Illustrator, After Effects, XD), Sketch, Marvel, Jiro, 
                                                            Trello, Zeplin etc.</li>
                                                    </ul>
                                                </div>
                                                <h4>Skills</h4>
                                                <ul class="job-skill-lists">
                                                    <li>Management</li>
                                                    <li>Motor skillst</li>
                                                    <li>French</li>
                                                </ul>
                                                
                                                <div class="row reset-margin">
                                                    <div class="col-md-4 reset-padding job-curd-operation">
                                                        <h3 class="individual-text">Job Creation Date</h3>
                                                        <label>December 27, 2021</label>
                                                    </div>
                                                    <div class="col-md-4 reset-padding job-curd-operation">
                                                        <h3 class="individual-text">Recruitment Period</h3>
                                                        <label>March 15, 2022 to May 2, 2022</label>
                                                    </div>
                                                    <div class="col-md-4 reset-padding">

                                                    </div>
                                                </div>
                                                <button type="button" class="btn gsm-bg-individual btn-applynow" style="margin-top:110px;">Apply now</button>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="card">
                                            <div class="card-header" id="jobhead2">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#job2"
                                              aria-expanded="true" aria-controls="job2">
                                                    <div class="col-md-3 job-company-icon reset-padding">
                                                        <img src="images/gsmmaster_logo.png" class="img-fluid"/>
                                                    </div>
                                                    <div class="col-md-9 job-title align-self-center">
                                                        <h2>Trainer Business Expert</h2>
                                                        <span class="company-name">Company name: GSM Master</span>
                                                        <span class="company-location">Location: Paris</span>
                                                    </div>
                                              </a>
                                            </div>

                                            <div id="job2" class="collapse" aria-labelledby="jobhead2" data-parent="#job">
                                                <div class="card-body">
                                                    <ul class="job-info-list">
                                                        <li>Location: Paris</li>
                                                        <li>Experience: 1+ Year</li>
                                                        <li>Department: Marketing</li>
                                                        <li>Salary: 5,000Euro</li>
                                                    </ul>
                                                    <div class="job_editors">
                                                        <p>
                                                            We are looking for o Ul/UX designer with a special place in his heart 
                                                            for designing and the ability to work in a fast-paced entrepreneurial 
                                                            environment. You should get excited about creating beautiful-looking 
                                                            consumer products (Apps/ Websites/Graphics) that are simple to use, 
                                                            intuitive and responsive.
                                                        </p>
                                                        <h4>Responsibilities</h4>
                                                        <ul>
                                                            <li>
                                                                Execute all visual design stages from concept to final hand over 
                                                                to the technology team 
                                                            </li>
                                                            <li>
                                                                Collaborate with product managers and tech team throughout the design 
                                                                life cycle such as product wireframes, user flows, information architecture. mockups, and visual design. 
                                                            </li>
                                                            <li>
                                                                Design new products, user interfaces. and user experiences from scratch 
                                                                across multiple platforms mobile, desktop, applications. 
                                                            </li>
                                                        </ul>
                                                        <h4>Requirements</h4>
                                                        <ul>
                                                            <li>
                                                                3+ years of experience in Graphics, Illustration & UI/UX design, Formal education in UX/Ul Design, 
                                                                Interaction Design, Motion, Graphic Design, or related field of study is a plus. 
                                                            </li>
                                                            <li>Good aesthetic sense especially in the domains of typography and color theory. </li>
                                                            <li>Strong online portfolio showcasing your best work.</li>
                                                            <li>You must have proven skills with Adobe Suite (Photoshop. 
                                                                Illustrator, After Effects, XD), Sketch, Marvel, Jiro, 
                                                                Trello, Zeplin etc.</li>
                                                        </ul>
                                                    </div>
                                                    <h4>Skills</h4>
                                                    <ul class="job-skill-lists">
                                                        <li>Management</li>
                                                        <li>Motor skillst</li>
                                                        <li>French</li>
                                                    </ul>
                                                    
                                                    <div class="row reset-margin">
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Job Creation Date</h3>
                                                            <label>December 27, 2021</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Recruitment Period</h3>
                                                            <label>March 15, 2022 to May 2, 2022</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding">

                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn gsm-bg-individual btn-applynow" style="margin-top:110px;">Apply now</button>
                                                </div>
                                            </div>
                                      </div>

                                      <div class="card">
                                            <div class="card-header" id="jobhead3">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#job3"
                                              aria-expanded="true" aria-controls="job3">
                                                    <div class="col-md-3 job-company-icon reset-padding">
                                                        <img src="images/gsmmaster_logo.png" class="img-fluid"/>
                                                    </div>
                                                    <div class="col-md-9 job-title align-self-center">
                                                        <h2>Trainer Business Expert</h2>
                                                        <span class="company-name">Company name: GSM Master</span>
                                                        <span class="company-location">Location: Paris</span>
                                                    </div>
                                              </a>
                                            </div>

                                            <div id="job3" class="collapse" aria-labelledby="jobhead3" data-parent="#job">
                                                <div class="card-body">
                                                    <ul class="job-info-list">
                                                        <li>Location: Paris</li>
                                                        <li>Experience: 1+ Year</li>
                                                        <li>Department: Marketing</li>
                                                        <li>Salary: 5,000Euro</li>
                                                    </ul>
                                                    <div class="job_editors">
                                                        <p>
                                                            We are looking for o Ul/UX designer with a special place in his heart 
                                                            for designing and the ability to work in a fast-paced entrepreneurial 
                                                            environment. You should get excited about creating beautiful-looking 
                                                            consumer products (Apps/ Websites/Graphics) that are simple to use, 
                                                            intuitive and responsive.
                                                        </p>
                                                        <h4>Responsibilities</h4>
                                                        <ul>
                                                            <li>
                                                                Execute all visual design stages from concept to final hand over 
                                                                to the technology team 
                                                            </li>
                                                            <li>
                                                                Collaborate with product managers and tech team throughout the design 
                                                                life cycle such as product wireframes, user flows, information architecture. mockups, and visual design. 
                                                            </li>
                                                            <li>
                                                                Design new products, user interfaces. and user experiences from scratch 
                                                                across multiple platforms mobile, desktop, applications. 
                                                            </li>
                                                        </ul>
                                                        <h4>Requirements</h4>
                                                        <ul>
                                                            <li>
                                                                3+ years of experience in Graphics, Illustration & UI/UX design, Formal education in UX/Ul Design, 
                                                                Interaction Design, Motion, Graphic Design, or related field of study is a plus. 
                                                            </li>
                                                            <li>Good aesthetic sense especially in the domains of typography and color theory. </li>
                                                            <li>Strong online portfolio showcasing your best work.</li>
                                                            <li>You must have proven skills with Adobe Suite (Photoshop. 
                                                                Illustrator, After Effects, XD), Sketch, Marvel, Jiro, 
                                                                Trello, Zeplin etc.</li>
                                                        </ul>
                                                    </div>
                                                    <h4>Skills</h4>
                                                    <ul class="job-skill-lists">
                                                        <li>Management</li>
                                                        <li>Motor skillst</li>
                                                        <li>French</li>
                                                    </ul>
                                                    
                                                    <div class="row reset-margin">
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Job Creation Date</h3>
                                                            <label>December 27, 2021</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Recruitment Period</h3>
                                                            <label>March 15, 2022 to May 2, 2022</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding">

                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn gsm-bg-individual btn-applynow" style="margin-top:110px;">Apply now</button>
                                                </div>
                                            </div>
                                      </div>

                                      <nav class="text-right page-navigation-list">
                                            <ul class="page-navigation">
                                                <span class="page-nav-icon page-left-icon">
                                                    <img src="images/next-page-icon.png" />
                                                </span>
                                                <li class="page-link"><a href="#">1</a></li>
                                                <li class="page-link active"><a href="#">2</a></li>
                                                <li class="page-link"><a href="#">3</a></li>
                                                <span class="page-nav-icon page-right-icon">
                                                    <img src="images/prev-page-icon.png" />
                                                </span>
                                            </ul>
                                      </nav>
                                      
                                      
                                  </div>
                              </div>
                            </div>

                            <div id="entreprise" class="tab-pane fade">
                                <div class="tab-pane-titleblog reset-padding">
                                    <h2 class="individual-text">Les offres d'emploi chez nos partenaires</h2>
                                    <p class="individual-text">
                                        Vous voulez rejoindre une équipe établie dans la réparation avec une qualité de service reconnue ? 
                                        Vous êtes passionné/e et dynamique et vous cherchez de nouvelles opportunités. 
                                        Si vous souhaitez contribuer à la normalisation de la filière, 
                                        rejoignez une entreprise de notre écosystème !
                                    </p>
                                </div>
                                <div class="tab-pane-banner">
                                    <img src="images/taba-banner-requirement_2.png" class="img-fluid"/>
                                </div>

                                <div class="tab-pane-filterform">
                                    <form name="job-filterform" class="job-filterform row reset-margin">
                                        <div class="col job-filterform-col">
                                            <div class="form-group row mb-4 mx-0">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Rechercher</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="form-group gsmform-search-group has-search">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <span class="fa fa-search form-control-feedback filter-search-icon"></span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row reset-margin">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Ville</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="dropdown gsmDropdown">
                                                        <a class="dropdown-toggle gsm-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Location
                                                        </a>
                                                        <ul class="dropdown-menu gsm-dropdown-menu" style="">
                                                            <hr />
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Paris
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Italy
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Germany
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1 job-filterform-col"></div>
                                        <div class="col job-filterform-col">
                                            <div class="form-group row mb-4 mx-0">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Nom du poste</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="dropdown gsmDropdown">
                                                        <a class="dropdown-toggle gsm-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Designation
                                                        </a>
                                                        <ul class="dropdown-menu gsm-dropdown-menu" style="">
                                                            <hr />
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Designer
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Developer
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row reset-margin">
                                                <label for="inputPassword" class="col-sm-4 col-form-label align-self-center reset-padding">Type de contrat</label>
                                                <div class="col-sm-8 align-self-center reset-padding">
                                                    <div class="dropdown gsmDropdown">
                                                        <a class="dropdown-toggle gsm-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Part time / Full time
                                                        </a>
                                                        <ul class="dropdown-menu gsm-dropdown-menu" style="">
                                                            <hr />
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Part time
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="gsm-dropdown-link">
                                                                    Full time
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>

                                </div>

                                <div id="jobs-accordian" class="col-md-12 reset-padding job-accordian-list">
                                  <div class="accordion" id="job">
                                      <div class="card">
                                          <div class="card-header" id="jobhead1">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#job1"
                                              aria-expanded="true" aria-controls="job1">
                                                    <div class="col-md-3 job-company-icon reset-padding">
                                                        <img src="images/gsmmaster_logo_2.png" class="img-fluid"/>
                                                    </div>
                                                    <div class="col-md-9 job-title align-self-center">
                                                        <h2>Trainer Business Expert</h2>
                                                        <span class="company-name">Company name: GSM Master</span>
                                                        <span class="company-location">Location: Paris</span>
                                                    </div>
                                              </a>
                                          </div>

                                          <div id="job1" class="collapse" aria-labelledby="jobhead1" data-parent="#job">
                                              <div class="card-body">
                                                <ul class="job-info-list">
                                                    <li>Location: Paris</li>
                                                    <li>Experience: 1+ Year</li>
                                                    <li>Department: Marketing</li>
                                                    <li>Salary: 5,000Euro</li>
                                                </ul>
                                                <div class="job_editors">
                                                    <p>
                                                        We are looking for o Ul/UX designer with a special place in his heart 
                                                        for designing and the ability to work in a fast-paced entrepreneurial 
                                                        environment. You should get excited about creating beautiful-looking 
                                                        consumer products (Apps/ Websites/Graphics) that are simple to use, 
                                                        intuitive and responsive.
                                                    </p>
                                                    <h4>Responsibilities</h4>
                                                    <ul>
                                                        <li>
                                                            Execute all visual design stages from concept to final hand over 
                                                            to the technology team 
                                                        </li>
                                                        <li>
                                                            Collaborate with product managers and tech team throughout the design 
                                                            life cycle such as product wireframes, user flows, information architecture. mockups, and visual design. 
                                                        </li>
                                                        <li>
                                                            Design new products, user interfaces. and user experiences from scratch 
                                                            across multiple platforms mobile, desktop, applications. 
                                                        </li>
                                                    </ul>
                                                    <h4>Requirements</h4>
                                                    <ul>
                                                        <li>
                                                            3+ years of experience in Graphics, Illustration & UI/UX design, Formal education in UX/Ul Design, 
                                                            Interaction Design, Motion, Graphic Design, or related field of study is a plus. 
                                                        </li>
                                                        <li>Good aesthetic sense especially in the domains of typography and color theory. </li>
                                                        <li>Strong online portfolio showcasing your best work.</li>
                                                        <li>You must have proven skills with Adobe Suite (Photoshop. 
                                                            Illustrator, After Effects, XD), Sketch, Marvel, Jiro, 
                                                            Trello, Zeplin etc.</li>
                                                    </ul>
                                                </div>
                                                <h4>Skills</h4>
                                                <ul class="job-skill-lists">
                                                    <li>Management</li>
                                                    <li>Motor skillst</li>
                                                    <li>French</li>
                                                </ul>
                                                
                                                <div class="row reset-margin">
                                                    <div class="col-md-4 reset-padding job-curd-operation">
                                                        <h3 class="individual-text">Job Creation Date</h3>
                                                        <label>December 27, 2021</label>
                                                    </div>
                                                    <div class="col-md-4 reset-padding job-curd-operation">
                                                        <h3 class="individual-text">Recruitment Period</h3>
                                                        <label>March 15, 2022 to May 2, 2022</label>
                                                    </div>
                                                    <div class="col-md-4 reset-padding">

                                                    </div>
                                                </div>
                                                <button type="button" class="btn gsm-bg-individual btn-applynow" style="margin-top:110px;">Apply now</button>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="card">
                                            <div class="card-header" id="jobhead2">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#job2"
                                              aria-expanded="true" aria-controls="job2">
                                                    <div class="col-md-3 job-company-icon reset-padding">
                                                        <img src="images/gsmmaster_logo_2.png" class="img-fluid"/>
                                                    </div>
                                                    <div class="col-md-9 job-title align-self-center">
                                                        <h2>Trainer Business Expert</h2>
                                                        <span class="company-name">Company name: GSM Master</span>
                                                        <span class="company-location">Location: Paris</span>
                                                    </div>
                                              </a>
                                            </div>

                                            <div id="job2" class="collapse" aria-labelledby="jobhead2" data-parent="#job">
                                                <div class="card-body">
                                                    <ul class="job-info-list">
                                                        <li>Location: Paris</li>
                                                        <li>Experience: 1+ Year</li>
                                                        <li>Department: Marketing</li>
                                                        <li>Salary: 5,000Euro</li>
                                                    </ul>
                                                    <div class="job_editors">
                                                        <p>
                                                            We are looking for o Ul/UX designer with a special place in his heart 
                                                            for designing and the ability to work in a fast-paced entrepreneurial 
                                                            environment. You should get excited about creating beautiful-looking 
                                                            consumer products (Apps/ Websites/Graphics) that are simple to use, 
                                                            intuitive and responsive.
                                                        </p>
                                                        <h4>Responsibilities</h4>
                                                        <ul>
                                                            <li>
                                                                Execute all visual design stages from concept to final hand over 
                                                                to the technology team 
                                                            </li>
                                                            <li>
                                                                Collaborate with product managers and tech team throughout the design 
                                                                life cycle such as product wireframes, user flows, information architecture. mockups, and visual design. 
                                                            </li>
                                                            <li>
                                                                Design new products, user interfaces. and user experiences from scratch 
                                                                across multiple platforms mobile, desktop, applications. 
                                                            </li>
                                                        </ul>
                                                        <h4>Requirements</h4>
                                                        <ul>
                                                            <li>
                                                                3+ years of experience in Graphics, Illustration & UI/UX design, Formal education in UX/Ul Design, 
                                                                Interaction Design, Motion, Graphic Design, or related field of study is a plus. 
                                                            </li>
                                                            <li>Good aesthetic sense especially in the domains of typography and color theory. </li>
                                                            <li>Strong online portfolio showcasing your best work.</li>
                                                            <li>You must have proven skills with Adobe Suite (Photoshop. 
                                                                Illustrator, After Effects, XD), Sketch, Marvel, Jiro, 
                                                                Trello, Zeplin etc.</li>
                                                        </ul>
                                                    </div>
                                                    <h4>Skills</h4>
                                                    <ul class="job-skill-lists">
                                                        <li>Management</li>
                                                        <li>Motor skillst</li>
                                                        <li>French</li>
                                                    </ul>
                                                    
                                                    <div class="row reset-margin">
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Job Creation Date</h3>
                                                            <label>December 27, 2021</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Recruitment Period</h3>
                                                            <label>March 15, 2022 to May 2, 2022</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding">

                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn gsm-bg-individual btn-applynow" style="margin-top:110px;">Apply now</button>
                                                </div>
                                            </div>
                                      </div>

                                      <div class="card">
                                            <div class="card-header" id="jobhead3">
                                              <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#job3"
                                              aria-expanded="true" aria-controls="job3">
                                                    <div class="col-md-3 job-company-icon reset-padding">
                                                        <img src="images/gsmmaster_logo_2.png" class="img-fluid"/>
                                                    </div>
                                                    <div class="col-md-9 job-title align-self-center">
                                                        <h2>Trainer Business Expert</h2>
                                                        <span class="company-name">Company name: GSM Master</span>
                                                        <span class="company-location">Location: Paris</span>
                                                    </div>
                                              </a>
                                            </div>

                                            <div id="job3" class="collapse" aria-labelledby="jobhead3" data-parent="#job">
                                                <div class="card-body">
                                                    <ul class="job-info-list">
                                                        <li>Location: Paris</li>
                                                        <li>Experience: 1+ Year</li>
                                                        <li>Department: Marketing</li>
                                                        <li>Salary: 5,000Euro</li>
                                                    </ul>
                                                    <div class="job_editors">
                                                        <p>
                                                            We are looking for o Ul/UX designer with a special place in his heart 
                                                            for designing and the ability to work in a fast-paced entrepreneurial 
                                                            environment. You should get excited about creating beautiful-looking 
                                                            consumer products (Apps/ Websites/Graphics) that are simple to use, 
                                                            intuitive and responsive.
                                                        </p>
                                                        <h4>Responsibilities</h4>
                                                        <ul>
                                                            <li>
                                                                Execute all visual design stages from concept to final hand over 
                                                                to the technology team 
                                                            </li>
                                                            <li>
                                                                Collaborate with product managers and tech team throughout the design 
                                                                life cycle such as product wireframes, user flows, information architecture. mockups, and visual design. 
                                                            </li>
                                                            <li>
                                                                Design new products, user interfaces. and user experiences from scratch 
                                                                across multiple platforms mobile, desktop, applications. 
                                                            </li>
                                                        </ul>
                                                        <h4>Requirements</h4>
                                                        <ul>
                                                            <li>
                                                                3+ years of experience in Graphics, Illustration & UI/UX design, Formal education in UX/Ul Design, 
                                                                Interaction Design, Motion, Graphic Design, or related field of study is a plus. 
                                                            </li>
                                                            <li>Good aesthetic sense especially in the domains of typography and color theory. </li>
                                                            <li>Strong online portfolio showcasing your best work.</li>
                                                            <li>You must have proven skills with Adobe Suite (Photoshop. 
                                                                Illustrator, After Effects, XD), Sketch, Marvel, Jiro, 
                                                                Trello, Zeplin etc.</li>
                                                        </ul>
                                                    </div>
                                                    <h4>Skills</h4>
                                                    <ul class="job-skill-lists">
                                                        <li>Management</li>
                                                        <li>Motor skillst</li>
                                                        <li>French</li>
                                                    </ul>
                                                    
                                                    <div class="row reset-margin">
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Job Creation Date</h3>
                                                            <label>December 27, 2021</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding job-curd-operation">
                                                            <h3 class="individual-text">Recruitment Period</h3>
                                                            <label>March 15, 2022 to May 2, 2022</label>
                                                        </div>
                                                        <div class="col-md-4 reset-padding">

                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn gsm-bg-individual btn-applynow" style="margin-top:110px;">Apply now</button>
                                                </div>
                                            </div>
                                      </div>
                                      <nav class="text-right page-navigation-list">
                                            <ul class="page-navigation">
                                                <span class="page-nav-icon page-left-icon">
                                                    <img src="images/next-page-icon.png" />
                                                </span>
                                                <li class="page-link"><a href="#">1</a></li>
                                                <li class="page-link active"><a href="#">2</a></li>
                                                <li class="page-link"><a href="#">3</a></li>
                                                <span class="page-nav-icon page-right-icon">
                                                    <img src="images/prev-page-icon.png" />
                                                </span>
                                            </ul>
                                      </nav>
                                      
                                  </div>
                              </div>
                            </div>
                    
                            
                        </div>
                    </div>
                </div>   
                
                <div class="carrer-application-formSection">
                    <div class="container container-70 reset-padding">
                        <div class="application-section">
                            <p class="individual-text application-form-intro">
                                Si aucun poste ci-dessus ne te correspond, tu peux nous transmettre ta candidature 
                                spontanée ci-dessous. Nous sommes toujours en recherche des perles rares
                            </p>
                            <form>
                                <div class="form-row twospaces-row reset-margin">
                                    <div class="form-group gsm-form-group col-md-6">
                                    <label class="gsm-form-label individual-text">Prénom <span style="color:#EC0040;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-6">
                                    <label class="gsm-form-label individual-text">Nom <span style="color:#EC0040;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your full name">
                                    </div>
                                </div>
                                <div class="form-row twospaces-row reset-margin">
                                    <div class="form-group gsm-form-group col-md-6">
                                    <label class="gsm-form-label individual-text">Numéro de téléphone <span style="color:#EC0040;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your Phone Number">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-6">
                                    <label class="gsm-form-label individual-text">Adresse e-mail <span style="color:#EC0040;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Veuillez saisir">
                                    </div>
                                </div>
                                <div class="form-row twospaces-row reset-margin">
                                    <div class="form-group gsm-form-group col-md-6">
                                    <label class="gsm-form-label individual-text">Post Applied for <span style="color:#EC0040;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your Phone Number">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-6">
                                    <label class="gsm-form-label individual-text">Chargez votre CV <span style="color:#EC0040;">*</span></label>
                                    <div class="file-upload-wrapper col-lg-12 col-md-12 col-sm-12" data-text="File name will appear here ">
                                        <input name="file-upload-field" type="file" class="file-upload-field" value="">
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-4">
                                <button type="button" class="btn gsm-bg-individual btn-gsm-lg">Soumettre</button>
                                </div>
                                
                            </form>
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