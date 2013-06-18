<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php echo Mvcpp::$config['name'] ?></title>
  <link rel="stylesheet" href="<?php echo Mvcpp::$baseUrl ?>/assets/css/foundation.min.css" />
  <script src="<?php echo Mvcpp::$baseUrl ?>/assets/js/vendor/custom.modernizr.js"></script>

</head>
<body>
<div style="min-height:500px" id="wrapper">
	<div class="row" >
		<div class="large-12 columns">
			<h2 class="subheader"><?php echo Mvcpp::$config['name'] ?></h2>
			<p class="subheader">Change this whenever you wish</p>
			<hr />
		</div>
	</div>
<?php
echo $content;
?>
</div>
<div class="contain-to-grid contain-to-grid" style="padding:20px;color:#999">
	<div class="row">
		<div class="large-12 columns">
			Hello
		</div>
	</div>
</div>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo Mvcpp::$baseUrl ?>/assets/js/vendor/zepto' : '<?php echo Mvcpp::$baseUrl ?>/assets/js/vendor/jquery') +
  '.js><\/script>');
  </script>

  <script src="<?php echo Mvcpp::$baseUrl ?>/assets/js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  document.body.onload = function(){
  	document.getElementById('wrapper').style.minHeight = window.innerHeight - 50 + "px";
	return true;
  };
  </script>
</body>
</html>
