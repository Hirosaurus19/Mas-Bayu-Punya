<?php
    class M_Kontak extends CI_Model
    {
        function fetch_all()
        {
            $this->db->order_by('id','DESC');
            $query = $this->db->get('telepon');
            return $query->result_array();
        }
        function fetch_single_data($id)
        {
            $this->db->where("id",$id);
            $query = $this->db->get('telepon');
            return $query->row();
        }
        function check_data($id)
        {
            $this->db->where("id",$id);
            $query = $this->db->get('telepon');
            if ($query->row()){
                return true;
            } else {
                return false;
            }
        }
        function insert_api($data)
        {
            $this->db->insert('telepon',$data);
            if ($this->db->affected_rows() >0){
                return true;
            } else {
                return false;
            }
        }
        function update_data($id, $data)
        {
            $this->db->where("id", $id);
            $this->db->update("telepon",$data);
        }
        function delete_data($id)
        {
            $this->db->where("id", $id);
            $this->db->delete("telepon");
            if ($this->db->affected_rows() >0){
                return true;
            } else {
                return false;
            }
  }
}
?>
