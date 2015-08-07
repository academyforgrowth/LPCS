<?php 

// TABLE OF CONTENTS
// 
// 0. =Misc
// 1. =Contact
// 2. =Team
// 3. =Services
// 4. =Testimonials
// 5. =Swarm
// 6. =Association Logo Links
// 7. =Multiple Locations
// 8. =General Keywords
// 9. =Location Keywords



/******************************
 ** 0. =Misc
 ******************************/

// This section is for CURRENCY, COMPLIANCE & CHANGES TO THE NAV BAR.
// 
// NOT TO BE CONFUSED WITH GENERAL KEYWORDS.
// $business variables are changed ONLY for compliance reasons.

// Currency (e.g. $, £, €, AED).

$currency = "£";

// Compliance & Business Variables (e.g. Accountants/Bookkeepers Compliance/Advisory etc.)

$compliance = "compliance"; // (Can change to "advisory" for members that don't offer compliance services.)
$tax_saving = "tax saving"; // (DO NOT LEAVE BLANK. If necessary, change "tax saving" to "time saving")
$save_tax = "save tax &amp; "; // TURN BLANK If no tax saving.

$business = "Accountants"; // start with capital letter (Can change to "Bookkeepers".)
$business_2 = "accounting"; // lowercase (Can change to "bookkeeping".)
$business_3 = "accountant"; // lowercase (Can change to "bookkeeper".)

// Nav Bar (Remove via "Commenting Out" if Member does NOT have testimonials/team section etc.)

$nav_menu = array (

'Home' => 'index.php',
'Why Us?' => '#about',
'Our Team' => '#team',
'Services' => '#services',
'Grow Your Business' => 'business-growth.php',
'Testimonials' => 'testimonials.php',
'Contact' => 'contact.php',

);

/******************************
 ** 1. =Contact
 ******************************/

$company_name = "Company Name";

$email = "support@academyforgrowth.co.uk";

$phone = "0123 456 789";

$fax1 = false; // Set to true to activate fax number on site.
$fax_1 = "0123 456 789";

$address = "Suites 1-10, Springfield House, Water Lane, Wilmslow, SK9 5BG";

$country = "England";

$reg = "#00000000";

/******************************
 ** 2. =Team
 ******************************/

$team_member1 = "Darren Smith";
$team_member1_title = "Job Title";

$team_member2 = "Alison Smith";
$team_member2_title = "Job Title";

$team_member3 = "Puran Smith";
$team_member3_title = "Job Title";

$team_member4 = "Anna Smith";
$team_member4_title = "Job Title";

$team_member5 = "Patrick Smith";
$team_member5_title = "Job Title";

$team_member6 = "Sarah Smith";
$team_member6_title = "Job Title";

/******************************
 ** 3. =Services
 ******************************/

$compliance_services = ["Personal Tax Returns", "Income Statements", "Company Tax Returns", "Financial Statements", "Tax Planning"];

$time_saving = ["Expenses Management", "Budgeting", "Client Invoicing", "Accounts Receivable Service", "Business Management Consulting"];

/******************************
 ** 4. =Testimonials
 ******************************/

$testimonial_client1 = "John Doe &ndash; company.com";
$testimonial1 = "Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.";

$testimonial_client2 = "John Doe &ndash; company.com";
$testimonial2 = "Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.";

$testimonial_client3 = "John Doe &ndash; company.com";
$testimonial3 = "Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.";

$testimonial_client4 = "John Doe &ndash; company.com";
$testimonial4 = "Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.";

$testimonial_client5 = "John Doe &ndash; company.com";
$testimonial5 = "Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.";

$testimonial_client6 = "John Doe &ndash; company.com";
$testimonial6 = "Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.";

/******************************
 ** 5. =Swarm
 ******************************/

// LEAVE SET AS 'FALSE' UNLESS TESTING JUSTIFIES IT.

$social = false; // Set to false for no social media.

$twitter = 'http://www.twitter.com';
$linkedin = 'http://www.linkedin.com';
$googleplus = 'http://www.plus.google.com';
$facebook = 'http://www.facebook.com';

/******************************
 ** 6. =Assocation Logo Links
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
 ** 7. =Multiple Locations
 ******************************/

$address2 = false; // Set to true to activate second address in footer.
$address_2 = "Suites 1-10, Springfield House, Water Lane, Wilmslow, SK9 5BG";
$address3 = false; // Set to true to activate third address in footer.
$address_3 = "Suites 1-10, Springfield House, Water Lane, Wilmslow, SK9 5BG";
$address4 = false; // Set to true to activate fourth address in footer.
$address_4 = "Suites 1-10, Springfield House, Water Lane, Wilmslow, SK9 5BG";

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

/******************************
 ** 8. =General Keywords
 ******************************/

// General Keywords 1-8 reflect the duplicated copies of index.php with the same name.
// Examples can be:
// accounting company
// accounting firm
// accounting practice
// accounting services
// management accountant

$general_kw_1 = "accountant"; // e.g. "Any decent <accountant> can produce a good set of...."
$general_kw_2 = "acounting company";
$general_kw_3 = "accounting firm";
$general_kw_4 = "accounting practice";
$general_kw_5 = "accounting services";
$general_kw_6 = "management accountant";
$general_kw_7 = "";
$general_kw_8 = "";

// General Keywords 9-10 reflect the duplicated copies of index.php with the same name.
// Examples can be:
// looking for different business tax advice?
$general_kw_9 = "looking for different business tax advice?";
$general_kw_10 = "";



/******************************
 ** 9. =Location Keywords
 ******************************/

$location = "Wilmslow"; // Displays on index.php INCLUDING the duplicated copy of index.php with the same name.
$location2 = "";
$location3 = "";
$location4 = "";
$location5 = "";
$location6 = "";
$location7 = "";
$location8 = "";
$location9 = "";
$location10 = "";


 ?>