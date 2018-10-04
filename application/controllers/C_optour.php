<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_optour extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_optour','optour');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('v_optour');
	}

	public function ajax_list()
	{
		$list = $this->optour->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $product) {
			$no++;
			$row = array();
			$row[] = $product->firstName;
			$row[] = $product->lastName;
			$row[] = $product->gender;
			$row[] = $product->address;
			$row[] = $product->dob;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_product('."'".$product->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_product('."'".$product->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->product->count_all(),
						"recordsFiltered" => $this->product->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->product->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$insert = $this->product->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$this->product->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->product->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
