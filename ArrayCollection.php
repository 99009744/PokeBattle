<?php
    abstract class ArrayCollection
    {
        protected $data;
        
        public function __construct(array $data)
        {
            foreach($data as $object)
            {
                
                if(get_class($object) !== $this->getTarget())
                {
                    throw new Exception("");
                }
            }
            $this->data = $data;
        }

        public function getData(): array
        {
            return $this->data;
        }
        abstract protected function getTarget(): string ;

    }

?>