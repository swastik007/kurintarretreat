<!-- instagram_area_start -->
<div class="row">
    <div class="col-md-6 mx-auto text-center mb-5 section-heading">
    <span>Stories</span>
    <h3 class="title-heading">Instagram Posts</h3>
        <p class="mt-3 text-muted">
            Socialize
        </p>
    </div>
</div>
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
