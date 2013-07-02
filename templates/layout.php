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

    <link rel="stylesheet" href="/ui/css/styles.css">
    <style type="text/css">
      body {
        <?php if($current_gender === 'f'): ?>
        background-image: url(/ui/images/background-hires-f.jpg);
        background-color: #864486;
        <?php else: ?>
        background-image: url(/ui/images/background-hires-m.jpg);
        background-color: #3e4f7a;
        <?php endif; ?>
      }
    </style>
  </head>
  <body>
    <?php echo $content; ?>


    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-933185-9']);
    _gaq.push(['_setDomainName', '<?php echo $current_domain; ?>']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  </body>
</html>