<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kurintar_Retreat
 */

?>
 <!-- footer -->
 <footer class="footer-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading"><a href="#" class="logo">
                        <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/kurintarretreat-logo.png" alt="Kurintar Retreat Logo">

                        </a></h2>
						<p class="menu">
							<a href="#">Home</a>
							<a href="#">Rooms & Tariffs</a>
							<a href="#">Services</a>
							<a href="#">Gallery</a>
							<a href="#">Blog & Events</a>
							<a href="#">Contact</a>
						</p>
						<ul class="footer-social p-0">
                            <li ><a href="#"><i class="bi bi-tiktok"></i></a></li>
                            <li ><a href="#"><i class="bi bi-facebook"></i></a></li>
                            <li ><a href="#"><i class="bi bi-instagram"></i></a></li>
                        </ul>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<p class="copyright">
					  Copyright ©<script>document.write(new Date().getFullYear());</script>2025 All rights reserved </p>
					</div>
				</div>
			</div>
		</footer>

    <?php get_template_part('template-parts/elite-managed'); ?>

    <?php wp_footer(); ?>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img class="logo-sticky" height="100px" width="100px" src="<?php echo get_template_directory_uri(); ?>/assets/images/kurintarretreat-logo.png" alt="Kurintar Retreat Logo">
        <!-- <h3 class="modal-title" id="exampleModalLabel" >Book A Room</h3> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <!-- ...changes here for form -->
        <div id="booking-popup" class="popup-form">
            <div class="form-inner">
                <span class="close-btn" onclick="document.getElementById('booking-popup').style.display='none'">&times;</span>
    
                <form action="#" method="post" id="booking-form">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <input type="phone" name="phone" placeholder="Phone Number" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="number" name="guests" placeholder="Number of Guests" min="1" required>
                
                    <label>Check-in Date</label>
                    <input type="date" name="checkin" required>

                    <label>Check-out Date</label>
                    <input type="date" name="checkout" required>

                    <button type="submit">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script>
document.getElementById("booking-form").addEventListener("submit", function(e) {
  const checkin = new Date(this.checkin.value);
  const checkout = new Date(this.checkout.value);
  if (checkout <= checkin) {
    e.preventDefault();
    alert("Check-out must be after check-in.");
  }
});
</script>
