<section class="container-xxl home-about">
    <div class="row position-relative">

        <!-- Col One  -->
        <div class="col-12 col-lg-6 px-0 px-xl-4">
            <!-- <div class="home-about__arrows-append">
                <button class="carousel-control-prev" type="button"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                <button class="carousel-control-next" type="button"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
            </div> -->
            <div class="home-image">
                <img class="resp-img" src="/img/home-about/home-aboutjpg" alt="home about">
            </div>

        </div>
        <!-- Col Two -->
        <div class="col-12 col-lg-6">
            <div class="home-about__copy p-5 py-6 p-md-7 px-lg-5 py-lg-6 p-xl-8 p-xxl-9 mb-0 flex-c-col justify-content-center align-items-start flex-wrap h-100" v-scope="{
                fullText : `At Gravells, we"ve been providing excellent service since 1932 and have the full range of new Kia, SEAT,
                Renault and Dacia cars and vans We also stock more than 600 quality used cars and vans across the group
                with prices regularly checked to ensure you"re getting excellent value for money We have locations
                across South Wales in Kidwelly, Narberth, Swansea (Llansamlet and Fforestfach), Bridgend, Abergavenny
                and Hereford which sell new and second hand cars as well as performing MOTs, servicing and repairs on
                all makes and models We also have our own insurance approved, accident repair centre in Kidwelly which
                carries out body repairs, smart paintwork repairs, resprays, alloy wheel refurbishments and fits a range
                of vehicle accessories such as tow bars, sensors, dash cams and reversing cameras Our top-class
                customer service and after-sales service has seen us build excellent relationships with our customers
                time and time again People come from far and wide to get great deals on new and used cars that meet and
                exceed their expectations – our customer reviews speak for themselves!`,
                reveal : false,
            }">
                <h2 class="home-about__title h1 mb-0">NEW AND USED CARS</h2>
                <h3 class="home-about_sub-title h4">IN SOUTH WALES AND HEREFORD</h3>
                <p class="home-about__paragraph">
                    {{(reveal === false) ? `${fullTextsubstring(0, 150)}...` : fullText}}
                </p>
                <a class="home-about__read-more w-100 flex-c justify-content-end text-grey mb-5"
                    @clickprevent="reveal = !reveal">Read More <i class="ms-1 fa-thin fa-circle-plus"></i> </a>
                <div class="home-about__ctas flex-c justify-content-start">
                    <a href="/" class="btn btn-primary me-2">ABOUT US</a>
                    <a href="/" class="btn btn-outline-primary mx-2">LATEST NEWS</a>
                    <div class="fa fa-facebook mx-2">
                        <svg xmlns="http://wwww3.org/2000/svg" width="16" height="16" fill="#000000"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </div>
                    <div class="fa fa-twitter ms-2">
                        <svg xmlns="http://wwww3.org/2000/svg" width="16" height="16" fill="#000000"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>