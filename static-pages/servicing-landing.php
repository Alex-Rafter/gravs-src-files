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

    <section class="container-fluid px-0 overflow-hidden service-booking__hero">
    <div class="row">
        <div class="col-12">
            <div class="service-booking__titles p-5 pt-xl-7 text-primary flex-c flex-wrap">
                <h1 class="display-3 mb-0 text-primary">Gravells Service Boooking</h1>
                <p>
                Fill in the quick form to book a service or MOT. We'll be in touch within 24 hours to confirm your requirements, preferred date and to confirm your appointment!
                </p>
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
            <div class="container-fluid px-10">
                <div class="wrapper mt-5 mb-10">
                    <a href="/" class="box a" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("http://localhost:3000/img/chunky-spots/new-cars.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Book a Service</h1>                        
                        <button class="btn btn-primary">Click </button>
                        </div>

                    </a>
                    <a href="/" class="box b" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("http://localhost:3000/img/chunky-spots/new-cars.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Book a Service</h1>                        
                        <button class="btn btn-brand-secondary">Click </button>
                        </div>
                    </a>
                    <a href="/" class="box c" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("http://localhost:3000/img/chunky-spots/new-cars.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Book a Service</h1>                        
                        <button class="btn btn-brand-secondary">Click </button>
                        </div>                       
                    </a>
                    <a href="/" class="box d" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("http://localhost:3000/img/chunky-spots/new-cars.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Book a Service</h1>                        
                        <button class="btn btn-brand-secondary">Click </button>
                        </div>                     
                    </a>
                    <a href="/" class="box e" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("http://localhost:3000/img/chunky-spots/new-cars.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Book a Service</h1>                        
                        <button class="btn btn-brand-secondary">Click </button>
                        </div>                    
                    </a>
                    <a href="/" class="box f" >
                        <div class="box-bg w-100 h-100 position-absolute" style='background-image: url("http://localhost:3000/img/chunky-spots/new-cars.jpg");'></div>
                        <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
                        <h1 class="title a display-3 text-white w-100">Book a Service</h1>                        
                        <button class="btn btn-brand-secondary">Click </button>
                        </div>                      
                    </a>
                </div>
            </div>
        </section>

        <style>
            .wrapper {
                display: grid;
                grid-gap: 0.2rem;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;
                /* background-color: #fff; */
                color: #444;
                width: 100%;
                height: 80vh;
            }

            .box {
                position: relative;
              
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
        </style>

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