<?php
    $title = "Sharon Wray | Accountancy Services | Homepage";
    include "inc/header.php";
    include "inc/mobileSideMenu.php";
    include "inc/cookie.php";
?>
<div id ="topImg">
    <img class = "image" src = "img/topImg-shade.jpeg">
    <div id = "imageOverlayContainer">
        <div class = "overlayText">
            <h1>Fully qualified AAT licenced accountant</h1>
            <p>Proffessional and affordable service, contact us today for a free consultation</p>
        </div>
        <div class = "overlayButtons">
            <a href = "myServices.php"><input type ="button"  name="services" value="See our services"/></a>
            <a href =""><input type ="button"  name="contact" value="Contact us today"/></a>
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

<?php include "inc/freeConsult.php"; ?>

<div class = "quote">
    <p>
        We have used Sharon Wray Accountantcy for our.... Lorem ipsum dolor 
        sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        exercitation.
    </p>
</div>
<?php include "inc/footer.php"; ?>