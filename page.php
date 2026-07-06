<?php
/**
 * Generic fallback template for any additional WordPress pages
 * created later (anything other than TOP / 事業内容 / 会社概要).
 */

get_header();
?>
<section class="page active">
  <div class="container">
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <div class="section-head">
        <h2 class="section-title"><?php the_title(); ?></h2>
      </div>
      <div class="lead" style="text-align:left; margin:0 auto;">
        <?php the_content(); ?>
      </div>
      <?php
    endwhile;
    ?>
  </div>
</section>
<?php
get_footer();
