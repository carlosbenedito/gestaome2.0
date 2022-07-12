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
     echo form_open('https://bateclick.com.br/login/index.php/Login/carrega');


        echo form_label("Usuário");
        echo form_input(
            array(
                "name" => "usuario",
                "usuario" => "usuario",
                "id" => "usuario"
            ));

            echo form_label("Senha");
            echo form_input(
            array(
                "name" => "senha",
                "senha" => "senha",
                "id" => "senha"
            ));

            echo form_button(array (
                "type" => "submit",
                "content" => "Entrar"
            ));
        
        

     echo form_close();

    ?>


  </body>
</html>