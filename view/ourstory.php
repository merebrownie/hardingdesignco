<?php

/* 
 *  by meredith browne
 */

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Harding Design Co.</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/style.css">
        
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
                <h1 class="text-center">Our Story</h1>
                <section class="container">
                    <div class="col-md-6">
                        <img class="img-responsive" src="../img/matt-crop.jpg"/>
                    </div>
                    <div class="col-md-6">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at augue finibus, volutpat neque non, pretium felis. In ut commodo dolor. Cras ultrices ultrices facilisis. Suspendisse sed commodo tellus. Vestibulum nulla eros, semper et mauris sed, feugiat cursus orci. Suspendisse vel condimentum urna. Sed condimentum neque nisl. Suspendisse purus tellus, consectetur nec tristique eu, hendrerit vel tellus. Morbi augue augue, consequat eu vestibulum id, rutrum varius lacus. Praesent rhoncus lacus ut magna porta tincidunt a vel libero. Integer luctus lacus enim, in commodo nulla efficitur ac. Cras euismod maximus magna vel placerat. Duis sed ante mauris. Aliquam pulvinar maximus odio, at consequat est mattis at.</span>
                        <iframe id="map"frameborder="0" src="https://www.google.com/maps/embed/v1/view?zoom=10&center=35.2271%2C-80.8431&key=AIzaSyDSs3BfUcO2gw8HCobFqqPIQGj3IJD8_hk" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
            
        </main>
        <footer class="navbar-static-bottom">
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>

