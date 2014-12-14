<?php

/**
 * Class ExampleClass
 */
class ExampleClass implements Invokable, Stringifiable
{

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
        return "Hello, World!";
    }

}