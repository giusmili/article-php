<?php
    include_once __DIR__ .'/partial/head.inc.php';
?>
<body>
    <?php
    include_once __DIR__ .'/partial/header.inc.php';
    ?>
<main>
    <?php

    $articles = [
        [
            "title"=>"Php and POO",
            "content"=>"La programmation orientée objet (POO) est devenue indispensable, oui, mais pourquoi ? Parce qu'elle permet une meilleure organisation de vos projets, facilite la maintenance de votre code, et offre une grande souplesse pour faire évoluer votre logiciel sans avoir à tout réécrire",
            "link"=>"Plus sur php",
            "url"=> "https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306872-decouvrez-les-objets-et-les-classes"
        ],   
        [
            "title"=>"Php and Laravel",
            "content"=>"Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. Laravel est distribué sous licence MIT, avec ses sources hébergées sur GitHub",
            "link"=>"Plus sur Laravel",
            "url"=> "https://fr.wikipedia.org/wiki/Laravel"
        ],
        [
            "title"=>"Node js",
            "content"=>"Node.js est une plateforme logicielle libre en JavaScript, orientée vers les applications réseau évènementielles hautement concurrentes qui doivent pouvoir monter en charge.",
            "link"=>"Plus sur Node js",
            "url"=> "https://fr.wikipedia.org/wiki/Node.js"
        ],
    ];

?>
  
        <!-- content table -->
         <div class="table-primary" role="region" aria-labelledby="table">
                <table id="table">
                    <caption>
                        Classement des articles
                    </caption>
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Déscription</th>
                            <th>Référence</th>
                          
                        </tr>
                    </thead>
                    <tbody> 
                        <?php foreach($articles as $value): ?>
                            <tr>
                                <td><?= $value["title"] ?></td>
                                <td><?= $value["content"] ?></td>
                                <td>
                                    <a href="<?= $value["url"]?>" target="blank">
                                    <?= $value["link"] ?> &raquo;</a>
                                </td>
                             
                            </tr>

                        <?php endforeach ?>


                       
                    </tbody>

                    <tfoot>
                        <tr>
                      
                            <th>Titre</th>
                            <th>Déscription</th>
                            <th>Référence</th>
                          
                    
                        </tr>
                    </tfoot>

                </table>
         </div>

    </main>
    <?php
   include_once __DIR__ .'./partial/footer.inc.php';
    ?>
</body>
</html>