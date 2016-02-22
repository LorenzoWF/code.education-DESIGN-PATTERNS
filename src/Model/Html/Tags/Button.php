<?php

namespace Model\Html\Tags;

use Model\Html\HtmlInterface;

class Button implements HtmlInterface
{
    private $html = "";

    public function __construct(array $parametros)
    {
        $this->html .= "<button";

        if (isset($parametros['name'])){
            $this->html .= " name='".$parametros['name']."'";
        }

        if (isset($parametros['id'])){
            $this->html .= " id='".$parametros['id']."'";
        }

        if (isset($parametros['class'])){
            $this->html .= " class='".$parametros['class']."'";
        }

        if (isset($parametros['type'])){
            $this->html .= " type='".$parametros['type']."'";
        }

        if (isset($parametros['texto'])){
            $this->html .= ">".$parametros['texto'];
        }

        $this->html .= "</button>";
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