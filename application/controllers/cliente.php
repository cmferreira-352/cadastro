<?php
class Cliente extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('cliente_model');
        $this->load->helper('url_helper');
        $this->load->library(array('form_validation', 'session'));
        //formulario de validaçao para o usuario nao cadastrar valores vazios no bd
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[255]');
        $this->form_validation->set_message('required', 'O Campo %s é obrigatório!');
    }
    
    public function index()
            
    {
        $this->load->view('cliente_view');
    }
    
    public function criar()
    {        
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
    
    public function listar()
    {
        try {
            $clientes = $this->cliente_model->listname();
            $this->load->view('listar_cliente_view', array(
                'clientes' => $clientes,
            ));

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    
    public function atualizar($id)
    {
        try {
            $cliente = $this->cliente_model->getById($id);
            if ($this->input->post()) {
                if ($this->form_validation->run() === true) {
                    $this->cliente_model->update($id, array(
                        $this->input->post('nome'),
                        $this->input->post('telefone'),
                    ));
                    $this->session->set_flashdata('feedback', 'Cadastro atualizado com sucesso!');
                    redirect('cliente/listar');
                } else {
                    $this->load->view('atualizar_cliente_view', array(
                        'cliente' => $cliente,
                    ));
                }
            } else {
                $this->load->view('atualizar_cliente_view', array(
                    'cliente' => $cliente,
                ));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function apagar()
    {
        try {
            $clientes = $this->cliente_model->listname();
//            $this->load->view('listar_cliente_view', array(
//                'clientes' => $clientes,
//            ));

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }       
}    