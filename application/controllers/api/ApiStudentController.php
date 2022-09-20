<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;


class ApiStudentController extends RestController
{

 
    public function index_get()
    {
       echo 'Hi there';
    }


}