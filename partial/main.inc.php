<?php
    include_once './controller/baseController.php'
?>
    <figure>
        <?php

        foreach($articles as $key => $value){
            if($key == "image"){
                print "<img src=".$value." alt=\"cover\">";

            }
            else{
               return false;
            }
            // le texte 
            echo '<figcaption>
            <h2>'.$articles['title'].'</h2>
            <p>'.$articles['content'].'</p>\n
            </figcaption>';
         }


        ?>
 
    </figure>

