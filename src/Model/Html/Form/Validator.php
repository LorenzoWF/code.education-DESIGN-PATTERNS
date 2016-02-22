<?php

namespace Model\Html\Form;

use Model\Html\Form\Request;

class Validator
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}