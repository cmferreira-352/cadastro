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
    
    /**
     * busca cliente por id
     * 
     * @param type $id
     * @return query_row
     * @throws RuntimeException
     */
    public function getById($id)
    {
        $sql= '
            SELECT
                id, nome, telefone 
            FROM
                cliente
            WHERE 
                id = ?
        ';
        $query = $this->db->query($sql, $id); 
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            throw new RuntimeException('Cliente não encontrado!');
        }
        
    }
    
    /**
     * atualiza dados cadastrais do cliente
     * 
     * @param type $id
     * @param array $dados
     * @return boolean
     * @throws RuntimeException
     */
    public function update($id, array $dados)
    {
        $sql= '
            UPDATE
                cliente
            SET
                nome = ?,
                telefone = ?
            WHERE
                id = ?
        ';
        
        array_push($dados, $id);
        $this->db->query($sql, $dados);
        
        if ($this->db->affected_rows() == 1) {
            return true;
        }
        
        throw new RuntimeException('Cadastro não atualizado!');
    }
}