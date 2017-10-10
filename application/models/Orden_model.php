<?php 

/**
* 
*/
class Orden_model extends CI_Model
{
	public function getFecha(){
		$query = $this->db->query("select a.orden,b.fecha_recep 
					from ocs.orden a 
					inner join ocs.detalle b on a.orden = b.orden
					inner join ocs.usuario c on a.usuario = c.usuario
					where a.contrasenia is not null 
					and date(b.fecha_recep) between '2017-08-01' and '2017-08-3'
					and a.fecha_pago is null
					and c.empresa = 2");
		return $query->result();

	}

	public function update($orden,$fecha){		
		$this->db->set('fecha_recep', $fecha);
		$this->db->where('orden', $orden);
		$this->db->update('orden');		  
	}
}
 ?>
