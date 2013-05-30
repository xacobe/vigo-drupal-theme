  <?php if ($messages): ?>
      <div id="messages" class="grid-<?php print $columns; ?>"><?php print $messages; ?></div>
    <?php endif; ?>

<?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="container-<?php print $columns; ?> container"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
