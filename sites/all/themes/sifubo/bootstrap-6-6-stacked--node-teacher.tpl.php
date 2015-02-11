<?php
/**
 * @file
 * Bootstrap 6-6 stacked template for Display Suite.
 */
?>


<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes; ?>">
<?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>
<?php if ($top): ?>
  <div class="row">
  <div class="col-sm-12">
  <<?php print $top_wrapper; ?> class="<?php print $top_classes; ?>">
  <?php print $top; ?>
  </<?php print $top_wrapper; ?>>
    </div>
  </div>
<?php endif; ?>
<?php if ($left || $right): ?>
  <div class="row">
  <div class="col-sm-6">
  <<?php print $left_wrapper; ?> class="<?php print $left_classes; ?>">
  <?php print $left; ?>
  </<?php print $left_wrapper; ?>>
  </div>
  <div class="col-sm-6">
  <h1>Hello</h1>
  <<?php print $right_wrapper; ?> class="col-lg-6 <?php print $right_classes; ?>">
  <?php print $right; ?>
  </<?php print $right_wrapper; ?>>
  </div>
  </div>
<?php endif; ?>
<?php if ($bottom): ?>
  <div class="row">
    <div class="col-sm-12">
  <<?php print $bottom_wrapper; ?> class="<?php print $bottom_classes; ?>">
  <?php print $bottom; ?>
  </<?php print $bottom_wrapper; ?>>
  </div>
  </div>
<?php endif; ?>
</<?php print $layout_wrapper ?>>


<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
