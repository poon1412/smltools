<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        <?= $this->tag->stylesheetLink('bootstrap-4/css/bootstrap.min.css') ?> 
        <?= $this->tag->stylesheetLink('font-awesome/css/font-awesome.min.css') ?>
        <?= $this->tag->stylesheetLink('magnific-popup/magnific-popup.css') ?> 
        <?= $this->tag->stylesheetLink('device-mockups/device-mockups.min.css') ?> 
        <?= $this->tag->stylesheetLink('sml/regis.css') ?>
        <?= $this->tag->stylesheetLink('nav/css/creative.css') ?>       
        <?= $this->tag->stylesheetLink('nav/css/creative-override.css') ?>
        
    </head>
    <body id="page-top">
        <div>
            <?= $this->getContent() ?>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
        <!-- Latest compiled and minified JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        
        <?= $this->tag->javascriptInclude('jquery/jquery.min.js') ?>
        <?= $this->tag->javascriptInclude('popper/popper.min.js') ?>
        <?= $this->tag->javascriptInclude('bootstrap-4/js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('scrollreveal/scrollreveal.min.js') ?>
        <?= $this->tag->javascriptInclude('magnific-popup/jquery.magnific-popup.min.js') ?>
        

        <!-- navbar js -->
        <?= $this->tag->javascriptInclude('nav/js/creative.js') ?>
        <?= $this->tag->javascriptInclude('jquery/jquery.js') ?>
        <?= $this->tag->javascriptInclude('jquery/checkLogin.js') ?>

    </body>
</html>