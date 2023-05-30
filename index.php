<?php 
    include_once("templates/header.php");
?>

    <h1>Corpo do index</h1>

    <main>
        <div id="title-conteiner">
            <h1>Blog Brasil</h1>
            <p>Conhecendo o Brasil</p>
        </div>
        <div id="posts-conteiner">
            <?php foreach ($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="post-title"><?= $post['title'] ?>
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h2>
                    <p class="post-description"><?= $post['description'] ?></p>
                    <div class="tags-container">
                        <?php foreach ($post['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php 

    // include_once("templates/footer.php");

?>