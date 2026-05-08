<?php get_header(); ?>
  <main class="main">
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

    <h1 data-title="<?php echo ucwords($post->post_name); ?>" class="page-title"><?php the_title(); ?></h1>

    <div class="inner is-small">
      <ol class="c-breadcrumbs">
        <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
      
      <div class="box-white">
        <div class="company-about">
          <div class="text-wrapper">
            <?php the_content(); ?>
          </div>
          <div class="images-wrapper">
            <figure class="js-fadein-trigger">
            <?php echo wp_get_attachment_image(SCF::get('company-img'), 'large'); ?>
            </figure>
          </div>
        </div>

        <div class="company-info-wrapper">
          <?php get_template_part('parts', 'companyinfo'); ?>

          <div class="map">
            <?php echo SCF::get('company-map'); ?>
          </div>
        </div>
      </div>
    </div>

  <?php endwhile; ?>
  <?php endif; ?>
  </main>

<?php get_footer(); ?>