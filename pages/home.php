<?php

    require dirname(__DIR__) . '/parts/header.php';
    require dirname(__DIR__) . '/parts/navbar.php';
?>

    <div class="text-center my-5">
      <h1 class="text-white">Trending Essays</h1>
      <hr />
    </div>
    <div class="home">
      <div class="container">
        <div class="row">
        <?php foreach( Post::getPublishPosts() as $post ) : ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card mb-5 shadow-sm" style="border: 2px solid maroon;">
            <div class="card-body">
              <div class="card-title">
                <h2><?php echo $post['title']; ?></h2>
              </div>
              <div class="card-text">
                <p>
                <?php echo substr($post['content'], 0, 50); ?> ...
                </p>
              </div>
              <a href="/post?id=<?php echo $post['id']; ?>" class="btn btn-primary btn-sm">Read More</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php

    require dirname(__DIR__) . '/parts/footer.php';