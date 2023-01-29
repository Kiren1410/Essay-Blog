<?php

    $post = Post::getPostByID( $_GET['id'] );

    require dirname(__DIR__) . '/parts/header.php';
    require dirname(__DIR__) . '/parts/navbar.php';

?>
<div class="container mx-auto my-5" style="max-width: 500px; background-colour:  rgb(245, 164, 113);">
    <h1 class="h1 mb-4 text-center"><?php echo $post['title']; ?></h1>
    <?php

      echo nl2br($post['content']);
    ?>
    <div class="text-center mt-3">
        <a href="/" class="btn btn-link btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
    </div>
</div>
<?php
    
    require dirname(__DIR__) . '/parts/footer.php';