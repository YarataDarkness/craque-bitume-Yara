<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<div class="contenu">

      <div class="service__hero">
        <h1 class="service__hero-title">SERVICES</h1>
      </div>
  
      <div class="service__container__description">
        <div class="card-body col-12 d-flex justify-content-center align-content-center text-center">
          <p>
            Craque-Bitume offre des services pour preserver le sentiment de communauté entre nos membres et la nature qu'elle desire preserver.
          </p>
        </div>
      </div>
     

      <!--<div class="message-erreur">
      <h1 class="erreur-titre">Page Services</h1>
      <br>
      <p class="erreur-description">Désolé, il semblerait que cette page n'est pas encore de contenu.</p>
      <button type="button" id="return-btn">Retour à la page d'accueil</button>
    </div>--->

    <section class="section__services2 max-width my-5 py-5 container-fluid d-flex justify-content-center align-items-center">
      
        <div class="service__all_cards_master row d-flex  flex-md-row justify-content-evenly align-items-center ">

          <div class="services__all__cards col-12 col-md-6 col-lg-6 col-xl-6">
            <div class="service__card__all__cards__container card text-center fade-in-image">
				<?php if( get_field('image_1_de_service') ): ?>
    <img src="<?php the_field('image_1_de_service'); ?>" />
<?php endif; ?>
             <!-- <img class="service__card__img img-fluid rounded-start" src="assets/img/couverturesitewebalt_2800x.png" alt="Card image cap"> -->
              <div class="service__card__body card-body text-center">
                <h5 class="service__card__title card-title text-center"><i class="bi bi-flower1"></i><?php the_field("titre_1_de_service") ?></h5>
                <p class="service__card__text card-text text-center"><?php the_field("description_1_de_service") ?></p>

           <!--     <h6 class="service__card__title card-title text-center">C'est quoi le jardin collectif?</h6>
                <p class="service__card__text card-text text-center">
                  <ul>
                    <li>C'est un atelier collectif depuis 1997!</li>
                    <li>Elle se place sur un jardin avec une grande superficie de 2000 m2!</li>
                    <li>Elle te sert a apprendre l'agriculture écologique et son autonomie alimentaire!</li>
                  </ul>  
                </p>-->

                <a type="submit" href="https://yara.tim-momo.com/wordpress/index.php/service/nos-services-2/" class="service__btn btn btn-primary">S'inscrire</a>
              </div>
            </div>
          </div>

          <div class="services__all__cards col-12 col-md-6 col-lg-6 col-xl-6">
            <div class="service__card__all__cards__container card text-center fade-in-image">
				<?php if( get_field('image_2_de_service') ): ?>
    <img src="<?php the_field('image_2_de_service'); ?>" />
<?php endif; ?>
              <!--<img class="service__card__img img-fluid rounded-start" src="assets/img/imagecompostcommunautaire_2800x.png" alt="Card image cap">--->
              <div class="service__card__body card-body text-center">
                <h5 class="service__card__title card-title text-center"><i class="bi bi-bucket-fill"></i><?php the_field("titre_2_de_service") ?></h5>
                <p class="service__card__text card-text text-center"><?php the_field("description_2_de_service") ?></p>

              <!--  <h6 class="service__card__title card-title text-center">C'est quoi le compostage communautaire</h6>
                <p class="service__card__text card-text text-center">
                  <ul>
                    <li>C'est un atelier qui se base sur un systeme de compost en ville!</li>
                    <li>Plus de 36 sites de compost communautaires!</li>
                    <li>Un services gratuit!</li>
                  </ul>  
                </p>--->

                <a type="submit" href="https://yara.tim-momo.com/wordpress/index.php/service/compostage-communautaire/" class="service__btn btn btn-primary">S'inscrire</a>

              </div>
            </div>
          </div>

          <div class="services__all__cards col-12 col-md-6 col-lg-6 col-xl-6">
            <div class="service__card__all__cards__container card text-center fade-in-image">
              <div class="service__card__body card-body text-center">
                <h5 class="service__card__title card-title text-center"><i class="bi bi-calendar-check"></i>Formation</h5>
                <p class="service__card__text card-text text-center">Demandez une formation en groupe pour pouvoir participer a des activites ecologiques ensembles!

                  <form>

                    <label for="fname">Prenom</label><br>
                    <input type="text" id="fname" name="fname" value=""><br>
                    <label for="lname">Nom de famille</label><br>
                    <input type="text" id="lname" name="lname" value=""><br><br>

                    <label for="email">Adresse Email</label><br>
                    <input type="email" id="email" name="email" value=""><br>

                    <input type="checkbox" id="service1" name="service1" value="jardin-collectif">
                    <label for="jardin-collectif"> Je desire m'inscrire au Jardin Collectif</label><br>

                    <input type="checkbox" id="service2" name="service2" value="compostage-collectif">
                    <label for="compostage-collectif"> Je desire m'inscrire au Compostage Collectif</label><br><br>

                    <a type="submit" href="#" class="service__btn btn btn-primary">S'inscrire</a>
                  </form>
                </p>
                
              </div>
            </div>
          </div>

        </div>
      
    </section>

  </div>
    
    
</main>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>