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
            Hos Sejr & Davidsen elsker vi at dele vores helt fantastiske historier, engegament og mål med dig. Lær mere om hvad der driver os som dyrepension og -internat og hvordan vi gør en forskel for dyrene.  
        </p>
    </section>
    <!-- hvem er vi -->
    <section class="about-introduction main-margin">
      <div class="about-introduction-flex">
                <div class="about-introduction-image">
          <img
            src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/chewy-1p7TrM0LkXc-unsplash-scaled.jpg"
            alt="hund får godbid af ejer"
          />
        </div>
        <div class="about-introduction-text">
          <h2>Hvem er vi?</h2>
          <p>
          Sejr & Davidsens Dyrepension og -internat er et sted hvor alle dyr
            er velkommen. Jeres dyr er altid vores første prioritet og sammen med vores brede vifte af eksperter indenfor alle dyr, vil vi altid yde den bedste service. Vi har været i branchen i 20+ år, så i kan roligt overlade jeres bedste venner til os!
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
                I Sejr & Davidsen er dyrevelfærd mere end bar et ord. For os handler det om at gøre en forskel i ethvert dyrs liv og vi er stolte af vores helt fantastike team, som gør vi kan udføre enhver form for service for dig<br>
                <b>Vores Mission</b>: Vores mission er at dit kæledyr får et trykt og kærligt hjem, væk fra hjemmet. Her skal de kunne føle sig hjemme! Vi stræber på at give dyr den nye start på livet som de fortjener. <br>
                <b>Vores Ekspertise</b>: Med vores baggrund som dyrelæge og veterinærsygeplejerske er vi specialiserede i dyresundhed og adfærd. Derfor er vi også eksperter i at træne, pleje og styrke dyr for at hjælpe dem med at finde et sted de trives. <br>
                <b>Vores Engagement</b>: Vi er engageret i at gøre en forskel for dyr der ikke har det godt. Vi har samarbejde med både frivillige og støtte fra samfundet igennem donationer. Dette hjælper os mod at kunne skabe et bedre liv for dyr.<br>
                Vi ønsker at inspirere andre til at deltage i vores mission og engagement og hjælpe dyr i nød, for sammen kan vi nemlig gøre en forskel.

            </p>
        </article>
        <section class="imgcol">
            <img class="pet_1" src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/billede-3-scaled.jpg" alt="ejer holder sin hund">
            <img class="pet_2" src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/billede-2-scaled.jpg" alt="ejer holder sin hund">
            <img class="pet_3" src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/billede-1-scaled.jpg" alt="ejer holder sin hund">
        </section>
    </section>
    <!-- vores team -->
    <section class="team-section">
        <h2 class="overskrift-størrelse">Mød vores Team</h2>
        <div class="index-find-ven-grid main-margin">
    
    <?php 
  
 $frontpageTeams = new WP_Query(array(
  'post_type' => 'team',
  'orderby' => 'publish_date',
  'order' => 'ASC'
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
          <h3>Anmeldelser</h3>
          <p class="anmeldelser-text">
          "Jeg kan ikke takke Sejr & Davidsen nok for den helt fantastiske pleje, de gav min elskede Schæfer, Buster. Man kan fra det øjeblik man træder ind, mærke den fantastiske energi og det engagement de har. De er meget professionelle, og er virkelig god med dyrene. 

          Da jeg hentede Buster, havde jeg næsten svært ved at få ham med hjem igen, da han næsten ikke kunne få sagt farvel til det fantastiske personale, og de mange nye venner han har fået. Dette var første gang Buster har været hos Sejr & Davidsen, men det vil helt klart ikke være sidste gang! Jeg vil klart anbefale Sejr & Davidsen, for de simpelthen bare de bedste!"
          </p>
          <img
            src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/thomas-m.jpg"
            alt="Portræt af hundeejer"
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
   <?php get_footer(); ?> 
