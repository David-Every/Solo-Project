<?php
$page ="My Services";
$title = 'Sharon Wray | Accountancy Services |'. $page;
include "inc/header.php";
?>

<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1><?php echo $page ?></h1>
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
include "inc/freeConsult.php";
include "inc/footer.php";