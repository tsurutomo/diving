<div class="<?php echo is_404()? 'breadcrumb top-breadcrumb breadcrumb--primary' : 'breadcrumb top-breadcrumb' ?>">
  <div class="breadcrumb__inner inner">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div>
  </div>
</div>