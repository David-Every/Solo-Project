<?php
$title = "Sharon Wray | Accountancy Services | My Services";
//TODO Move this variable to be accessable everywhere, but can be maintained in one place
$year = 2021;
include "inc/header.php";
?>

<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1>My Services</h1>
        <?php 
            foreach($json->collection->services as $line){
                echo '<p>'.$line->paragraph.'</p>';
            }
        ?>
    </div>
    <div class ="imgContainer">
        <img src="img/Mag.jpg"/>
    </div>
</div>
<?php
include "inc/footer.php";