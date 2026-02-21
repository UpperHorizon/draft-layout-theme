<?php
/** Template Name: Custom Page Template */

/**
 * {
 * "dl-type": "template",
 * "name": "Custom Page Template",
 * "description": "A custom template for displaying pages with a title",
 * "category": "Templates"
 * }
 */

/*
The special JSON comment for Draft Layout can be placed as the second comment if the first
comment is used for something else (like WP template name), as shown here
*/

get_header();
?>

<main id="main" class="max-w-3xl mx-auto px-10 py-20 text-zinc-900 text-base">
  <?php while (have_posts()):
    the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="<?php echo esc_attr(join(' ', get_post_class())) ?>">
      <h1 class="text-6xl font-bold font-serif mb-4">
        <?php /* dl-preview: Example Page Title */ echo esc_html(get_the_title()); ?>
      </h1>

      <?php /* dl-preview: Example Page Content */ the_content(); ?>
    </article>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>