<?php

namespace Model\Html\Form;

use Model\Html\HtmlInterface;
use Model\Html\Form\Validator;

use Model\Html\Tags\Label;
use Model\Html\Tags\Input;
use Model\Html\Tags\Button;


class Formulario implements HtmlInterface
{
    private $validator;

    public function __construct(Validator $validator, $class = null, $action = null, $method = null)
    {
        $this->validator = $validator;
        echo "<form class='".$class."' action='".$action."' method='".$method."'>";
    }

    public function createField ($tipo, array $parametros)
    {
        switch ($tipo) {
            case "input":
                $campo = new Input($parametros);
                break;
            case "button":
                $campo = new Button($parametros);
                break;
            case "label":
                $campo = new Label($parametros);
                break;
        }

        return $campo;
    }

    public function render()
    {
        echo "</form>";
    }

}