<!DOCTYPE html>
<!--
 by meredith browne
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Harding Design Co.</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
              integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <header>
            <?php
            include 'view/header.php';
            ?>
        </header>
        
        
        <main class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <img class="img-responsive image" src="img/harding_logo.png">
                </div>
            </div>
            <div class="row">
                <section class="container">
                    <?php include 'view/about.php'; ?>
                </section>
                
            </div>
            <div class="row" id="row-1">
                <div class="col-md-4 grid-left" id="1">
                    <a href="#row-1" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2220.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 grid-center" id="2">
                    <a href="#row-1" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2228.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 grid-right" id="3">
                    <a href="#row-1" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2283.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="row" id="row-2">
                <div class="col-md-4 grid-left" id="4">
                    <a href="#row-2" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2630.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 grid-center" id="5">
                    <a href="#row-2" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2626.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 grid-right" id="6">
                    <a href="#row-2" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2634.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="row" id="row-3">
                <div class="col-md-4 grid-left" id="7">
                    <a href="#row-3" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2642.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 grid-center" id="8">
                    <a href="#row-3" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2660.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 grid-right" id="9">
                    <a href="#row-3" class="pop">
                        <!--<img class="img-responsive" src="http://placehold.it/500x400" alt="">-->
                        <img class="img-responsive" src="img/IMG_2674.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <section class="container">
                    <?php include 'view/contact.php'; ?>
                </section>
            </div>
            <div class="modal fade" id="imagemodal" tabindex="1" role="dialog" aria-labelledby="EnlargeImage" aria-hidden="true">
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
        <footer>
            <?php include 'view/footer.php'; ?>
        </footer>
        <script src="js/jquery-2.2.3.js" type="text/javascript"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
              integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
              <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
