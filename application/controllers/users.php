<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}
	public function index()
	{
		$data['usuario'] = $this->users_model->getID();
		$data['content'] = 'users/dashboard';
		$this->load->view('index', $data);
	}
	public function create()
	{
		$data['content'] = 'users/create';
		$this->load->view('index', $data);
	}
	public function edit($id)
	{
		$data['usuario'] = $this->users_model->getID($id);
		$data['content'] = 'users/edit';
		$this->load->view('index', $data);
	}
	public function guardar()
	{
		$id = $this->input->post('ID');
		$nombre = $this->input->post('nombre');
		$paterno = $this->input->post('apep');
		$materno = $this->input->post('apem');
		
		$data = [
			'ID' => $id,
			'nombre' => $nom,
			'paterno' => $appa,
			'materno' => $apma,
		];
		$this->users_model->save($data);
		redirect('users');
	}
	public function modificar()
	{
		$id = $this->input->post('ID');
		$nom = $this->input->post('nombre');
		$appa = $this->input->post('apep');
		$apma = $this->input->post('apem');

		$data = [
			'ID' => $id,
			'nombre' => $nom,
			'paterno' => $appa,
			'materno' => $apma,
		];
		$this->users_model->update($id, $data);
		redirect('users');
	}
	public function delete
}