<html>
    <header>
     <title>Design Patterns</title>
     <link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    </header>
    <body>

        <h1>Design Patterns</h1>
        <div class="col-md-4">
        <?php

            $loader = require_once 'vendor/autoload.php';

            $form = new Model\Form\Formulario('form-horizontal');
            $form->label(NULL, 'Nome:');
            $form->input('text','nome','form-control', NULL,'Insira seu nome');
            $form->button('submit', 'botao', 'btn btn-success', 'Enviar');
            $form->render();

        ?>
        </div>
    </body>
</html>