<?php

namespace Model\Form;

class Formulario
{
    private $x;
    private $openForm;
    private $closeForm;
    private $campos = array();

    public function __construct($class = null, $action = null, $method = null)
    {
        $this->openForm = "<form class='".$class."' action='".$action."' method='".$method."'>";
        $this->closeForm = "<form>";
        $this->x = 0;
    }

    public function label($classe = null, $texto)
    {
        $this->campos[$this->x] = array ('label', $classe, $texto);
        $this->x++;
    }

    public function input($tipo, $nome, $classe = null, $id = null, $placeholder = null)
    {
        $this->campos[$this->x] = array ('input', $tipo, $nome, $classe, $id, $placeholder);
        $this->x++;
    }

    public function textarea($nome, $classe = null, $rows = null, $cols = null, $texto = null)
    {
        $this->campos[$this->x] = array ('textarea', $nome, $classe, $rows, $cols, $texto);
        $this->x++;
    }

    public function button($tipo = null, $nome, $classe = null, $texto)
    {
        $this->campos[$this->x] = array ('button', $tipo, $nome, $classe, $texto);
        $this->x++;
    }

    public function openSelect($nome, $classe = null)
    {
        $this->campos[$this->x] = array ('openSelect', $nome, $classe);
        $this->x++;
    }

    public function closeSelect()
    {
        $this->campos[$this->x] = array ('closeSelect');
        $this->x++;
    }

    public function option($value, $texto)
    {
        $this->campos[$this->x] = array ('optionSelect', $value, $texto);
        $this->x++;
    }

    public function render()
    {
        echo $this->openForm;

        for($y=0; $y < $this->x; $y++){

            switch ($this->campos[$y][0]) {
                case 'label':
                    echo "<label class='".$this->campos[$y][1]."' >".$this->campos[$y][2]."</label>";
                    break;
                case 'input':
                    echo "<input type='".$this->campos[$y][1]."' name='".$this->campos[$y][2]."' class='".$this->campos[$y][3]."' id='".$this->campos[$y][4]."' placeholder='".$this->campos[$y][5]."'>";
                    break;
                case 'textarea':
                    echo "<textarea name='".$this->campos[$y][1]."' class='".$this->campos[$y][2]."' rows='".$this->campos[$y][3]."' cols='".$this->campos[$y][4]."'>".$this->campos[$y][5]."</textarea>";
                    break;
                case 'button':
                    echo "<button type='".$this->campos[$y][1]."' name='".$this->campos[$y][2]."' class='".$this->campos[$y][3]."'>".$this->campos[$y][4]."</button>";
                    break;
                case 'openSelect':
                    echo "<select name='".$this->campos[$y][1]."' class='".$this->campos[$y][2]."'>";
                    break;
                case 'closeSelect':
                    echo "</select>";
                    break;
                case 'optionSelect':
                    echo "<option value='".$this->campos[$y][1]."'>".$this->campos[$y][2]."</option>";
                    break;
            }

        }

        echo $this->closeForm;
    }

}