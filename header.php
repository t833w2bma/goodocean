<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
<?php wp_head(); ?>
</head>


<body>

  <header class="header">
    <div id="header-nav" class="header-nav is-fixed">
      <div class="site-id-wrapper">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-id">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/site-id-img.svg" alt="<?php bloginfo('name'); ?>" class="site-id-img">
        <?php if(is_front_page()): ?>
          <h1 class="site-id-text"><?php bloginfo('name'); ?></h1>
        <?php else: ?>
          <p class="site-id-text"><?php bloginfo('name'); ?></p>
        <?php endif; ?>
        </a>
      </div>
    </div>


<?php
  wp_nav_menu([
    'theme_location' => 'main-menu',
    'container'       => 'nav',      // navタグでラップ
    'container_class' => 'gnav',     // navタグにクラス
    'container_id'    => 'gnav',     // navタグにID
    'menu_class'      => 'gnav-list', // ulタグのクラス
  ])
?>
    <button id="btn-nav" class="btn-nav"></button>
  </header>
