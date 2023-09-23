<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Eksperterne.css" />
    <title>Eksperternes Hjørne</title>
  </head>
  <body>
    <?php get_header(); ?>
    <section class="hero-banner-eksperterne">
      <div class="hero-content-eksperterne">
        <h1>Eksperternes hjørne</h1>
        <p>
          Deltag i vores eksperters verden af dyrevelfærd, træning og sundhed.
          Få rådgivning fra de bedste for at skabe et lykkeligt liv for dine
          kæledyr.
        </p>
      </div>
    </section>

    <section class="index-find-ven sektion-mellemrum">
      <h2>Eksperternes hjørne</h2>
      <p class="ekspert-tekst">Få et forsmag på vores dyreeksperters rådgivning og indsigt. I Eksperternes Hjørne deler vores dyrelæge og dyreadfærds specialist deres passion og viden om dyreadfærd, sundhed og pleje.</p>

      <div class="index-find-ven-grid main-margin">
    
    <?php 
  
  $frontpageArticle = new WP_Query(array(
    'post_type' => 'article', 
    'meta_key' => 'dato',
    'orderby' => 'meta_value_num',
    'order' => 'DSC'
));

while($frontpageArticle->have_posts()) {
  $frontpageArticle-> the_post();?>
  <div class="index-find-ven-card">
<?php 
$dato = get_field('dato');
$forfatter = get_field('forfatter');
$kategori =  get_field('kategori');
$billedeArtikel = get_field('billede_artikel');
    if (get_field('billede_artikel')): ?>
    <div class="index-find-ven-img center-content"><img src="<?php the_field('billede_artikel'); ?>"/></div>
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


  </body>
  <?php get_footer(); ?>
</html>
