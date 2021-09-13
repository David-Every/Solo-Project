<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel ="stylesheet" href ="dist/style.min.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<?php
    $company = "sharon wray Accountancy Services";
    $json = json_decode(file_get_contents("data/details.json"));   
?>

<body> 
    <header>
        <div id = "headerContainer"> 
            <div id ="company">
                <a href = "index.php">
                    <h1>Sharon Wray</h1>
                    <h2>Accountancy Services</h2>
                </a>
            </div>
            <?php
            $i = 0;
            foreach($json->collection->section as $line){
                if($i < 4){
                    $i++;
                    echo '<a href ="'. $line->link.'">'.$line->section .'</a>';
                }else{
                    break;
                }
            }
            foreach($json->collection->address as $line){
                $tel = '<a id ="phoneNum" href="tel:'. $line->tel .'">'. $line->tel .'</a>';
                $mob = '<a id ="phoneNum" href="tel:'. $line->mobile .'">'. $line->mobile .'</a>'; 
                echo $tel;
            }

            ?>
        </div>
    </header>
