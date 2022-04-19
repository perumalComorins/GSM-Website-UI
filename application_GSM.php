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
              <div class="application-page-banner banner-content">
                    <div class="container container-65 reset-padding">
                        <div class="row reset-margin">
                            <div class="col-7 col-md-5 banner-text ">
                              <h2 class="text-center">Welcome to GSM Master</h2>
                            </div>
                            <div class="col-5 col-md-6 d-block d-md-none reset-padding">
                              <img src="images/placeit-close-up.png" class="img-fluid" />
                            </div>
                        </div>
                    </div>
              </div>
          </div>
          
          <section class="site-body-container">
                <div class="container container-65 applicationpage-body-container reset-padding">
                    <div class="row reset-margin"> 
                            <div class="col-md-5 profile-picture-section reset-padding d-none d-md-block">
                              <img src="images/placeit-close-up.png" class="img-fluid" />
                            </div>
                            <div class="col-md-1 reset-padding">
                            </div>
                            <div class="col-md-6 profile-form-section">
                                <form id="gsmProfile-form">
                                  <h2 class="gsmProfile-title">Application form</h2>
                                  <p class="individual-text gsmProfile-content">Check out our alternating profiles or submit your recruitment offer to certified</p>
                                  <div class="form-row singlespace-row reset-margin">
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                      <label for="profileform-Fname" class="gsm-form-label individual-text">First Name</label>
                                      <input type="text" class="form-control" id="profileform-Fname" aria-describedby="emailHelp" placeholder="Enter your first name">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                      <label for="profileform-Lname" class="gsm-form-label individual-text">Last Name</label>
                                      <input type="text" class="form-control" id="profileform-Lname" placeholder="Enter your last name">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                      <label for="profileform-Email" class="gsm-form-label individual-text">Email </label>
                                      <input type="email" class="form-control" id="profileform-Email" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                      <label for="profileform-Phno" class="gsm-form-label individual-text">Phone Number </label>
                                      <input type="text" class="form-control" id="profileform-Phno" placeholder="Enter your Phone Number">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                      <label for="profileform-Location" class="gsm-form-label individual-text">Location </label>
                                      <input type="text" class="form-control" id="profileform-Location" placeholder="Enter your locationp">
                                    </div>
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                        <label for="profileform-Location" class="gsm-form-label individual-text">Post Applied for </label>
                                        <div class="dropdown gsmDropdown">
                                          <a class="dropdown-toggle gsm-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            The post you are going to apply for
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
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                      <label for="profileform-Location" class="gsm-form-label individual-text">Description</label>
                                      <textarea class="form-control" placeholder="Enter a few lines about your fit with this job" rows="5"></textarea>
                                    </div>
                                    <div class="form-group gsm-form-group col-md-12 reset-padding mb-4">
                                      <label for="profileform-Location" class="gsm-form-label individual-text">Insert your CV</label>
                                      <div class="file-upload-wrapper col-lg-12 col-md-12 col-sm-12" data-text="File name will appear here ">
                                          <input name="file-upload-field" type="file" class="file-upload-field" value="">
                                      </div>
                                    </div>
                                    <p class="Profile-disclaimer individual-text">
                                      Disclaimer: here the legal conditions will be informed to the user.
                                    </p>
                                  </div>
                                  
                                  <div class="form-check emailform-check">
                                    <input type="checkbox" class="form-check-input emailform-check-input" id="emailform-check-label">
                                    <label class="form-check-label emailform-label" for="emailform-check-label">I agree that all the above details are right</label>
                                  </div>
                                  <button type="button" class="btn gsm-bg-individual btn-block">Submit</button>
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
</body>
</html>