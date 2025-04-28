<!-- other_services_start -->

<style>
    .room_thumb img {
    transition: transform 0.4s ease;
}
.room_thumb:hover img {
    transform: scale(1.05);
}
.room_thumb {
    height: 200px; /* Adjust height as needed */
    overflow: hidden;
    border-radius: 8px;
}

.room_thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Keeps aspect ratio and fills the box */
    transition: transform 0.4s ease;
}

.room_thumb:hover img {
    transform: scale(1.05); /* Optional nice hover zoom effect */
}
</style>

<div class="features_room">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-5">
                    <span>Our Room Services</span>
                    <h3>Enhance Your Stay With Luxury</h3>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="single_rooms shadow-sm p-3 h-100 text-center rounded-3 position-relative overflow-hidden">
                    <div class="room_thumb mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foodoffers.jpg" alt="Restaurant" class="img-fluid rounded">
                    </div>
                    <div class="room_heading_inner">
                        <i class="bi bi-cup-straw fs-1 text-primary mb-2"></i>
                        <h4 class="mb-2">Restaurant & Bar</h4>
                        <p class="text-muted">From $30/meal</p>
                        <small>Gourmet cuisine, cocktails, and stunning views.</small>
                    </div>
                    <a href="#" class="line-button mt-3 d-inline-block">Explore</a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="single_rooms shadow-sm p-3 h-100 text-center rounded-3 position-relative overflow-hidden">
                    <div class="room_thumb mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta2.jpg" alt="Spa" class="img-fluid rounded">
                    </div>
                    <div class="room_heading_inner">
                        <i class="bi bi-water fs-1 text-success mb-2"></i>
                        <h4 class="mb-2">Spa & Wellness</h4>
                        <p class="text-muted">From $50/session</p>
                        <small>Relax your body and soul with world-class treatments.</small>
                    </div>
                    <a href="#" class="line-button mt-3 d-inline-block">Explore</a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="single_rooms shadow-sm p-3 h-100 text-center rounded-3 position-relative overflow-hidden">
                    <div class="room_thumb mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/campoffer.png" alt="Adventure" class="img-fluid rounded">
                    </div>
                    <div class="room_heading_inner">
                        <i class="bi bi-globe-americas fs-1 text-warning mb-2"></i>
                        <h4 class="mb-2">Adventure Tours</h4>
                        <p class="text-muted">From $120/trip</p>
                        <small>Explore nature trails, waterfalls, and adventure sports.</small>
                    </div>
                    <a href="#" class="line-button mt-3 d-inline-block">Explore</a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="single_rooms shadow-sm p-3 h-100 text-center rounded-3 position-relative overflow-hidden">
                    <div class="room_thumb mb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta6.jpg" alt="Pool" class="img-fluid rounded">
                    </div>
                    <div class="room_heading_inner">
                        <i class="bi bi-droplet-half fs-1 text-info mb-2"></i>
                        <h4 class="mb-2">Infinity Pool</h4>
                        <p class="text-muted">Free Access</p>
                        <small>Relax at our stunning hilltop infinity pool with sunset views.</small>
                    </div>
                    <a href="#" class="line-button mt-3 d-inline-block">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- other_services_end -->
