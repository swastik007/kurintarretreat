<!-- room-section start -->
<div class="room-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <span>Featured Rooms</span>
        <h3 class="title-heading">Choose a Better Room</h3>
        <p class="mt-3 text-muted">Indulge in handcrafted cocktails and refreshing mocktails delivered right to your room—because your vacation deserves flavor and flair.</p>
      </div>
    </div>
    <div class="row">
      <?php
      $rooms = [
        ['title' => 'Standard Room', 'price' => '$350.00 / per night', 'img' => 'room1.jpg'],
        ['title' => 'Family Room',   'price' => '$400.00 / per night', 'img' => 'room2.jpg'],
        ['title' => 'Single Room',   'price' => '$255.00 / per night', 'img' => 'room3.jpg'],
        ['title' => 'Deluxe Room',   'price' => '$150.00 / per night', 'img' => 'room4.jpg'],
        ['title' => 'Luxury Room',   'price' => '$200.00 / per night', 'img' => 'room1.jpg'],
        ['title' => 'Single Room',   'price' => '$155.00 / per night', 'img' => 'room4.jpg'],
      ];
      foreach ($rooms as $room): ?>
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="hotel-room text-center">
            <a href="#" class="d-block mb-0 thumbnail">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($room['img']); ?>" alt="<?php echo esc_attr($room['title']); ?>" class="img-fluid">
            </a>
            <div class="hotel-room-body">
              <h3 class="heading mb-0"><a href="#"><?php echo esc_html($room['title']); ?></a></h3>
              <strong class="price"><?php echo esc_html($room['price']); ?></strong>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- room-section end -->
