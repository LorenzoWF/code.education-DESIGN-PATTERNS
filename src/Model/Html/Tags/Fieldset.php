<?php

namespace Model\Html\Tags;

use Model\Html\HtmlInterface;

use Model\Html\Tags\Label;
use Model\Html\Tags\Input;
use Model\Html\Tags\Button;

class Fieldset implements HtmlInterface
{
    private $html = "";

    public function __construct(array $parametros)
    {
        $this->html .= "<fieldset>";

        if (isset($parametros['legend'])){
            $this->html .= "<legend>".$parametros['legend']."</legend>";
        }

        foreach($parametros['campos'] as $campos){

            $tipo = $campos['campo'];

            switch ($tipo) {
                case "input":
                    $campo = new Input($campos);
                    break;
                case "button":
                    $campo = new Button($campos);
                    break;
                case "label":
                    $campo = new Label($campos);
                    break;
            }

            $this->html .= $campo->getHtml();
        }

        $this->html .= "</fieldset>";

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