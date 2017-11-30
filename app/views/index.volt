<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SML</title>
        
        {{ assets.outputCss() }}
    
    </head>
    <body>
    
        {{content()}}
		
		<script>
			var baseUrl = '<?=$this->url->get(); ?>';
		</script>
		
        {{ assets.outputJs() }}

        {{ script }}

        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
        
        </script>
        
    </body>
   
</html>
