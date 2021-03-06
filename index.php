<!DOCTYPE html>
<!--
 by meredith browne
-->
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
<!--        <div class="hero hero-with-image container-fluid">-->
        <div class="container-fluid header">
            <header class="navbar-fixed-top">
                <?php
                include 'view/header.php';
                ?>
                
            </header>
            <div class="row">
<!--                <div class="hero-image col-md-12"></div>-->
                <div class="col-md-12">
                    <!--<img class="big-image img-responsive" src="img/harding_logo.png" data-src-960px="img/harding_transparent.png" alt=""/>-->
                    <img class="center-block img-responsive logo main-logo" src="img/harding_transparent.png"/>
                </div>
                <!--<hr class="no-margin-hr">-->
            </div>
            
        </div>
        
        <main class="container-fluid">
            <?php include 'view/grid.php'; ?>
            <div class="modal modal-fullscreen fade" id="imagemodal" tabindex="1" role="dialog" aria-labelledby="EnlargeImage" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="EnlargeImage">Image preview</h4>
                        </div>
                        <div class="modal-body">
                            <img src="" class="imagepreview">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="navbar-static-bottom">
            <?php include 'view/footer.php'; ?>
        </footer>
        
    </body>
</html>
