<?php
/**
 * {
 * "dl-type": "template",
 * "name": "Single Posts",
 * "description": "A template for displaying individual posts",
 * "category": "Templates"
 * }
 */

/*
This WordPress template is used to render individual posts, styled with Tailwind.
It loads the header.php and footer.php files, and uses the WP query loop to dynamically
render blog post details like the title, published date, author, thumbnail image, and
post content; while also providing placeholder text with `dl-preview:` comments.
*/

get_header();
?>

<main id="main" class="max-w-5xl lg:w-1/2 px-5 mx-auto mt-32">
  <?php while (have_posts()):
    the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="<?php echo esc_attr(join(' ', get_post_class())) ?>">
      <h1 class="text-6xl font-bold font-serif mb-4">
        <?php /* dl-preview: Example Post Title */ echo esc_html(get_the_title()); ?>
      </h1>

      <p class="text-lg mb-5">
        Posted on
        <span class="text-slate-500">
          <?php /* dl-preview: example date */ echo get_the_date(); ?>
        </span>
        by
        <span class="text-slate-500">
          <?php /* dl-preview: Example Author */ the_author(); ?>
        </span>
      </p>

      <?php if (has_post_thumbnail()): ?>
        <div class="mb-5">
          <?php /* dl-preview: [img] Post Thumbnail Image */ the_post_thumbnail('large', get_post_image_args('rounded-xl')); ?>
        </div>
      <?php endif; ?>

      <div class="text-lg space-y-4">
        <?php /* dl-preview: Example Post Content */ the_content(); ?>
      </div>
    </article>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>