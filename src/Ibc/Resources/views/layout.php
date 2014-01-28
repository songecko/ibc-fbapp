<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>IBC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"> 
        <?php if($container->get('mobile_detect')->isMobile()): ?>
        <link rel="stylesheet" href="css/main.mobile.css">
        <?php endif; ?>     
    </head>
    <body<?php echo $container->get('mobile_detect')->isMobile()?' class="mobile"':''?>>
    	<header>
    		<a href="http://www.ibanca.net" target="_blank"><img src="images/ibanca.png"></a>
    	</header>
    	
    	<?php echo $content ?>
    	
    	<div id="footer" class="clearfix">
    		<a href="#" target="_blank" data-toggle="modal" data-target="#modal" class="privacyButton">Términos y condiciones</a>
    	</div>
	
		<div id="modal" class="modal fade">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/closeButton.png"></button>
        				<h4 class="modal-title">TÉRMINOS Y CONDICIONES</h4>
      				</div>
      				<div class="modal-body">
						<p>We collect information from you when you fill out a form.
<br>
When ordering or registering on our site, as appropriate, you may be asked to enter your: name or e-mail address.
<br>
What do we use your information for?
<br>
Any of the information we collect from you may be used in one of the following ways:
<br>
To improve customer service<br>
(your information helps us to more effectively respond to your customer service requests and support needs)
<br>
How do we protect your information?
<br>
We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.
<br>
Do we use cookies?
<br>
We do not use cookies.
<br>
Do we disclose any information to outside parties?
<br>
We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.
<br>
Children’s Online Privacy Protection Act Compliance
<br>
We are in compliance with the requirements of COPPA (Children’s Online Privacy Protection Act), we do not collect any information from anyone under 13 years of age. Our website, products and services are all directed to people who are at least 13 years old or older.
<br>
Online Privacy Policy Only
<br>
This online privacy policy applies only to information collected through our website and not to information collected offline.
<br>
Terms and Conditions
<br>
Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website at http://www.ibanca.net
<br>
Your Consent
<br>
By using our site, you consent to our websites privacy policy.
<br>
Changes to our Privacy Policy
<br>
If we decide to change our privacy policy, we will post those changes on this page, and/or update the Privacy Policy modification date below.
<br>
This policy was last modified on 4/16/2013
<br>
Contacting Us
<br>
If there are any questions regarding this privacy policy you may contact us using the information below.
<br>
<br>
Instituto de Banca y Comercio<br>
www.ibanca.net<br>
#56 Road 20<br>
Guaynabo, Puerto Rico 00966<br>
Puerto Rico<br>
webmaster@edukgroup.com</p>
      				</div>
    			</div><!-- /.modal-content -->
  			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.validate.min.js"></script>      
        <script src="js/main.js"></script>
    </body>
</html>