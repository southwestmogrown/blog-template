<?php include 'header.php'; ?>
<?php include 'post-data.php'; ?>
<section id="hero" style="background: url('images/cave1.jpg') no-repeat center center/cover;">
  <div class="hero-content">
    <h1>Explore Missouri Caves</h1>
    <p>Discover the hidden wonders beneath Missouri's surface.</p>
  </div>
</section>
<section id="intro">
  <div class="intro-content">
    <?php foreach ($caves_intro_paragraphs as $paragraph) : ?>
      <p><?php echo htmlspecialchars($paragraph); ?></p>
    <?php endforeach; ?>
  </div>
</section>
<section id="latest-posts">
  <h2>Cave Articles</h2>
  <div class="post-list">
    <?php foreach ($cave_post_ids as $id) : ?>
      <div class="post-card">
        <a href="post.php?id=<?php echo $id; ?>">
          <img src="<?php echo htmlspecialchars($post_images[$id]); ?>" alt="<?php echo htmlspecialchars($post_titles[$id]); ?>">
          <h3><?php echo htmlspecialchars($post_titles[$id]); ?></h3>
          <p><?php echo substr(htmlspecialchars($post_contents[$id][0]), 0, 150); ?>...</p>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php include 'footer.php'; ?>
