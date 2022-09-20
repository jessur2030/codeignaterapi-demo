<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class EmployeeModel extends CI_Model

{

    public function get_employee(){

        $query = $this->db->get('employee');
        return $query->result();
    }
    
    public function insertEmployee($data){

        return $this->db->insert('employee', $data);

    }

}