<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div style="min-height: 145px; display: block; position: relative;" class="cycle-slideshow" id="home-slider" data-cycle-slides="> div" data-cycle-fx="fade" data-cycle-timeout="7000" data-cycle-speed="800" data-cycle-swipe="true" data-cycle-auto-height="calc">
  <aside class="cycle-pager"></aside>
  <?php foreach ($rows as $id => $row): ?>
  <div class="slide-wrapper">
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
  </div>
  <?php endforeach; ?>
</div>
