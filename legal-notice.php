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
                  <div class="legalnotice-content reset-padding">
                      <div class="row legalnotice-row reverse-row-mobile reset-margin">
                          <div class="col-md-5 legalnotice-col d-none d-md-block">
                            <h1>Conditions Générales d’Utilisation</h1>
                            <ul class="legalnotice-lists">
                                <li><label>GSM MASTER - TRAINING ORGANIZATION</label></li>
                                <li><label>ADDRESS: </label>2 rue Perdonnet, 75010 Paris</li>
                                <li><label>SIRET: </label>44978889200015</li>
                                <li><label>N ° TRAINING ORGANIZATION: </label>11755077875</li>
                            </ul>
                            <ul class="legalnotice-lists">
                                <li><label>Director of publication: </label>Mme Shreedarani SIVATHASAN</li>
                                <li><label>Host: </label>OVH, 2 rue Kellermann - 59100 Roubaix - France, Tel: +33 9 72 10 10 07</li>
                                <li><label>Creation and design graphic: </label></li>
                                <li><label>Director of publication: </label>Mme Shreedarani SIVATHASAN</li>
                                <li><label>Host: </label>OVH, 2 rue Kellermann - 59100 Roubaix - France, Tel: +33 9 72 10 10 07</li>
                                <li><label>Creation and design graphic: </label></li>
                            </ul>
                          </div>
                          <div class="col-md-7 reset-padding">
                            <img src="images/overhead-shot-looking.png"  class="legal-banner"/>
                          </div>
                          
                      </div>
                  </div>
              </div>
              
          </div>
          
          <section class="site-body-container">
                        <div class="mobile-legal-container legalnotice-col d-block d-md-none">
                            <h1>Conditions Générales d’Utilisation</h1>
                            <ul class="legalnotice-lists">
                                <li><label>GSM MASTER - TRAINING ORGANIZATION</label></li>
                                <li><label>ADDRESS: </label>2 rue Perdonnet, 75010 Paris</li>
                                <li><label>SIRET: </label>44978889200015</li>
                                <li><label>N ° TRAINING ORGANIZATION: </label>11755077875</li>
                            </ul>
                            <ul class="legalnotice-lists">
                                <li><label>Director of publication: </label>Mme Shreedarani SIVATHASAN</li>
                                <li><label>Host: </label>OVH, 2 rue Kellermann - 59100 Roubaix - France, Tel: +33 9 72 10 10 07</li>
                                <li><label>Creation and design graphic: </label></li>
                                <li><label>Director of publication: </label>Mme Shreedarani SIVATHASAN</li>
                                <li><label>Host: </label>OVH, 2 rue Kellermann - 59100 Roubaix - France, Tel: +33 9 72 10 10 07</li>
                                <li><label>Creation and design graphic: </label></li>
                            </ul>
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