<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Om os</title>
    <!-- css -->
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php get_header(); ?>
    <!-- pagebanner -->
    <section class="page_banner_about">
        <h1>Om os</h1>
        <p>
            Vi er glade for at dele vores historie, mission og lidenskab for dyrevelfærd med dig. Lær mere om, hvad der
            driver os, og hvordan vi gør en forskel for dyrene. Velkommen til vores verden af omsorg, engagement og
            kærlighed til vores firbenede venner.
        </p>
    </section>
    <!-- hvem er vi -->
    <section class="about-introduction main-margin">
      <div class="about-introduction-flex">
                <div class="about-introduction-image">
          <img
            src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/chewy-1p7TrM0LkXc-unsplash-scaled.jpg"
            alt="Billede af ejerne med deres hund"
          />
        </div>
        <div class="about-introduction-text">
          <h2>Hvem er vi?</h2>
          <p>
          Sejr & Davidsens Dyrepension og -internat er et sted hvor alle dyr er velkommen. Jeres dyr er altid vores første prioritet og sammen med vores brede vifte af eksperter indenfor alle dyr, vil vi altid yde den bedste service. Vi har været i branchen i 20+ år, så i kan roligt overlade jeres bedste venner til os!
          </p>
        </div>
      </div>
    </section>
    <!-- egengenemt -->
    <section class="engegement_container">
        <article class="infocol">
            <h2>Vores Engagement i Handling
            </h2>
            <p>
                I Sejr & Davidsens Dyrepension og -internat er vores dedikation til dyrevelfærd mere end bare ord. Det
                er handling. Vi stræber efter at gøre en positiv forskel i hvert dyrs liv og er stolte af vores mission
                og ekspertise.
                <br>
                <b>Vores Mission</b>: Vores mission er at tilbyde kæledyr et trygt og kærligt hjem væk fra hjemmet. Vi
                arbejder
                for at give herreløse og nødstedte dyr en ny start og forbedre livskvaliteten for alle dyr.
                <br>
                <b>Vores Ekspertise</b>: Med vores baggrund som dyrelæge og veterinærsygeplejerske er vi specialiserede
                i
                dyresundhed og adfærd. Vi træner, plejer og styrker dyr for at hjælpe dem med at trives.
                <br>
                <b>Vores Engagement</b>: Vi er dybt engageret i at gøre en positiv forskel for dyr i nød. Vi samarbejder
                med
                frivillige og støtte fra lokalsamfundet for at opnå vores mål og skabe en bedre fremtid for dyr.
                <br>
                Ved at dele vores mission, ekspertise og engagement ønsker vi at inspirere andre til at deltage i vores
                bestræbelser og hjælpe dyr i nød. Sammen kan vi gøre en forskel.
            </p>
        </article>
        <section class="imgcol">
            <img class="pet_1" src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/billede-3-scaled.jpg" alt="animal_img1">
            <img class="pet_2" src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/billede-2-scaled.jpg" alt="animal_img2">
            <img class="pet_3" src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/billede-1-scaled.jpg" alt="animal_img3">
        </section>
    </section>
    <!-- vores team -->
    <section class="team-section">
        <h2 class="overskrift-størrelse">Mød vores Team</h2>
        <div class="index-find-ven-grid main-margin">
    
    <?php 
  
 $frontpageTeams = new WP_Query(array(
  'post_type' => 'team', 
));

    while($frontpageTeams->have_posts()) {
      $frontpageTeams-> the_post();?>
      <div class="index-find-ven-grid-card">
    <?php 
    $billedeTeam = get_field('medarbejder_billede');
    $stilling =  get_field('stilling');
        if (get_field('medarbejder_billede')): ?>
        <div class="index-find-ven-img center-content top-margin"><img src="<?php the_field('medarbejder_billede'); ?>"/></div>
        <?php endif; ?>

    <h2 class="team-tekst-margin"><?php the_title(); ?></h2>  
        <p class="center-content team-tekst-margin-p"> <?php 
            if(get_field('stilling')) {
                the_field('stilling');
            } 
        ?></p>


    <p><?php the_content(); ?></p>

    <div class="index-find-ven-card-info-grid">
    <div class="index-find-ven-card-info"> 
    
</div>
</div>
</div>
<?php } ?>
</div>
</section>

    <!-- anmeldelser -->
<section class="anmeldelser-box">
      <div class="anmeldelser-backimg"></div>
      <section class="anmeldelser-flex">
        <div class="arrow-left">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            height="3rem"
            viewBox="0 0 320 512"
          >
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <style>
              svg {
                fill: #ffffff;
              }
            </style>
            <path
              d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"
            />
          </svg>
        </div>

    <section class="anmeldelser-content">
          <h3>Succeshistorier</h3>
          <p class="anmeldelser-text">
            Min historie begyndte som en ensom sjæl på udkig efter mening. Jeg
            besluttede at besøge Sejr & Davidsens Dyrepension og -internat, og
            det var her, jeg mødte Bella. Bella, en smuk Labrador-blanding,
            stjal mit hjerte med det samme. Hendes entusiasme og hengivenhed var
            smittende. Beslutningen om at adoptere hende var en af de bedste
            beslutninger, jeg nogensinde har truffet. Siden da har Bella været
            min trofaste følgesvend. Vi har delt eventyr, latter og utallige
            øjeblikke af kærlighed. At adoptere Bella fra Sejr & Davidsens
            Dyrepension var mere end at få en hund; det var at finde min bedste
            ven og en utrolig kilde til glæde.
          </p>
          <img
            src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/thomas-m.jpg"
            alt="Portræt af hund fra succes historie"
          />
          <p class="anmeldelser-navn">Kristian Thomsen</p>
        </section>
        <div class="arrow-right">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            height="3rem"
            viewBox="0 0 320 512"
          >
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <style>
              svg {
                fill: #ffffff;
              }
            </style>
            <path
              d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"
            />
          </svg>
        </div>
      </section>
    </section>
    
</body>
<?php get_footer(); ?>
</html>