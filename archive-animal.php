<!DOCTYPE html>
<html lang="da">
<body>
    <?php get_header(); ?>
    <!-- pagebanner -->
    <section class="page_banner_sevices">
        <h1>vores tjenester</h1>
        <p>Vi er her for at tilbyde kærlig pleje, adfærdstræning og adoptionsmuligheder til dine kæledyr. Lad os sammen
            gøre en positiv forskel for dyrene.
        </p>
    </section>
    <!-- adoptions intro -->
    <section class="adoption_container">
        <section>
            <img src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/adoption-scaled.jpg" alt="intro_img">
        </section>
        <article>
            <h3>Adoption</h3>
            <print>I vores adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede
                team
                arbejder hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du
                vælger at adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af
                vores hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives,
                og vi er her for at hjælpe dig med at finde din perfekte følgesvend.I vores

                adoptionstjeneste tror vi på at give herreløse dyr en ny start på livet. Vores dedikerede team arbejder
                hårdt for at matche kærlige familier med kæledyr, der længes efter et kærligt hjem. Når du vælger at
                adoptere gennem os, giver du ikke bare et kæledyr en chance, men du bliver også en del af vores
                hjertevarme fællesskab. Vi tror på, at ethvert dyr fortjener kærlighed og en chance for at trives, og vi
                er her for at hjælpe dig med at finde din perfekte følgesvend.
            </print>
            <br>
            <button type="submit">Læs mere</button>
        </article>

    </section>
    <!-- adoptions artickler -->
    <section class="index-find-ven">
      <h2>Find din nye bedste ven</h2>
      <div class="index-find-ven-flex main-margin">
    <?php  
    $frontpageAnimals = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'animal'
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

    <div class="index-find-ven-card-info-grid">
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
    <a href="<?php echo get_permalink(); ?>"> <button> <?php the_title(); ?></button></a>
</div>
<?php } ?>
</div>  
</section>

    <hr>
    <!-- pention section -->
    <section class="pention_container">
        <section>
            <img src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/gard-scaled.jpg" alt="intro_img">
        </section>
        <article>
            <h3>Pension</h3>
            <p>Når dit liv fører dig på eventyr og rejser, er det vigtigt at have en pålidelig partner til at tage sig
                af dine kæledyr. Hos Sejr & Davidsens Dyrepension og -internat forstår vi dyrets unikke behov og den
                kærlighed, du har til dem. Vores pensionsophold er skabt med omsorg og dedikation, så du kan tage afsted
                med ro i sindet.
                Vores erfarne team består af dyreelskere, der er passionerede omkring kæledyr. Vi har skabt et trygt og
                hyggeligt hjem væk fra hjemmet, hvor dine kæledyr vil trives. Uanset om de er energiske og elsker at
                lege, eller de foretrækker at slappe af og få masser af opmærksomhed, tilpasser vi vores pleje til deres
                individuelle behov.
                Vores pensionsophold inkluderer daglige aktiviteter, sjove legestunder og masser af motion for at sikre,
                at dine kæledyr har det sjovt og forbliver sunde under deres ophold. Vi har rummelige områder både
                indendørs og udendørs, hvor de kan udforske og nyde deres tid med os.
            </p>
            <button type="submit">Se flere</button>
        </article>
    </section>
    <hr>
    <!-- adfærd section -->
    <section class="adfærd_container">
        <section>
            <img src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/adfaerdstraening-scaled.jpg" alt="intro_img">
        </section>
        <article>
            <h3>Adfærdstræning</h3>
            <print>
                Hos Sejr & Davidsens Dyrepension og -internat er vi stolte af at tilbyde skræddersyet adfærdstræning til
                både hunde og katte. Vores team af erfarne adfærdseksperter har dedikeret deres tid og ekspertise til at
                hjælpe dig og dit kæledyr med at overvinde adfærdsproblemer, uanset om det drejer sig om
                træningsvanskeligheder, aggression, angst eller andre adfærdsrelaterede udfordringer.

                Vi forstår, at hvert kæledyr er unikt, og derfor tilpasser vi vores træningsprogrammer til de
                individuelle
                behov og temperament hos dit kæledyr. Vores tilgang til adfærdstræning er baseret på positive og kærlige
                metoder, der fokuserer på belønning og opmuntring. Vi tror på at opbygge tillid og styrke forholdet
                mellem
                dig og dit kæledyr i hele træningsprocessen.
            </print>
            <br>
            <button type="submit">Se flere</button>
        </article>
    </section>
</body>
<?php get_footer(); ?>

</html>