<?php

class Home extends CI_Controller {

    public function index(){
        $this->load->view('search_view');
    }

    public function search(){
        $term = $this->input->get("term");

        $rows = $this->db->select("title as value,id")->like("title",$term)->get("name")->result_array();
        echo json_encode($rows);
    }
    
    public function detail($id) {
        $viewData['row'] = $this->db->where("id",$id)->get("name")->row();
        $this->load->view('detail_page',$viewData);
    }
}