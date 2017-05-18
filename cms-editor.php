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
    <script src="http://underscorejs.org/underscore.js"></script>
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
        <div class="grid-stack-item container-fluid-context show-modal" data-gs-x="0" data-gs-y="0" data-gs-width="12" data-gs-height="2" data-gs-max-height='2' data-gs-min-height='2' data-gs-min-width='12' data-gs-max-width='12'>
            <div class="grid-stack-item-content">               
                Container-Fluid (Full width)
            </div>
        </div>
        <div class="grid-stack-item container-context show-modal" data-gs-x="1" data-gs-y="2" data-gs-width="10" data-gs-height="2" data-gs-max-height='2' data-gs-min-height='2' data-gs-min-width='10' data-gs-max-width='10'>
            <div class="grid-stack-item-content">               
                Container (Space right/left)
                <div class="grid-stack">
                    <div class="grid-stack-item container-item show-modal" data-gs-x="0" data-gs-y="0" data-gs-width="1" data-gs-height="1" data-gs-max-height='1'><div class="grid-stack-item-content">Name<div class="html-content hidden">HTML-123-Tags</div></div></div>
                </div>  
            </div>
        </div>  
    </div>

    <!-- Container-Context-Menu -->
    <div id="container-contextmenu contextmenu" class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="margin-bottom:5px;">            
            <li><a href="#">Neues anlegen</a></li>
            <li><a href="#">Löschen</a></li>
        </ul>
    </div>

    <!-- Item-Context-Menu -->
    <div id="item-contextmenu contextmenu" class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="margin-bottom:5px;">
            <li><a href="#">Ausschneiden</a></li>
            <li><a href="#">Einfügen</a></li>            
            <li class="divider"></li>
            <li><a href="#">Löschen</a></li>
        </ul>
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

        $(document).on("dblclick", ".show-modal", function() {                       
            if($(this).hasClass("container-item"))
            {
                console.log("item");
            }
            else if($(this).hasClass("container-context")) 
            {
                console.log("normal");
            }
            else if($(this).hasClass("container-fluid-context")) 
            {
                console.log("fluid")
            }
            
            $(".container-context .container-item").dblclick(function(e) {
                e.stopPropagation();
            });

            $(".container-fluid-context .container-item").dblclick(function(e) {
                e.stopPropagation();
            });
        });

       
    </script>    
  </body>
</html>






