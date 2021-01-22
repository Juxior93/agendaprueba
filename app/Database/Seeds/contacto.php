<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Contacto extends Seeder
{
	public function run()
	{
		$nombre = "Cesar";
		$paterno ="Perez";
		$materno ="Juarez";
		$telefono ="5611451715";
		$email ="cesar123@gmail.com";
		$id_categoria = 1;

		$data = [
						'nombre' => $nombre,
						'paterno' => $paterno,
						'materno' => $materno,
						'telefono' => $telefono,
						'email' => $email,
						'id_categoria' => $id_categoria
                ];

		$this->db->table('t_contactos')->insert($data);
		
		$nombre2 = "Julio";
		$paterno2 ="Rodriguez";
		$materno2 ="Ortiz";
		$telefono2 ="1234567890";
		$email2 ="julio12@gmail.com";
		$id_categoria2 = 2;

		$data2 = [
						'nombre' => $nombre2,
						'paterno' => $paterno2,
						'materno' => $materno2,
						'telefono' => $telefono2,
						'email' => $email2,
						'id_categoria' => $id_categoria2
                ];

		$this->db->table('t_contactos')->insert($data2);
	}
}
