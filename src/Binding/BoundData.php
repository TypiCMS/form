<?php

namespace TypiCMS\Form\Binding;

class BoundData
{
    /**
     * @var mixed
     */
    protected $data;

    public function __construct(mixed $data)
    {
        $this->data = $data;
    }

    public function get(string $name, mixed $default = null): mixed
    {
        return $this->dotGet($this->transformKey($name), $default);
    }

    public function data(): mixed
    {
        return $this->data;
    }

    protected function dotGet(string $dotKey, mixed $default): mixed
    {
        $keyParts = explode('.', $dotKey);

        return $this->dataGet($this->data, $keyParts, $default);
    }

    protected function dataGet(mixed $target, array $keyParts, mixed $default): mixed
    {
        if (count($keyParts) == 0) {
            return $target;
        }

        if (is_array($target)) {
            return $this->arrayGet($target, $keyParts, $default);
        }

        if (is_object($target)) {
            return $this->objectGet($target, $keyParts, $default);
        }

        return $default;
    }

    protected function arrayGet(mixed $target, array $keyParts, mixed $default): mixed
    {
        $key = array_shift($keyParts);

        if (!isset($target[$key])) {
            return $default;
        }

        return $this->dataGet($target[$key], $keyParts, $default);
    }

    protected function objectGet(mixed $target, array $keyParts, mixed $default): mixed
    {
        $key = array_shift($keyParts);

        if (!(property_exists($target, $key) || method_exists($target, '__get'))) {
            return $default;
        }

        return $this->dataGet($target->{$key}, $keyParts, $default);
    }

    protected function transformKey(string $key): string
    {
        return str_replace(['[]', '[', ']'], ['', '.', ''], $key);
    }
}
