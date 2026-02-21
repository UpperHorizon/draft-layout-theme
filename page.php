<?php
/**
 * {
 * "dl-type": "template",
 * "name": "Page",
 * "description": "A template for displaying individual website pages",
 * "category": "Templates"
 * }
 */

/*
This WordPress template is used to render individual pages, styled with Tailwind.
It loads the header.php and footer.php files, and uses the WP query loop to dynamically
render the page's content; while also providing placeholder text with a `dl-preview:` comment.
*/

get_header();
?>

<main id="main">
  <?php while (have_posts()):
    the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="<?php echo esc_attr(join(' ', get_post_class())) ?>">
      <?php /* dl-preview: Example Page Content */ the_content(); ?>
    </article>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>