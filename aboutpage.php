<?php
/** Template Name: about resort */
get_header();
?>

<main id="primary" class="site-main">

<section class="about-hero-section text-center d-flex align-items-center justify-content-center">
  <div class="overlay w-100 h-100 position-absolute"></div>
  <div class="container position-relative">
    <h3 class="text-white display-4 fw-bold kurintarFont">About Resort</h3>
    <h3 class="text-white fw-light">Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</h3>
  </div>
</section>

<section class="about-us-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column: Text Content -->
      <div class="col-lg-6 mb-4 mb-lg-0 text-white kurintarFont">
		<div class="icon-heading">
	  		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" />
	  		<span>Who We Are</span>
		</div>
        <h3 class="title-heading">Welcome to Kurintar Retreat</h3>
        <p class="mt-3 mb-4">
          Experience tranquility in the heart of nature. Kurintar Retreat offers the perfect escape from urban chaos with our lush gardens, organic dining, and scenic views.
        </p>
        <a href="<?php echo site_url('/contact'); ?>" class="btn px-4 py-2">
          Get in Touch
        </a>
      </div>

      <!-- Right Column: Image -->
      <div class="col-lg-6 text-center">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img1.jpg" 
          alt="Kurintar Retreat" 
          class="img-fluid rounded shadow-lg about-image"
        >
      </div>
    </div>
  </div>
</section>

<section class="about-modern-design py-5">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta1.jpg" class="img-fluid rounded-4 shadow" alt="Bar Image 1" />
          </div>
          <div class="col-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta2.jpg" class="img-fluid rounded-4 shadow" alt="Bar Image 2" />
          </div>
        </div>
      </div>
      <div class="col-lg-6">
	  	<div class="icon-heading">
	  		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" />
	  		<span>Modern design</span>
		</div>
        <h3 class="title-heading">Catering to your requirements</h3>
        
        <p>
          Our store is more than just another average online retailer. We sell not only top quality products,
          but give our customers a positive online shopping experience. Forget about struggling to do everything
          at once: taking care of the family, running your business, walking your dog, cleaning the house,
          doing the shopping, etc. Purchase the goods you need every day or just like in a few clicks or taps,
          depending on the device you use to access the Internet. We work to make your life more enjoyable.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="bar-info-section py-4">
  <div class="container">
    <div class="border-start border-4 border-warning ps-3">
      <p class="mb-3">The delightful bar area near the entrance, is the right place if you really want an aperitif, appetizing or a drink outside by the municipality designed by professional bartenders.</p>
      <p>The counter view, which is dedicated to the specialties that we serve to the table, has been designed to show you the preparation of the dishes that you can select from among those available.</p>
    </div>
  </div>
</section>

<section class="team-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
		<div class="icon-heading">
	  		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" />
	  		<span>Our Team</span>
		</div>
      <h3 class="title-heading">Meet the People Behind Kurintar</h3>
    </div>

    <div class="row g-4">
      <?php 
        $team_members = [
          [
            'name' => 'Joshua Stefan',
            'role' => 'Farmer',
            'img' => 'insta4.jpg'
          ],
          [
            'name' => 'Sheena Anderson',
            'role' => 'Marketing',
            'img' => 'insta2.jpg'
          ],
          [
            'name' => 'Evan Smith',
            'role' => 'Content',
            'img' => 'insta3.jpg'
          ],
          [
            'name' => 'Kaylie Jones',
            'role' => 'Accountant',
            'img' => 'insta4.jpg'
          ]
        ];

        foreach ($team_members as $member) : 
      ?>
        <div class="col-md-6 col-lg-3">
          <div class="team-card position-relative text-center p-3 bg-white shadow-sm rounded h-100">
            <div class="social-icons position-absolute bottom-0">
              <a href="#" class="mb-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="mb-2"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class=""><i class="bi bi-linkedin"></i></a>
            </div>
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $member['img']; ?>" 
              class="img-fluid rounded mb-3 team-img" 
              alt="<?php echo $member['name']; ?>"
            >
            <h5 class="fw-bold kurintarFont"><?php echo $member['name']; ?></h5>
            <p class="text-secondary kurintarFont"><?php echo $member['role']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="newsletter-section py-5 text-white">
  <div class="container">
    <div class="row align-items-center justify-content-between">
		<div class="icon-heading text-center">
	  		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" />
	  		<span>Subscribe</span>
		</div>
      <div class="col-md-6 mb-4 mb-md-0">
        <h3 class="mb-2">Keep up with the latest restaurant news and events.</h3>
        <p class="mb-0">Enter your e-mail and subscribe to our newsletter.</p>
      </div>
      <div class="col-md-6">
        <form class="newsletter-form d-flex">
          <input type="email" class="form-control me-2" placeholder="YOUR EMAIL" required>
          <button type="submit" class="btn">SUBSCRIBE</button>
        </form>
      </div>
	  
    </div>
  </div>
</section>

</main><!-- #main -->

<?php
get_footer();
?>