<!-- Packages Section -->
<section id="packages" class="event-packages py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h3 class="title-heading">Event Packages</h3>
      <p class="mt-3 text-muted">Choose the perfect plan that suits your special day</p>
    </div>
    <div class="row g-4">
      <?php
      $packages = [
        [
          'image' => 'campoffer.png',
          'title' => 'Bachelor Party Bliss <br>Under the Stars',
          'features' => ['Private outdoor lounge', 'Bonfire & BBQ setup', 'Music & drinks included']
        ],
        [
          'image' => 'familyoffer.jpg',
          'title' => 'Dream Wedding <br>in the Hills',
          'features' => ['Scenic venue setup', 'Full coordination & decor', 'Bridal suite included']
        ],
        [
          'image' => 'foodoffers.jpg',
          'title' => 'Corporate Retreat <br>with a View',
          'features' => ['Meeting & lounge spaces', 'Meals & beverages', 'Team-building activities']
        ]
      ];

      foreach ($packages as $package) :
      ?>
        <div class="col-xl-4 col-md-6">
          <div class="package-card shadow-md bg-white rounded overflow-hidden h-100 d-flex flex-column">
            <div class="package-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $package['image']; ?>" alt="Event Package" class="img-fluid w-100">
            </div>
            <div class="p-4 d-flex flex-column flex-grow-1">
              <h4 class="fw-300 mb-3"><?php echo $package['title']; ?></h4>
              <ul class="list-unstyled text-muted flex-grow-1">
                <?php foreach ($package['features'] as $feature) : ?>
                  <li><?php echo $feature; ?></li>
                <?php endforeach; ?>
              </ul>
              <a href="#booking" class="btn mt-3">Book Now</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


