<?php
class Address{
    public ?string $country;
}

class User{
    public ?Address $address;
}

function getCountrey(?User $user): ?string{
    return $user?->address?->country;
}

echo getCountrey(null) . PHP_EOL;