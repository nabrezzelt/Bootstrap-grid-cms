<?php
    /**
     * Page Class
     */
    class Page implements iHTMLComponent
    {
        private $id;
        private $title;
        private $description;
        private $keywords;
        private $content;
        private $isMainPage;

        function __construct($id, $title, $description, $keywords, $content, $isMainPage)
        {
            $this->id = (int) $id;
            $this->title = $title;
            $this->description = $description;
            $this->keywords = $keywords;
            $this->content = $content;
            $this->isMainPage = (bool) $isMainPage;
        }

        public function getID()
        {
            return $this->id;            
        }

        public function getTitle()
        {
            return $this->title;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getKeywords()
        {
            return $this->keywords;
        }

        public function getContent()
        {
            return $this->content;
        }

        public function isMainPage()
        {
            return $this->isMainPage;
        }

        public static function getPage($pageID)
        {
            $db = DBSingleton::getInstance();

            $query = "SELECT * FROM pages WHERE id = " . mysql_escape_string($pageID);
        
            foreach ($db->query($query) as $row) 
            {
                return new Page($row['id'], $row['title'], $row['description'], $row['keywords'], $row['content'], $row['isMainPage']);
            }
        }

        public static function getMainPage()
        {
            $db = DBSingleton::getInstance();

            $query = "SELECT * FROM pages WHERE isMainPage = 1";

            foreach ($db->query($query) as $row) 
            {
                return new Page($row['id'], $row['title'], $row['description'], $row['keywords'], $row['content'], $row['isMainPage']);
            }
        }

        public function generateHTML()
        {
            return "HTML code of parsed json for the DB";
        }
    }
?>