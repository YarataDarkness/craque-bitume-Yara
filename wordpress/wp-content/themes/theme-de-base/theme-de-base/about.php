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

	<main>
 <div class="contenu-news">

    <div class="propos__hero">

      <h1 class="nouvelles__hero-title">À PROPOS</h1>
    </div>

    <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
    <div class="card description_generique">
      <div class="card-body">
      <p class="description_generique_texte">Craque-Bitume est un organisme actif en écologie urbaine. 
        Notre objectif est de développer et de promouvoir des actions écoresponsables favorisant 
        l’engagement au sein de la communauté et l’adoption d’un mode de vie durable. <br>
        Comment ? <br>
        En pilotant des projets de jardinage et de compostage urbain, en plus d’offrir toute une gamme de 
        formations écocitoyennes. Nous développons aussi une offre de produits basée sur l’économie 
        sociale. Découvrez ci-dessous nos quatre volets d'action de mise en œuvre notre mission. </p>
    </div>
</div>

<!------------------------------------ Texte à propos ----------------------------------------------------->
<h2 class="equipe__title ml-5">Informations sur nous</h2>

<div class="container my-5 apropos_section">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1 apropos_section_titre">Nos volets</h1>
      <p class="lead apropos_section_texte">
        Compostus <br>
        Offrir aux citoyen·ne·s la possibilité de composter en milieu urbain;  
        Sensibiliser à la pratique du compostage et promouvoir ses différentes formes. 
        <br>
        Jardinus <br>
        Nourrir, Inclure et Éduquer; 
        Démocratiser les espaces publics verts et vivants;  
        Implanter et animer des jardins collectifs; 
        Poursuivre les expérimentations et les innovations dans le but d’augmenter l’efficacité du jardinage 
        écologique. 
        <br>
        Vie associative <br>
        Maintenir et développer le volet collectif de l'organisme entre autres par la collaboration intervolet; 
         Veiller à l'accomplissement de la mission, la viabilité financière et le respect des personnes 
        impliquées dans la mise en oeuvre des projets de l'organisme. <br>
        Formations <br>
        Autonomiser les citoyen·ne·s; 
        Rester à l'affût des besoins de formation des écocitoyen·ne·s et chercher à y répondre.</p>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <?php if( get_field('images_de_nos_volets') ): ?>
    <img src="<?php the_field('images_de_nos_volets'); ?>" />
<?php endif; ?>
    </div>
  </div>
</div>

<div class="container my-5 apropos_section">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1 apropos_section_titre">Notre vision</h1>
      <p class="lead apropos_section_texte">
        Une ville où les citoyen·ne·s s’engagent collectivement dans le développement d’une société 
écoresponsable.</p>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
         <?php if( get_field('image_de_notre_vision') ): ?>
    <img src="<?php the_field('image_de_notre_vision'); ?>" />
<?php endif; ?>
    </div>
  </div>
</div>

<div class="container my-5 apropos_section">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1 apropos_section_titre">Nos valeurs</h1>
      <p class="lead apropos_section_texte">
        L’autogestion <br>
par la recherche du consensus, de la transparence, des rapports égalitaires, de l’écoute et d’un 
mode de fonctionnement décentralisé. 
Nous privilégions le consensus puisque nous pensons que c’est un moyen de faire valoir l’intelligence 
collective. De plus, nous croyons qu’il est possible d’envisager des solutions constructives pour rallier 
des points de vue apparemment opposés. Un comité de co-coordination (qui comprend le 
coordonnateur et les chargéEs de projet de chaque volet) favorise des rapports plus égalitaires et 
une prise de décision à la fois plus fluide (que si toute l’équipe était impliquée pour chaque décision) 
et plus consensuelle (que si une seule personne en était responsable).   
<br>
L’innovation <br>
par la créativité, l’expérimentation et l’ouverture aux nouvelles idées tout en valorisant les savoirs 
traditionnels. 
Nous tentons toujours de nous améliorer, de nous inspirer de ce qui est positif et d’être à l’écoute 
des besoins de notre milieu afin de faire une réelle différence pour l’environnement. Nous 
souhaitons être accessibles, mais nous n’avons pas peur d’être différent·e·s afin de contribuer à la 
promotion et surtout à la mise en œuvre de pratiques écocitoyennes. 
<br>
Le Respect <br>
des êtres vivants et de leur environnement par des rapports harmonieux et la reconnaissance de 
l’autre. 
Nous sommes toujours à la recherche d’une approche gagnant·e·s-gagnant·e·s, autant à l’intérieur 
du collectif qu’au sein de nos différentes collaborations, que ce soit avec nos participant·e·s ou nos 
partenaires.  Le respect de notre mission, le respect des perspectives à long terme et le respect des 
personnes impliquées demeurent au coeur de nos actions et de nos choix. </p>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
       <?php if( get_field('images_nos_valeurs') ): ?>
    <img src="<?php the_field('images_nos_valeurs'); ?>" />
<?php endif; ?>
    </div>
  </div>
</div>

<div class="container my-5 apropos_section">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1 apropos_section_titre">Notre structure</h1>
      <p class="lead apropos_section_texte">
        Pourquoi un collectif? <br>
        Pour développer et promouvoir des actions écoresponsables et l’adoption 
        d’un mode de vie durable en misant sur l’engagement citoyen. 
        Vous êtes les bienvenu·e·s à participer à l’un ou l’autre de nos projets ou à trouver votre propre 
        façon de vous impliquer et de contribuer à notre mission. 
        Craque-Bitume est organisé sous la forme d’un collectif parce qu’il met en œuvre la synergie d’une 
        équipe constituée à la fois de travailleur·e·s, de stagiaires, de bénévoles et de participant·e·s. 
        Les processus de prise de décisions liées au fonctionnement de l’organisme favorisent la 
        transparence et la recherche du consensus. <br>
        L’organisme tire sa force et sa pertinence par les gens qu’il rassemble et les valeurs qu’il porte!  </p>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
		<?php if( get_field('image_de_notre_structutre') ): ?>
    <img src="<?php the_field('image_de_notre_structutre'); ?>" />
<?php endif; ?>
      
    </div>
  </div>
</div>


</main>



<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>