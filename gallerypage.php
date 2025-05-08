<?php
/** Template Name: Gallery */
get_header();
?>

	<main id="primary" class="site-main">
	<section class="gallery-page">
  <div class="container-fluid px-0">
    <div class="gallery-grid">
      <?php
        $images = [
          'bar1.jpg', 'insta2.jpg', 'food3.jpg', 'insta4.jpg',
          'highway.jpg', 'insta6.jpg', 'people3.jpg', 'swimming_pool.jpg'
        ];
        foreach ($images as $image):
      ?>
        <div class="gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $image; ?>" alt="Gallery Image" class="img-fluid" />
          <div class="overlay">
            <div class="overlay-text">Kurintar Retreat</div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
	</main><!-- #main -->

<?php
get_footer();
?>