<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;


class ApiEmployeeController extends RestController
{

    public function __construct ()

    {
        parent::__construct();
        $this->load->model('EmployeeModel');
    }

 
    public function index_get()
    {
        // $this->load->get_employee();
        // echo 'Employee index function';
        //instantiate new EmployeeModel
        $employee = new EmployeeModel;
        //gets employee results form db
        $result_emp = $employee->get_employee();

        //
        $this->response($result_emp, 200);
    }
    public function storeEmployee_post()
    {

        $employee = new EmployeeModel;
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
        ];

        $result= $employee->insertEmployee($data);

        //
        if($result > 0){

            $this->response([
                'status' => true,
                'message' => 'New Employee Created',
            ], RestController::HTTP_OK);


        }else{
            $this->response([
                'status' => false,
                'message' => 'Failed to create employee'
            ], RestController::HTTP_BAD_REQUEST);


        }

        // $this->response($data, 200);

    }


}