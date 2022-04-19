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
<body class="inner-page">
 
  <div id="wrapper">
      <div class="overlay"></div>

      <!-- Sidebar -->
      <?php include 'includes/sidepanel.php'; ?>
      
      <div id="page-content-wrapper" class="container-fluid reset-padding">
          <header class="site-header site-navbar site-navbar-target">
              <?php include 'includes/header.php'; ?>
          </header>
          <div class="site-bannersection">
              <div class="terms-privacy-legal-view fullsize-banner" style="background-image: url('images/background_banner.png');">
                  <div class="container container-70 terms-privacy-legal-content reset-padding">
                      <div class="row terms-privacy-legal-row">
                          <h1>Conditions Générales d’Utilisation</h1>
                          <img src="images/mask-Group-1.png" class="img-fluid"/>
                      </div>
                  </div>
              </div>
              
          </div>
          
          <section class="site-body-container">
                <div class="container container-70 policy-content-box reset-padding">
                  <h4>Purpose of the site</h4>
                  <p>
                  The GSM Master website, a training organization, offers a global service to its users. It presents information and 
                  services relating to the research and financing of vocational training.
                  </p>

                  <h4>Preliminary information for users</h4>
                  <p>
                  By consulting and using the site www.gsmmaster.fr, the user accepts and recognizes the present general 
                  conditions of use applicable to this site. The user is informed that GSM Master may modify and update these 
                  general conditions of use. The user therefore undertakes to keep himself regularly informed of any changes to 
                  these general conditions of use of the site www.gsmmaster.fr.
                  </p>

                  <h4>Site terms of use By the user</h4>
                  <p>
                  The use of the services provided by the site www.gsmmaster.fr requires in particular the provision of an e-mail 
                  address, name and telephone number for each user. It is up to the user to ensure the confidentiality of this 
                  information and its non-fraudulent use.
                  </p>
                  <p>
                  The use and / or modification of the aforementioned information is the sole responsibility of the user. The user 
                  undertakes not to make any use of it other than personal.
                  It is also up to the user to keep the aforementioned information and to provide a functional e-mail address to 
                  allow him to access the services provided by the site www.gsmmaster.fr.
                  </p>

                  <h4>Tele-services and electronic exchanges</h4>
                  <p>The www.gsmmaster.fr site allows users to access several GSM Master services, to take steps with the latter or to 
                  ask questions electronically. GSM Master then sends an acknowledgment of receipt or an electronic registration 
                  acknowledgment stating that the user's request has been taken into account.</p>
                  
                  <h4>Cookies Policy</h4>
                  <p>Access to certain content on the gsmmaster.fr site supposes that you send us personal data about yourself. 
                  When you browse our website, this information may be recorded, or read, in your terminal.</p>

                  <h4>Responsibility for the operation of the site</h4>
                  <p>The continuity of the services provided by the site www.gsmmaster.fr is in principle ensured, subject to any 
                  failures resulting from Internet service providers and / or those that may disrupt or interrupt the connection to the 
                  network or to the site.</p>

                  <p>Any difficulties in accessing the site which may result from various failures of the Internet network (resulting from 
                  access providers, connection difficulties or others) cannot engage the responsibility of GSM Master.</p>

                  <p>The user is also informed that the information and other data provided by GSM Master on the site 
                  www.gsmmaster.fr are purely indicative and have no contractual value. These data and information do not 
                  engage the responsibility of GSM Master and can at any time be updated or deleted at its initiative.</p>



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