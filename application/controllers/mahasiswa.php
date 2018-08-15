<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['content'] = $this->db->get('mahasiswa');
		$this->load->view('kontent/mahasiswa', $data);
	}

	public function add()
		{
			$this->load->view('form/form_input_mahasiswa');	
		}

	public function action_add()
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jurusan' => $this->input->post('jurusan')
			);
			$this->db->insert('mahasiswa', $data);
			redirect('mahasiswa','refresh');
		}	

	public function update($nim = NULL)
	{
		$this->db->where('nim', $nim);
		$data['content'] = $this->db->get('mahasiswa');
		$this->load->view('form/form_edit', $data);
	}

		public function action_update($nim='')
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jurusan' => $this->input->post('jurusan')
			);

			$this->db->where('nim', $nim);
			$this->db->update('mahasiswa', $data);

			redirect('mahasiswa','refresh');
		}

	public function delete($nim = NULL)
	{
		$this->db->where('nim', $nim);
		$this->db->delete('mahasiswa');

		redirect('mahasiswa','refresh');
	}

}

