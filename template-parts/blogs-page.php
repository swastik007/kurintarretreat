<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5 icon-heading">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.png" />
                    <span>Hotel News</span>
                    <h3 class="title-heading">Our Blog &amp; Event</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/insta1.jpg">
                    <div class="bi-text">
                        <span class="btn">Travel Trip</span>
                        <h3><a href="#blog">Tremblant In Canada</a></h3>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/bar2.jpg">
                    <div class="bi-text">
                        <span class="btn">Camping</span>
                        <h3><a href="#blog">Choosing A Static Caravan</a></h3>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/food1.jpg">
                    <div class="bi-text">
                        <span class="btn">Event</span>
                        <h3><a href="#blog">Copper Canyon</a></h3>
                        <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-item small-size set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/event3.jpg" >
                    <div class="bi-text">
                        <span class="btn">Event</span>
                        <h3><a href="#blog">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h3>
                        <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item small-size set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/family.jpg">
                    <div class="bi-text">
                        <span class="btn">Travel</span>
                        <h3><a href="#blog">Traveling To Barcelona</a></h3>
                        <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
  $(document).ready(function () {
    $(".set-bg").each(function () {
      var bg = $(this).data("setbg");
      if (bg) {
        $(this).css("background-image", "url(" + bg + ")");
      }
    });
  });
</script>

