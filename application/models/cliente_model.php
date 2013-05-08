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
        $this->db->query($sql, $info);
        
        if ($this->db->affected_rows() == 1) {
            return true;
        }
        
        throw new RuntimeException('Cadastro não efetuado!');
    }
    
    /**
     * Retorna lista de clientes cadastrados.
     * 
     * @author Hussein 
     * @return object todos os clientes
     * @throws RuntimeException
     */
    public function listname()
    {
        $sql= '
            SELECT
                id, nome, telefone
            FROM
                cliente
        ';
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0 ) {
               return $query->result();
        } else {
            throw new RuntimeException('Não existem clientes cadastrados.');
        }
    }
}