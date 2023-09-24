<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Kontakt.css" />
    <title>Kontakt</title>
  </head>
  <body>
    <?php get_header(); ?>
    <section class="hero-banner-kontakt">
      <div class="hero-content-kontakt">
        <h1>Kom i Kontakt Med Os</h1>
        <p>
          Vi er her for at lytte og hjælpe. Brug formularen nedenfor til at får svar på
          dine spørgsmål, bekymringer eller give feedback. Vi ser frem til at høre
          fra dig og hjælpe dig og dine kæledyr.
        </p>
      </div>
    </section>

    <section class="information">
      <div class="grid-container-kontakt">
        <div class="grid-item-kontakt">
          <h2>Adresse</h2>
          <p>
            Et sjovt sted i Danmark <br />
            9800 Sjovt
          </p>
        </div>
        <div class="grid-item-kontakt">
          <h2>Åbningstider</h2>
          <p>
            <b>Man-fre: </b> 08.00 - 19.00 <br />
            <b>Lør-søn: </b> 10.00-16.00
          </p>
        </div>
        <div class="grid-item-kontakt">
          <h2>Kontakt</h2>
          <p>
            <b>Telefon: </b> 12345678 <br />
            <b>Email: </b> email@email.com
          </p>
        </div>
      </div>
    </section>

  <section class = "footer-kontakt-box white-text">
      <section class = "footer-kontakt-flex main-margin">
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34746.98741061532!2d9.885753231379471!3d57.02266933385764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464932f3c3277f23%3A0xfba40df4acc55c89!2sAalborg%20St.%20(Omr%C3%A5de%20A%20%2F%20John%20F.%20Kennedys%20Plads)!5e0!3m2!1sda!2sdk!4v1695300316911!5m2!1sda!2sdk" width="600" height="450" style="border:0; border-radius: 15px; margin-top: 1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class = "footer-kontakt-form center-content">
        <!-- <div class = "main-margin"> -->
        <form action=""><form action="#">
          <!-- <label for="navn">Fuldt Navn</label> -->
          <input type="text" id="navn" name="navn" placeholder="Navn..">
          
          <!-- <label for="email">E-mail</label> -->
          <input type="text" id="email" name="email" placeholder="email@gmail.dk">
          
          <!-- <label for="kommentar">Kommentar</label> -->
          <textarea id="kommentar" name="kommentar" placeholder="Besked.."></textarea>
          
          <input type="submit" value=" Send ">
        </form>
        </div>
      </div>
    </section>
    <div class = "doner-banner main-margin">
      <h3>Gør en Forskel: Donér til Dyrevelfærd</h3>
      <button class = "doner-button">Donér</button>
    </div>
    </section>

    <footer>
        <div class = "footer-grid main-margin">
        <section class="footer-logo">
          <a href="footer.html">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fff8f1}</style><path d="M226.5 92.9c14.3 42.9-.3 86.2-32.6 96.8s-70.1-15.6-84.4-58.5s.3-86.2 32.6-96.8s70.1 15.6 84.4 58.5zM100.4 198.6c18.9 32.4 14.3 70.1-10.2 84.1s-59.7-.9-78.5-33.3S-2.7 179.3 21.8 165.3s59.7 .9 78.5 33.3zM69.2 401.2C121.6 259.9 214.7 224 256 224s134.4 35.9 186.8 177.2c3.6 9.7 5.2 20.1 5.2 30.5v1.6c0 25.8-20.9 46.7-46.7 46.7c-11.5 0-22.9-1.4-34-4.2l-88-22c-15.3-3.8-31.3-3.8-46.6 0l-88 22c-11.1 2.8-22.5 4.2-34 4.2C84.9 480 64 459.1 64 433.3v-1.6c0-10.4 1.6-20.8 5.2-30.5zM421.8 282.7c-24.5-14-29.1-51.7-10.2-84.1s54-47.3 78.5-33.3s29.1 51.7 10.2 84.1s-54 47.3-78.5 33.3zM310.1 189.7c-32.3-10.6-46.9-53.9-32.6-96.8s52.1-69.1 84.4-58.5s46.9 53.9 32.6 96.8s-52.1 69.1-84.4 58.5z"/></svg>
          </a>
        </section>
        <section class = "menu-section-footer">
          <h2>Menu</h2>
          <ul>
          <li class="footer-list-style"><a href="/hjem">Hjem</a></li>
          <li class="footer-list-style"><a href="/om-os">Om Os</a></li>
          <li class="footer-list-style"><a href="/tjenester">Tjenester</a></li>
          <li class="footer-list-style"><a href="/eksperternes-hjorne">Eksperternes hjørne</a></li>
          <li class="footer-list-style"><a href="/kontakt">Kontakt</a></li>
        </ul>
        </section>
        <section class="footer-sections">
          <h2>Kontakt</h2>
          <ul class="contact-info-footer">
            <p>Adresse:  Nielsebbersgade 72</p>
            <p>E-mail: email@email.dk</p>
            <p>Telefon: +45 12345678</p>
            <section>
              <svg xmlns="http://www.w3.org/2000/svg" height="2rem" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" height="2rem" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" height="2rem" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" height="2rem" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg> 
            </section>
        </ul>
        </section>
      </footer> 

</body>
</html>
