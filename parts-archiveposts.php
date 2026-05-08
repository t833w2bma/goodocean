<li>
  <a href="<?php the_permalink(); ?>">
    <div class="thumbnail">
    <?php if(has_post_thumbnail()): ?>
      <?php the_post_thumbnail('thumbnail'); ?>
    <?php else : ?>
      <img src="<?php echo get_stylesheet_directory_uri()?>/img/news-thumbnail1.jpg" alt="">
    <?php endif; ?>
    </div>
    <div class="text">
      <?php 
      $cats = get_the_category();
      if($cats):
      ?>
      <ul class="cat-list">
        <?php foreach($cats as $cat): ?>
          <li><?php echo $cat->name; ?></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
      <time datetime="<?php the_time('Y-m-d'); ?>" class="date"><?php the_time(get_option('date_format')); ?></time>
      <p class="title"><?php the_title(); ?></p>
    </div>
  </a>
</li>