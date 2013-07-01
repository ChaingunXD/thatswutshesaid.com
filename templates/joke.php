<h1 class="joke"><?php echo htmlspecialchars($joke['title']); ?></h1>

<div class="tagline">
  That's what <?php echo ($current_gender === 'f') ? 'she' : 'he'; ?> said!
</div>

<div class="more">
  <a href="/">Again!</a>
</div>