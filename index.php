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
    </main>
    <footer>
        <?php include './components/footer.php' ?>
    </footer>
    <script src="./js/header.js"></script>
</body>
</html>