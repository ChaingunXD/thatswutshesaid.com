<!doctype html>
<html>
  <head>
    <?php if(isset($joke)): ?>
      <title><?php echo htmlspecialchars($joke['title']); ?> - That's What <?php echo ($current_gender === 'f') ? 'She' : 'He'; ?> Said!</title>
    <?php else: ?>
      <title>That's What <?php echo ($current_gender === 'f') ? 'She' : 'He'; ?> Said! - Only the best <?php echo ($current_gender === 'f') ? 'TWSS' : 'TWHS'; ?> jokes on the internet.</title>
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