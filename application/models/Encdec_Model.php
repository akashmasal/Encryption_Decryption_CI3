<?php

class Encdec_Model extends CI_Model{
    public function insert($data)
    {
        $query = $this->db->insert("sample_data",$data);
        return $query;
    }

    public function fetch_data()
    {
        $query = $this->db->order_by('id','asc')
                          ->get("sample_data");
        return $query; 
    }                      
}


?>