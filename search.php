<?php
include 'post-data.php';

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    
    // Initialize an array to store search results
    $search_results = [];

    // Loop through blog posts to find matches
    foreach ($post_titles as $id => $title) {
        if (stripos($title, $search_query) !== false) {
            // Match found in title
            $search_results[$id] = [
                'title' => $title,
                'content' => $post_contents[$id],
                'image' => $post_images[$id]
            ];
        } elseif (stripos($post_contents[$id][0], $search_query) !== false) {
            // Match found in content
            $search_results[$id] = [
                'title' => $title,
                'content' => $post_contents[$id],
                'image' => $post_images[$id]
            ];
        }
    }
}

?>
<?php include 'header.php'; ?>
  <section id="search-results">
    <h2>Search Results for "<?php echo htmlspecialchars($search_query); ?>"</h2>
    <?php if (isset($search_results) && !empty($search_results)) : ?>
      <?php foreach ($search_results as $id => $result) : ?>
        <div class="search-result">
          <h3><a href="post.php?id=<?php echo $id; ?>"><?php echo htmlspecialchars($result['title']); ?></a></h3>
          <img src="<?php echo htmlspecialchars($result['image']); ?>" alt="<?php echo htmlspecialchars($result['title']); ?>">
          <p><?php echo htmlspecialchars($result['content'][0]); ?></p>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <p>No results found for "<?php echo htmlspecialchars($search_query); ?>"</p>
    <?php endif; ?>
  </section>
<?php include 'footer.php'; ?>
