<?php

namespace RPS;

class Player
{
    /** @var Element */
    private $element;

    public function __construct(Element $element)
    {
        $this->element = $element;
    }
}
