<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="google-site-verification" content="" />

	<!--
    Coloque o favicon.ico e o apple-touch-icon.png na pasta assets/img/icons
    e execute a tarefa grunt imagemin para otimizar os ícones.
    -->
	<link rel="icon" href="<?php echo WP_IMAGE_URL ?>/icons/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo WP_IMAGE_URL ?>/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57"   href="<?php echo WP_IMAGE_URL ?>/icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72"   href="<?php echo WP_IMAGE_URL ?>/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo WP_IMAGE_URL ?>/icons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo WP_IMAGE_URL ?>/icons/apple-touch-icon-144x144.png" />

	<link rel="stylesheet" href="<?php echo WP_STYLE_URL ?>" />

	<!--[if lt IE 9]>
		<script src="<?php echo WP_SCRIPT_URL ?>/vendor/html5shiv.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if lt IE 9]>
		<p class="chromeframe">
			Você está usando um navegador <strong>desatualizado</strong>.
			Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> ou
			<a href="http://www.google.com/chromeframe/?redirect=true">ative o Google Chrome Frame</a>
			para melhorar sua experiência de navegação.
		</p>
	<![endif]-->