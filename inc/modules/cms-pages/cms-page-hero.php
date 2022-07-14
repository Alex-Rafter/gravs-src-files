<section class="container-fluid px-0 overflow-hidden page-hero__hero position-relative"
    style="display:inline-grid">

    <div class="row" style=" z-index: 1;">
        <div class="col-12">
            <div class="page-hero__titles p-5 p-xl-7 text-white">
                <h1 class="display-3 mb-0 text-white"><?= $heroTitleCMS ?></h1>
                <p style="max-width: 750px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac erat sagittis lectus volutpat
                    iaculis. Curabitur convallis orci sit amet pharetra venenatis. Aliquam ac accumsan mauris.
                </p>
            </div>
        </div>
    </div>
    <div class="page-hero__bg-img w-100 h-100 position-absolute"
        style='background-image: url("<?= $heroImageCMS ?>"); z-index: 0;'></div>
</section>
<style>
    .page-hero__bg-img {
        background-repeat: no-repeat;
        background-size: cover;
        height: auto;
        filter: brightness(0.7);
    }

    @media only screen and (min-width: 1450px) {
        .page-hero__bg-img {
            background-position: center;
        }
    }

    @media only screen and (min-width: 1600px) {
        .page-hero__bg-img {
            background-position: center;
        }
    }

    @media only screen and (max-width: 575px) {
        .page-hero__titles h1 {
            font-size: 2rem;
        }
    }

    @media only screen and (min-width: 576px) {
        .page-hero__img {
        aspect-ratio: 2.5/1;
        object-fit: cover;
    }
    }

</style>