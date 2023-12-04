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
        <h1 class="nouvelles__hero-title">Jardinage urbain</h1>
      </div>

      <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
      <div class="card description_generique">
        <div class="card-body">
        <p class="description_generique_texte">Jardiner, c’est se rapprocher de son alimentation, c’est se connecter à la nature et à l’instant 
          présent, c’est développer son autonomie alimentaire. </br>
          Avoir un potager contribue à améliorer la biodiversité urbaine, à réduire les effets d’îlots de chaleur 
          et à embellir des espaces. </br>
          Le jardinage est également un excellent vecteur pour favoriser le tissage 
          des liens dans la communauté, les contacts intergénérationnels, favoriser l'apprentissage et pour 
          contrer l’isolement social. Vous habitez à Québec et désirez jardiner? </br>
          Plusieurs options s’offrent à vous. </p>
      </div>
  </div>


      <!------------------------------------ Details services ----------------------------------------------------->
      
<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
          <img class="img-fluid rounded" loading="lazy" src="./sources/medias/detail_services/participer_ecole.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <h2 class="titre_detail_service h1 mb-3">PRÊT·E À JARDINER? VOUS POURRIEZ...</h2>
              <p class="titre_case_service lead fs-4 text-secondary mb-3">Participer au jardinage collectif <br>
 
                Le jardin collectif des ateliers à la terre 
               Tombez sous le charme des Ateliers à la Terre, un jardin collectif qui a vu le jour en 1997! 
               Originellement porté par le Centre Jacques-Cartier, il est sous l’égide de Craque-Bitume depuis 2019. 
               Il s’agit de notre plus grand jardin avec une superficie de plus de 2000 m2, en pleine expansion, au 
               cœur de Québec. Il s'adresse à toutes les personnes désireuses de s'impliquer dans un jardin 
               collectif, d'apprendre sur l'agriculture écologique et d’améliorer leur autonomie alimentaire.
</p>
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