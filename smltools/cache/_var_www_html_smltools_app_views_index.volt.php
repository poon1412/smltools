<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SML</title>
        
        <?= $this->assets->outputCss() ?>
    
    </head>
    <body>
    
        <?= $this->getContent() ?>
		
		<script>
			var baseUrl = '<?=$this->url->get(); ?>';
		</script>
		
        <?= $this->assets->outputJs() ?>

        <?php if (!empty($script)) { ?>
        <?= $script ?>
        <?php } ?>

        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
                
			    setTimeout(function(){
			        $("div.alert").fadeOut(2000);
			    }, 5000 );

            });
        
        </script>
        
    </body>
   
</html>
