<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('tbl_user');
            return $query->result_array();
            echo "<pre>"; print_r($query);die;            
        }
 
        $query = $this->db->get_where('tbl_user', array('slug' => $slug));
        //echo "<pre>"; print_r($query);die;
        return $query->row_array();
    }
    
    public function get_news_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('tbl_user');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('tbl_user', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_news($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('fname').'-'.$this->input->post('lname'), 'dash', TRUE);
 
        $data = array(
            'slug' => $slug,
            'fname' => $this->input->post('fname'),            
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'mobile' => $this->input->post('mobile'),
            'salary' => $this->input->post('salary'),
            'cdate' => date('Y-m-d H:i:s')
        );
        
        if ($id == 0) {
            return $this->db->insert('tbl_user', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('tbl_user', $data);
        }
    }
    
    public function delete_news($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_user');
    }
}
