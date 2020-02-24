<?php
    class Role
    {
        // ---- FIELDS ----

        private $_roleName;

        // ---- CONTRUCTORS ----
        
        public function __construct($roleName)
        {
            $this->_roleName = $roleName;
        }

        // ---- ACCESSORS ----

        public function getRoleName(){
            return $this->_roleName;
        }

        public function setRoleName($roleName){
            $this->_roleName = $roleName;
        }
    }
?>