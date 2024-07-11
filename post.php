<?php
include 'post-data.php';

$post_id = $_GET['id'] ?? null;
$post_title = $post_titles[$post_id] ?? 'Blog Post';
$post_content_paragraphs = $post_contents[$post_id] ?? ['Content not found.'];
$post_image = $post_images[$post_id] ?? 'images/default.jpg';
?>
<?php include 'header.php'; ?>
<div class="post-container">
  <section id="post">
    <div class="post-hero" style="background-image: url('<?php echo htmlspecialchars($post_image); ?>');">
      <h2><?php echo htmlspecialchars($post_title); ?></h2>
    </div>
    <article class="single-post">
      <div class="post-content">
        <?php foreach ($post_content_paragraphs as $paragraph) : ?>
          <p><?php echo htmlspecialchars($paragraph); ?></p>
        <?php endforeach; ?>
      </div>
    </article>
  </section>
  
  <aside id="sidebar">
    <h3>Related Articles</h3>
    <ul class="related-posts">
      <?php foreach ($post_titles as $id => $title) : ?>
        <li><a href="post.php?id=<?php echo $id; ?>"><?php echo htmlspecialchars($title); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</div>
<?php include 'footer.php'; ?>
