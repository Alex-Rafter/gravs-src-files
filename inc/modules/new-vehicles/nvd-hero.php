<section class="container-xxl home-about">
    <div class="row position-relative">

        <!-- Col One  -->
        <div class="col-12 col-lg-6 px-0 px-xl-4">
            <div class="home-image">
                <img class="resp-img pb-0" src="/img/home-about/home-about.jpg" alt="home about"
                style="aspect-ratio: 6/4;padding: 2rem 2rem 2rem 0;object-fit: cover;">
                <div class="home-image-actions arrows-append-mob flex-c justify-content-xl-start mt-4 gap-3 text-uppercase position-relative pe-5 pb-5">
                    <span class=""><a href="/" class="text-decoration-none small">Brochure Download <i class="fs-6 text-primary fa-thin fa-camera ms-1"></i></a></span>
                    <span class=""><a href="/" class="text-decoration-none small">Available in Hybrid <i class="fs-6 text-primary fa-thin fa-camera ms-1"></i></a></span>
                    <span class=""><a href="/" class="text-decoration-none small">Build Your Xceed <i class="fs-6 text-primary fa-thin fa-camera ms-1"></i></a></span>                   
                </div>
            </div>

        </div>
        <!-- Col Two -->
        <div class="col-12 col-lg-6">
            <div class="home-about__copy p-5 py-6 p-md-7 px-lg-5 py-lg-6 p-xl-8 px-xxl-8 py-xxl-6 mb-0 flex-c-col justify-content-center align-items-start flex-wrap h-100" 
            data-bluesky-toggle-text="At Gravells, we've been providing excellent service since 1932 and have the full range of new Kia, SEAT,
                Renault and Dacia cars and vans. We also stock more than 600 quality used cars and vans across the group
                with prices regularly checked to ensure you're getting excellent value for money. We have locations
                across South Wales in Kidwelly, Narberth, Swansea (Llansamlet and Fforestfach), Bridgend, Abergavenny
                and Hereford which sell new and second hand cars as well as performing MOTs, servicing and repairs on
                all makes and models. We also have our own insurance approved, accident repair centre in Kidwelly which
                carries out body repairs, smart paintwork repairs, resprays, alloy wheel refurbishments and fits a range
                of vehicle accessories such as tow bars, sensors, dash cams and reversing cameras. Our top-class
                customer service and after-sales service has seen us build excellent relationships with our customers
                time and time again. People come from far and wide to get great deals on new and used cars that meet and
                exceed their expectations – our customer reviews speak for themselves"
                data-bluesky-toggle-text-state="false"
           >

                <h2 class="home-about__title display-6 mb-0 w-100 border-bottom border-2 border-grey pb-3 mb-4">KIA XCEED</h2>
                <h3 class="home-about_sub-title h4">From £24,000</h3>
             
                <div class="home-about__ctas flex-c flex-wrap flex-md-nowrap justify-content-start mb-5 w-100 gap-1">
                    <a href="/" class="btn btn-primary small col-12 col-md-4 px-1">VersioN Selector</a>
                    <a href="/" class="btn btn-primary small col-12 col-md-4 px-1">Finance Calculator</a>
                    <a href="/" class="btn btn-outline-primary small col-12 col-md-4 px-1">View Offers</a>
                </div>
                <style>
                     .home-about__ctas a {
                        font-size: clamp(0.9em, 1vw, 1.5rem);
                    }

                    @media only screen and (min-width: 992px) {
                        .home-about__ctas a {
                        font-size: clamp(0.6em, 0.7vw, 1.5rem);
                        }
                    }


                </style>

                <!-- <div class="home-about__ctas flex-c flex-wrap justify-content-start mb-5">
                    <a href="/" class="btn btn-primary me-2 me-lg-0 small w-lg-50 wl-xxl-100">VersioN Selector</a>
                    <a href="/" class="btn btn-primary me-2 me-lg-0 small w-lg-50 wl-xxl-100">Finance Calculator</a>
                    <a href="/" class="btn btn-outline-primary mx-2 mx-lg-0 mt-lg-2 small w-lg-100">View Offers</a>
                </div> -->
                <p class="home-about__paragraph" data-bluesky-toggle-text-destination>
                </p>
                <a data-bluesky-toggle-text-toggler class="home-about__read-more w-100 flex-c justify-content-end text-grey mb-5"
                    >Read More <i class="ms-1 fa-thin fa-circle-plus"></i> </a>

            </div>
        </div>
    </div>
</section>
<script>

const toggleText = {
    el : document.querySelector('[data-bluesky-toggle-text]'),
    textDestination : document.querySelector('[data-bluesky-toggle-text] > [data-bluesky-toggle-text-destination]'),
    toggler : document.querySelector('[data-bluesky-toggle-text] [data-bluesky-toggle-text-toggler]'), 
   text() {
    return this.el.dataset.blueskyToggleText;
  },
  state() {
    return Boolean(JSON.parse(this.el.dataset.blueskyToggleTextState.toLowerCase()))
  },
  setState() {
    this.el.dataset.blueskyToggleTextState = JSON.stringify(!this.state());
  },
  InjectText() {
    this.textDestination.textContent = (this.state() === false) ? `${this.text().substring(0, 150)}...` : this.text()
  },
  toggleState() {
    this.setState();
    this.InjectText();
  },
  togglerListener() {
    this.toggler.addEventListener('click', () => this.toggleState())
  },
  init () {
    this.togglerListener()
    this.InjectText() 
  }
}

window.onload = toggleText.init()

</script>