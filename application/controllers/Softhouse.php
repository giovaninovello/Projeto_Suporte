<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Softhouse extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if ($this->session->userdata('logado')) {
            if(!$this->uri->segment(2)=='sair')
                redirect('dashboard');
        }
    }

    public function cadastrar() {

        $alerta = array(
            "class" => " alert",
             "mensagem" => ""
        );
        $dados = array(
            "alerta" => $alerta,
            "view"=>'softhouse/form_cad_softhouse'

        );
        $this->load->view('template', $dados);
    }





}
