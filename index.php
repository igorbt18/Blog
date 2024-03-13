<?php
    // Inclui o cabeçalho do template
    include_once("templates/header.php");
?>

<main>
    <div id="title-container">
        <!-- Título principal do site -->
        <h1>Zenith Code</h1>
        <!-- Descrição do site -->
        <p>A sua fonte de informações sobre programação</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <!-- Loop através dos posts -->
            <div class="post-box">
                <!-- Exibe a imagem do post -->
                <img src="<?= $base_url ?>img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <!-- Título do post com link para a página do post -->
                <h2 class="post-title">
                    <a href="<?= $base_url ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <!-- Descrição do post -->
                <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>
                        <!-- Loop através das tags do post -->
                        <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php 
    // Inclui o rodapé do template
    include_once("templates/footer.php");
?>