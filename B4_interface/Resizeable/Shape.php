<?php
class Shape
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function show(): string
    {
        return " i am a shape . My name is $this->name";
    }
}
