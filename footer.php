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

<div class="footer-section">
        <div class="container">
            <div class="grid sm:grid-cols-2 gap-[30px] lg:flex justify-between mb-[60px] relative z-[1] text-white">
                <div class="rts__widget">
                    <a href="/">
                        <img class="footer__logo" src="assets/images/logo/logo__two.svg" alt="footer logo">
                    </a>
                    <p class="max-w-[290px] mt-[20px]">Each room features plush bedding, high-quality linens, and a selection of ensure a restful night's sleep.
                    </p>
                </div>

                <div class="rts__widget">
                    <span class="block text-[20px] heading text-white capitalize mb-[20px]">quick links</span>
                    <ul class="flex flex-col gap-[10px]">
                        <li><a class="hover:text-primary" href="#">Room &amp; Suites</a></li>
                        <li><a class="hover:text-primary" href="#">Dining</a></li>
                        <li><a class="hover:text-primary" href="#">Spa &amp; Wellness</a></li>
                        <li><a class="hover:text-primary" href="#">Special Offers</a></li>
                    </ul>
                </div>

                <div class="rts__widget">
                    <span class="block text-[20px] heading text-white capitalize mb-[20px]">Guest Service</span>
                    <ul class="flex flex-col gap-[10px]">
                        <li>24/7 Front Desk</li>
                        <li>Parking</li>
                        <li>Room Service</li>
                        <li>Free Wi-Fi</li>
                        <li>Concierge Service</li>
                    </ul>
                </div>

                <div class="rts__widget">
                    <span class="block text-[20px] heading text-white capitalize mb-[20px]">Contact Us</span>
                    <ul class="flex flex-col gap-[10px]">
                        <li><a class="flex gap-2 items-center" aria-label="footer__contact" href="tel:+12505550199"><i class="flaticon-phone-flip"></i> +12505550199</a></li>
                        <li><a class="flex gap-2 items-center" aria-label="footer__contact" href="mailto:UjJw6@example.com"><i class="flaticon-envelope"></i>kurintar@gmail.com</a></li>
                        <li><a class="flex gap-2 items-center" aria-label="footer__contact" href="#"><i class="flaticon-marker"></i>M5T 2L9 Toronto, Canada</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="border-t-[1px] border-gray border-opacity-20 p-[40px_0] relative z-10">
            <div class="container">
                <div class="flex flex-wrap md:justify-between justify-center items-center gap-[30px] text-white">
                    <p class="mb-0">Copyright © 2024 kurintar. All rights reserved.</p>
                    <div class="flex items-center gap-[30px]">
                        <a class="pr-[25px] border-r-[1px] border-[#65676b] leading-4" href="#">Facebook</a>
                        <a class="pr-[25px] border-r-[1px] border-[#65676b] leading-4" href="#">Linkedin</a>
                        <a class="leading-4" href="#">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
