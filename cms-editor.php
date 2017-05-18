<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>KMS | CMS Editor</title>

    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.6/gridstack.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="https://raw.githubusercontent.com/lodash/lodash/4.17.4/dist/lodash.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.2.0/knockout-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.6/gridstack.js"></script>

    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="grid-stack">
        <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="1" data-gs-height="1" data-gs-max-height='1'>
                <div class="grid-stack-item-content">Item 1</div>
        </div>
        <div class="grid-stack-item" data-gs-x="4" data-gs-y="0" data-gs-width="1" data-gs-height="1" data-gs-max-height='1'> 
            <div class="grid-stack-item-content">Item 2</div>
        </div>
        <div class="grid-stack-item" data-gs-x="8" data-gs-y="0" data-gs-width="1" data-gs-height="1" data-gs-max-height='1'>
                <div class="grid-stack-item-content">Item 1</div>
        </div>     
    </div>

    <script type="text/javascript">        
        $(function () {
            $('.grid-stack').gridstack({
              'width' : 12,
              'height' : 0,
              'alwaysShowResizeHandle' : true,
              'float' : true
            });
        });
    </script>
  </body>
</html>





