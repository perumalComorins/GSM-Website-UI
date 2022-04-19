<!DOCTYPE html>
<html class="no-touch">
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
    <link rel="stylesheet" type='text/css' media='screen' href="css/responsive.css" />
</head>
<body class="inner-page">
 
  <div id="wrapper">
      <div class="overlay"></div>

      <!-- Sidebar -->
      <?php include 'includes/sidepanel.php'; ?>

      <div id="page-content-wrapper" class="container-fluid reset-padding">
          <header class="site-header draft-navbar site-navbar-target">
              <?php include 'includes/header-draft.php'; ?>
          </header>
          
          
          <section class="site-body-container draft-body-container">
              <div id="emaillogin">
                <h1 class="text-center">
                    <img src="images/site-logo-color.png" class="site-login-icon"/>
                </h1>
                <form name="emaillogin_form" id="emaillogin_form" action="" method="">
                  <h2 class="emaillogin-title">Entrez l'email et le code transmis lors de la création</h2>
                  <div class="form-row singlespace-row reset-margin">
                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-3">
                      <label for="emailform-Email" class="gsm-form-label individual-text">E-mail</label>
                      <input type="email" class="form-control" id="emailform-Email" aria-describedby="emailHelp" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-3">
                      <label for="emailform-Password" class="gsm-form-label individual-text">Numéro de dossier</label>
                      <input type="text" class="form-control" id="emailform-Password" placeholder="Numéro de dossier fourni par mail">
                    </div>
                  </div>
                  
                  <div class="form-check emailform-check">
                    <input type="checkbox" class="form-check-input emailform-check-input" id="emailform-check-label">
                    <label class="form-check-label emailform-label" for="emailform-check-label">I agree to <span class="individual-text">Terms of Service</span> and <span class="individual-text">Privacy Policy</span></label>
                  </div>
                  <button type="button" class="btn gsm-bg-individual btn-block">Ouvrir le brouillon</button>
                </form>
              </div>

              <div id="publishModal" class="modal fade emailpopup-box" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-body text-center individual-text">
                          <h2>Votre dossier a bien été enregistré</h2>
                          <p>Votre code est le [CODE] merci de rentrer votre adresse mail et le code pour retrouver votre demande</p>
                          <button type="button" class="btn gsm-bg-individual btn-gsm-lg">Retour</button>
                      </div>
                  </div>
                </div>
              </div>
              <div id="draftModal" class="modal fade emailpopup-box" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-body text-center individual-text">
                          <h2>Votre dossier a bien été enregistré</h2>
                          <p>Votre code est le [CODE] merci de rentrer votre adresse mail et le code pour retrouver vos données et modifier votre demande</p>
                          <button type="button" class="btn gsm-bg-individual btn-gsm-lg">Retour</button>
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
  <script src="js/owl.carousel.js"></script>
  <script src="js/main.js"></script>
</body>
</html>