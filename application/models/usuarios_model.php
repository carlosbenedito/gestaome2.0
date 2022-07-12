<?php

class Usuarios_model extends CI_Model {

    public function logarUsuarios($usuario, $senha) {
        $this->db->where("usuario", $usuario);
        $this->db->where("senha", $senha);
        $login = $this->db->get("login")->row_array();
        return $login;
    }

}