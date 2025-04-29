<!-- instagram_area_start -->
<div class="instragram_area">
    <?php
    $images = ['insta1.jpg', 'insta2.jpg', 'insta3.jpg', 'insta4.jpg', 'insta5.jpg', 'insta6.jpg'];
    foreach ($images as $image): ?>
        <div class="single_instagram">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $image; ?>" alt="Instagram Post">
            <div class="ovrelay">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- instagram_area_end -->
