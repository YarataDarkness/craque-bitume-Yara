<?php 
/**
 * 	Template Name:Service
 * Template Post Type: service
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<main>
   
    <!-----------<div class="contenu">
    <div class="message-erreur">
      <h1 class="erreur-titre">Page Équipes</h1>
      <br>
      <p class="erreur-description">Désolé, il semblerait que cette page n'est pas encore de contenu.</p>
      <button type="button" id="return-btn">Retour à la page d'accueil</button>
    </div>
  </div> ----->

    <!------------------------------------ HERO ----------------------------------------------------->
    <div class="contenu-equipe mb-5">
      <div class="equipe__hero">
        <h1 class="nouvelles__hero-title"> <?php the_title() ?> </h1>
      </div>

      <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
      <div class="card description_generique">
        <div class="card-body">
        <p class="description_generique_texte">
        <?php the_field("description_hero") ?>
      </div>
  </div>


      <!------------------------------------ Details services ----------------------------------------------------->
      
<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5"><?php  the_post_thumbnail('large', array('class' => 'img-fluid rounded')) ?>
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11"> 
              <h2 class="titre_detail_service h1 mb-3"><?php the_title() ?></h2>
              <p class="titre_case_service lead fs-4 text-secondary mb-3"><?php the_field("description_de_service") ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  </main>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>