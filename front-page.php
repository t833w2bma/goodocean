<?php get_header(); ?>
  <main class="home-main">
    <div class="mv">
      <div class="inner">
        <p class="mv-text"><span class="inner-text">環境問題に取り組み</span><span class="inner-text">持続可能な</span><span class="inner-text">社会実現を目指す</span></p>
        <p class="mv-en">To realize a sustainable society</p>
        <div class="img-box js-slider">
          <div class="img-box-item">
            <picture>
              <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv1-sp.jpg" media="(max-width: 768px)">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv1.jpg" alt="">
            </picture>
          </div>
          <div class="img-box-item">
            <picture>
              <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv2-sp.jpg" media="(max-width: 768px)">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv2.jpg" alt="">
            </picture>
          </div>
          <div class="img-box-item">
            <picture>
              <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv3-sp.jpg" media="(max-width: 768px)">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv3.jpg" alt="">
            </picture>
          </div>
        </div>
      </div>
    </div>

    <section id="about" class="about">
      <div class="inner">
        <div class="content-wrapper">
          <div class="text-wrapper">
            <h2 data-title="About Us" class="content-title">私たちの取り組み</h2>
            <div class="content-text">
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
          <div class="images-wrapper">
            <picture class="item1 js-fadeinup-trigger">
              <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-about-img1-sp.jpg" media="(max-width: 768px)">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-about-img1.jpg" alt="取り組みイメージ">
            </picture>
            <picture class="item2 js-fadeinup-trigger">
              <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-about-img2-sp.jpg" media="(max-width: 768px)">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-about-img2.jpg" alt="取り組みイメージ">
            </picture>
            <picture class="item3 js-fadeinup-trigger">
              <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-about-img3-sp.jpg" media="(max-width: 768px)">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-about-img3.jpg" alt="取り組みイメージ">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <section id="service" class="service">
      <div class="inner">
        <div class="content-wrapper">
          <div class="box-left">
            <h2 data-title="Service" class="content-title">事業内容</h2>
            <div class="content-text">
              <p><?php echo nl2br(SCF::get('service')); ?></p>
            </div>
          </div>
          <div class="box-right">
          <?php 
            $service_item = SCF::get('service-item');
            foreach($service_item as $fields): 
          ?>
            <div class="item js-fadeinup-trigger">
              <div class="item-title-wrapper">
                <div class="item-title-img">
                <?php echo wp_get_attachment_image($fields['service-item-img'], 'large'); ?>
                </div>
                <h3 class="item-title"><?php echo nl2br($fields['service-item-title']); ?></h3>
              </div>
              <div class="content-text">
                <p><?php echo nl2br($fields['service-item-text']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    
    <div class="company-news-wrapper">
      <div class="inner">
        <section class="home-company">
          <h2 data-title="Company" class="content-title">会社概要</h2>
          <?php get_template_part('parts', 'companyinfo'); ?>
        </section>
      </div>

      <section class="home-news">
        <h2 class="home-news-title">News</h2>
      <?php 
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
      ?>
        <ul class="news-list">
        <?php 
          while($the_query->have_posts()): $the_query->the_post();
            get_template_part('parts', 'archiveposts');
          endwhile;
        ?>
        </ul>
        <?php else: ?>
          <p>記事はありません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </section>
    </div>
  </main>

<?php get_footer(); ?>