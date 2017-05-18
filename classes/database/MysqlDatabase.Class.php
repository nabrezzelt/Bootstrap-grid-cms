<?php
    require_once("Database.Class.php");
    /**
     * MySQL Wrapper Class As Singleton
     *
     * @link https://stackoverflow.com/questions/159924/how-do-i-loop-through-a-mysql-query-via-pdo-in-php
     */
    class MysqlDatabase extends Database
    {        
        /**
        * Check ob der PDO-MySQL-Treiber auf die Datenbank verbinden kann.
        *
        * @return bool true wenn der Treiber bereit zur Benutzung ist.
        */
        public static function driverEnabled()
        {
            return in_array('mysql', PDO::getAvailableDrivers());
        }

        /**
        * Konstruktor, der externe Instanzierung verbietet
        */
        function __construct($host, $username, $password, $database, $port = 3306, $utf8 = false, $driver_options = array())
        {
            if(self::driverEnabled())
            {
                $driver_options += [PDO::ATTR_PERSISTENT =>  true];
                $driver_options += [PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true];

                parent::__construct('mysql:dbname=' . $database . ';host=' . $host . ';port=' . $port . (($utf8) ? ';charset=utf8' : ''), $username, $password, $driver_options);
            }
            else 
            {
                throw new MysqlDatabase("Der PDO-MySQL-Datenbanktreiber kann nicht verwendet werden oder ist nicht installiert/konfiguriert.", 1);                
            }                        
        }

        /**        
        * Methode zum Ausführen einer Insert-, Update-, Delete-Befehls
        *
        * @return bool true wenn die Abfrage erfolgreich durchgeführt wurde.
        */
        public function insertUpdateDelete($statement)
        {
            if($this->exec($statement))
            {
                return true;
            }            
            else
            {
                return false;
            }
        }
    }
    
?>