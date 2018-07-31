<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<link href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">  
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<?php 
	if( is_front_page() ){ 
		$portfolio_classes = array('portfolio-class', 'my-class');
	}else{
		$portfolio_classes = array('no-portfolio-class');
		}
 ?>

<body <?php body_class($portfolio_classes);?> >
