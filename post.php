<?php
    // Inclui o cabeçalho do template
    include_once("templates/header.php");

    // Verifica se o parâmetro 'id' está definido na URL
    if (isset($_GET['id'])) {

        // Obtém o valor do parâmetro 'id' da URL
        $postid = $_GET['id'];
        $currentpost;

        // Itera sobre os posts para encontrar o post com o ID correspondente
        foreach ($posts as $post) {

            // Verifica se o ID do post atual é igual ao ID fornecido na URL
            if ($post['id'] == $postid) {
                // Atribui o post atual a $currentpost
                $currentpost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <!-- Exibe o título do post -->
        <h1 id="main-title"><?= $currentpost['title'] ?></h1>
        <!-- Exibe a descrição do post -->
        <p id="post-description"><?= $currentpost['description'] ?></p>
        <div class="img-container">
            <!-- Exibe a imagem do post -->
            <img src="<?= $base_url ?>img/<?= $currentpost['img'] ?>" alt="<?= $currentpost['title'] ?>">
        </div>
        <!-- Exibe o conteúdo do post -->
        <p id="post-content"><?= $currentpost['content'] ?></p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
            <!-- Itera sobre as tags do post atual -->
            <?php foreach ($currentpost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <!-- Itera sobre as categorias disponíveis -->
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
    // Inclui o rodapé do template
    include_once("templates/footer.php");
?>