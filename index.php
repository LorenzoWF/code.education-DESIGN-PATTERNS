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

            $form->createField("label", $opcoes = array("for" => "exampleInputEmail1",
                                                        "texto" => "Nome:"));
            echo "</br>";

            $form->createField("input", $opcoes = array("name" => "texto",
                                                        "type" => "text",
                                                        "class" => "form-control",
                                                        "placeholder" => "Nome"));
            echo "</br>";

            $form->createField("button", $opcoes = array("name" => "botao",
                                                        "type" => "submit",
                                                        "class" => "btn btn-success",
                                                        "texto" => "Botao"));
            $form->render();

        ?>
        </div>
    </body>
</html>