<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chamado extends CI_Controller {

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
            "view"=>'chamado/form_cad'

        );
        $this->load->view('template', $dados);
    }

    public function cadastrado() {

        $alerta = array(
            "class" => " alert alert-success",
            "mensagem" => "Chamado cadastrado com sucesso."
        );

        $dados = array(

            "alerta" => $alerta,
            "view"=>'chamado/form_cad'

        );
        $this->load->view('template', $dados);
    }



}
