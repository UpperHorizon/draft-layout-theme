<?php
/**
 * {
 * "dl-type": "component",
 * "name": "2 Column Layout",
 * "description": "A side-by-side 2-column layout section",
 * "category": "Sections"
 * }
 */

/*
This custom component renders a section of the site: a 2-column layout with image and text, styled with Tailwind.
Since it's meant to be inserted into a page/post's content, it doesn't contain any PHP code (other than this comment).
*/
?>

<div class="max-w-5xl mx-auto px-10 py-20 text-zinc-900 text-base">
  <div class="grid grid-cols-2 items-center rounded-xl overflow-hidden bg-orange-100 mb-5">
    <div class="col-span-2 lg:col-span-1">
      <img class="w-full" alt="Forest Road"
        src="https://images.unsplash.com/photo-1470115636492-6d2b56f9146d?q=80&w=1280">
    </div>

    <div class="col-span-2 lg:col-span-1 p-10 space-y-3">
      <span class="py-1 px-2 inline-block rounded-md bg-amber-700 text-amber-100 text-xs">
        New Article
      </span>

      <h1 class="text-5xl font-bold font-serif">A Forest Road</h1>

      <p>
        Road winds through a dense evergreen forest. Warm rays of sunlight are filtered through the pine leaves.
      </p>

      <div class="flex items-center gap-3 mt-2">
        <a class="py-3 px-4 inline-block rounded-md bg-sky-700 text-amber-100 hover:bg-sky-900 not-disabled:cursor-pointer transition"
          href="#">
          Learn More
        </a>

        <a class="py-3 px-4 inline-block rounded-md text-amber-700 hover:bg-amber-300 not-disabled:cursor-pointer transition"
          href="#">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</div>