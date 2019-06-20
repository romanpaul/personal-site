<?php
include 'inc/header.php';
?>

<div id="contact-wrap">   

    <div id="contact-area">

        <form class="contactForm" method="post" action="mailer.php" name="myForm">

            <div class="fields">
                <label for="Name">Name</label>
                <input class="validate" type="text" name="name" id="name" placeholder="Your Name" required pattern="^[^0-9]+$"/>
            </div>

            <div class="fields">
                <label for="Email">Email</label>
                <input class="validate" type="email" name="email" id="email" placeholder="Your Email" required pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$"/>
            </div>

            <div class="fields">
                <label for="Phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Phone"/>
            </div>

            <div class="fields">
                <label for="Message">Message</label>
                <textarea name="message" rows="20" cols="20" id="message" placeholder="How can I help you?" required></textarea>
            </div>
                <input onclick="validate()" type="submit" name="submit" value="Submit" class="submit-button"/>
            
        </form>

        
    </div>

</div>

<div class="formMessages"></div>

<nav>
    <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li class="current"><a href="contact.php">Contact</a></li>
    </ul>
</nav>

        <?php
include 'inc/footer.php';
?>