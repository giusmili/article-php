<?php
    include_once __DIR__ .'/partial/head.inc.php';
?>
<body>
    <?php
    include_once __DIR__ .'/partial/header.inc.php';
    ?>
<main>
    <?php

    include_once __DIR__ .'/controller/controllerArticle.php';

   
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