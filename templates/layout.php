<!doctype html>
<html>
  <head>
    <?php if(isset($joke)): ?>
      <title><?php echo htmlspecialchars($joke['title']); ?> - That's What She Said!</title>
    <?php else: ?>
      <title>That's What She Said! - Only the best TWSS jokes on the internet.</title>
    <?php endif; ?>
    <?php
    if(isset($og_content)) {
      echo $og_content;
    }
    ?>
  </head>
  <body>
    <?php echo $content; ?>
  </body>
</html>