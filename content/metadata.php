<?php
echo   "<meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>    
        <title>" . $page->getTitle() . "</title>

        <meta name='author' content='Nabrezzelt' />
        <meta name='keywords' content='" . $page->getKeywords() . "' />
        <meta name='description' content='" . $page->getDescription() . "' />
        <meta http-equiv='content-language' content='de-DE' />
        <meta name='robots' content='INDEX, FOLLOW' />
        <meta name='revisit-after' content='2 days' />
        <meta name='generator' content='BSFramework-CMS' />
        <meta http-equiv='content-type' content='text/html; charset=utf-8' /></head>

        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.6/gridstack.css' />

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
        <script src='https://raw.githubusercontent.com/lodash/lodash/4.17.4/dist/lodash.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.2.0/knockout-min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.6/gridstack.js'></script>

        <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
        <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
        <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
        <![endif]-->";        
?>