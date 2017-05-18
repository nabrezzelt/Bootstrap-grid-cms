<?php

    /**
     * Singleton for DatabaseConnection
     */
    class DBSingleton
    {        
        /**
        * instance
        *
        * Statische Variable, um die aktuelle (einzige!) Instanz dieser Klasse zu halten
        *
        * @var Singleton
        */
        protected static $_instance = null;

        /**       
        * Falls die einzige Instanz noch nicht existiert, wird eine neue 
        * Instanz erstellt und zurückgegeben.
        *
        * @return Singleton
        */
        public static function getInstance()
        {
            if (null === self::$_instance)
            {
                self::$_instance = new MysqlDatabase(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            }
            return self::$_instance;
        }

        protected function __construct() { }

        protected function __clone() { }
    }
    




?>