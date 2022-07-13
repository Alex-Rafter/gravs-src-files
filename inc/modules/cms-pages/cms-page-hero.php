<section class="container-fluid px-0 overflow-hidden service-booking__hero">
    <div class="row">
        <div class="col-12">
            <div class="service-booking__titles p-5 p-xl-7 text-white">
                <h1 class="display-3 mb-0 text-white">Gravells CMS Page</h1>
                <p style="max-width: 750px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac erat sagittis lectus volutpat iaculis. Curabitur convallis orci sit amet pharetra venenatis. Aliquam ac accumsan mauris.
                </p>
            </div>
        </div>
    </div>
</section>
<style>
    .service-booking__hero {
        /* background-image: url('/img/servicing/landing/book-a-service-sq.jpg'); */
        background-image: url('/img/cms-page/kia/kia-cms-page-hero-sq-3.jpg');
        background-image: url('/img/cms-page/renault/renault-cms-hero-sq-3.jpg');
        background-image: url('/img/cms-page/stock/stock-cms-hero-sq-5.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        height: auto;
    }

    @media only screen and (min-width: 576px) {
        .service-booking__hero {
            /* background-image: url('/img/servicing/landing/book-a-service-wide-thin.jpeg'); */
            background-image: url('/img/cms-page/kia/kia-cms-page-hero-wide-3.jpg');          
            background-image: url('/img/cms-page/renault/renault-cms-hero-wide-3.jpg');   
            background-image: url('/img/cms-page/stock/stock-cms-hero-wide-5.jpeg');    
        }
    }

    @media only screen and (min-width: 1450px) {
        .service-booking__hero {
            background-position-y: -50px;
        }
    }

    @media only screen and (min-width: 1600px) {
        .service-booking__hero {
            background-position-y: -80px;
        }
    }



    @media only screen and (max-width: 575px) {
        .service-booking__titles h1 {
            font-size: 2rem;
        }
    }

    @media only screen and (min-width: 576px) {
        .service-booking__img {
        aspect-ratio: 2.5/1;
        object-fit: cover;
    }
    }

</style>