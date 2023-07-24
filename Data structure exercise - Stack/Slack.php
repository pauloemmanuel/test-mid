<?php

class Stack
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }
    
    /**
     * push
     *
     * @param mixed element
     *
     * @return void
     */
    public function push($element)
    {
        array_push($this->stack, $element);
    }

    /**
     * pop
     *
     * @return mixed|null
     */
    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        } else {
            return null;
        }
    }

    /**
     * isEmpty
     *
     * @return void
     */
    public function isEmpty()
    {
        return empty($this->stack);
    }
}
