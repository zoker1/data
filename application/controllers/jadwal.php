<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		$data['content'] = $this->db->get('jadwal');
		$this->load->view('kontent/jadwal', $data);
	}

	public function add()
	{
		$data['dosen'] = $this->db->get('dosen')->result();
		$this->load->view('form/form_input_jadwal',$data);

	}

	public function action_add()
		{
			$data = array(
				'hari' => $this->input->post('hari'),
				'jam' => $this->input->post('jam'),
				'matakuliah' => $this->input->post('matakuliah'),
				'dosen_pengajar' => $this->input->post('dosen_pengajar'),
			);
			$this->db->insert('jadwal',$data);
			redirect('jadwal','refresh');
		}	

	public function update($no = NULL)
	{
		$this->db->where('no', $no);

		$data['content'] = $this->db->get('jadwal');
		$this->load->view('form/form_update_jadwal', $data);
	}

	public function action_update($no='')
		{
			$data = array(
				'hari' => $this->input->post('hari'),
				'jam' => $this->input->post('jam'),
				'matakuliah' => $this->input->post('matakuliah'),
				'dosen_pengajar' => $this->input->post('dosen_pengajar'),
			);

			$this->db->where('no', $no);
			$this->db->update('jadwal', $data);

			redirect('jadwal','refresh');
		}	

	public function delete($no = NULL)
	{
		$this->db->where('no', $no);
		$this->db->delete('jadwal');

		redirect('jadwal','refresh');
	}		

}

