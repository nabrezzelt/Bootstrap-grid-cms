<?php

    /**
     * Base Class of a MenuPoint in the Navigation-Bar
     */
    class MenuPoint implements iHTMLComponent
    {
        const TYPE_NONE     = 'none';
        const TYPE_DROPDOWN = 'dropdown'
        const TYPE_DEFAULT  = 'default';
        const TYPE_PRIMARY  = 'primary';
        const TYPE_SUCCESS  = 'success';
        const TYPE_WARNING  = 'warning';
        const TYPE_DANGER   = 'danger';

        private $id;
        private $name;
        private $type;
        private $page;

        function __construct($id, $name, $type, $page)
        {
            $this->id = $id;
            $this->name = $name;
            $this->type = $type;
            $this->page = $page;
        }
    }
    

?>