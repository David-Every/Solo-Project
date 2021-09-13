<?php
$title = "Sharon Wray | Accountancy Services | Contact Us";
$siteKey = "6LcdqWMcAAAAABaYBxQgIg_lySSNi1oHh-iSoqAa";
//TODO Move this variable to be accessable everywhere, but can be maintained in one place
$year = 2021;
include "inc/header.php";
?>
<div id = "form">
    <form id = "contactForm" method ="post">
        <div class = "top">
            <div class = "inp">
                <label for= "Name">Name</label>
                <input type = "text" name= "Name">
            </div>
            <div class = "inp">
                <label for= "email"> Email</label>
                <input type = "text" name= "npcLocation">
            </div>
            <div>
                <label for = "tel"> Telephone</label>
                <input type = "number" name ="tel"> 
            </div>
            <textarea></textarea>
            <div>
                <input type = "checkbox" name ="checkbox">
                <label for = "checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href ="#">Privacy Policy</a> for more information on how we use your data.</label>

            </div>
            <div class="g-recaptcha" data-sitekey="6LcdqWMcAAAAABaYBxQgIg_lySSNi1oHh-iSoqAa"></div>
            <input type = "submit"value ="submit form" name="submitNPC" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.971438290383!2d1.0351907264498836!3d52.52178263627291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9c4d699b67a87%3A0x382d82823812bd05!2sSilver%20St%2C%20Besthorpe%2C%20Attleborough%20NR17%202NY!5e0!3m2!1sen!2suk!4v1631530102107!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </form>
</div>

<?php
include "inc/footer.php";
?>