<div id="mobButton">
    <!-- burger button -->
</div>

<div id = "menu">
    <?php
        $i = 0;
        echo '<ul>';
            foreach($json->collection->section as $line){
                if($i < 4){
                    $i++;
                    echo '<li><a href ="'. $line->link.'">'.$line->section .'</a></li>';
                }else{
                    break;
                }
            }
            echo $tel;
        echo '</ul>';
    ?>
</div>