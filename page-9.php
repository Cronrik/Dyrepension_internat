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
        <p>Velkommen til Sejr & Davidsens Dyrepension og -internat. Vi er stolte af at være dedikerede til dyrevelfærd
            og beskyttelse. Lær mere om vores historie, mission og ekspertise.
            <br><br>
            Vi er glade for at dele vores historie, mission og lidenskab for dyrevelfærd med dig. Lær mere om, hvad der
            driver os, og hvordan vi gør en forskel for dyrene. Velkommen til vores verden af omsorg, engagement og
            kærlighed til vores firbenede venner.
        </p>
    </section>
    <!-- hvem er vi -->
    <section class="hvem_container">
        <img src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/gruppebillede-scaled.jpg" alt="hvem er vi">
        <article>
            <h2>hvem er vi?</h2>
            <p>Vi er et dedikeret team af dyreentusiaster med en fælles mission - at sikre, at alle dyr fortjener
                kærlighed, omsorg og et trygt hjem.
                Med baggrund som dyrelæge og veterinærsygeplejerske har vi skabt Sejr & Davidsens Dyrepension og
                -internat for at tilbyde kæledyr et hjem væk fra hjemmet. Vores mål er at gøre en positiv forskel i
                hvert dyrs liv. Velkommen til vores dyreverden, hvor omsorg og kærlighed er i centrum.
            </p>
        </article>
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
    <section class="team_container">
        <h2>Mød vores Team</h2>
        <article class="art1">
            <img src="" alt="team_member">
            <h3>Arbejders navn</h3>
            <h3>position</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, vel dolor ab neque consequuntur
                possimus repellat exercitationem? Quam amet mollitia, eaque incidunt aperiam distinctio commodi, hic
                pariatur velit aliquid sit?
            </p>
        </article>
    </section>
    <!-- anmæelser -->
    <section class="reviews_container">
        <h2>Anmelelser</h2>
        <p>
            "Jeg kan ikke takke Sejr & Davidsens Dyrepension og -internat nok for den fantastiske pleje, de gav min
            elskede hund, Bella. Fra det øjeblik vi trådte ind på stedet, kunne vi mærke den kærlighed og
            professionalisme, der er grundlaget for denne dyrepension. Personalet er utroligt dedikerede og kyndige, og
            de tog sig af Bella som om hun var deres egen.
            <br>
            Bella kom hjem glad og sund, og jeg kunne ikke have bedt om mere. Jeg vil helt sikkert anbefale Sejr &
            Davidsens Dyrepension og -internat til enhver, der leder efter den bedste pleje til deres kæledyr. De er
            simpelthen de bedste!"
        </p>
        <img src="http://sejr-og-davidsen.local/wp-content/uploads/2023/09/katteadfaerd.jpg" alt="reviewer">
        <h3>Kristian Thomsen</h3>
    </section>
</body>
<?php get_footer(); ?>
</html>