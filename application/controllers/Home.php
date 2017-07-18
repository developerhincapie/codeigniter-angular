<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		 $this->load->model('barbers_model');
		$this->controller= strtolower(get_class($this));
		$this->data['controller']=$this->controller;
	}
	
	public function index(){
		$this->load->view('home/index_view');
	}

	public function login(){
		// _beta();
		$this->load->view($this->controller.'/login_view',$this->data);	
	}

	public function registrar(){
		// _beta();
		$this->load->view($this->controller.'/registrar_view',$this->data);	
	}
	public function guardar(){

		$datos = $this->validate_post();

		//_build_json(TRUE,"todo bien");
		$result = $this->barbers_model->insertBarberia($datos);

			 if($result)

			_build_json(FALSE,"No se puede guardar, hay graves problemas");

			_build_json(TRUE,"Datos guardados exitosamente");
	}

	public function validate_post(){

		_is_post();
		// _is_ajax_request();

		$nombre =$this->input->post("txtNombre",TRUE);
		$data["nombreBarberia"] = _validate_empty($nombre,"Ingrese su Nombre por favor");

		$direccion =$this->input->post("txtDireccion",TRUE);
		$data["direccionBarberia"] = _validate_empty($direccion,"Ingrese su Direccion por favor");

		$telefono =$this->input->post("txtTelefono",TRUE);
		$data["telefonoBarberia"] = _validate_empty($telefono,"Ingrese su Telefono por favor");

		$nombre =$this->input->post("txtEmail",TRUE);
		$data["emailBarberia"] = _validate_empty($nombre,"Ingrese su Email por favor");

		$clave =$this->input->post("txtPassword",TRUE);
		$data["passwordBarberia"] = _validate_empty($clave,"Ingrese una clave por favor");


		return $data;


	}
}
