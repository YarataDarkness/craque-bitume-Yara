<?php 
/**
 * 	Template Name: FAQ
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<main>
	<div class="contenu-news">

    <div class="faq__hero">

      <h1 class="nouvelles__hero-title">F.A.Q.</h1>
    </div>

    <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
    <div class="card description_generique">
      <div class="card-body">
      <p class="description_generique_texte">Vous avez une question? <br>
        Nous avons la réponse ! </p>
    </div>
</div>
  
   <!------------------------------------ FAQ ----------------------------------------------------->

    <div class="accordion accordion_faq m-5">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <strong>Comment puis-je m'inscrire à une formation?</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Notre nouveau site web est conçu pour y recevoir vos inscriptions!<br> Vous n'avez qu'à sélectionner la
            formation qui vous intéresse, puis cliquer sur « Ajouter au panier ». Vous pourrez ensuite procéder
            au paiement directement dans votre panier. Une fois le paiement effectué, votre place sera réservée
            pour la formation! Vous recevrez un courriel de confirmation vous communiquant les informations
            importantes dans les quelques jours qui précèdent la formation. Si vous ne l'avez pas reçu, pensez à
            vérifier vos indésirables. <br> <br>
            En cas de problème avec votre inscription, contactez-nous directement par téléphone ou via
            l'adresse courriel formation@craquebitume.org.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong>Comment puis-je accéder au rabais de 5$?</strong>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Ce rabais est offert aux membres de Craque-Bitume. Vous pouvez vous procurer votre adhésion
            membre sur notre site web, dans la section magasin général. Une fois connecté à l'espace membre,
            le 5$ de rabais s'appliquera automatiquement lors de vos prochains achats! Ce rabais sur nos
            formations est notre manière de vous remercier de soutenir notre organisme.

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <strong>Je me suis inscrit·e à une formation en ligne et je n'ai toujours pas reçu le lien de connexion. Que
              dois-je faire?</strong>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Un courriel de confirmation contenant les informations importantes ainsi que le lien de connexion
            vous est envoyé dans les 2 à 5 jours précédants la formation. Si vous ne le recevez pas à l'intérieur
            de ce délai, pensez à consulter vos indésirables. En cas de problème, écrivez directement à
            formation@craquebitume.org le plus tôt possible pour que le·a chargé·e de projet vous apporte de
            l'assistance. <br> <br>
            N.B. Toutes nos formations en ligne sont enregistrées et peuvent être écoutées en différé pendant
            deux semaines. Un courriel vous sera envoyé dans les 2 jours suivant la formation contenant le lien
            pour récupérer l'enregistrement.

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <strong>Je souhaite m'inscrire à une formation, mais elle semble déjà complète, y a-t-il une manière d'y
              assister quand même?</strong>
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Le nombre de places disponibles est établi selon des critères réfléchis. Si la formation est pleine,
            nous vous invitons à vous inscrire à la liste d'attente directement sur la page de la formation pour
            signifier votre intérêt. Si une place se libère, vous serez avertis dans les plus brefs délais! Signifier
            votre intérêt via la liste d'attente est également une manière de nous faire savoir que vous aimeriez
            voir cette formation être organisée à nouveau.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <strong>Je me suis inscrit·e à une formation mais je ne pourrai finalement pas y assiter, que dois-je
              faire?</strong>
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Vous pouvez consulter notre politique de remboursement en défilant la page de la formation en
            question vers le bas. Peu importe la manière dont vous procèderez, nous vous invitons à nous aviser
            de votre absence via l'adresse formation@craquebitume.org, nous pourrons ensuite procéder au
            remboursement complet ou partiel, si la situation le permet.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <strong>J'aimerais suivre une formation, mais elle n'est pas disponible dans votre offre, que dois-je
              faire?</strong>
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Nous sommes friands de nouvelles idées de formations pour plaire à notre clientèle! Écrivez-nous
            directement à formation@craquebitume.orgpour proposer votre idée et il nous fera plaisir de
            considérer votre proposition!
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <strong>J'aimerais accueillir une formation de Craque-Bitume pour un groupe, comment dois-je m'y
              prendre?</strong>
          </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Rendez-vous dans la section Formation de groupes de notre site web pour y voir les formations
            offertes. Vous pouvez également réserver et payer directement en ligne!
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            <strong>Je suis formateur·rice et j'aimerais collaborer avec Craque-Bitume pour offrir une formation,
              comment dois-je m'y prendre?</strong>
          </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Écrivez-nous directement à formation@craquebitume.org pour présenter votre concept et pour en
            discuter davantage avec nous.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            <strong>J'aimerais aider le volet formations de Craque-Bitume, comment puis-je m'impliquer?</strong>
          </button>
        </h2>
        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Nous avons fréquemment besoin d'aide bénévole durant certaines de nos formations. Signifiez votre
            intérêt à notre chargé·e de projet en contactant directement l'adresse courriel
            formation@craquebitume.org!
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            <strong>Est-il possible d'avoir accès au contenu des formations?</strong>
          </button>
        </h2>
        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            La majorité de nos formations appartiennent à nos formateurs. La décision de partager ou non leur
            contenu leur revient. <br> <br>
            Dans le cas où le contenu vous est accessible, nous vous demandons de ne pas le partager
            considérant qu'il s'agit d'un contenu payant. <br> <br>
            Les enregistrements vidéo de nos formations en ligne sont disponibles pendant les deux semaines
            suivant la formation. Il vous est permis de conserver le contenue à long terme, il est alors de votre
            responsabilité de l'enregistrer sur un appareil de stockage externe dans les délais établis. Il vous est
            alors interdit de partager le contenu d'une quelconque manière.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
            <strong>Comment dois-je m'y prendre pour accéder au prix réduit d'une série de formations?</strong>
          </button>
        </h2>
        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Nous pouvons offrir des prix réduits grâce à notre partenaire financier, le Centre de formation pour
            adultes Louis-Jolliet qui reconnait certaines de nos formations comme une démarche
            d'apprentissage citoyenne. Pour y avoir accès, vous devez vous inscrire comme étudiant·e du Louis-
            Jolliet et vous engager à certaines obligations supplémentaires. Pour en connaître d'avantage,
            consultez la section de notre site web dédiée à cet effet en cliquant sur « en savoir plus » sur la page
            de la série de formation en question.
          </div>
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