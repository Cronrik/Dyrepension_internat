<!DOCTYPE html>
<lang="da">
    <?php get_header(); ?>
    <body class="subpage_container">
        <!-- præsentation -->
        <section class="intro_subpage">
            <h1>Bella</h1>
            <p> er en livlig Beagle, fuld af energi og charme. Den perfekte følgesvend til aktive familier og en trofast
                ven
                til børn.</p>
        </section>
        <!-- bellas stats -->
        <?php 
    $hvilketDyr = get_field('dyr');
    $hundeRace = get_field('race_hund');
    $katteRace =  get_field('race_kat');
    $dyreKon = get_field('kon');
    $dyreAlder = get_field('alder');
    $fungereMed = get_field('fungere_godt_med_');
    $dyreBillede = get_field('billede_af_dyret_');
?>
    <section class="single-dog-flex   main-margin"> 
        <?php 
        if (get_field('billede_af_dyret_')): ?>
        <div class="single-dog-flex-left"><img src="<?php the_field('billede_af_dyret_'); ?>" style="height:300px;" 
        style="width:300px;"/></div>
        <?php endif; ?>
        <div class="single-dog-flex-right">
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
</section>
        <!-- lidt mere omh bella -->
        <section class="info_subpage">
            <h2>Lidt om mig</h2>
            <p>
                Mit navn er Bella og jeg er ret ny her hos Sejr og Davidsen. Mine gamle ejere kunne desværre ikke
                beholde
                mig da de blev for gamle til at tage sig af mig. Jeg savner dem rigtig meget, men jeg er også rigtig
                glad
                for at være her hos Sejr & Davidsen. De tager sig rigtig godt af mig og jeg har fået en masse nye
                venner!
                Min ynglings ting, er helt klar når vi er ude og gå frit i skovene.
                <br>
                Min livret er enten leverpostej eller lasagne. Men jeg kan faktisk også rigtig godt lide frugter på en
                god
                sommerdag. Jeg elsker også at være en tur på stranden når der er godt vejr. Jeg er nok det man kalder en
                rigtig vandhund
                <br>
                Jeg er meget renlig, og så elsker jeg at ligge og slappe af i solen efter en lang og aktiv dag.
                <br>
                Jeg er klar til at blive adopteret, og bringe glæde til en ny familie.
            </p>
        </section>
        <!-- lidt flere billeder -->
        <section class="img_subpage">
            <article class="petshowcase1">
            <?php 
        if (get_field('billede_af_dyret_')): ?>
        <div><img src="<?php the_field('billede_af_dyret_'); ?>" style="height:300px;" 
        style="width:300px;"/></div>
        <?php endif; ?>
            </article>
            <article class="petshowcase2">
            <?php 
        if (get_field('billede_af_dyret_')): ?>
        <div><img src="<?php the_field('billede_af_dyret_'); ?>" style="height:300px;" 
        style="width:300px;"/></div>
        <?php endif; ?>
            </article>
        </section>
        <!-- raceinfo -->
        <section class="raceinfo_subpage">
            <article>
                <h2>
                    Lidt om Racen
                </h2>
                <p>
                    Beagles er en aktiv race. De er frygtløse og meget kloge! I gamle dage blev de avlet som jagthunde.
                    Dog
                    er det en lille hund, men de matcher perfekt til kobbeljagt. De er ikke bange for vand og så elsker
                    de
                    absolut at arbejde i flok.
                    Selvom Beagles ikke er den største race, er de meget hurtige. Derfor skal man hyppigt træne sin
                    Beagle,
                    da de hurtigt kan være væk hvis du har fundet færten af et vildt dyr ude i naturen.
                    Eftersom de er Beagles godt kan lide at befinde sig i flokke, klarer de sig rigtig godt socialt. De
                    har
                    det godt med racer og størrelser. Så en tur i hundeskoven vil ikke være et problem.
                    Beagles kan tvæt imod også være en race som er meget dominerende. Derfor er det (igen) vigtigt med
                    hyppig træning. Beagles skal fra starten vide hvem der bestemmer, ellers bliver de modvillige. Dog
                    ser
                    de nuttede ud, men det kan til tider godt snyde. Når du dog har vist dem hvem der bestemmer, vil du
                    aldrig fortryde at have fået en Beagle. De er meget trofaste og loyale!
                </p>
            </article>
        </section>
        <section class="heath_subpage">
            <article>
                <h2>
                    Sundhed og helbred
                </h2>
                <p>
                    Beagles har en rigtigt stor appetit og det er selvfølgelig helt fint. Dog er det vigtigt at de får
                    den motion som de har brug for, ellers ender de meget nemt med at være overvægtige. Da det er en
                    forholdsvis lille race, vil rygsøjlen og leddene være under stort pres. Derfor ses det ofte at mange
                    Beagles får diskusprolaps.
                    <br>
                    En af kendetegnene ved Beagles er selvfølgelig deres store, nuttede og helt fantastiske ører.
                    Desværre er det sådan, at de nemt ender op med øreinfektion. De opfanger rigtig nemt alverdens
                    skidt, og kan derfor give dem meget smertefulde betændelser. Hvis man ikke holde øje med dette, og
                    hyppigt får renset deres ører, og de så ender med en øreinfektion, vil man efter noget tid kunne
                    finde mider i deres ører. Så hold skarpt øje med din Beagles opførsel. Hvis de begynder at ryste sig
                    meget voldsomt, og tilter deres hoved, skal du nok tjekke efter en ekstra gang.
                    <br>
                    Beagles bliver omkring 12-15 år. Husk at holde godt øje med deres vaner. Synes du lige pludselig den
                    har ændret sin opførsel og der virker til at være noget glat, så skal de selvfølgelig ikke være
                    bange for at spørge en dyrelæge til råds. Samtidig kan en sund ernæring og som før nævnt, det aktive
                    liv også gavne til levetiden.
                </p>
            </article>
        </section>
        <!-- opdeleer -->
        <section class="devider_subpage">
            <h2>Overvejelser før du adoptere</h2>
        </section>
        <section class="FAQ_subpage">
            <section>
                <img src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/adoption-scaled.jpg" alt="">
            </section>
            <article>
                <ul>
                    <li><h3>Har jeg råd</h3></li>
                    <p>
                        Om du har råd til at have hund er meget vigtigt at overveje før du adoptere. At have hund kan
                        være dyrt, med tjek hos dyrelægen, mad, legetøj og hvad der nu ellers følger med i at have hund.
                        Det er en helt fantastisk ting at dele hus med menneskets bedste ven, men man skal tage til
                        eftertanke om man har råd til at give hunden det liv den fortjener.
                    </p>
                    <hr>
                    <li><h3>Har jeg tid</h3></li>
                    <hr>
                    <li><h3>har jeg plads</h3></li>
                    <hr>
                    <li><h3>race og køn</h3></li>
                    <hr>
                    <li><h3>Børn</h3></li>
                    <hr>
                </ul>
            </article>
        </section>
    </body>

    </html>