<?php
    require("includes/init.inc.php");
    init();

    if(isset($_GET['page']))
    {
        $page = Page::getPage($_GET['page']);
        $navigation = Navigation::getNavigationForPage($_GET['siteID']);
    }
    else
    {
        //Startseite aufrufen:
        $page = Page::getMainPage();
        $navigation = Navigation::getNavigationForPage($page->getID());
    }    
?>


<!DOCTYPE html>
<html lang="de">
    <head>
        <?php require('content/metadata.php'); ?>
    </head>
    <body>
        <?php            
            require('content/navigation.php');

            require('content/content.php');

            require('content/navigation.php');
        ?>
    </body>
</html>