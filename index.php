<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaturante</title>
</head>
<body>
    <header>
        <?php include './components/header.php' ?> 
    </header>
    <main>
        <?php include './components/navDropDown.php' ?>
        <img class="main_image" id="main_image768p" src="./assets/images/mainImage-768x384p-72dpi.webp" alt="banner de comida, ingredientes y elementos de cocina">
        <img class="main_image" id="main_image1300p" src="./assets/images/mainImage-1300x650p-72dpi.webp" alt="banner de comida, ingredientes y elementos de cocina">
        <img class="main_image" id="main_image1500p" src="./assets/images/mainImage-1500x750p-72dpi.webp" alt="banner de comida, ingredientes y elementos de cocina">
        <section id="introducing_ourselves" class="home_section">
            <img id="introducing_ourselves-img-1" class="introducing_ourselves_img" src="./assets/images/introducing_ourselves-img-1.webp" alt="cesta de verduras">
            <img id="introducing_ourselves-img-2" class="introducing_ourselves_img" src="./assets/images/introducing_ourselves-img-2.webp" alt="cesta de verduras">
            <p class="fancy_letter">Exquisitez</p>
            <h1 id="home_h1">VERDADERA COMIDA ITALIANA</h1>
            <div class="star_lineContainer">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
            </div>
            <P class="home_normalText">Ingredientes de la mejor calidad, como en las recetas tradicionales, srevidos con pasión para nuestros clientes. Estaremos complacidos de darle la bienvenida a nuestro restaurant</P>
            <a id="knowUs" href="#">CONOCE NUESTRA HISTORIA</a>
            <figure id="home_slider_container">
                <img id="sliderImg" src="./assets/images/slider_home-1-1500x999.webp" alt="">
            </figure>
        </section>
        <section class="home_section">
            <p class="fancy_letter">Descubre</p>
            <h2 class="home_titles">MENÚ POPULAR</h2>
            <div class="star_lineContainer">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
                <img class="star_icon" src="./assets/icons/star_icon.svg" alt="icono de estrella">
            </div>
            <figure id="popularDishes">
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-1.webp" alt="plato de comida" loading="lazy"></div>
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-2.webp" alt="plato de comida" loading="lazy"></div>
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-3.webp" alt="plato de comida" loading="lazy"></div>
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-4.webp" alt="plato de comida" loading="lazy"></div>
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-5.webp" alt="plato de comida" loading="lazy"></div>
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-6.webp" alt="plato de comida" loading="lazy"></div>
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-7.webp" alt="plato de comida" loading="lazy"></div>
                <div class="popularDish"><p class="popularDishes_name">Nombre del plato</p><img src="./assets/images/popular-menu-8.webp" alt="plato de comida" loading="lazy"></div>
            </figure>
        </section>
        <section class="home_section mobile_component">
            <h2>CONTACTO</h2>
            <img class="home_contact_icon" src="./assets/icons/phone_icon_yellow.svg" alt="icono telefono">
            <p class="home_contact_info">Teléfonos: +57 300-358-13-11</p>
            <img class="home_contact_icon" src="./assets/icons/mail_icon_yellow.svg" alt="icono reloj">
            <p class="home_contact_info">Email: ronaldrrca@gmail.com</p>
            
        </section>
        <section class="home_section mobile_component">
        <h2>HORARIO DE ATENCIÓN</h2>
        <img class="home_contact_icon" src="./assets/icons/clock_icon_yellow.svg" alt="icono reloj">
            <p class="home_contact_info">Lunes-Domingo: 10:00am - 10:00pm</p>
        </section>
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9717.039261135467!2d13.44081804803285!3d52.4925363424465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e373f035901%3A0x42120465b5e3b70!2sBerl%C3%ADn%2C%20Alemania!5e0!3m2!1ses!2sco!4v1654293250763!5m2!1ses!2sco"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>
    <footer>
        <?php include './components/footer.php' ?>
    </footer>
    <script src="./js/header.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>