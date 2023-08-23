<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            ['docutipos_id' => 3, 'tipo_id' => 'Cedula de ciudadania'],
        ];
        foreach ($usuarios as $item) {
            DB::table('docutipos')->insert([
                'abreb_id' => $item['abreb_id'],
                'tipo_id' => $item['tipo_id'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
