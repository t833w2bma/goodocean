<?php get_header(); ?>
  <main class="main">
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

  <?php if(is_page('privacy')): ?>
    <h1 data-title="Privacy Policy" class="page-title"><?php the_title(); ?></h1>
  <?php else: ?>
    <h1 data-title="<?php echo ucwords($post->post_name); ?>" class="page-title"><?php the_title(); ?></h1>
  <?php endif; ?>

    <div class="inner is-small">
      <ol class="c-breadcrumbs">
        <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
      
      <div class="box-white">
      <?php 
        if(is_page('privacy')):
      ?>
        <div class="privacy-wrapper">
          <?php the_content(); ?>
        </div>
      <?php else: ?>
        <?php the_content(); ?>
      <?php endif; ?>
      </div>
    </div>

  <?php endwhile; ?>
  <?php endif; ?>
  </main>

<?php get_footer(); ?>