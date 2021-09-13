<?php
$page ="Switch Accountants";
$title = 'Sharon Wray | Accountancy Services |'. $page;
include "inc/header.php";
?>
<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1><?php echo $page ?></h1>
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
include "inc/freeConsult.php";
include "inc/footer.php";