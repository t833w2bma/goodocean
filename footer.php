<?php if(is_page('privacy') || is_404() || is_page('contact') || is_single()): ?>
  <footer class="footer-b">
    <div class="inner">
      <ul class="footer-nav">
        <li><a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a></li>
      </ul>
      <small class="copyright">&copy; GOOD OCEAN.inc</small>
    </div>
  </footer>
<?php else: ?>
  <footer class="footer-a">
    <div class="inner">
      <div class="contact-box">
        <h2 data-title="Contact" class="content-title">お問い合わせ</h2>
        <div class="content-wrapper">
          <div class="item-left">
            <p><?php echo nl2br(SCF::get('footer-left-area', get_option('page_on_front'))); ?></p>
          </div>
          <div class="item-right">
            <p class="text"><?php echo nl2br(SCF::get('footer-right-area', get_option('page_on_front'))); ?></p>
            <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="btn">お問い合わせフォーム</a>
          </div>
        </div>
      </div>
      <ul class="footer-nav">
        <li><a href="<?php echo esc_url(home_url('/')); ?>privacy/">プライバシーポリシー</a></li>
      </ul>
      <small class="copyright">&copy; GOOD OCEAN.inc</small>
    </div>
  </footer>
<?php endif; ?>
  
  <?php wp_footer(); ?>




</body>
</html>