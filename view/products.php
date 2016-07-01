<?php

/* 
 *  by meredith browne
 */

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Harding Design Co.</title>
    </head>
    <body>
        <div class="container-fluid header">
            <header class="navbar-fixed-top">
                <?php include 'header.php'; ?>
            </header>
            <img src="../img/harding_bw.png" alt="harding logo" class="logo center-block">
        </div>
        
        <main class="container-fluid">
            <div class="row">
                <h1 class="text-center">Products</h1>
                <section class="container">
                    <div class="item">
                        <h2>Tables</h2>
                        <?php include '../products/tables.php' ?>
                    </div>
                    <div class="item">
                        <h2>Benches</h2>
                        <?php include '../products/benches.php' ?>
                    </div>
                    <div class="item">
                        <h2>Shelves</h2>
                        <?php include '../products/shelves.php' ?>
                    </div>
                    <div class="item">
                        <h2>Speaker Stands</h2>
                        <?php include '../products/speaker-stands.php' ?>
                    </div>
<!--                    <div class="item">
                        <h2>Firewood Cart</h2>
                    </div>-->
                </section>
            </div>
        </main>
        <footer class="navbar-static-bottom">
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>


