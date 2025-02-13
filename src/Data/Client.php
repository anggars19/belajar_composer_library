<?php

namespace Anggars\ComposerLibrary\Data;

class Client
{
    public function __construct(private string $name) {}

    public function sayHello(string $name="guest"): string
    {
        return "hello $name, my name $this->name";
    }
}
