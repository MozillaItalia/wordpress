<?php
	setlocale(LC_TIME, 'it_IT.UTF8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Archivio <?php } ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="dc.title" content="Mozilla Italia" />
	<meta name="dc.subject" content="mozilla, browser, mail, seamonkey, firefox, thunderbird, internet, email, italiano, supporto, mozdoesit" />
	<meta name="dc.description" content="Il sito del gruppo di traduzione italiano di Mozilla. Qui si possono trovare le versioni in italiano di SeaMonkey, Mozilla Firefox e Mozilla Thunderbird. Disponibile vario materiale di supporto, un forum e un blog." />
	<meta name="dc.creator" content="Francesco Lodolo" />
	<meta name="dc.creator.namepersonal" content="Lodolo Francesco" />
	<meta name="dc.contributor" content="Gruppo Mozilla Italia" />
	<meta name="dc.type" content="information, interactive resource" />
	<meta name="dc.format" content="text/html" />
	<meta name="dc.identifier" content="http://www.mozillaitalia.org" />
	<meta name="dc.language" content="it" />
	<meta name="dc.relation" content="http://www.mozilla.org" />
	<meta name="dc.coverage" content="Italy" />
    <meta name="Charset" content="UTF-8"/>
    <meta name="Distribution" content="Global"/>
    <meta name="Rating" content="General"/>
    <meta name="Robots" content="INDEX,FOLLOW"/>
    <meta name="Revisit-after" content="1 Day" />
    <meta name="expires" content="never" />
	<meta name="google-site-verification" content="kTWtUryaMstobXuqPayfepBdCtJgKY1hLu_R8PZBVig" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/immagini/favicon.png" type="image/png" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE 6]>
  		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie6/stile.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/ie6/iepngfix_tilebg.js"></script>
  	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/funzioni.js"></script>

<?php wp_head(); ?>
</head>
<body>
<div id="contenitore">
  <div id="wrap">
      <div id="header">
	   <div>
		  <a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/immagini/header_nome.png" title="Mozilla Italia" alt="Mozilla Italia" /></a>
          <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		  <p><?php bloginfo('description'); ?></p>
	   </div>
      </div><!-- id=header -->
	  <!--[if lt IE 7]>
	    <?php include(TEMPLATEPATH . '/ie6/warning.php'); ?>
	  <![endif]-->
