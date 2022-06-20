<?php 
    require 'includes/functions.php';
    incluirTemplate('header'); 
?>

    <main class="container section">
        <h2>Contact</h2>
        
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Contact Image" loading="lazy">
        </picture>

        <h2>Fill out the contact form</h2>

        <form class="form">
            <fieldset>
                <legend>Personal Information</legend>

                <label for="name">Name</label>
                <input type="text" placeholder="Your Name" id="name">
                
                <label for="email">E-mail</label>
                <input type="email" placeholder="Your Email" id="email">
                
                <label for="telephone">Telephone</label>
                <input type="tel" placeholder="Your Telephone" id="telephone">
                
                <label for="message">Message:</label>
                <textarea id="message"></textarea>
            </fieldset>

            <fieldset>
                <legend>Information about the property.</legend>
                
                <label for="options">Sell or Buy</label>
                <select id="options">
                    <option value="" disabled selected>-- Select --</option>
                    <option value="Buy">Buy</option>
                    <option value="Sell">Sell</option>
                </select>

                <label for="budget">Price or Budget</label>
                <input type="number" placeholder="Your Price or Budget" id="budget">
                
            </fieldset>

            <fieldset>
                <legend>Information about the property.</legend>
                
                <p>How do you wish to be contacted?</p>
                
                <div class="shape-contact">
                    <label for="contact-telephone">Telephone</label>
                    <input name="contact" type="radio" value="telephone" id="contact-telephone">
                    
                    <label for="contact-email">E-mail</label>
                    <input name="contact" type="radio" value="email" id="contact-email">
                </div>

                <p>If you chose phone, choose the date and time</p>
                
                <label for="date">Date</label>
                <input type="date" id="date">
                
                <label for="time">Time</label>
                <input type="time" id="time" min="09:00" max="18:00">
                
            </fieldset>

            <input type="submit" value="Send" class="button-green">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>