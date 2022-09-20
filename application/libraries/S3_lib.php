<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class S3_lib{
	function __construct(){ 
        require APPPATH .'third_party/aws-php/autoload.php'; 
    }
}