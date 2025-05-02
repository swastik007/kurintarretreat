<section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Blog &amp; Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg);">
                        <div class="bi-text">
                            <span class="b-tag">Travel Trip</span>
                            <h4><a href="#">Tremblant In Canada</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg);">
                        <div class="bi-text">
                            <span class="b-tag">Camping</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg);">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Copper Canyon</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg);">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bar1.jpg);">
                        <div class="bi-text">
                            <span class="b-tag">Travel</span>
                            <h4><a href="#">Traveling To Barcelona</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".set-bg").forEach(function (element) {
      const bg = element.getAttribute("data-setbg");
      if (bg) {
        element.style.backgroundImage = `url(${bg})`;
      }
    });
  });
</script>
