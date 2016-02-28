<?php

namespace Model\Html\Tags;

use Model\Html\HtmlInterface;

class Label implements HtmlInterface
{
    private $html = "";

    public function __construct(array $parametros)
    {
        $this->html .= "<label";

        if (isset($parametros['for'])){
            $this->html .= " for='".$parametros['for']."'";
        }

        if (isset($parametros['texto'])){
            $this->html .= ">".$parametros['texto'];
        }

        $this->html .= "</label>";
    }

    public function getHtml()
    {
        return $this->html;
    }

    public function render()
    {
        echo $this->html;
    }
}