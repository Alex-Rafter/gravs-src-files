<?php foreach($landingPageTiles as $arr): ?>
<a href="/" class="landing-grid__item">
    <div class="landing-grid__item-bg w-100 h-100 position-absolute"
        style='background-image: url("<?=$arr["img"]?>");'></div>
    <div class="flex-c-col gap-2 w-100 h-100 position-absolute" style="z-index: 2;">
        <h1 class="landing-grid__title a display-3 text-white w-100"><?=$arr["title"]?></h1>
        <i class="landing-grid__icon h1 fa-thin fa-circle-chevron-right mt-n3"></i>
    </div>
</a>
<?php endforeach; ?>
