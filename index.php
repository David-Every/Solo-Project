<?php
    $title = "Sharon Wray | Accountancy Services";
    //TODO Move this variable to be accessable everywhere, but can be maintained in one place
    $year = 2021;
    include "inc/header.php";
?>
<div id ="topImg">
    <img class = "image" src = "img/topImg-shade.jpeg">
    <div id = "imageOverlayContainer">
        <div class = "overlayText">
            <h1>Fully qualified AAT licenced accountant</h1>
            <p>Proffessional and affordable service, contact us today for a free consultation</p>
        </div>
        <div class = "overlayButtons">
            <input type ="button"  name="services" value="See our services"/>
            <input type ="button"  name="contact" value="Contact us today"/>
        </div>
    </div>
</div>

<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1>welcome</h1>
        <?php 
            foreach($json->collection->welcome as $line){
                echo '<p>'.$line->paragraph.'</p>';
            }
        ?>
    </div>
    <div class ="imgContainer">
        <img src="img/welcomeImg.jpg"/>
    </div>
</div>

<div id ="freeConsult">
    <div class = "consultContent">
        <p class = "info">
            Book your <span>free</span> accountancy consultation today by contacting me on <?php echo $mob?> or by email:
            <a href="mailto:accounts@sharonwray.co.uk ?subject =Free Accountancy Consultation">accounts@sharonwray.co.uk</a>,
            alternatively fill out my online contact form.
        </p>
        <input type ="button" id ="contactButton" name="contact" value ="Contact Us Today">
    </div>
</div>
<div class = "quote">
    <p>
        We have used Sharon Wray Accountantcy for our.... Lorem ipsum dolor 
        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        exercitation.
    </p>
</div>
<?php include "inc/footer.php"; ?>