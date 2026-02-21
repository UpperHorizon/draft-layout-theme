<!--
  A typical WordPress theme footer containing closing </html> and </body> tags
  Important: since this file contains unclosed tags and PHP that breaks the HTML structure,
  don't make this file editable inside Draft Layout by putting a PHP comment with JSON like:

  { "dl-type": "template", ...}
  
  Instead, keep this file minimal and put any editable sections (e.g. footer menus) inside
  a separate file and import it here with `get_template_part()`.
-->

<!-- Import the editable footer and menu component -->
<?php get_template_part('components/footer') ?>

<?php wp_footer(); // Triggers hook to enqueue stuff ?>

</body>

</html>