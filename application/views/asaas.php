<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>

  <?php if($this->session->flashdata("sucess")) : ?>
<p><?php $this->session->flashdata("sucess") ?></p>

<?php endif ?>

<?php if($this->session->flashdata("danger")) : ?>

<p><?php $this->session->flashdata("danger") ?></p>
<?php endif ?>



    Página de login


    <h1>Login</h1>

    <?php
     echo form_open('https://bateclick.com.br/login/index.php/asaas/cadastra');


        echo form_label("Nome:");
        echo form_input(
            array(
                "name" => "nome",                
                "id" => "Nome"
            ));

            echo form_label("E-mail");
            echo form_input(
            array(
                "name" => "email",                
                "id" => "email"
            ));

            echo form_button(array (
                "type" => "submit",
                "content" => "Cadastrar"
            ));
        
        

     echo form_close();

    ?>


  </body>
</html>