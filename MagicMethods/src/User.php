<?php
namespace Source;

class User
{
    protected array $attributes = [];

    public function __construct(array $attributes = []) {
        $this->fill($attributes);
    }

    public function getAttribute(string $name)
    {
        if(array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }
    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function fill(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }
}
