<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
	<p>Développement web - Collège Montmorency - 2023</p>
	<section class="section__footer container-fluid d-flex flex-column">

        <div class="row flex-xl-row colonne--haut d-flex justify-content-evenly align-items-start">

          

          <div class="row col-12 col-sm-11 col-md-9 col-lg-9 col-xl-8 d-flex justify-content-center align-content-center align-items-centers text-center flex-wrap">

            <div class="footer-nav col-12 col-md-4 col-lg-3 col-xl-1 mb-2 mt-5 d-flex flex-column align-items-center">
              <a href="index.html" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none"><img class="footer__logo " src="./sources/logo.png" alt="Logo"></a>
            </div>

            <div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center align-content-start">
              <a href="./2nouvelles.html"> <h5 class="section">Nouvelles</h5></a>
              <a href="./2nouvelles.html" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte">Actualités</p></a>
            </div>
          
            <div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
              <a href="./3services.html"><h5 class="section">Services</h5></a>
              <a href="./3services.html" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte">Jardin</p></a>
              <a href="./3services.html" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte">Composte</p></a>
            </div>

            <div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
              <a href="./4equipe.html"><h5 class="section">Équipes</h5></a>
              <a href="./4equipe.html" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte">Notre équipe</p></a>
              <a href="./4equipe.html" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte">Joindre l'équipe</p></a>
            </div>
          
            <div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
              <a href="./5histoire.html"><h5 class="section">Histoire</h5></a>
              <a href="#" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte">Notre histoire</p></a>
            </div>

            <div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
              <a href="./6propos.html"><h5 class="section">À Propos</h5></a>
              <a href="./6propos.html" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte">FAQ</p></a>
            </div>
          </div>
          <div class="col-12 col-md-9 col-xl-4 mb-2 pt-4  d-flex flex-column align-items-center">
            <h5 class="section px-2 col-11 ">Joingnez-vous à une bonne cause !</h5>
            <div class="d-flex flex-wrap flex-lg-row justify-content-center sociaux mt-3  mt-xl-0">
              <a href="https://www.facebook.com/craquebitume"                           class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/craque.bitume/"                        class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/@craque-bitumeobnl4387"                  class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-youtube"></i></a>
              <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume" class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-cash-coin"></i></a>
              <a href="https://maps.app.goo.gl/16J4zraB6vR6eccZ9"                       class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-geo-alt"></i></a>
              <a href="https://craquebitume.org/"                                       class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-box-arrow-up-right"></i></a>
            </div>
            <p class="sous-section telephone mt-4"><i class="bi bi-telephone-inbound-fill"></i>+1 (418) 523-4580</p>
          </div>  

          <!-- <a href="https://maps.app.goo.gl/16J4zraB6vR6eccZ9" class="adresse"><p class="sous-section adresse">Centre des opérations : 435 Rue du Roi, Québec, QC G1K 2X1</p></a> -->
          <!-- <a href="https://maps.app.goo.gl/16J4zraB6vR6eccZ9" class="adresse"><p class="sous-section adresse">Centre administratif : 870 Av. De Salaberry, Québec, QC G1R 2T9 </p></a> -->

        </div>


        <div class="row"><div class="ligne-design my-1"></div></div>
        

        <div class="row">
          <div class="d-flex flex-row flex-wrap mb-6 sponsor-colonne">
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.capucin.org/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/capucin.png" alt="Capucin"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://clj.cssc.gouv.qc.ca/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/centre_louis-jolliet.png" alt="centre_louis-jolliet"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.quebec.ca/sante/systeme-et-services-de-sante/organisation-des-services/cisss-et-ciusss"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/centre_uni_quebec.png" alt="centre_uni_quebec"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://collectivitezenquebec.org/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/collectivite_zen_quebec.png" alt="collectivite_zen_quebec"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.desjardins.com/votre-caisse/index.jsp?transit=81520366" ><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/desjardins.png" alt="Desjardins"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://cdcbeauport.ca/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/dev_comunautaire_beauport.png" alt="dev_comunautaire_beauport"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.canada.ca/fr/emploi-developpement-social.html"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/dev_social_canada.png" alt="dev_social_canada"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.inspq.qc.ca/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/insp_qc.png" alt="insp_qc"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.littoralcitoyen.org/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/litoral_citoyen.png" alt="litoral_citoyen"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.omhq.qc.ca/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/omhg.png" alt="omhg"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="http://repac.org/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/repac-03-12.png" alt="repac-03-12"></a>
            <a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.saintsuave.com/"><img class="logo sponsor" src="./sources/medias/footer/logo_partenaire_jaune/saint-suave.png" alt="saint-suave"></a>
          </div>
        </div>
        <div class="copyright d-flex justify-content-center align-content-center text-center mt-2">
          <p class="credit text-body-secondary sous-section mb-0">&copy; 2023, Craque-Bitume, TFT</p>
        </div>
      </section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="./scripts/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
	
?>

</body>
</html>
