<?php

class Class_model extends CI_Model{

    public function salvar($obj){
       $this->db->insert('Imovel', $obj);  
       return "Inserido com sucesso!";

    }
    public function getall(){
        $query = $this->db->get('Imovel');
        return $query;
    }
    public function excluir($cod){
        $table = array('Imovel');
        $this->db->where('codigo',$cod);
        $this->db->delete($table);
    }
    public function update($obj){        
        $this->db->where('codigo', $_SESSION['cod']);
        $this->db->update('Imovel', $obj);
    }
    public function select($obj){
        $this->db->select('*');
        $this->db->from('Imovel');        
        $this->db->where($obj);
        return $this->db->where($obj);
    }      
}

?>