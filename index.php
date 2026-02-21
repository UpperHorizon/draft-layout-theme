<?php
/**
 * {
 * "dl-type": "template",
 * "name": "Blog Home",
 * "description": "A template for displaying a list of all blog posts",
 * "category": "Templates"
 * }
 */

/*
This WordPress template is the last fallback, used here to render a list of all posts, styled with Tailwind.
It loads the header.php and footer.php files, and uses the WP query loop to dynamically
render blog post details like the title, link, published date, author, thumbnail image, and
post excerpt; while also providing placeholder text with `dl-preview:` comments.
*/

get_header();
?>

<main id="main" class="max-w-5xl lg:w-3/4 px-5 mx-auto mt-32">
  <h1 class="text-6xl font-bold font-serif mb-10">
    <?php /* dl-preview: Page Title */ single_post_title(); ?>
  </h1>

  <?php if (have_posts()): ?>

    <div class="grid grid-cols-2 gap-10">
      <?php while (have_posts()):
        the_post(); ?>

        <article id="post-<?php the_ID(); ?>"
          class="col-span-2 lg:col-span-1 <?php echo esc_attr(join(' ', get_post_class())) ?>">

          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
              <div class="mb-4">
                <?php /* dl-preview: [img] Post Thumbnail Image */ the_post_thumbnail('medium', get_post_image_args('rounded-xl w-full')); ?>
              </div>
            <?php endif; ?>

            <h2 class="text-4xl font-bold font-serif mt-4 mb-2">
              <?php /* dl-preview: Example Post Title */ echo esc_html(get_the_title()); ?>
            </h2>
          </a>

          <p class="mb-4">
            Posted on
            <span class="text-slate-500">
              <?php /* dl-preview: example date */ echo get_the_date(); ?>
            </span>
            by
            <span class="text-slate-500">
              <?php /* dl-preview: Example Author */ the_author(); ?>
            </span>
          </p>

          <div class="space-y-4">
            <?php /* dl-preview: Example Post Excerpt */ the_excerpt(); ?>
          </div>
        </article>

      <?php endwhile; ?>
    </div>

    <?php the_posts_navigation(); ?>

  <?php else: ?>
    <p><?php /* dl-preview: No posts found. */ _e('No posts found.', 'draftlayout'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>