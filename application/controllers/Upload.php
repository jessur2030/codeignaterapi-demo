<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('vw_upload');
	}

    public function upload_video_file()
	{
        $config['allowed_types'] = 'avi|mp4|3gp|mpeg|mpg|mov|mp3|flv|wmv';
        $config['upload_path'] = './uploads';
        //encrypt_name
        $config['encrypt_name'] = true;
		$this->load->library('upload', $config);

        if($this->upload->do_upload('video_file')){
        // code..
        print_r($this->upload->data());
        }else{
        // code..
        print_r($this->upload->display_errors());

        }

		// $this->load->library('upload')
		// $this->load->library('upload', $config);
	}
}
