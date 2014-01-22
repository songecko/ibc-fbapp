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
        				<p>1. DURACIÓN: La Promoción.</p>
						<p>2. ELEGIBILIDAD: Son elegibles para participar en esta Promoción todas las personas mayores de edad, .</p>
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