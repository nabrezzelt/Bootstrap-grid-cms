<?php
    function init()
    {        
        define('DB_HOST', '127.0.0.1');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'ascent');        
        define('DB_DATABASE', 'kms');
        define('BRAND_LABEL', 'KMS');

        /* Database Classes      */
        require_once("classes/database/Database.Class.php");
        require_once("classes/database/MysqlDatabase.Class.php");
        require_once("classes/database/exceptions/DatabaseConnectionException.php");
        require_once("classes/database/exceptions/DatabaseQueryException.php");
        require_once("classes/DBSingleton.Class.php");

        require_once('classes/iHTMLComponent.Interface.php');        
        require_once('classes/Page.Class.php');
        require_once('classes/Navigation.Class.php');
    }


?>