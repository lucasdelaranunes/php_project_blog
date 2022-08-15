<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }

        }

    }



?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi esse hic reiciendis consequatur, dicta rem numquam cupiditate, voluptate neque ex necessitatibus sequi? Fugit earum quaerat nesciunt tempora dicta, deleniti exercitationem?
            Ducimus a amet et delectus quam aliquam sed autem dolorem sapiente vel minus eius temporibus tempora ut velit, quibusdam cum error commodi. Quidem deleniti quam quia? Vel obcaecati ut dolorem.
            Cum, est voluptatum? Et aut soluta, aliquid voluptatem cum unde fugiat quis vel quas possimus eum magnam, dolore voluptatibus iste corporis sequi commodi neque dicta! Ratione, repudiandae minima! Aliquid, aspernatur?
            Quis perspiciatis optio officia deserunt at facere, rerum dolores totam amet beatae ut non quidem laboriosam aliquam voluptatibus! Similique est repellat accusantium ut reiciendis quis omnis, laboriosam magnam recusandae eligendi!
            Suscipit repudiandae alias dolor optio autem, id et iure aperiam, vel debitis incidunt pariatur eum natus dignissimos eveniet, odit molestias nulla velit eos? Saepe odio dolore quasi magnam nesciunt dignissimos!</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>            
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>
