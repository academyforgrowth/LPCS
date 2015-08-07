<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "afton.rhodes@academyforgrowth.co.uk";
     
    $email_subject = "Good News - A New Enquiry.";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // not required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Company Name you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "\nGreat News! A visitor to your Website That Sells has just completed the meeting request form.\n

Details below...\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Company Name: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->

<?php 

include 'admin/var.php'; 
include 'admin/language.php';

?>

<!DOCTYPE html>
<html lang="en">
<!-- HEAD START -->
<head>
<?php include ("assets/php/head.php"); ?>
<!-- TITLE START -->
<title><?php echo $company_name ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
<!-- TITLE END -->
</head>
<!-- HEAD END -->

<body>

  <!-- NAV START -->
  <?php include ("assets/php/nav.php"); ?>
  <!-- NAV END -->


  <!-- #Header -->

  <header id="header" class="bg-image" role="banner">
    <div class="bg-image-overlay">
      <div class="container">
        
        <div class="row">

          <div class="col-sm-5">
            <div class="wts-contact-wrapper">
              <div class="form-heading">
                <h2>Don't forget!</h2>
                <p>Subscribe to our FREE monthly Business Builder Newsletter...</p>
              </div>
              <form method="post" action="#" class="wts-form-contact">
                <input type="text" name="email" placeholder="Email Address..." />
                <input type="submit" name="submit" value="SUBSCRIBE NOW" />
                <div class="data-status">
                </div>
              </form>
            </div>
          </div>
          
          <div class="col-sm-6 col-sm-offset-1">
            <div class="header-text-subscribed">
              <h3><?php echo 'Thank you, ' . htmlspecialchars($_POST["first_name"]) . '!'; ?></h3>
              <p>A member of our team will be in touch shortly...</p>
              <p>If you need to contact us urgently, call us on <span><?php echo $phone; ?></span>.</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </header>

  <!-- Header End -->
  
  <div id="main-content">
    
    <!-- TOP TESTIMONIALS CONTAINER START -->
    <?php include ("admin/snippets/top_testimonials.php"); ?>
    <!-- TOP TESTIMONIALS CONTAINER END -->
    
    <div class="clearfix" style="height:40px;"></div>

    <!-- CONTAINER START -->

    <div class="container">

      <div class="content-heading-center" id="about">
        <h2>Not Like 'Ordinary' <?php echo $business; ?></h2>
        <p>Clients tell us there are 3 key REASONS why they choose us…</p>
      </div>

      <!-- "WHY US" ROW START -->

      <div class="row">
        <div class="col-sm-4">
          <div class="wts_feature">
            <div class="feature_edge">
            </div>
            <img src="assets/images/services.png" alt="Services" />
            <h4><a href="#services" class="smooth-scroll" style="text-decoration:none;">Forge Strong Relationships</a></h4>
            <p>Getting to know you and your business is top of our agenda. This ensures we are giving you the best possible advice to save you tax, increase your profits and steer you in the right direction in both good and challenging times.</p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="wts_feature">
            <div class="feature_edge">
            </div>
            <img src="assets/images/growthchart.png" alt="Business Growth" />
            <h4><a href="#growth" class="smooth-scroll" style="text-decoration:none;">Grow your business</a></h4>
            <p>You get full access to one of the world’s most successful sales and marketing programmes that has transformed the lives of thousands of business owners all over the globe. Our gift to you when you become a client.</p>
          </div>
        </div>
  
        <div class="col-sm-4">
          <div class="wts_feature">
            <div class="feature_edge">
            </div>
            <img src="assets/images/support.png" alt="Support" />
            <h4><a href="#header" class="smooth-scroll" style="text-decoration:none;">FREE &amp; Unlimited Support</a></h4>
            <p>All of our support is FREE and unlimited. Need a word of advice? Call us. As one of our clients, this is included in your low, fixed monthly fee. You even get direct access to the partners of the firm, whenever you need them.</p>
          </div>
        </div>

      </div>

    </div>

    <!-- CONTAINER END -->

    <div class="clearfix" style="height:40px;"></div>

    <!-- TEAM CONTAINER START -->

    <?php include ("admin/snippets/team.php"); ?>
    
    <!-- TEAM CONTAINER END -->

    <div class="clearfix" style="height:40px;"></div>

    <!-- SERVICES START -->

    <?php include ("admin/snippets/services.php"); ?>

    <!-- SERVICES END -->

    <!-- CONTAINER END -->

    <div class="cleafix" style="height:40px;"></div>

    <!-- TESTIMONIALS CONTAINER START -->

    <?php include ("admin/snippets/testimonials.php"); ?>

    <!-- TESTIMONIALS CONTAINER END -->

    <div class="clearfix" style="height:40px;"></div>

    <div class="newsletter-subscribe-wrapper" id="subscribe">

      <!-- CONTAINER START -->

      <div class="container">
        
        
        <div class="content-heading-center">
          <h2>Subscribe to our free newsletter</h2>
          <p>Delivered to your door every month, our Business Builder Newsletter is crammed full of practical and innovative tips to help you build a better business.<br>FREE when you subscribe today.</p>
        </div>
      </div>
        <div class="col-sm-1 col-xs-12 col-xs-offset-3  col-sm-offset-5 col-md-offset-5 col-md-12">
          <form name="htmlform" method="post" action="business_builder_form.php">
            <input type="submit" name="submit" value="SUBSCRIBE NOW" />
          </form>
        </div>

        <div class="clearfix" style="height:40px;"></div>

      

      <!-- CONTAINER END -->
      
    </div>

  </div>

  <!-- FOOTER START -->
  <?php include ("assets/php/footer.php"); ?>
  <!-- FOOTER END -->

  <!-- SCRIPTS START -->
  <?php include ("assets/php/scripts.php"); ?>
  <!-- SCRIPTS END -->
  

</body>
</html>

<?php 
}
die(); 
?>