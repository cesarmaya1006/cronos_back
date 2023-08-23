<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRoles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = [
            'Administrador Sistema',
            'Administrador',
            'Usuario',
        ];
        foreach ($rols as $key => $value) {
            DB::table('roles')->insert([
                'rol' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
