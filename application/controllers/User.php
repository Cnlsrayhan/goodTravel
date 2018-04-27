<?php

defined('BASEPATH') OR exit('No direct script access allowed');



Class User Extends CI_controller{

	public function __construct(){
	parent::__construct();
	}

	public function index()
	{
		$data['isi'] = $this->db->get('user');

		$this->load->view('views', $data);
	}

	public function form (){
		$this->load->view('form');

	}

	
	

	public function masukkan()
	{
		$data = array('id' =>$this->input->post('id')  ,
			'username' =>$this->input->post('username')  ,
			'password' =>$this->input->post('password')  ,
			'fullname' =>$this->input->post('fullname')  ,
			'level' =>$this->input->post('level'));

			$insert=$this->db->insert('user' , $data);

			if ($insert)
			{
				echo "Sukses";
				redirect('User', 'refresh');

			}else{
				echo "Gagal";
			}
	}

	public function update($id='')
	{
		$this->db->where('id',$id);
		$data['isi'] = $this->db->get('user');

		$this->load->view('update',$data);
	}

	public function gantikan($id='')
	{

		$data = array('id'=> $this->input->post('id'),
					'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
					 'fullname' => $this->input->post('fullname'),
					 'level' => $this->input->post('level'));

		$this->db->where('id',$id);//memasukkan id yg tadi sudah ditentukan lalu memilih id trsb
		$insert=$this->db->update('user' , $data );
		

		if ($insert) {


            echo "sukses";
            redirect('User', 'refresh');


        } else {

            echo "gagal";

        }

	}

	//Delete one item
	public function delete($id='')
	{
		
		$this->db->where('id',$id);

		$this->db->delete('user');

		redirect('User','refresh');

	}
	public function delete2()
	{  

		if($this->input->post('submit'))
		{

			$id = $this->input->post('id');

			$this->db->where('id',$id);

			$this->db->delete('user');

			redirect('User','refresh');
		}
	}
	}