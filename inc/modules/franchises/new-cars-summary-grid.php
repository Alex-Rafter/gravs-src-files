<section class="container-fluid home-locations bg-light py-6">
  <div class="container">
    <div class="row">

      <div class="col-12 col-lg-8">



    <!-- Expand Content : START-->
    <div class="py-0 px-3 px-xl-2 py-xl-2 h-100 w-100">
        <div class="new-cars-summary">

        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        <?php include('/src-test/inc/modules/franchises/new-cars-summary/new-cars-summary-item.php'); ?>
        </div>
     
    </div>
    <!-- Expand Content : END-->




        <!-- <div class="home-locations__repeater py-5 py-md-4 p-xl-6 gap-4 h-100 w-100">
        </div> -->
      </div>
      <div class="col-12 col-lg-4">
        <div class="new-cars-summary-copy bg-primary text-white p-5 py-6 p-md-7 px-lg-6 py-lg-6 p-xl-7 p-xxl-8 p-xxxl-8 mb-0 flex-c-col justify-content-center align-items-start flex-wrap h-100">
          <h2 class="text-white fs-xl-1 lh-sm">New Kia</h2>
          <p class="mb-4" style="max-width: 450px;">
            We have locations across South Wales in Kidwelly, Narberth, Swansea
            (Llansamlet and Fforestfach), Bridgend, Abergavenny and Hereford. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut ipsam veniam, fugiat animi nobis nemo fugit doloribus eos nihil eius alias soluta in autem omnis mollitia tenetur consectetur optio numquam.
          </p>
          <a href="" class="btn btn-outline-secondary">Explore Range</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
.new-cars-summary {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(3, 1fr);
    grid-gap: 20px;
}

.new-cars-summary-item {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
}

.new-cars-summary-item__image  {
    background-color: #ebebeb;
    width: 100%;
    aspect-ratio: 2/1;
    object-fit: contain;
}

@media only screen and (min-width: 1200px) {
    .new-cars-summary-copy {
        width : 130%;
    }
}


</style>