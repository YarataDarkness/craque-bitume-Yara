<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	 * Template Name: header
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.typekit.net/fch5wdf.css">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/trees.css' rel='stylesheet'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>
	
<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
	
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Affiche le nom du site ?></a>
	</h1>
	<div class="ignorez"></div>


    <!--BARRE TOP BANNER-->
    <div class="banner">
      <div class="banner__content">
        <div class="banner__text">
          <strong>Projet scolaire dans le cadre du cours : Projet Web - Site original : <a href="https://craquebitume.org/">https://craquebitume.org/</a></strong>
        </div>
        <button class="banner__close" type="button">
          <span class="material-icons">
            close
          </span>
        </button>
      </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg justify-content-end align-items-center fixed-top py-0">
      <div class="container-fluid justify-content-space-between align-items-center max-width">
        <a class="navbar-brand " href="index.html">
          
        </a>
        <button class="navbar-toggler menu hamburger_menu" type="button" width="20%" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="https://yara.tim-momo.com/wordpress/index.php/accueil/">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="https://yara.tim-momo.com/wordpress/index.php/nouvelles/">Nouvelles</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="https://yara.tim-momo.com/wordpress/index.php/services/">Services</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="https://yara.tim-momo.com/wordpress/index.php/equipe/">Équipes</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="https://yara.tim-momo.com/wordpress/index.php/histoire/">Histoire</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="https://yara.tim-momo.com/wordpress/index.php/a-propos/">À propos</a></li>
          </ul>
          <div class="donnation d-flex justify-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume" type="button" id="btn-don" class="d-flex justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0">Donation</a>
          </div>
        </div>
      </div>
    </nav>

	<nav>
		<?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
			

		?>
	</nav>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
