<?php
    include_once __DIR__ .'/partial/head.inc.php';
?>
<body>
    <?php
    include_once __DIR__ .'/partial/header.inc.php';
    ?>
    <main>
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
                            <th>Url</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td>item</td>
                            <td>item</td>
                            <td>item</td>
                            <td>item</td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                      
                            <th>Titre</th>
                            <th>Déscription</th>
                            <th>Référence</th>
                            <th>Url</th>
                    
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