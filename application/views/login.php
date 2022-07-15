<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <body>

  <?php if($this->session->flashdata("sucess")) : ?>
<p><?php $this->session->flashdata("sucess") ?></p>

<?php endif ?>

<?php if($this->session->flashdata("danger")) : ?>

<p><?php $this->session->flashdata("danger") ?></p>
<?php endif ?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
          height: 100vh;
    }

  

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }


    input {
      margin: 20px 0;
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
        O melhor sistema para 
          <span style="color: hsl(218, 81%, 75%)">a sua micro empresa</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
          
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-12 mb-6">
                  <div class="form-outline">

                  <img src="https://www.darmatec.com.br/novosite/images/logo.png" alt="">
                    
                    <?php
                    echo form_open('https://bateclick.com.br/login/index.php/Login/carrega');
                    
                    echo form_input(
                        array(
                            "placeholder" => "Usuário",
                            "class" => "form-control",
                            "id" => "form3Example1",
                            "name" => "usuario",
                            "id" => "usuario"
                        ));

                        echo form_input(
                          array(
                              "placeholder" => "Senha",
                              "class" => "form-control",
                              "id" => "form3Example1",
                              "name" => "senha",
                              "id" => "usuario"
                          ));

                          echo form_button(array (
                            "class" => "btn btn-primary btn-block mb-4",
                            "type" => "submit",
                            "content" => "Entrar"
                        ));

                        
                      echo form_close();
                    ?>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                 
                  </div>
                </div>
              </div>

           

              

          
            

             
       
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->



  </body>
</html>