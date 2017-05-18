<?php

    /**
     * SubMenuPoint child of MenuPoint if it is a DropDownMenu
     */
    class SubMenuPoint
    {        
        private $id;
        private $parentMenuPoint;
        private $page;
        private $name;

        function __construct()
        {
            # code...
        }

        private function getID()
        {

        }        

        private function getParentMenuPoint()
        {
            if($this->parentMenuPoint instanceof MenuPoint)
            {
                return $this->parentMenuPoint
            }

            $db = DBSingleton::getInstance();

            $query = "SELECT * FROM menu_points WHERE id = " . $this->parentMenuPoint;

            foreach ($db->query($query) as $row) 
            {
                throw new Exception("NotImplemented", 1);
                //return new MenuPoint();
            }
        }

        public function getPage()
        {
            if($this->page instanceof Page)
            {
                return $this->page;
            }

            $db = DBSingleton::getInstance();

            $query = "SELECT * FROM pages WHERE  id = " . $this->page;

            foreach ($db->query($query) as $row) 
            {
                return new Page($row['id'], $row['title'], $row['description'], $row['keywords'], $row['content'], $row['isMainPage']);
            }
        }

        public function getName()
        {

        }
    }
    

?>