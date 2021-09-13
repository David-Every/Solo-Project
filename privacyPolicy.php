<?php
$title = "Sharon Wray | Accountancy Services | Privacy Policy ";
//TODO Move this variable to be accessable everywhere, but can be maintained in one place
$year = 2021;
include "inc/header.php";
?>
<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1>welcome</h1>
        <?php 
            foreach($json->collection->welcome as $line){
                echo '<p>'.$line->paragraph.'</p>';
            }
        ?>
    </div>
</div>
<?php
include "inc/footer.php";