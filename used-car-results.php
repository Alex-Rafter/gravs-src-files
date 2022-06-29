<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
    <script src="https://unpkg.com/petite-vue" defer init></script>
</head>
<body>
<?php include('./inc/components/header.php'); ?>

<main class="main overflow-hidden" id="main">
<?php include('./inc/modules/used-vehicles/ucr-search.php'); ?>
<?php include('./inc/modules/used-vehicles/ucr-grid.php'); ?>
<?php include('./inc/modules/used-vehicles/ucr-pagination.php'); ?>
<?php include('./inc/modules/used-vehicles/ucr-rep-example.php'); ?>
</main>
<div class="container-fluid px-0">
    <div class="get-in-touch get-in-touch--grow flex-c justify-content-around justify-content-md-center bg-light bg-xl-white gap-0 gap-md-6 gap-xl-3 p-3">
        <?php include('./inc/modules/home/card/card-in-touch-grow.php'); ?>
        <?php include('./inc/modules/home/card/card-in-touch-grow.php'); ?>
        <?php include('./inc/modules/home/card/card-in-touch-grow.php'); ?>
        <?php include('./inc/modules/home/card/card-in-touch-grow.php'); ?>
        <?php include('./inc/modules/home/card/card-in-touch-grow.php'); ?>
    </div>
</div>
<style>

</style>
<?php include('./inc/components/footer.php'); ?>

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