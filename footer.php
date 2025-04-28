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

<!-- footer page -->
<footer class="bg-gradient-to-b from-blue-100 to-blue-300 text-gray-800 pt-10 pb-6">
  <div class="container mx-auto px-6 flex flex-col lg:flex-row justify-center items-start text-center lg:text-left gap-12">
    
    <!-- About Section -->
    <div class="flex-1">
      <h2 class="text-2xl font-bold text-yellow-600">Kurintar Retreat</h2>
      <p class="mt-2 text-gray-700 max-w-xs mx-auto lg:mx-0">
        Escape the hustle and unwind at our serene riverside resort nestled in the heart of Kurintar, Nepal.
      </p>
    </div>

    <!-- Reservations Center Section -->
    <div class="flex-1">
      <h3 class="text-xl font-semibold text-gray-800 mb-3">For Reservations</h3>
      <a href="#" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-full transition duration-300 shadow-md">
        Sign Me Up!
      </a>
    </div>

    <!-- Contact Section -->
    <div class="flex-1">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">Contact Us</h3>
      <p class="text-gray-700">Kurintar, Nepal</p>
      <p class="text-gray-700">+977 985125626</p>
      <p class="text-gray-700">
        Email: <a href="mailto:kurintar.retreat@gmail.com" class="text-blue-700 hover:underline">kurintar.retreat@gmail.com</a>
      </p>
    </div>

  </div>

  <!-- Footer Bottom -->
  <div class="mt-8 text-center text-sm text-gray-600">
    ©2025 <span class="font-semibold text-gray-800">Kurintar Retreat</span>. All rights reserved.
  </div>
</footer>



<?php wp_footer(); ?>

</body>
</html>
