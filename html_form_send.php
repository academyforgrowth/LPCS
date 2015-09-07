<?php

include 'admin/var.php'; 

if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = $email;
     
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
    $email_message = "\nGreat News! A visitor to your landing page has just completed the meeting request form.\n

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
          
          <div class="col-sm-12">
            <div class="header-text-subscribed">
              <h3 style="color:#FFF"><?php echo 'Thank you, ' . htmlspecialchars($_POST["first_name"]) . '!'; ?></h3>
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

    <!-- TESTIMONIALS CONTAINER START -->

    <!-- Currently Removed -->

    <!-- TESTIMONIALS CONTAINER END -->

    <div class="clearfix" style="height:40px;"></div>

    <!-- OUTRO COPY START -->
    <div class="container">
    
      <div class="content-heading-center" id="strong-partnership">
        <h3><?php echo $business. ' in ' .$location; ?></h3>
        <h2>Building A Strong Partnership With You</h2>
        <div class="row">
          <div class="col-md-6">
            <p>As you'd expect, we're really good at delivering the <?php echo $business_2; ?> stuff - like <?php echo $compliance; ?>, <?php echo $tax_saving; ?> and profit improvement services ...and all in a very cost-effective way.</p>
            <p>But where we really differ, is how we work <span class="italic">with</span> our clients and the strong emphasis we place on the <span class="bold">'relationship'</span>.</p>
            <p>Unlike other accountants you may have met, we always put your needs ahead of our own. This means we'll always be there when you need us, ready to provide <span class="italic">imaginative</span> and <span class="italic">resourceful</span> <span class="bold">solutions</span> to your financial and business growth challenges.</p>
            <p><span class="underline">Including those challenges you didn't even know existed.</span></p>
            <p>After all, any decent <?php echo $business_3; ?> can produce a good set of accounts. But very few have the skills to create a relationship where the client really sees their <?php echo $business_3; ?> as <span class="bold italic">a true asset</span> to their business.</p>

          </div>
          <div class="col-md-6">
            <p>And that's because a great <?php echo $business_3; ?> is one that does <span class="italic">so much more</span> than merely provide <?php echo $business_2; ?> services.</p>
            <p><span class="bold">A great <?php echo $business_3; ?> is one that gives your business the advantage it needs and demands.</span></p>
            <p>And that's where we <span class="italic">really</span> make the difference</p>
            <p>It doesn't matter whether you're just starting out, have an established business or you've been round the block a few times. We know what's required to create a <span class="bold">win-win relationship</span> for you.</p>
            <p>You'll even get a taste of this when you meet with us the very first time. So don't delay. <a href="#header">Complete the form now</a> or call us on <?php echo $phone; ?>. Thank you.</p>
          </div>
        </div>
      </div>

    </div>
    <!-- OUTRO COPY END -->

  </div>

  <!-- FOOTER START -->
  <?php include ("assets/php/footer.php"); ?>
  <!-- FOOTER END -->

  <!-- SCRIPTS START -->
  <?php include ("assets/php/scripts.php"); ?>
  <!-- SCRIPTS END -->

  <!-- Conversion Tracking Embed Code Start -->
  <?php include ("admin/snippets/conversion-tracking.php"); ?>
  <!-- Conversion Tracking Embed Code End -->
  

</body>
</html>

<?php 
}
die(); 
?>