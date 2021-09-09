<footer>
    <!-- Images needed here -->
    <div id = "footerInfo">
        <div id ="sectOne"class = "section">
            <div class = "footerImgs">
                <img src = "img/unnamed.png">
                <img src = "img/img2.jpg">
            </div>

            <p>
                AAT licenced accountant with over 15 years of
                accountantcy experience
            </p>
            <p>
                My services include bookkeeping, full accounts
                production, payroll, VAT and tax.
            </p>
        </div>

        <div id = "sectTwo" class = "section">
            <h3>Contact Us</h3>
            <?php
            /**
             * This foreach loop cycles over the address in the JSON file
             * by editing or adding an address this loop will generate the HTML
             * needed to create an additional address
             * WARNING - 
             * will need to edit CSS to allow changes to how the footer looks if adding additional 
             */
            echo '<ul>';
                foreach($json->collection->address as $line){
                    echo '<li>' . $line->company .'</li>';
                    echo '<li>' . $line->where .'</li>';
                    echo '<li>' . $line->street .'</li>';
                    echo '<li>' . $line->town .'</li>';
                    echo '<li>' . $line->county .'</li>';
                    echo '<li>'.'<a href="tel:'. $line->tel .'">'. $line->tel .'</a>'
                        . ' or '
                        .'<a href="tel:'. $line->mobile .'">'. $line->mobile.'</a></li>';
                }
            echo '</ul>';
            ?>
        </div>

        <div id = "sectThree" class = "section">
            <h3>Sections</h3>
            <?php
            /**
             * This foreach loop cycles over the section within JSON file and
             * adds the string and the link both of which can be edited shrunk or expanded.
             */
            include 'sectionLinks.php';
            ?>
        </div>
    </div>

    <p id = "copyright">copyright &copy; <?php echo $company?>. all rights reserved <?php echo $year ?>. sitemap</p>


</footer>
</body>