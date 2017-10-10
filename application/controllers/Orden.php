<?php 

/**
* 
*/
class Orden extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Orden_model');
		$this->load->view('orden');
	}

	public function index(){
		$respuesta = $this->Orden_model->getFecha();
		foreach ($respuesta as $row){
        	echo $row->orden;
        	echo ' ';
        	echo $row->fecha_recep;
        	echo '<br>';
        	$orden = $row->orden;
        	$fecha = $row->fecha_recep;        	
        	$this->Orden_model->update($orden,$fecha);
		}
	}
}
 ?>