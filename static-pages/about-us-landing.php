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
    <?php include('/src-test/inc/components/header.php'); ?>

    <main class="main overflow-hidden bg-light" id="main">

        <?php 
            $landingHeroTitle = 'About Gravells'; 
            $landingHeroIcon = 'fa-people-group';
            $landingPageTiles = array();
            $arrCreate = fn ($title, $img) => array("title" => $title,"img" => $img);
            $landingPageTiles[0] = $arrCreate("Careers","/img/cms-page/stock/stock-cms-hero-wide-6.jpeg");
            $landingPageTiles[1] = $arrCreate("Our Story","/img/cms-page/stock/stock-cms-hero-wide-1.jpeg");
            $landingPageTiles[2] = $arrCreate("Reviews","/img/cms-page/stock/stock-cms-hero-wide-2.jpeg");
            $landingPageTiles[3] = $arrCreate("Latest news","/img/cms-page/stock/stock-cms-hero-wide-5.jpeg");
            $landingPageTiles[4] = $arrCreate("Meet the team","/img/about-us/landing/meet-the-team-wide.jpg");
        ?>

        <?php include('/src-test/inc/modules/landing-page/landing-hero-dynamic.php'); ?>
        <?php include('/src-test/inc/modules/landing-page/equal-grid.php'); ?>
        <?php include('/src-test/inc/modules/service-booking/s1-cms-section.php'); ?>
        <?php include('/src-test/inc/modules/home/get-in-touch.php'); ?>
    </main>
    <?php include('/src-test/inc/components/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>