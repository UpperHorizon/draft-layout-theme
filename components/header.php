<?php
/**
 * {
 * "dl-type": "component",
 * "name": "Header & Navigation",
 * "description": "Website top header with logo and navigation menu",
 * "category": "Headers"
 * }
 */

/*
This custom component renders the site header, name, and navigation menu; styled with Tailwind.
*/
?>

<header class="px-5 py-4 grid grid-cols-2 items-center bg-amber-100">
  <a class="block col-span-2 lg:col-span-1 flex items-center gap-3" href="<?php echo esc_url(home_url('/')); ?>">
    <h2 class="text-2xl font-bold font-serif">
      <?php /* dl-preview: Example Site Title */ bloginfo('name'); ?>
    </h2>
  </a>

  <div class="col-span-2 lg:col-span-1">
    <nav class="flex items-center justify-end gap-5">
      <!-- You can also dynamically generate links by fetching from the database (e.g. ACF custom fields) with PHP -->
      <a class="py-2 px-4 rounded-sm text-zinc-900 hover:bg-amber-200 cursor-pointer transition"
        href="<?php echo esc_url(home_url('/')); ?>">
        Home
      </a>

      <a class="py-2 px-4 rounded-sm text-zinc-900 hover:bg-amber-200 cursor-pointer transition" href="/blog">
        Blog
      </a>

      <a class="py-2 px-4 rounded-sm bg-amber-700 text-amber-100 hover:bg-amber-800 cursor-pointer transition" href="#">
        Contact
      </a>
    </nav>
  </div>
</header>