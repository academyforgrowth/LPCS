<?php 

// --------------------------------------- CHECKLIST --------------------------------------
// 
// * Update Video (admin/snippets/video.php)
// * Update Company Logo (admin/img/logo.png)
// * Update Team Images when arriving at Team Section (see below)
// * Update Assoc Logos when arriving at Assoc Logo Section (see below)
// * Update Custom CSS to match company logo colours (admin/custom.css)
// * Update Language to match correct spelling (admin/language.php)
// * Update Analytics Code once received (admin/snippets/analytics.php)
// * Update Remarketing Code once received (admin/snippets/remarketing.php)
// * Update Conversion Tracking Code once received (admin/snippets/conversion-tracking.php)

// -----------------------------------------------------------------------------------------

// ----------------------------------- TABLE OF CONTENTS -----------------------------------
// 
// 0. =Misc
// 1. =Contact
// 2. =Team
// 3. =Services
// 4. =Association Logo Links
// 5. =Multiple Locations



/******************************
 ** 0. =Misc
 ******************************/

// This section is for CURRENCY & COMPLIANCE CHANGES IF REQUIRED.
// 
// $business variables are changed ONLY for compliance reasons.

// Currency (e.g. $, £, €, AED, etc).

$currency = "£";

$business = "Accountants"; // start with capital letter (Can change to "Bookkeepers".)
$business_2 = "accounting"; // lowercase (Can change to "bookkeeping".)
$business_3 = "accountant"; // lowercase (Can change to "bookkeeper".)


/******************************
 ** 1. =Contact
 ******************************/

$company_name = "Company Name";

$email = "afton.rhodes@academyforgrowth.co.uk"; // displayed in footer + form submissions go here.

$phone = "0123 456 789";

$fax1 = false; // Set to true to activate fax number on site.
$fax_1 = "0123 456 789";

$address = "Suites 1-10, Springfield House, Water Lane, Wilmslow, SK9 5BG";

$location = "Wilmslow";

$country = "England";

$reg = "#00000000";

/******************************
 ** 2. =Team
 ******************************/

// Remember to edit team snippets if required (admin/snippets/team.php) with our bank of snippets (snippets/team/).
// Upload team photos (if permission has been granted on form) to (admin/img/team/) and rename files numerically.

$team_member1 = "Name";
$team_member1_title = "Job Title";

$team_member2 = "Name";
$team_member2_title = "Job Title";

$team_member3 = "Name";
$team_member3_title = "Job Title";

$team_member4 = "Name";
$team_member4_title = "Job Title";

$team_member5 = "Name";
$team_member5_title = "Job Title";

$team_member6 = "Name";
$team_member6_title = "Job Title";

/******************************
 ** 3. =Services
 ******************************/

$time_saving_services = ["Personal Tax Returns", "Income Statements", "Company Tax Returns", "Financial Statements", "Tax Planning"];

$value_added_services = ["Expenses Management", "Budgeting", "Client Invoicing", "Accounts Receivable Service", "Business Management Consulting"];

/******************************
 ** 4. =Assocation Logo Links
 ******************************/

// 'COMMENT OUT' ANY UNREQUIRED ASSOC LOGOS IN THE ARRAY BELOW.
//  OR - ADD ADDITIONAL ASSOC LOGOS BENEATH (for more than 6).
// 		
// IF ASSOCATION LOGOS DO NOT REQUIRE LINKS, LEAVE AS '#'.

$assoc_logo = array (

'<img src="admin/img/assoc/assoclogo1.png">' => '#',
'<img src="admin/img/assoc/assoclogo2.png">' => '#',
'<img src="admin/img/assoc/assoclogo3.png">' => '#',
'<img src="admin/img/assoc/assoclogo4.png">' => '#',
'<img src="admin/img/assoc/assoclogo5.png">' => '#',
'<img src="admin/img/assoc/assoclogo6.png">' => '#',
);

/******************************
 ** 5. =Multiple Locations
 ******************************/

$address2 = false; // Set to true to activate second address in footer. Don't forget phone_2 & location2.
$address_2 = "Suites 1-10, Springfield House, Water Lane, Wilmslow, SK9 5BG";
$location2 = "";
$address3 = false; // Set to true to activate third address in footer.
$address_3 = "Suites 1-10, Springfield House, Water Lane, Wilmslow, SK9 5BG";
$location3 = "";

$phone2 = false; // Set to true to activate second phone number on site.
$phone_2 = "0123 456 789";
$phone3 = false; // Set to true to activate third phone number on site.
$phone_3 = "0123 456 789";
$phone4 = false; // Set to true to activate fourth phone number on site.
$phone_4 = "0123 456 789";

$fax2 = false; // Set to true to activate fax number on site.
$fax_2 = "0123 456 789";
$fax3 = false; // Set to true to activate fax number on site.
$fax_3 = "0123 456 789";
$fax4 = false; // Set to true to activate fax number on site.
$fax_4 = "0123 456 789";


 ?>