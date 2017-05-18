<?php

    /**
     * Navigaion Base Class
     */
    class Navigation implements iHTMLComponent
    {   
        private $brand; 
        private $menuPoints;

        function __construct($brand, $menuPoints)
        {
            $this->brand = $brand;
            $this->menuPoints = $menuPoints;
        }

        public function getBrand()
        {
            return $this->brand;
        }

        public function getMenuPoints()
        {
            return $this->menuPoints;
        }

        /*
        * Gibt die Navigation zurück 
        *
        */
        public function getNavigationForPage()
        {

        }

        public function generateHTML()
        {
            return "Here is the HTML-Code of this Navigationbar";
        }
    }

  


?>