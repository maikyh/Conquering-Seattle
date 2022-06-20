<?php 
    require 'includes/functions.php';
    incluirTemplate('header', 1); 
?>

    <main class="section container father">
        <h2>Sale of Houses and Apartments</h2>
        <div class="align-right">
            <a href="advertisements.php" class="gotop button-yellow">See All</a>
        </div>
        
        <?php

            $limit = 3;
            include 'includes/templates/advertisements.php';
        ?>  
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

    <section class="image-contact">
        <h2>Chase Your Dream</h2>
        <p>Fill out the contact form and an advisor will contact you shortly</p>
        <a href="contact.php" class="button-yellow">Contact Us</a>
    </section>

    <div class="container section section-lower">
        <section class="blog">
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
                            Maximize the space in your home with this guide, learn how to combine colors to bring your space to life
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimonials">
            <h2>Testimonials</h2>

            <div class="testimonial">
                <blockquote>
                    The staff behaved in an excellent way, very good attention, and the house they offered me meets all my expectations.
                </blockquote>
                <p>- Miguel Garza</p>
            </div>
        </section>
    </div>

<?php 
    incluirTemplate('footer'); 
?>