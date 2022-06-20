<?php 
    require 'includes/functions.php';
    incluirTemplate('header'); 
?>

    <main class="section container">
    
        <h2>Sale of Houses and Apartments</h2>
        
        <?php
            $limit = 10;
            include 'includes/templates/advertisements.php';
        ?>
    </main>

<?php 
    incluirTemplate('footer');
?>