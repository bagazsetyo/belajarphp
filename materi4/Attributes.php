<?php

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class notBlank{
    
}

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class Length{
    public  $min;
    public  $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest{
    #[notBlank]
    #[Length(min:4, max:10)]
    public ?string $username;

    #[notBlank]
    #[Length(min:4, max:10)]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property){
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object):void 
{
    $attributers = $property->getAttributes(notBlank::class);
    if(count($attributers) > 0){
        if(!$property->isInitialized($object))
            throw new Exception("Property $property->name is null");
        if($property->getValue($object) == null)
            throw new Exception("Property $property->name is null");
    }
}

function validateLength(ReflectionProperty $property, object $object):void 
{
    if(!$property->isInitialized($object) || $property->getValue($object) == null){
        return;
    }
    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach($attributes as $attribute){
        $length = $attribute->newInstance();
        $valueLength = strlen($value);
        if($valueLength < $length->min)
            throw new Exception("Property $property->name is to sort");
        if($valueLength > $length->max)
            throw new Exception("Property $property->name is to long");
    }

}

$request = new LoginRequest();
$request->username = "bagas";
$request->password = "bssasdasdag";
validate($request);