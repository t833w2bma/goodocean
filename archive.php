<?php get_header(); ?>
  <main class="main">
    <h1 data-title="News" class="page-title">お知らせ</h1>

    <div class="inner is-small">
      <ol class="c-breadcrumbs">
        <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>

      <div class="news-wrapper">
        <div class="main-content">
          <div class="box-white">
          <?php if(is_date()): ?>
            <h2 class="news-title"><?php echo get_query_var('year'); ?></h2>
          <?php elseif(is_category()): ?>
            <h2 class="news-title"><?php echo get_queried_object() -> name; ?></h2>
          <?php endif; ?>
          <?php if(have_posts()): ?>
            <ul class="news-list">
            <?php 
            while(have_posts()): the_post(); 
              get_template_part('parts', 'archiveposts');
            endwhile;
            ?>
            </ul>
          <?php else: ?>
            <p>記事はありません。</p>
          <?php endif; ?>

            <?php wp_pagenavi(); ?>
          </div>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>

<?php get_footer(); ?>