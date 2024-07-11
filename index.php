<?php include 'header.php'; ?>
<?php include 'post-data.php'; ?>
<section id="hero">
  <div class="hero-content">
    <h1>Welcome to Missouri Caves and Springs</h1>
    <p>Explore the natural wonders of Missouri's caves and springs through our informative blog. Discover hidden caves, crystal-clear springs, and the diverse ecosystems they support.</p>
  </div>
</section>

<section id="intro">
  <div class="intro-content">
    <?php foreach ($intro_paragraphs as $paragraph) : ?>
      <p><?php echo htmlspecialchars($paragraph); ?></p>
    <?php endforeach; ?>
  </div>
</section>

<section id="latest-posts">
  <h2>Latest Posts</h2>
  <div class="post-list">
    <?php foreach ($post_titles as $id => $title) : ?>
      <div class="post-card">
        <a href="post.php?id=<?php echo $id; ?>">
          <img src="<?php echo htmlspecialchars($post_images[$id]); ?>" alt="<?php echo htmlspecialchars($title); ?>">
          <h3><?php echo htmlspecialchars($title); ?></h3>
          <p><?php echo substr(htmlspecialchars($post_contents[$id][0]), 0, 150); ?>...</p>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php include 'footer.php'; ?>
