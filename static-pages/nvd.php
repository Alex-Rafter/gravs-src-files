<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVD</title>
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
    <script src="https://unpkg.com/petite-vue" defer init></script>
</head>
<body>
<?php include('/src-test/inc/components/header.php'); ?>

<main class="main overflow-hidden" id="main">
    <!-- NCD Hero -->
    <!-- Use Home About Component -->
    <?php include('/src-test/inc/modules/new-vehicles/nvd-hero.php'); ?>
    <!-- Version Selector -->
    <!-- Version Selector and Retail Offers Mostly The Same -->
    <?php include('/src-test/inc/modules/new-vehicles/nvd-version-select.php'); ?>
    <!-- CW Plugin- Just the Normal Plugin -->
    <!-- Retail Offers -->
    <?php include('/src-test/inc/modules/new-vehicles/nvd-version-select.php'); ?>
    <!-- Full Width and Spots -->
    <!-- Spots the Same - With Full Width Above -->



</main>
<?php include('/src-test/inc/modules/home/get-in-touch.php'); ?>
<?php include('/src-test/inc/components/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $('.hamburger').click(() => $('.fat-nav').toggleClass('active'));
    
        function expanderFunc() {
            console.log('loaded')
            if (window.innerWidth < 1200) {
                const expands = Array.from(document.querySelectorAll('.expand'))
                expands.forEach((item) => {
                    item.addEventListener('click', () => {
                        item.querySelector('.expand-content').classList.toggle('reveal');
                    })
                });
            }
        }
    
        window.onload = () => expanderFunc();
        window.onresize = () => expanderFunc();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>