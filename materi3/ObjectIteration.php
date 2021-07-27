<?php
    class Data implements IteratorAggregate
    {
        var string $first = "first";
        public string $second = "second";
        private string $third = "third";
        protected string $forth = "forth";

        // public function getIterator()
        // {
        //     $array = [
        //         'first' => $this->first,
        //         'second' => $this->second,
        //         'third' => $this->third,
        //         'forth' => $this->forth,
        //     ];

        //     $iterator = new ArrayIterator($array);
        //     return $iterator;
        // }

        public function getIterator()
        {
            
            yield 'first' => $this->first;
            yield 'second' => $this->second;
            yield 'third' => $this->third;
            yield 'forth' => $this->forth;

        }

    }

    $data = new Data();

    foreach ($data as $index => $d){
        echo "$index : $d" . PHP_EOL;
    }