<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if ($this->session->userdata('logado')) {
            if(!$this->uri->segment(2)=='sair')
                redirect('dashboard');
        }
    }

    public function pesquisar() {

        $alerta = array(
            "class" => " alert",
             "mensagem" => ""
        );
        $dados = array(
            "alerta" => $alerta,
            "view"=>'cliente/form_pesquisa'

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





}
