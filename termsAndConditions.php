<?php
$title = "Sharon Wray | Accountancy Services | Terms and Conditions";
//TODO Move this variable to be accessable everywhere, but can be maintained in one place
$year = 2021;
include "inc/header.php";
?>

<div id= "welcomeContainer">
    <div class ="welcomeInfo">
        <h1>FAQ's</h1>
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