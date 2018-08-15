<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['content'] = $this->db->get('dosen');
		$this->load->view('kontent/index',$data);
	}

	public function add()
		{
		$this->load->view('form/add');
			
		}

	public function action_add()
		{
			$data = array(
				'nama_dosen' => $this->input->post('nama_dosen')
				// 'status' => $this->input->post('status'),
				// 'jurusan' => $this->input->post('jurusan')
			);

			$this->db->insert('dosen',$data);
			redirect('crud','refresh');
		}			

	public function update($id = NULL)//copy dari function index
	{
		$this->db->where('id',$id);
		$data['content'] = $this->db->get('dosen');
		$this->load->view('form/update',$data);
		
	}

	public function action_update($id ='')// copy dari function action_add
	{
		$data = array(
				'nama_dosen' => $this->input->post('nama_dosen')
				// 'status' => $this->input->post('status'),
				// 'jurusan' => $this->input->post('jurusan')
			);

		$this->db->where('id', $id);
		$this->db->update('dosen', $data);

		redirect('crud','refresh');
	}

	public function delete($id = NULL)
		{
			$this->db->where('id',$id);
			$this->db->delete('dosen');

			redirect('crud','refresh');
		}

	public function read($id = NULL)
		{
			$this->db->where('id',$id);
			$data['content'] = $this->db->get('dosen');

			$this->load->view('kontent/index', $data);
		}			

}

