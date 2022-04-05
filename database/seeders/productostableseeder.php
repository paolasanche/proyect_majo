<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productostableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            ['name'=>'fresa', 'tamano'=>'pequeno', 'descripcion'=>'familiar', 'price'=>'350'],
            ['name'=>'chocolate', 'tamano'=>'mediano', 'descripcion'=>'personalizado', 'price'=>'2852'],
            ['name'=>'chocolate', 'tamano'=>'grande', 'descripcion'=>'con cubierta de fresas', 'price'=>'4525'],
            ['name'=>'3 leches', 'tamano'=>'grande', 'descripcion'=>' con crema pastelera', 'price'=>'215'],
            ['name'=>'vainilla', 'tamano'=>'pequeño', 'descripcion'=>'sin cubierta', 'price'=>'258.5'],



        ]);
    }
}