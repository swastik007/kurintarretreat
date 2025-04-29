<!-- instagram_area_start -->
<div class="instragram_area d-flex flex-wrap justify-content-center gap-3 p-4">
    <?php
    $images = ['insta1.jpg', 'insta2.jpg', 'insta3.jpg', 'insta4.jpg', 'insta5.jpg', 'insta6.jpg'];
    foreach ($images as $image): ?>
        <div class="single_instagram position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $image; ?>" alt="post" class="img-fluid">
            <div class="ovrelay d-flex align-items-center justify-content-center">
                <a href="#"><i class="fa fa-instagram text-white fs-3"></i></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- instagram_area_end -->

<style>
.instragram_area {
    background: #f8f8f8;
}

.single_instagram {
    width: 200px;
    height: 200px;
    overflow: hidden;
    border-radius: 8px;
    position: relative;
    transition: transform 0.3s ease;
}

.single_instagram img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s;
}

.single_instagram:hover img {
    transform: scale(1.05);
}

.ovrelay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.4);
    opacity: 0;
    transition: opacity 0.3s;
}

.single_instagram:hover .ovrelay {
    opacity: 1;
}
</style>
