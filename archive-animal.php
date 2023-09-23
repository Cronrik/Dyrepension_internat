<!DOCTYPE html>
<html lang="da">
<body>
    <?php get_header(); ?>
    <!-- pagebanner -->
    <section class="page_banner_sevices">
        <h1>Vores tjenester</h1>
        <p>Vi er her for at tilbyde kærlig pleje, adfærdstræning og adoptionsmuligheder til dine kæledyr. Lad os sammen
            gøre en positiv forskel for dyrene.
        </p>
    </section>
    
    <section class="service-adoption main-margin">
      <div class="service-adoption-flex">
        <div class="service-adoption-text">
          <h2>Adoption</h2>
          <p>
                I vores adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede
                team arbejder hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du vælger at adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af vores hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi er her for at hjælpe dig med at finde din perfekte følgesvend.I vores
                adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede team arbejder hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du vælger at adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af vores hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi er her for at hjælpe dig med at finde din perfekte følgesvend.
          </p>
        </div>
        <div class="service-adoption-image">
          <img
            src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/hund-med-gren-scaled.jpg"
            alt="Billede af ejerne med deres hund"
          />
        </div>
      </div>
    </section>

    <!-- adoptions artickler -->
    <section class="index-find-ven">
      <h2>Find din nye bedste ven</h2>
      <div class="index-find-ven-flex main-margin">
    <?php  
    $frontpageAnimals = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'animal',
      'orderby' => 'title',
      'order' => 'ASC'
    ));

    while($frontpageAnimals->have_posts()) {
      $frontpageAnimals-> the_post();?>
      <div class="index-find-ven-card">
    <?php 
    $hvilketDyr = get_field('dyr');
    $hundeRace = get_field('race_hund');
    $katteRace =  get_field('race_kat');
    $dyreKon = get_field('kon');
    $dyreAlder = get_field('alder');
    $fungereMed = get_field('fungere_godt_med_');
    $dyreBillede = get_field('billede_af_dyret_');
        if (get_field('billede_af_dyret_')): ?>
        <div class="index-find-ven-img center-content"><img src="<?php the_field('billede_af_dyret_'); ?>"/></div>
        <?php endif; ?>
    <h3><?php the_title(); ?></h3>  
    <p><?php the_content(); ?></p>

    <div class="index-find-ven-card-info-grid-venstre">
    <div class="index-find-ven-card-info"> 
    <p>
      <strong>Race: </strong> <?php if (get_field('race_hund')) {
     the_field('race_hund');
    }    else if (get_field('race_kat')) {
          the_field('race_kat');
      } ?> 
    </p> 
    
      <p>
    <strong>Køn: </strong> <?php if (get_field('kon')) {
        the_field('kon');
    } ?>  
    </p>
    <div class="index-find-ven-card-info-højre">
    <p>
      <strong>Alder: </strong> <?php 
        if (get_field('alder')) {
        the_field('alder');
        } ?>
    </p>

    <p>
      <strong>Fungere godt med: </strong> <?php if (get_field('fungere_godt_med_')) {
      the_field('fungere_godt_med_'); 
    } ?>
    </p>
    
</div>
</div>
</div>
    <a href="<?php echo get_permalink(); ?>"> <button> <?php the_title(); ?></button></a>
</div>
<?php } ?>
</div>  
</section>

<section class="service-pension main-margin">
      <div class="service-pension-flex">
        <div class="service-pension-image">
          <img
            src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/gard-1-scaled.jpg"
            alt="Billede af ejerne med deres hund"
          />
        </div>
        <div class="service-pension-text">
          <h2>Pension</h2>
          <p>
                I vores adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede
                team arbejder hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du vælger at adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af vores hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi er her for at hjælpe dig med at finde din perfekte følgesvend.I vores
                adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede team arbejder hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du vælger at adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af vores hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi er her for at hjælpe dig med at finde din perfekte følgesvend.
          </p>
        </div>

      </div>
    </section>

    <section class="service-adoption main-margin">
      <div class="service-adoption-flex">
        <div class="service-adoption-text">
          <h2>Adfærdstræning</h2>
          <p>
                I vores adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede
                team arbejder hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du vælger at adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af vores hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi er her for at hjælpe dig med at finde din perfekte følgesvend.I vores
                adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede team arbejder hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du vælger at adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af vores hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi er her for at hjælpe dig med at finde din perfekte følgesvend.
          </p>
        </div>
        <div class="service-adoption-image">
          <img
            src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/adfaerdstraening-scaled.jpg"
            alt="Billede af ejerne med deres hund"
          />
        </div>
      </div>
    </section>
</body>
<?php get_footer(); ?>

</html>