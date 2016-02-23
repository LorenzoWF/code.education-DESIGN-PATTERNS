<html>
    <header>
     <title>Design Patterns</title>
     <link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    </header>
    <body>

        <h1>Design Patterns</h1><br><br>
        <div class="col-md-4">
        <?php

            $loader = require_once 'vendor/autoload.php';

            $request = new Model\Html\Form\Request();
            $validator = new Model\Html\Form\Validator($request);
            $form = new Model\Html\Form\Formulario($validator);

            $label = $form->createField("label", $opcoes = array("for" => "exampleInputEmail1",
                                                                 "texto" => "Nome:"));
            $label->render();

            echo "</br>";

            $input = $form->createField("input", $opcoes = array("name" => "texto",
                                                                 "type" => "text",
                                                                 "class" => "form-control",
                                                                 "placeholder" => "Nome"));
            $input->render();
            echo "</br>";

            $button = $form->createField("button", $opcoes = array("name" => "botao",
                                                                   "type" => "submit",
                                                                   "class" => "btn btn-success",
                                                                   "texto" => "Botao"));
            $button->render();

            $form->render();

        ?>
        </div>
    </body>
</html>