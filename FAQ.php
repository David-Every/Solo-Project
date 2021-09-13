<?php
$title = "Sharon Wray | Accountancy Services | FAQ's";
//TODO Move this variable to be accessable everywhere, but can be maintained in one place
$year = 2021;
include "inc/header.php";
?>
<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1>FAQ's</h1>
        <?php 
            foreach($json->collection->faq as $line){
                echo '<h3>'.$line->question.'</h3>';
                echo '<p>'.$line->answer.'</p>';
            }
        ?>
    </div>
</div>

<?php
include "inc/footer.php";