<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
        }
    


        public function index()
        {
                $this->load->view('login');
                /*$query = $this->db->query('SELECT * FROM login');
                foreach ($query->result() as $row) {
                        echo $row->usuario;
                        echo $row->senha;
                }*/

                
        }

        public function carrega(){
                $this->load->model("usuarios_model");
                $usuario = $this->input->post("usuario");
                $senha = $this->input->post("senha");
                $login = $this->usuarios_model->logarUsuarios($usuario, $senha);
                if($login) {
                        $this->session->set_userdata("usuario logado", $login);
                        $this->session->set_flashdata("sucess", "Logado com sucesso");
                        echo "Logado com sucesso";
                }else{
                        $this->session->flashdata("danger", "Usuário ou senha inválidos");
                        echo "Usuário ou senha inválidos";
                        
                }
               
                
                
                
                //redirect($uri = '/login');

        }

       


        
}