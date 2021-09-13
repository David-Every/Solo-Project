<?php
$title = "Sharon Wray | Accountancy Services | Switch Accountants";
//TODO Move this variable to be accessable everywhere, but can be maintained in one place
$year = 2021;
include "inc/header.php";
?>
<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1>Switch Accountants</h1>
        <?php 
            foreach($json->collection->switch as $line){
                echo '<h3>'.$line->title . '</h3>';
                echo '<p>'.$line->paragraph.'</p>';
            }
        ?>
    </div>
    <div class ="imgContainer">
        <img src="img/OIP.jpg"/>
    </div>
</div>
<?php
include "inc/footer.php";