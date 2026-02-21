<?php
/**
 * {
 * "dl-type": "component",
 * "name": "Footer & Navigation",
 * "description": "Website bottom footer with site name and navigation menu",
 * "category": "Footers"
 * }
 */

/*
This custom component renders the site footer, name, and navigation menu; styled with Tailwind.
*/
?>

<footer class="bg-slate-100 rounded-tr-4xl mt-30">
  <div class="max-w-5xl mx-auto px-6 lg:px-15 py-25 grid grid-cols-4 gap-10">
    <div class="col-span-4 lg:col-span-2 space-y-3">
      <h2 class="font-serif font-bold text-4xl text-slate-700">
        <?php /* dl-preview: Example Site Title */ bloginfo('name'); ?>
      </h2>

      <p>
        Copyright ©

        <?php /* dl-preview: Example Year */ echo date('Y'); ?>

        Example Organization

        <br>

        All rights reserved
      </p>
    </div>

    <!-- You can also dynamically generate links by fetching from the database (e.g. ACF custom fields) with PHP -->

    <div class="col-span-4 lg:col-span-1 space-y-3">
      <p class="font-bold">Legal</p>

      <a class="block" href="/terms">Terms of Service</a>

      <a class="block" href="/privacy">Privacy Policy</a>
    </div>

    <div class="col-span-4 lg:col-span-1 space-y-3">
      <p class="font-bold">Get in Touch</p>

      <a class="block" href="mailto:hello@example.com">hello@example.com</a>

      <a class="block" href="tel:1234567890">123 456 7890</a>
    </div>
  </div>
</footer>