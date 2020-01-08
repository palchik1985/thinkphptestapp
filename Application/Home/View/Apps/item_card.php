<div class="column one-second">
    <div class="promo_box no_border">
        <div class="promo_box_wrapper promo_box_left">
            <div class="photo_wrapper">
                <img alt="Eleifend ante lobortis" class="scale-with-grid" src="<?= $item[ 'image_link' ] ?>"></div>

            <div class="desc_wrapper">
                <h2><?= $item[ 'title' ] ?></h2>

                <div class="desc">
                    <h5><?= $item[ 'platform_name' ] ?></h5>
                    <p><?= mb_substr($item[ 'prompt' ], 0, 220) ?>...</p>
                </div>
                <a href="/Apps/show?id=<?= $item[ 'id' ] ?>">Show landing page of application</a>
                <a class="button button_js" href="<?= $item[ 'link' ] ?>">
                    <?php if ($item[ 'platform_name' ] == "Android") { ?>
                        <img src="/content/landing/images/home_landing_button_googleplay.png" alt="">
                    <?php } else { ?>
                        <img src="/content/landing/images/home_landing_button_appstore.png" alt="">
                    <?php } ?>
                </a>
                <!--                <a href="#"><span class="button_icon icon-layout"></span> <span class="button_label">Button with icon</span></a>-->
            </div>
        </div>
    </div>
</div>