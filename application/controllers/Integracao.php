<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Integracao extends CI_Controller {

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
            "view"=>'integracao/form_cadastro_integracao'

        );
        $this->load->view('template', $dados);
    }

    public function listaprovisoria() {

        $alerta = array(
            "class" => " alert",
            "mensagem" => ""
        );
        $dados = array(
            "alerta" => $alerta,
            "view"=>'cliente/form_lista_prov'

        );
        $this->load->view('template', $dados);
    }

    public function dashboard() {

        $alerta = array(
            "class" => " alert",
            "mensagem" => ""
        );
        $dados = array(
            "alerta" => $alerta,
            "view"=>'integracao/index'

        );
        $this->load->view('template', $dados);
    }




}
