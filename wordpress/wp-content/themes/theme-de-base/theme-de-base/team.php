<?php 
/**
 * 	Template Name: Equipe
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<!------------------------------------ HERO ----------------------------------------------------->
    <div class="contenu-equipe mb-5">
      <div class="equipe__hero">
        <h1 class="nouvelles__hero-title">ÉQUIPE</h1>
      </div>

      <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
      <div class="card description_generique container-fluid justify-content-center align-content-center">
        <div class="card-body d-flex flex-row justify-content-center align-content-center text-center m-0">
          <h2 class="description_generique_texte text-center m-0">Découvrez les membres de l'équipe !</h2>
        </div>
      </div>


      <!------------------------------------ CARTE DE L'ÉQUIPE ----------------------------------------------------->
      <h2 class="equipe__title my-4 max-width text-center">Notre équipe</h2>
      <div class="container">
        <div class="row justify-content-evenly">
          <div class="col-12 col-md-6 col-xl-4">
            <a href="#Modalplus" data-bs-toggle="modal" data-bs-target="#Modalplus" class="equipe_href">
              <div class="card equipe_card m-3">
                <?php if( get_field('image1_de_equipier') ): ?>
    <img src="<?php the_field('image1_de_equipier'); ?>" />
<?php endif; ?>
                <div class="card-body equipe_card_body">
                  <h5 class="card-title text-center equipe_titre"><?php the_field("titre1_de_equipier") ?></h5>
                  <p class="card-text text-center equipe_texte"><?php the_field("description1_de_equipier") ?></p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-4">
        <a href="#" class="equipe_href">
          <div class="card equipe_card m-3">
           <?php if( get_field('image2_de_equipier') ): ?>
    <img src="<?php the_field('image2_de_equipier'); ?>" />
<?php endif; ?>
            <div class="card-body">
              <h5 class="card-title text-center equipe_titre"><?php the_field("titre2_de_equiper") ?></h5>
              <p class="card-text text-center equipe_texte"><?php the_field("description2_de_equipier") ?></p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <a href="#" class="equipe_href">
        <div class="card equipe_card m-3">
           <?php if( get_field('image3_de_equipier') ): ?>
    <img src="<?php the_field('image3_de_equipier'); ?>" />
<?php endif; ?>
          <div class="card-body">
            <h5 class="card-title text-center equipe_titre"><?php the_field("titre3_de_equiper") ?></h5>
            <p class="card-text text-center equipe_texte"><?php the_field("description3_de_equipier") ?></p>
      </a>
    </div>
    </div>
    </div>
    </div>
    <div class="row justify-content-evenly">
      <div class="col-12 col-md-6 col-xl-4">
        <a href="#" class="equipe_href">
          <div class="card equipe_card m-3">
         <?php if( get_field('image4_de_equipier') ): ?>
    <img src="<?php the_field('image4_de_equipier'); ?>" />
<?php endif; ?>
            <div class="card-body equipe_card_body">
              <h5 class="card-title text-center equipe_titre"><?php the_field("titre4_de_equipier") ?></h5>
              <p class="card-text text-center equipe_texte"><?php the_field("description4_de_equipier") ?></p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <a href="#" class="equipe_href">
        <div class="card equipe_card m-3">
          <?php if( get_field('image5_de_equipier') ): ?>
    <img src="<?php the_field('image5_de_equipier'); ?>" />
<?php endif; ?>
          <div class="card-body">
            <h5 class="card-title text-center equipe_titre"><?php the_field("titre5_de_equipier") ?></h5>
            <p class="card-text text-center equipe_texte"><?php the_field("description5_de_equipier") ?></p>
      </a>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <a href="#" class="equipe_href">
        <div class="card equipe_card m-3">
          <?php if( get_field('image6_de_equipier') ): ?>
    <img src="<?php the_field('image6_de_equipier'); ?>" />
<?php endif; ?>
          <div class="card-body">
            <h5 class="card-title text-center equipe_titre"><?php the_field("titre6_de_equipier") ?></h5>
            <p class="card-text text-center equipe_texte"><?php the_field("description6_de_equipier") ?></p>
      </a>
    </div>
    </div>
    </div>
    </div>
    <div class="row justify-content-evenly">
      <div class="col-12 col-md-6 col-xl-4">
        <a href="#" class="equipe_href">
          <div class="card equipe_card m-3">
              <?php if( get_field('image7_de_equipier') ): ?>
    <img src="<?php the_field('image7_de_equipier'); ?>" />
<?php endif; ?>
            <div class="card-body equipe_card_body">
              <h5 class="card-title text-center equipe_titre"><?php the_field("titre7_de_equipier") ?></h5>
              <p class="card-text text-center equipe_texte"><?php the_field("description7_de_equipier") ?></p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <a href="#" class="equipe_href">
        <div class="card equipe_card m-3">
        <?php if( get_field('image8_de_equipier') ): ?>
    <img src="<?php the_field('image8_de_equipier'); ?>" />
<?php endif; ?>
          <div class="card-body">
            <h5 class="card-title text-center equipe_titre"><?php the_field("titre8_de_equipier") ?></h5>
            <p class="card-text text-center equipe_texte"><?php the_field("description8_de_equipier") ?></p>
      </a>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <a href="#" class="equipe_href">
        <div class="card equipe_card m-3">
           <?php if( get_field('image9_de_equipier') ): ?>
    <img src="<?php the_field('image9_de_equipier'); ?>" />
<?php endif; ?>
          <div class="card-body">
            <h5 class="card-title text-center equipe_titre"><?php the_field("titre9_de_equipier") ?></h5>
            <p class="card-text text-center equipe_texte"><?php the_field("description9_de_equipier") ?></p>
      </a>
    </div>
    </div>
    </div>
		
    </div>
    <div class="row justify-content-evenly">
      <div class="col-12 col-md-6 col-xl-4">
        <a href="#" class="equipe_href">
          <div class="card equipe_card m-3">
           <?php if( get_field('image10_de_equipier') ): ?>
    <img src="<?php the_field('image10_de_equipier'); ?>" />
<?php endif; ?>
            <div class="card-body equipe_card_body">
              <h5 class="card-title text-center equipe_titre"><?php the_field("titre10_de_equipier") ?></h5>
              <p class="card-text text-center equipe_texte"><?php the_field("description10_de_equipier") ?></p>
        </a>
      </div>	
    </div>
		  
    </div>
    

    <!------------------------------------ MODALE DE L'ÉQUIPE ----------------------------------------------------->
    <div class="modal fade" id="Modalplus" tabindex="-1">
      <div class="modal-dialog ">
        <div class="modal-content equipe_modal">
          <div class="modal-header">
            <h5 class="modal-title equipe_modal_titre">Antoine Roy Audy</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body equipe_modal_body">
            <div class="equipe_modal_img_div">
              <img src="./sources/medias/equipe/antoine.webp" class="equipe_modal_img m-3" alt="Antoine">
            </div>
            <p class="text-center equipe_modal_texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Lacus suspendisse faucibus interdum posuere lorem ipsum. Nulla aliquet enim tortor at
              auctor urna nunc id. Vitae congue eu consequat ac felis donec. Pretium quam vulputate dignissim
              suspendisse in est. Adipiscing elit ut aliquam purus. Libero id faucibus nisl tincidunt eget nullam.
              Gravida dictum fusce ut placerat orci nulla. Bibendum arcu vitae elementum curabitur vitae. Morbi
              tristique senectus et netus. Duis at tellus at urna condimentum mattis pellentesque. Volutpat diam ut
              venenatis tellus in metus vulputate eu scelerisque. Vivamus arcu felis bibendum ut. Dignissim sodales ut
              eu sem integer vitae justo eget magna. Natoque penatibus et magnis dis parturient montes. At quis risus
              sed vulputate odio ut enim blandit.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary equipe_modal_bouton" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
		
			
			
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>