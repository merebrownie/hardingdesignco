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
        <div class="hero hero-with-image">
            <header>
                <?php include 'header.php'; ?>
            </header>
            <div class="hero-image">
                
            </div>
            <hr class="no-margin-hr">
        </div>
        
        <main class="container-fluid">
            <div class="row">
                <section class="container">
                    <h1 class="text-center">Contact Us</h1>
                    <p></p>
                    <form>
                        <fieldset class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" />
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </fieldset>
                        <fieldset class="form-group">
                            <button type="submit" value="Submit" class="btn btn-flat">Submit</button>
                        </fieldset>
                    </form>
                </section>
            </div>
        </main>
        <footer class="sticky-footer static-bottom">
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>
