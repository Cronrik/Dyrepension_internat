<!DOCTYPE html>
<html lang="da">
<body>
    <?php get_header(); ?>
    <!-- pagebanner -->
    <section class="page_banner_sevices">
        <h1>Vores tjenester</h1>
        <p>Vi er her for at tilbyde pleje og adfærdstræning til dine kæledyr , samt adoptionsmuligheder for at finde dit næste kæledyr. Lad os sammen gøre en forskel for dyrene.
        </p>
    </section>

    <section class="service-adoption main-margin">
      <div class="service-adoption-flex">
        <div class="service-adoption-text">
          <h2>Adoption</h2>
          <p>
                I vores adoptionstjeneste tror vi på at vi kan give herreløse dyr en ny start. Vores dedikerede
                team arbejder hver dag på at matche kærlige familier med kæledyr, der længes efter en ny familie. Når du vælger at adoptere hos Sejr & Davidsen, giver du ikke bare et kæledyr en ny chance, men du bliver også en del af vores unikke fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi er her for at hjælpe dig med at finde din nye sjæleven. I vores
                adoptionstjeneste tror vi på at give herreløse dyr den nye start på livet de fortjener.
          </p>
        </div>
        <div class="service-adoption-image">
          <img
            src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/hund-med-gren-scaled.jpg"
            alt="Hund løber med en gren"
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
            src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/gard-1-scaled.jpg"
            alt="Billede af Sejr & Davidsens gård"
          />
        </div>
        <div class="service-pension-text">
          <h2>Pension</h2>
          <p>
          Når dit liv kalder på nye eventyr og oplevelser, så mener vi at det er vigtigt at have et sted hvor dit kæledyr kan få den samme kærlighed som du giver dem. Vi forstår nemlig dine kæledyrs behov og den kærlighed som du har til dem. 

          Vores team består nemlig af nogle helt unikke dyreelskere der er passionerede for at jeres kæledyr har det godt hos. Vi tilpasser altid vores pleje til dit kæledyrs behov. Vi har et stort udendørs areal hvor de kan opholde sig dagen lang, samt nogle rolige indendørs arealer. 
          </p>
        </div>

      </div>
    </section>

    <section class="service-adoption main-margin">
      <div class="service-adoption-flex">
        <div class="service-adoption-text">
          <h2>Adfærdstræning</h2>
          <p>
            Vi tilbyder et totalt skræddersyet adfærdstræningsprogram til dine kæledyr. Vores fantastiske team af erfarne trænere har dedikeret det tid til at give dine kæledyr den træning som præcist dit kæledyr har brug for. Uanset hvad det drejer sig om, så har vores eksperter en løsning. 

            Hvert kæledyr er unikt, og derfor tilbyder vi disse skræddersyet programmer. Vores erfaring gør at vi ved lige hvad der skal til. Vi arbejder samtidig på at dig og dit kæledyr skal have et unikt forhold. 
          </p>
        </div>
        <div class="service-adoption-image">
          <img
            src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/adfaerdstraening-scaled.jpg"
            alt="Ejer træner med sin hund"
          />
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
