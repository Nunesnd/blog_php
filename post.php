<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            
            if ($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div> 
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ea iusto quaerat esse nesciunt incidunt, voluptate quod harum commodi? Temporibus, magni dolore nemo fuga error veniam laboriosam earum ducimus fugiat.
            Culpa ratione maxime atque recusandae accusamus in, voluptates, est amet dolore tempora laborum veritatis eos, incidunt tenetur ullam aperiam nostrum reprehenderit doloremque? Recusandae numquam enim voluptatum consequuntur doloribus ea dignissimos.
            Sit et officia accusantium architecto maxime. Facere ducimus est nobis soluta doloremque laborum voluptates amet. Illo, et? Enim provident ut quos illum unde perspiciatis impedit iusto esse vel, quia facilis.
            Debitis a et sunt officiis voluptates cum dignissimos in reprehenderit suscipit esse reiciendis eveniet ad assumenda expedita quis nulla, adipisci vero. Placeat, neque est? Voluptate at quas sequi cupiditate quae?
            Culpa ut, excepturi nam officiis possimus iusto minima ipsum rem vero? Dolorum iusto, amet cum commodi corrupti earum aliquid temporibus magni ab fugiat perferendis, quas iure! Consectetur quaerat quis architecto?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ea iusto quaerat esse nesciunt incidunt, voluptate quod harum commodi? Temporibus, magni dolore nemo fuga error veniam laboriosam earum ducimus fugiat.
            Culpa ratione maxime atque recusandae accusamus in, voluptates, est amet dolore tempora laborum veritatis eos, incidunt tenetur ullam aperiam nostrum reprehenderit doloremque? Recusandae numquam enim voluptatum consequuntur doloribus ea dignissimos.
            Sit et officia accusantium architecto maxime. Facere ducimus est nobis soluta doloremque laborum voluptates amet. Illo, et? Enim provident ut quos illum unde perspiciatis impedit iusto esse vel, quia facilis.
            Debitis a et sunt officiis voluptates cum dignissimos in reprehenderit suscipit esse reiciendis eveniet ad assumenda expedita quis nulla, adipisci vero. Placeat, neque est? Voluptate at quas sequi cupiditate quae?
            Culpa ut, excepturi nam officiis possimus iusto minima ipsum rem vero? Dolorum iusto, amet cum commodi corrupti earum aliquid temporibus magni ab fugiat perferendis, quas iure! Consectetur quaerat quis architecto?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ea iusto quaerat esse nesciunt incidunt, voluptate quod harum commodi? Temporibus, magni dolore nemo fuga error veniam laboriosam earum ducimus fugiat.
            Culpa ratione maxime atque recusandae accusamus in, voluptates, est amet dolore tempora laborum veritatis eos, incidunt tenetur ullam aperiam nostrum reprehenderit doloremque? Recusandae numquam enim voluptatum consequuntur doloribus ea dignissimos.
            Sit et officia accusantium architecto maxime. Facere ducimus est nobis soluta doloremque laborum voluptates amet. Illo, et? Enim provident ut quos illum unde perspiciatis impedit iusto esse vel, quia facilis.
            Debitis a et sunt officiis voluptates cum dignissimos in reprehenderit suscipit esse reiciendis eveniet ad assumenda expedita quis nulla, adipisci vero. Placeat, neque est? Voluptate at quas sequi cupiditate quae?
            Culpa ut, excepturi nam officiis possimus iusto minima ipsum rem vero? Dolorum iusto, amet cum commodi corrupti earum aliquid temporibus magni ab fugiat perferendis, quas iure! Consectetur quaerat quis architecto?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ea iusto quaerat esse nesciunt incidunt, voluptate quod harum commodi? Temporibus, magni dolore nemo fuga error veniam laboriosam earum ducimus fugiat.
            Culpa ratione maxime atque recusandae accusamus in, voluptates, est amet dolore tempora laborum veritatis eos, incidunt tenetur ullam aperiam nostrum reprehenderit doloremque? Recusandae numquam enim voluptatum consequuntur doloribus ea dignissimos.
            Sit et officia accusantium architecto maxime. Facere ducimus est nobis soluta doloremque laborum voluptates amet. Illo, et? Enim provident ut quos illum unde perspiciatis impedit iusto esse vel, quia facilis.
            Debitis a et sunt officiis voluptates cum dignissimos in reprehenderit suscipit esse reiciendis eveniet ad assumenda expedita quis nulla, adipisci vero. Placeat, neque est? Voluptate at quas sequi cupiditate quae?
            Culpa ut, excepturi nam officiis possimus iusto minima ipsum rem vero? Dolorum iusto, amet cum commodi corrupti earum aliquid temporibus magni ab fugiat perferendis, quas iure! Consectetur quaerat quis architecto?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ea iusto quaerat esse nesciunt incidunt, voluptate quod harum commodi? Temporibus, magni dolore nemo fuga error veniam laboriosam earum ducimus fugiat.
            Culpa ratione maxime atque recusandae accusamus in, voluptates, est amet dolore tempora laborum veritatis eos, incidunt tenetur ullam aperiam nostrum reprehenderit doloremque? Recusandae numquam enim voluptatum consequuntur doloribus ea dignissimos.
            Sit et officia accusantium architecto maxime. Facere ducimus est nobis soluta doloremque laborum voluptates amet. Illo, et? Enim provident ut quos illum unde perspiciatis impedit iusto esse vel, quia facilis.
            Debitis a et sunt officiis voluptates cum dignissimos in reprehenderit suscipit esse reiciendis eveniet ad assumenda expedita quis nulla, adipisci vero. Placeat, neque est? Voluptate at quas sequi cupiditate quae?
            Culpa ut, excepturi nam officiis possimus iusto minima ipsum rem vero? Dolorum iusto, amet cum commodi corrupti earum aliquid temporibus magni ab fugiat perferendis, quas iure! Consectetur quaerat quis architecto?</p>
        </div>
        
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach ($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categorias-title">Categorias</h3>
            <ul id="categorias-list">
                <?php foreach ($categories as $catag): ?>
                    <li><a href="#"><?= $catag ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php 

    include_once("templates/footer.php");

?>