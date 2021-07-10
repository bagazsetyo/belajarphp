<?php

    
    class Category {

        private string $name;
        private bool $expensive;

        public function getName():string
        {
            return $this->name;
        }
        public function setName(string $name):string
        {
            if($name != ""){
                return $this->name = $name;
            }
        }

        //bool
        public function isExpensive():bool
        {
            return $this->expensive;
        }   
        public function setExpensive(bool $expensive):bool
        {
            return $this->expensive = $expensive;
        }   

    }
    