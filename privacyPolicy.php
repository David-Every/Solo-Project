<?php
$page = "Privacy Policy";
$title = 'Sharon Wray | Accountancy Services |'. $page;
include "inc/header.php";
?>
<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1><?php echo $page?></h1>
        <?php 
            foreach($json->collection->privacypolicy as $line){
                echo '<p>'.$line->policy.'</p>';
            }
        ?>
    </div>
</div>
<?php
include "inc/freeConsult.php";
include "inc/footer.php";