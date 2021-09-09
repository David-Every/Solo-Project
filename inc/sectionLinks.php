
<?php
echo '<ul>';
    foreach($json->collection->section as $line){
        echo '<li><a href ="'. $line->link.'">'.$line->section .'</a></li>';
    }
echo '<ul>';