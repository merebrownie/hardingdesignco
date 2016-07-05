<?php

/* 
 *  by meredith browne
 */

?>
<html>
    <head>
        <meta charset="UTF-8">
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
                <h1 class="text-center">Contact Us</h1>
                <section class="container">
                    <!--<img src="../img/IMG_2674.jpg" class="center-block smaller img-responsive">-->
                    <div class="col-md-6">
                        <?php include '../mail_manager/send_mail.php'; ?>
                    </div>
                    <div class="col-md-6">
                        <img src="../img/IMG_2630-min.jpg" class="img-responsive"/>
                    </div>
                </section>
            </div>
        </main>
        <footer class="navbar-static-bottom">
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>
