<?php
/**
 * Template Name: accueil
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
if ( have_posts() ) : 
	// Si oui, bouclons au travers pour tous les afficher
	while ( have_posts() ) : the_post(); 
?>
<?php 
  //wp_nav_menu(array('theme_location' => 'menu-jeu'));
?>
	<article>
		<?php the_post_thumbnail('large'); // Vignette large du post ?>

		<h2>
			<a href="<?php the_permalink(); // Lien du post ?>">
				<?php the_title(); // Titre du post ?>
			</a>
		</h2>

		<main>
   

    <!-------------- HERO --------------->
    <section id="hero" class="accueil max-width container-fluid hero row d-flex justify-content-evenly justify-content-xl-center">
      
        <div class="cote gauche pt-5 d-flex flex-column col-11 col-sm-8 col-md-9 col-xl-5 justify-content-center justify-content-md-center justify-content-lg-center  align-items-md-center align-items-center align-items-xl-start">
          <h1 class="text-center text-md-start text-overflow hero-titre-1">La nature et</h1>
          <h1 class="text-center text-md-start text-overflow hero-titre-2">l'écocitoyenneté</h1>
          <h1 class="text-center text-md-start text-lg-start text-overflow hero-titre-3">vous interpellent?</h1>
          <h4 class="text-center text-md-center text-md-start text-lg-start text-overflow pb-3 hero-titre-4" >Craque-Bitume, un collectif d'écologie urbain, pourrait bien être l'écho à votre appel !</h4>
          <button class="collectif d-flex flex-column col-9 col-md-5 col-lg-5 hero-btn">Un collectif, qu'est-ce que ça mange en hivers?</button>
        </div>
        <div class="cote droit d-flex flex-column col-11 col-sm-8 col-md-7 col-xl-4 justify-content-start justify-content-lg-center align-items-start align-items-lg-start">
          <div class="container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
					
					<?php if( get_field('image_1_de_slider') ): ?>
    <img src="<?php the_field('image_1_de_slider'); ?>" />
<?php endif; ?>
				  </div>
                <div class="swiper-slide">
				  <?php if( get_field('image_2_de_slider') ): ?>
    <img src="<?php the_field('image_2_de_slider'); ?>" />
<?php endif; ?>
				  </div>
                <div class="swiper-slide">  <?php if( get_field('image_3_de_slider') ): ?>
    <img src="<?php the_field('image_3_de_slider'); ?>" />
<?php endif; ?></div>
                <div class="swiper-slide"> <?php if( get_field('image_4_de_slider') ): ?>
    <img src="<?php the_field('image_4_de_slider'); ?>" />
<?php endif; ?></div>
                <div class="swiper-slide"> <?php if( get_field('image_5_de_slider') ): ?>
    <img src="<?php the_field('image_4_de_slider'); ?>" />
<?php endif; ?> </div>
              </div>
              <!-- Pagination -->
              <div class="swiper-pagination d-flex justify-content-between"></div>
              <!-- Navigation (boutons précédent/suivant) -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>

    </section>  

    <!-------------- SERVICES --------------->
    <section class="section__services container-fluid d-flex justify-content-center align-items-center">
      <div class="services__container services p-5 col-xl-11 max-width">
      <h1 class="section__titre pb-1 text-center">Nos Services</h1>
        <div class="row d-flex flex-column flex-md-row justify-content-evenly align-items-center align-items-md-start">

          <div class="col-11 col-md-5 col-lg-4 col-xl-3 mt-2">
			  <?php the_post_thumbnail('medium', array('class' => 'services__logo logo__jardinage')); ?>
            
            <h5 class="my-4 m-md-4">Jardinage Urbain</h5>
            <p>Jardiner, c'est se rapprocher de son alimentation. C'est se connecter à la nature et à l'instant présent, c'est développer son autonomie alimentaire.</p>
          </div>

          <div class="col-11 col-md-5 col-lg-4 col-xl-3 mt-2">
			  
			  <?php the_post_thumbnail('medium', array('class' => 'services__logo logo__compostage')); ?>

            <h5 class="my-4">Compostage Communautaire</h5>
            <p>Le collectif Craque-Bitume, via le volet Urbanus Compostus, vise à faciliter et inspirer la pratique du compostage.</p>
          </div>

          <div class="col-11 col-md-5 col-lg-4 col-xl-3 mt-2">
			   <?php the_post_thumbnail('medium', array('class' => 'services__logo logo__formaion')); ?>

            <h5 class="my-4">Formation</h5>
            <p>Nous offrons diverse formation écocitoyennes, allant de la cuisine végétalienne au compostage domestique.</p>
          </div>
          
        </div>
      </div>
    </section>

<!-------------- NOUVELLES --------------->

    <section class="section__services container-fluid d-flex justify-content-center align-items-center">
      <div class="services__container row d-flex services p-sm-3 p-md-5 col-xl-11 justify-content-center align-content-center max-width">
        <h1 class="section__titre pb-1 text-center">Nouvelles formations</h1>

        <div class="row d-flex m-0 p-0 flex-md-row justify-content-center align-items-center align-items-md-start">

          <div class="nouvelle__carte nouvelle my-4 col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-rocket-takeoff-fill nouvelle__logo logo__atelier"></i></div>
              <div class="col-10 p-0">
                <h6 class="my-1">Lancement Atelier<i class="nouvelle__icon bi bi-fire"></i></h6>
                <p>Nous lancons un atelier de fabrication de pain sans gluten.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

          <div class="nouvelle__carte nouvelle my-4 col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-recycle nouvelle__logo logo__atelier"></i></div>
              <div class="col-10  p-0">
                <h6 class="my-1">Diminution gaspillage</h6>
                <p>Comment diminuer son gaspillage alimentaire avec des recette adapté.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

          <div class="nouvelle__carte nouvelle my-4 col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-egg-fill nouvelle__logo logo__atelier col-1 d-flex"></i></div>
              <div class="col-10  p-0">
                <h6 class="my-1">La pêche écolo</h6>
                <p>Article sur le pêcheur écologiste. Comment entretenir nos écosystème.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

          <div class="nouvelle__carte none nouvelle my-4 col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-rocket-takeoff-fill nouvelle__logo logo__atelier"></i></div>
              <div class="col-10 p-0">
                <h6 class="my-1">Lancement Atelier<i class="nouvelle__icon bi bi-fire"></i></h6>
                <p>Nous lancons un atelier de fabrication de pain sans gluten.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

          <div class="nouvelle__carte none nouvelle my-4  col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-recycle nouvelle__logo logo__atelier"></i></div>
              <div class="col-10  p-0">
                <h6 class="my-1">Diminution gaspillage</h6>
                <p>Comment diminuer son gaspillage alimentaire avec des recette adapté.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

          <div class="nouvelle__carte none nouvelle my-4  col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-egg-fill nouvelle__logo logo__atelier col-1 d-flex"></i></div>
              <div class="col-10  p-0">
                <h6 class="my-1">La pêche écolo</h6>
                <p>Article sur le pêcheur écologiste. Comment entretenir nos écosystème.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>
          <div class="nouvelle__carte none nouvelle my-4 col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-rocket-takeoff-fill nouvelle__logo logo__atelier"></i></div>
              <div class="col-10 p-0">
                <h6 class="my-1">Lancement Atelier<i class="nouvelle__icon bi bi-fire"></i></h6>
                <p>Nous lancons un atelier de fabrication de pain sans gluten.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

          <div class="nouvelle__carte none nouvelle my-4 col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-recycle nouvelle__logo logo__atelier"></i></div>
              <div class="col-10  p-0">
                <h6 class="my-1">Diminution gaspillage</h6>
                <p>Comment diminuer son gaspillage alimentaire avec des recette adapté.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

          <div class="nouvelle__carte none nouvelle my-4  col-12 col-md-8 col-lg-5 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-egg-fill nouvelle__logo logo__atelier col-1 d-flex"></i></div>
              <div class="col-10  p-0">
                <h6 class="my-1">La pêche écolo</h6>
                <p>Article sur le pêcheur écologiste. Comment entretenir nos écosystème.    <i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>

        </div>
        <button id="voirPlusButton" class="col-5 col-md-4 col-lg-2 col-xl-2 d-flex text-center justify-content-center align-items-center align-content-center align-self-center">Voir plus</button>

        </div>
      </div>
    </section>


<!-------------- TÉMOIGNAGE --------------->

    <section id="simple-list-item-3" class="section-testimonials  container-fluid d-flex justify-content-center align-items-center">
      <div class="col-xl-11 max-width testimonials row mt-8 d-flex flex-column justify-content-center align-items-center align-content-center max-width">
      <div class="row">
        <h2 class="text-center mb-4 mt-5 section__titre mx-0">Témoignages</h2>
        <h5 class="text-center mb-4 px-0 mx-0">Voici le témoignage d'une personne qui partage son expérience avec notre équipe</h3>
      </div>

      <div class="temoignage__personne d-flex my-4 m-sm-3 m-md-0 my-md-3 my-lg-4 my-xl-5 justify-content-center align-items-center align-items-md-start">
        <div class="temoignage__card people">
			<?php if( get_field('image_temoignagne') ): ?>
    <img src="<?php the_field('image_temoignagne'); ?>" />
<?php endif; ?>

          <i class="bi bi-chat-right-quote temoignage__quote"></i>
          <div class="card-body container-fluid">
            <h6 class="temoignage__texte card-text text-center text-lg-start">Le collectif Craque-Bitume est un lieu d'apprentissage continu. J'ai acquis des compétences précieuses en matière d'écologie urbaine et j'ai contribué à des projets qui ont un impact réel.</h6>
            <br>
            <h5 class="temoignage__nom card-title text-center text-lg-end">Gabrielle S.</h5>
            <h5 class="temoignage__description description text-center text-lg-end">Québec</h5>
          </div>
        </div>
      </div>
      
    </div>
  </section>


  <!-------------- Donation --------------->
  <section class="section_donation container-fluid d-flex justify-content-center align-items-center">
    <div class="services__container row d-flex donation p-5 col-xl-11 justify-content-center align-content-center max-width-donation">
      <h1 class="section__titre pb-1 text-center">Donation</h1>
      <div class="col d-flex flex-column donation__column justify-content-center align-content-center">
        <div class="col-12 pb-5 d-flex justify-content-center align-items-center">
			<?php if( get_field('image_donation') ): ?>
    <img src="<?php the_field('image_donation'); ?>" />
<?php endif; ?>
          
        </div>
        <div class="anim_gsap_index text-center">
      <div class="donation__h2 text-center">
        <h2 class="donation__h2__text_front">Encouragez </h2>
      </div>
        <div class="donation__h2 text-center">
        <h2 class="donation__h2__text_front">notre mission </h2>
      </div>
        <div class="donation__h2 text-center">
        <h2 class="donation__h2__text_front">citoyenne !</h2>
      </div>
      
    </div>
        <div class="row donation_row d-flex justify-content-center align-items-center  pt-4 pb-2 ">
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564409008" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center">1$</a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564507312" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center">5$</a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564540080" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center">10$</a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564605616" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center">20$</a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564671152" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center">50$</a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center">Autre</a>
          </div>

        </div>
        <p class="donation_p pt-4">Un reçu de don vous sera émis par courriel.</p>
      </div>
    </div>

  </section>

		<?php 
			the_content(); // Contenu principal de la page

			get_template_part( 'partials/metas' );   // Affiche partials/metas.pgp (nom d'auteur, date de publication, etc.)
		?>
	</article>

<?php endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>