<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frutas')->insert(array(

            'nombre' => 'cereza',
            'descripcion' => 'fruto rojo',
            'precio' => 2 ,
            'fecha' => date('y-m-d')

        ));
    }
}
