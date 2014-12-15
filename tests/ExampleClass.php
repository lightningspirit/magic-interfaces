<?php

/**
 * Class ExampleClass
 */
class ExampleClass implements Invokable, Stringifiable, Arrayable
{

    private $say = '"Hello, World!"';

    /**
     * @return mixed
     */
    public function __invoke()
    {
        return implode(' ', func_get_args());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->say;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            $this->say
        ];
    }

}