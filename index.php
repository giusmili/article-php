<?php
    include_once __DIR__ .'/partial/head.inc.php';
?>
<!-- head -->
<body>
    <?php
    include_once __DIR__ .'/partial/header.inc.php';
    ?>
    <!-- header -->
    <main>
        <figure>
            <?php
                include_once __DIR__ .'/controller/baseController.php'; 
                include_once __DIR__ .'/partial/main.inc.php';  
            ?>
           
        </figure>

        <blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, voluptatum.<br>
                <a href="#">En savoir plus &raquo;</a>
            </p>
        </blockquote>
    </main>
   <!--  main -->
<?php
   include_once __DIR__ .'./partial/footer.inc.php';
?>
  <!-- footer -->
</body>
</html>