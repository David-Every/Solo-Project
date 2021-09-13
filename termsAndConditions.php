<?php
$page = "Terms and Conditions";
$title = 'Sharon Wray | Accountancy Services |'. $page;
include "inc/header.php";
?>

<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1><?php echo $page ?></h1>
        <?php 
            foreach($json->collection->termsandconditions as $line){
                echo '<p>'.$line->terms.'</p>';
            }
        ?>
    </div>
</div>

<?php
include "inc/freeConsult.php";
include "inc/footer.php";