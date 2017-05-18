<?php
    class DatabaseQueryException extends Exception    
    {
        /*
        * @var string Query in der der Fehler auftrat.
        */
        private $query;

        // Die Exception neu definieren, damit die Mitteilung nicht optional ist
        public function __construct($message, $query, $code = 0, Exception $previous = null)
        {           
            $this->query = $query;

            parent::__construct($message, $code, $previous);
        }

        public function getQuery()
        {
            return $this->query;
        }

        // maßgeschneiderte Stringdarstellung des Objektes
        public function __toString() 
        {
            return __CLASS__ . ": [{$this->code}]: {$this->message}\n\n$query";
        }        
    }
?>