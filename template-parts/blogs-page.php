<section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h3 class="title-heading">Our Blog &amp; Event</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/insta1.jpg">
                        <span class="btn">Travel Trip</span>
                        <div class="bi-text">
                            <h3><a href="#">Tremblant In Canada</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/bar2.jpg">
                        <span class="btn">Camping</span>
                        <div class="bi-text">
                            <h3><a href="#">Choosing A Static Caravan</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/food1.jpg">
                        <span class="btn">Event</span>
                        <div class="bi-text">
                            <h3><a href="#">Copper Canyon</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/event3.jpg" >
                        <span class="btn">Event</span>
                        <div class="bi-text">
                            <h3><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/assets/images/family.jpg">
                        <span class="btn">Travel</span>
                        <div class="bi-text">
                            <h3><a href="#">Traveling To Barcelona</a></h3>
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

