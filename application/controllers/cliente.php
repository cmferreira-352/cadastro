<?php
class Cliente extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('cliente_model');
        $this->load->helper('url_helper');
        $this->load->library(array('form_validation', 'session'));
    }
    
    public function index()
    {
        $this->load->view('cliente_view');
    }
    
    public function criar()
    {        
        //formulario de validaçao para o usuario nao cadastrar valores vazios no bd
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[255]');
        $this->form_validation->set_message('required', 'O Campo %s é obrigatório!');
        
        if ($this->form_validation->run() === true) {
            try {
                $this->cliente_model->save(array(
                    $this->input->post('nome'),
                    $this->input->post('telefone'),                    
                ));   
                
                $this->session->set_flashdata('message', 'Cadastro feito com sucesso!');
                redirect('cliente');
            } catch (Exception $e) {
                $this->session->set_flashdata('message', $e->getMessage());
            }
        } else {
            $this->load->view('cliente_view');
        }
        
    }

}