<?php

namespace Models{

    class Lists{
        
        public function __construct(private ?int $id = null,
                                    private ?string $lists = null)
        {
            
        }

        public function getId(): ?int 
        {
            return $this->id;
        }
        public function setId(?int $id) 
        {
            return $this->id = $id;
        }
        public function getLists(): ?string 
        {
            return $this->lists;
        }
        public function setLists(?int $lists): ?string
        {
            return $this->lists = $lists;
        }
    }

}