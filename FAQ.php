<?php
$page ="FAQ's";
$title = 'Sharon Wray | Accountancy Services |'. $page;
//TODO Move this variable to be accessable everywhere, but can be maintained in one place
$year = 2021;
include "inc/header.php";
?>
<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1><?php echo $page ?></h1>
        <?php 
            foreach($json->collection->faq as $line){
                echo '<h3>'.$line->question.'</h3>';
                echo '<p>'.$line->answer.'</p>';
            }
        ?>
    </div>
</div>

<?php
include "inc/freeConsult.php";
include "inc/footer.php";