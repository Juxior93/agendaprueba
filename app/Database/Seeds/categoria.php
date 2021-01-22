<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categoria extends Seeder
{
	public function run()
	{
		$categoria = "Bares";
		$descripcion ="Bar el recurse";

		$data = [
						'categoria' => $categoria,
						'descripcion' => $descripcion
                ];

		$this->db->table('t_categorias')->insert($data);
		
		$categoria2 = "Vicio";
		$descripcion2 ="Jovenes del TecNM";

		$data2 = [
						'categoria' => $categoria2,
						'descripcion' => $descripcion2
                ];

        $this->db->table('t_categorias')->insert($data2);
	}
}
