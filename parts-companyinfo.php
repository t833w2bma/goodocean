<div class="company-info">
  <?php
  $company_info_group = SCF::get('company-info-group', get_page_by_path('company')->ID);
  foreach($company_info_group as $fields):
  ?>
  <dl>
    <dt><?php echo $fields['info-title']; ?></dt>
    <dd><?php echo $fields['info-description']; ?></dd>
  </dl>
  <?php endforeach; ?>
</div>