<?php

trait SampleTrait{
    public abstract function sampleFunction(string $name): string;
}

class Sample{
    use SampleTrait;

    public function sampleFunction(string $name): string
    {
        
    }
}
class SampleTwo{
    use SampleTrait;

    public function sampleFunction(int $name): string
    {
        
    }
}