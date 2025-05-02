<!-- Hero Section -->
<section class="events-hero text-white text-center d-flex align-items-center justify-content-center py-5" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/events-banner.jpg') center center / cover no-repeat; min-height: 60vh;">
  <div class="container">
    <h3 class="title-heading display-4 fw-bold">Unique Wedding & Event Experiences</h3>
    <p class="mt-3 fs-5">Celebrate love, milestones, and moments in the serenity of Kurintar Retreat.</p>
  </div>
</section>

<!-- Event Description Section -->
<section class="event-description py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 text-center text-lg-start">
        <h3 class="title-heading mb-3">Plan Your Perfect Event</h3>
        <p class="text-muted fs-5">
          From intimate ceremonies to grand celebrations, we offer an exquisite backdrop with tailored packages to make your event unforgettable. Whether it’s a wedding, corporate retreat, or a birthday getaway — we ensure a seamless experience amidst nature.
        </p>
        <a href="#packages" class="btn mt-3 px-4 py-2">Explore Packages</a>
      </div>

      <div class="col-lg-6">
        <div class="event-slider owl-carousel owl-theme">
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event1.jpg" alt="Event 1" class="img-fluid rounded shadow-sm">
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event2.jpg" alt="Event 2" class="img-fluid rounded shadow-sm">
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event3.jpg" alt="Event 3" class="img-fluid rounded shadow-sm">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<?php wp_footer(); ?>

<!-- Slider JS Initialization -->
<script>
  jQuery(document).ready(function($) {
    $('.event-slider').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      nav: true,
      dots: true,
      animateOut: 'fadeOut'
    });
  });
</script>
