<?php 
    require 'includes/functions.php';
    incluirTemplate('header'); 
?>

    <main class="container section">
        <h2>About Us</h2>

        <div class="content-aboutUs">
            <div class="image">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="About Us" loading="lazy">
                </picture>
            </div>

            <div class="text-aboutUs">
                <blockquote class="centered">
                    Our years of experience speak for themselves
                </blockquote>
                <p class="justified">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam provident blanditiis ullam, culpa eveniet consequuntur, unde numquam quis iste quo vitae! Omnis assumenda aperiam, necessitatibus ipsa harum fugiat dolorem sapiente.</p>
                <p class="justified">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea dolores, suscipit vel molestias, temporibus at dolore ipsa incidunt deserunt unde optio, sunt necessitatibus vero ipsum assumenda voluptatem. Quidem porro fugit exercitationem suscipit laborum tenetur sint minima totam, </p>
            </div>
        </div>
    </main>

    <section class="container section">
        <h2>More About Us</h2>

        <div class="icons-us">
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Security Icon" loading="lazy">
                <h3>Security</h3>
                <p>Neque, incidunt fugit quod excepturi voluptas alias accusantium nam optio facere nulla tempora mollitia eaque labore non consequuntur quae quos similique soluta.</p>
            </div>
            <div class="icon">
                <img src="build/img/icono2.svg" alt="Price Icon" loading="lazy">
                <h3>Price</h3>
                <p>Neque, incidunt fugit quod excepturi voluptas alias accusantium nam optio facere nulla tempora mollitia eaque labore non consequuntur quae quos similique soluta.</p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>