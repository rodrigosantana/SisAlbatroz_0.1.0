<?php

class Mapa_bordo extends CI_Controller
{
            
    // ----------------------------------------------------------------------------------------------------------------------------------------------

    // public function __construct()
    // {
    //     parent::__construct();
    //     $user_id = $this->session->userdata('user_id'); //função condicional para verificar ID, se ele for falso, faz o logout.
    //     if (!$user_id) { 
    //         $this->logout();
    //     }

    // }
            
    // ----------------------------------------------------------------------------------------------------------------------------------------------

    public function index()
    {
        $this->load->view('sis/inc/header_view');
        $this->load->view('sis/mapa_bordo_view');
        $this->load->view('sis/inc/footer_view');
    }
            
    // ----------------------------------------------------------------------------------------------------------------------------------------------

    // public function logout()
    // {
    //     $this->session->sess_destroy(); // Função para destruir o cookie da sessão. Melhor do que a função abaixo.
    //     //session_destroy(); // comando padrão PHP para destruir a sessão de login
    //     redirect('/'); //redirecionamento para ocorrer após o logout ocorrer
    // }
}