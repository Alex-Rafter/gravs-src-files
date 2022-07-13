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

    <main class="main overflow-hidden bg-light" id="main">

    <section class="container-fluid px-0 overflow-hidden service-booking__hero">
        <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="service-booking__titles p-5 pt-xl-6 pb-xl-0 text-primary flex-c flex-wrap text-center">
                <h1 class="display-3 mb-0 text-primary w-100">Servicing at Gravells</h1>
                <p class="mb-0" style="max-width: 900px">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac erat sagittis lectus volutpat iaculis. Curabitur convallis orci sit amet pharetra venenatis. Aliquam ac accumsan mauris. Fusce a nisi est. Proin porta mollis rhoncus. Praesent mattis eu est ac faucibus. Sed tempus velit vel libero bibendum, sit amet vehicula arcu iaculis.
                </p>
                <div class="w-100"><i class="display-2 fa-thin fa-car-wrench"></i></div>
            </div>
        </div>
    </div>
        </div>


</section>
        <!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Servicing Landing</h1>
            </div>
        </div>
    </div>
 </section> -->
        <section>
            <div class="container-fluid px-0">
                <div class="wrapper mt-5 mb-10">
                    <a href="/" class="box a" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("/img/servicing/landing/book-a-service-wide.jpeg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Book a Service</h1> 
                        <i class="box__icon h1 fa-thin fa-circle-chevron-right mt-n3"></i>                         
                        <!-- <button class="btn btn-primary">Click </button> -->
                        </div>

                    </a>
                    <a href="/" class="box b" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("/img/servicing/landing/bodyshop-sq.jpeg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Bodyshop</h1>    
                        <i class="box__icon h1 fa-thin fa-circle-chevron-right mt-n3"></i>                     
                        <!-- <button class="btn btn-brand-secondary">Click </button> -->
                        </div>
                    </a>
                    <a href="/" class="box c" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("/img/servicing/landing/kia-servicing-sq.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Kia</h1>  
                        <i class="box__icon h1 fa-thin fa-circle-chevron-right mt-n3"></i>                        
                        <!-- <button class="btn btn-brand-secondary">Click </button> -->
                        </div>                       
                    </a>
                    <a href="/" class="box d" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("/img/servicing/landing/renault-servicing-sq.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Renault</h1>   
                        <i class="box__icon h1 fa-thin fa-circle-chevron-right mt-n3"></i>                  
                        <!-- <button class="btn btn-brand-secondary">Click </button> -->
                        </div>                     
                    </a>
                    <a href="/" class="box e" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("/img/servicing/landing/dacia-servicing-sq.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Dacia</h1>     
                        <i class="box__icon h1 fa-thin fa-circle-chevron-right mt-n3"></i>                   
                        <!-- <button class="btn btn-brand-secondary">Click </button> -->
                        </div>                    
                    </a>
                    <a href="/" class="box f" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("/img/servicing/landing/seat-servicing-wide.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">SEAT</h1>   
                        <i class="box__icon h1 fa-thin fa-circle-chevron-right mt-n3"></i>                        
                        <!-- <button class="btn btn-brand-secondary">Click </button> -->
                        </div>                      
                    </a>
                </div>
            </div>
        </section>

        <style>
            .wrapper {
                display: grid;
                grid-gap: 0.2rem;
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                /* background-color: #fff; */
                color: #444;
                width: 100%;
                height: 120vh;
            }

            
            .a {
                grid-column: 1;
                grid-row: 1;
            }

            .b {
                grid-column: 1;
                grid-row: 2;
            }

            .c {
                grid-column: 1;
                grid-row: 3;
            }

            .d {
                grid-column: 1;
                grid-row: 4;
            }

            .e {
                grid-column: 1;
                grid-row: 5;
            }

            .f {
                grid-column: 1;
                grid-row: 6;
            }

            @media only screen and (min-width: 768px) {
                .wrapper {
                display: grid;
                grid-gap: 0.2rem;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;
                color: #444;
                width: 100%;
                height: 120vh;
            }


            .a {
                grid-column: 1 / span 2;
    grid-row: 1 / span 2;
            }

            .b {
                grid-column: 3 / span 3;
    grid-row: 1 / span 2;
            }

            .c {
                grid-column: 1 /span 2;
    grid-row: 3 / span 2;
            }

            .d {
                grid-column: 3 / span 2;
    grid-row: 3 / span 2;
            }

            .e {
                grid-column: 3 / span 2;
    grid-row: 5 / span 2;
            }

            .f {
                grid-column: 1 / span 2;
    grid-row: 5 / span 2;
            }

            }

            @media only screen and (min-width: 1200px) {
                .wrapper {
                display: grid;
                grid-gap: 0.2rem;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;
                color: #444;
                width: 100%;
                height: 120vh;
            }

            .a {
                grid-column: 1 / span 3;
                grid-row: 1 / span 2;
            }

            .b {
                grid-column: 4;
                grid-row: 1 / span 4;
            }

            .c {
                grid-column: 1;
                grid-row: 3 / span 2;
            }

            .d {
                grid-column: 2 / span 2;
                grid-row: 3 / span 2;
            }

            .e {
                grid-column: 3 / span 2;
                grid-row: 5 / span 2;
            }

            .f {
                grid-column: 1 / span 2;
                grid-row: 5 / span 2;
            }
            }

            .box {
                position: relative;
                overflow: hidden;
                color: #fff;
                padding: 1.5rem;
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .box-bg {
            
                /* background-color: #444; */
                background-repeat: no-repeat;
                background-size: cover;
                filter: brightness(0.7);
                transition: 200ms;
            }

            .box:hover > .box-bg {
                transform: scale(1.1);
                filter: brightness(0.62) blur(0px);
            }
            .box__icon {
                color : #fff;
                transition: 450ms;
            }
            .box:hover .box__icon {
              color: #E21F25;
            }

            .box::after {
                content: attr(data-overlay-text);
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;

            }


            h1.title {
                text-align: center;
                line-height: 110%;
                margin-bottom: 0;
            }

        </style>
<?php include('./inc/modules/service-booking/s1-cms-section.php'); ?>
<?php include('./inc/modules/home/get-in-touch.php'); ?>
    </main>
    <?php include('./inc/components/footer.php'); ?>
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