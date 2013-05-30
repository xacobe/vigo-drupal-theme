<article<?php print $attributes; ?>>
<div class="article-content">

  <?php if (!$page && $title): ?>
  <header>
    <?php print render($title_prefix); ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php print render($title_suffix); ?>
  </header>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> </footer>
  <?php endif; ?>

  <div <?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      print render($content);
    ?>

   <div class="autor">
   <?php print $user_picture; ?>
   <?php print $name; ?> </div>
  </div>

  <div class="clearfix">
   <?php if (!empty($content['field_tags'])): ?>
      <nav class=""><?php print render($content['field_tags']); ?></nav>
    <?php endif; ?>

    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

     <!--<?php print_r (array_keys($content)); ?> -->
  </div>
  </div>
    <?php print render($content['comments']); ?>
</article>
