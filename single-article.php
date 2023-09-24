<!DOCTYPE html>
<html lang="da">
<?php get_header(); ?>
<body>
<h1 class="center-content">Hunde i Hjemmet</h1>
  <div class="index-eksperternes-hjørne-content-info center-content">
    <span><?php if (get_field('forfatter')){ the_field('forfatter');} ?></span>
    <div class="info-divider"></div>
    <span><?php if (get_field('dato')) { the_field('dato'); }?></span>
    <div class="info-divider"></div>
    <span><?php if (get_field('kategori')){ the_field('kategori');} ?></span>
    </div>
    <div class="separator"></div>
    <p class="ekspert-tekst">
      Anders Løvehjerte dykker dybere ned i forholdet mellem hunden og hjemmet. 
      Få ekspertindsigt i de bedste metoder til træning, legetøj, det særlige bånd mellem mennesker og hund, blandt andre ting.
    </p>
  </div>

  <div class="billede-tekst">
    <img src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/hund-og-hjemmet.jpg" alt="Hunde spiser af skål" width="840" height="500">
        <p> Jeg er hvad de fleste kalder en ekspert indenfor hundeadfærd og -træning. Jeg har en stor interesse indenfor os menneskers forhold til hunde, og vores hjem, og det har jeg altid haft. Jeg mener at forholdet er mere end bare ejer og kæledyr, men at der en forbindelse bygget på blandt andet loyalitet og kærlighed.
        </p>
            <h2>Hemmeligheden til et stærkt forhold</h2>
        <p> En vigtig del af vores menneskers forhold til vores hunde, er gennem træning. Ikke nok med at hundene nyder træning som hvalpe, men de lærer også dig som menneske at kende. Her igennem lærer din hun og dig samtidig også at respektere hinanden. Dette har blandt andet også en betydning for hvordan jeres bånd kommer til at udvikle sig. Selvom du er hundens ejer, er det vigtigt at du også har respekt overfor din hund, for at skabe et varmt og trykt miljø for hunden, og man ikke vil have at ens hund skal være bange for sin ejer. 
        </p>
  </div>
  <div class="billede-tekst">
    <img src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/Hund-ved-computer-scaled.jpg" alt="Hunde sidder ved computer" width="840" height="500">
            <h2>Vores bedset ven</h2>
        <p> En vigtig del af vores menneskers forhold til vores hunde, er gennem træning. Ikke nok med at hundene nyder træning som hvalpe, men de lærer også dig som menneske at kende. Her igennem lærer din hun og dig samtidig også at respektere hinanden. Dette har blandt andet også en betydning for hvordan jeres bånd kommer til at udvikle sig. Selvom du er hundens ejer, er det vigtigt at du også har respekt overfor din hund, for at skabe et varmt og trykt miljø for hunden, og man ikke vil have at ens hund skal være bange for sin ejer. 
     </p>
            <h2>Forhold og Forståelse</h2>
        <p>Det er vigtigt at du som hundeejer tager dig god tid til at forstå din hunds behov og adfærd. Du skal lytte til din hund, og i skal lære at kommunikere med hinanden. Her bliver der nemlig samtidig bygget tillid om mellem hund og ejer. Jo mere du og din hund forstår hinanden, jo stærkere et forhold  får i til hinanden. Derfor skal i selvfølgelig også lærer hvordan i kommunikere med hinanden. Hunde kan selvfølgelig ikke svare med tale, så hvordan skal hunden lærer at forstå dig? Skal den lære nogle bestemte tegn du giver den, kropsprog, tale kommandoer? Alt dette skal du finde ud af med din hund. Der er ikke noget der fungere bedre end det andet, det vigtigste er, at du med din hund finder ud af hvad der passer bedst til jer. </p>
        <img src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/hunde-krammer-scaled.jpg" alt="Hund bliver krammet" width="840" height="500">
  </div>
  <div class="parent">
    <div class="billede-venstre"> 
        <img src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/hund-krammer-ejer-scaled.jpg" alt="Hund krammer med ejer" width="840" height="500">
    </div>
    <div class="billede-højre"> 
        <img src="https://www.alexanderhusumsantis.com/wp-content/uploads/2023/09/hund-leger-med-ejer-scaled.jpg" alt="Hunde leger med ejer" width="840" height="500">
    </div>
    </div>

    <div class="billede-tekst">
            <p> Jeg er hvad de fleste kalder en ekspert indenfor hundeadfærd og -træning. Jeg har en stor interesse indenfor os menneskers forhold til hunde, og vores hjem, og det har jeg altid haft. Jeg mener at forholdet er mere end bare ejer og kæledyr, men at der en forbindelse bygget på blandt andet loyalitet og kærlighed.
            </p>
    </div>

    <section class="relateret-artikler index-find-ven sektion-mellemrum">
        <div class="separator"></div>
        <h2 class="center-content">Nyeste artikler</h2>
    </section>

    <div class="index-find-ven-grid main-margin">
    
    <?php 
  
  // Her laver vi en custom Query der trækker vores artikler ud på siden. De bliver igen sorteres efter datoer, men vi vil gerne fjerne den artikel man er inde på, og det gør vi ved at kalde "'post__not_in' => [get_the_ID()]" her 
 $frontpageArticle = new WP_Query(array(
  'post_type' => 'article', 
  'posts_per_page' => 3,
  'meta_key' => 'dato',
  'orderby' => 'meta_value_num',
  'order' => 'DSC',
  'post__not_in' => [get_the_ID()]
));

    while($frontpageArticle->have_posts()) {
      $frontpageArticle-> the_post();?>
      <div class="index-find-ven-grid-card">
    <?php 
    $dato = get_field('dato');
    $forfatter = get_field('forfatter');
    $kategori =  get_field('kategori');
    $billedeArtikel = get_field('billede_artikel');
    if (get_field('billede_artikel')): ?>
      <div class="index-find-ven-img center-content top-margin"><img src="<?php the_field('billede_artikel'); ?>"/></div>
      <?php endif; ?>
  
  <div class="index-eksperternes-hjørne-content-info">
  <span><?php if (get_field('forfatter')){ the_field('forfatter');} ?></span>
  <div class="info-divider"></div>
  <span><?php if (get_field('dato')) { the_field('dato'); }?></span>
  <div class="info-divider"></div>
  <span><?php if (get_field('kategori')){ the_field('kategori');} ?></span>
  </div>
  
  <h3><?php the_title(); ?></h3>  
  <p><?php the_content(); ?> <a class="link-farve" href="<?php echo get_permalink(); ?>"> Læs mere</a></p>

    <div class="index-find-ven-card-info-grid">
    <div class="index-find-ven-card-info"> 
    
</div>
</div>
</div>
<?php } ?>
</div>  
</section>

<?php get_footer(); ?>

