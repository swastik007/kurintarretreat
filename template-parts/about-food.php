<!-- about_area_start -->
 <style>
.card:hover img {
    transform: scale(1.05);
    transition: transform 0.5s ease;
}
.card img {
    transition: transform 0.5s ease;
}
</style>

<div class="about_area py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 text-center">
            <div class="col-lg-8">
                <span class="text-primary text-uppercase small">Delicious Food</span>
                <h2 class="display-5 fw-bold mt-2">We Serve Fresh and Delicious Food</h2>
                <p class="mt-3 text-muted">
                    Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Food Item 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food1.jpg" class="card-img-top" alt="Food 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Spicy Chicken Delight</h5>
                        <p class="card-text text-muted">A perfect blend of spices with juicy chicken bites.</p>
                    </div>
                </div>
            </div>

            <!-- Food Item 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food4.jpg" class="card-img-top" alt="Food 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Tandoori Prawns</h5>
                        <p class="card-text text-muted">Succulent prawns cooked with traditional spices.</p>
                    </div>
                </div>
            </div>

            <!-- Food Item 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/food3.jpg" class="card-img-top" alt="Food 3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Grilled Veggie Platter</h5>
                        <p class="card-text text-muted">Colorful and healthy grilled vegetables seasoned perfectly.</p>
                    </div>
                </div>
            </div>

            <!-- Add more food items easily by duplicating col -->
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary btn-lg rounded-pill">Learn More</a>
        </div>
    </div>
</div>
<!-- about_area_end -->