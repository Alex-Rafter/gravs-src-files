<header class="shadow-sm header header_theme_default mb-0" id="groupHeader">
        <div class="navbar navbar-light navbar--header-main">
            <div class="container-fluid px-0 justify-content-xl-start w-100 flex-nowrap">
                <button v-scope="{closedMob : false}"  class="navbar-toggler bg-primary order-1 order-xl-0" :class="{'open' : closedMob}"  @click="closedMob = !closedMob" type="button" data-bs-toggle="collapse" data-bs-target="#navBar"
                    aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger hamburger--3dx" ref="burger" >
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </button>
                <a class="navbar__logo" href="/"><img class="navbar__logo-img"
                        src="/img/logos/gravells-logo.png"
                        alt="Gravells Logo"></a>    
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
        <!--#include file="/inc/components/fat-nav/fat-nav.aspx' -->

    </header>