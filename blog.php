<?php 
    require 'includes/functions.php';
    incluirTemplate('header'); 
?>

    <main class="container section content-centered">
        <h2>Our Blog</h2>

        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Text Entry Blog" loading="lazy">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>Terrace on the roof of your house</h4>
                    <p class="information-meta">Wrote on: <span>20/10/2021</span> by: <span>Admin</span> </p>
                
                    <p>
                        Tips to build a terrace on the roof of your house with the best materials and saving money
                    </p>
                </a>
            </div>
        </article>

        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="Text Entry Blog" loading="lazy">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>Guide to decorate your home</h4>
                    <p class="information-meta">Wrote on: <span>20/10/2021</span> by: <span>Admin</span> </p>
                
                    <p>
                        Maximize the space in your home with this guide, learn how to combine furniture and colors to bring your space to life
                    </p>
                </a>
            </div>
        </article>

        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="Text Entry Blog" loading="lazy">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>Guide to decorate your home</h4>
                    <p class="information-meta">Wrote on: <span>20/10/2021</span> by: <span>Admin</span> </p>
                
                    <p>
                        Maximize the space in your home with this guide, learn how to combine furniture and colors to bring your space to life
                    </p>
                </a>
            </div>
        </article>

        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog4.jpg" alt="Text Entry Blog" loading="lazy">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>Guide to decorate your home</h4>
                    <p class="information-meta">Wrote on: <span>20/10/2021</span> by: <span>Admin</span> </p>
                
                    <p>
                        Maximize the space in your home with this guide, learn how to combine furniture and colors to bring your space to life
                    </p>
                </a>
            </div>
        </article>
    </main>

<?php 
    incluirTemplate('footer');
?>