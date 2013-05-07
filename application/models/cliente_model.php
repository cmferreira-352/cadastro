<?php
class Cliente_Model extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    public function save(array $info)
    {
        $sql = '
            INSERT INTO 
                cliente (
                    nome, telefone
                ) VALUES (
                    ?, ?
                )
        ';
        $query = $this->db->query($sql, $info);
        
        if ($query->affected_rows() == 1) {
            return true;
        }
        
        throw new RuntimeException('Cadastro não efetuado!');
    }
}