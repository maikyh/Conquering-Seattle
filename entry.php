<?php 
    require 'includes/functions.php';
    incluirTemplate('header'); 
?>

    <main class="container section content-centered">
        <h2>Guide to decorate your home</h2>

        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="Property Image" loading="lazy">
        </picture>

        <p class="information-meta">Wrote on: <span>20/10/2021</span> by: <span>Admin</span> </p>


        <div class="resume-property">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam provident blanditiis ullam, culpa eveniet consequuntur, unde numquam quis iste quo vitae! Omnis assumenda aperiam, necessitatibus ipsa harum fugiat dolorem sapiente.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea dolores, suscipit vel molestias, temporibus at dolore ipsa incidunt deserunt unde optio, sunt necessitatibus vero ipsum assumenda voluptatem. Quidem porro fugit exercitationem suscipit laborum tenetur sint minima totam, dolorum distinctio quia blanditiis at reiciendis dolorem earum vero repudiandae quibusdam sunt deserunt, excepturi, dolore adipisci laudantium! Fuga beatae dolor natus ducimus veritatis tenetur, repellendus eius ipsum.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>