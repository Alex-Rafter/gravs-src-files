<header class="shadow-sm header header_theme_default mb-0" id="groupHeader">
        <div class="navbar navbar-light navbar--header-main">
            <div class="container-fluid px-0 justify-content-xl-start w-100 flex-nowrap">
                <button v-scope="{
                    closedMob : false,
                    closer() {
                        window.onresize = () => this.$refs.burger.click()
                    }
                }"  class="navbar-toggler bg-primary order-1 order-xl-0" :class="{'open' : closedMob}"  @click="closedMob = !closedMob" type="button" data-bs-toggle="collapse" data-bs-target="#navBar"
                    aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger hamburger--3dx" ref="burger" >
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <a class="navbar__logo" href="/"><img class="navbar__logo-img"
                        src="http://gravells.vm.live1.cogplatform.co.uk/img/logos/gravells-logo.png"
                        alt="Gravells Logo"></a>
                <!-- <nav class="collapse navbar-collapse order-xl-1" id="navBar">
    
                </nav> -->
                <div class="ms-xl-auto d-flex justify-content-end w-100">
                <div class="navbar__end-item d-none d-xl-flex g-reviews">
                    <a href="/" class="h-100 w-100 flex-c">
                        <i class="fa-thin fa-location-pin"></i>
                    </a>
                </div>
                <div class="navbar__end-item d-none d-xl-flex location bg-light">
                    <a href="/" class="h-100 w-100 flex-c">
                        <i class="fa-thin fa-location-pin"></i>
                    </a>
                </div>
                <div class="navbar__end-item d-none d-xl-flex phone-us bg-primary">
                    <a href="/" class="h-100 w-100 flex-c">
                        <i class="fa-thin fa-phone text-white"></i>
                    </a>
                </div>
                </div>
          
            </div>
        </div>
        <?php include('./inc/components/fat-nav/fat-nav.php'); ?>

    </header>