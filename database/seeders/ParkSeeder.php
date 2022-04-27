<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkSeeder extends Seeder
{
    public function run()
    {
        DB::table('nationalparks')->insert([
            'name' => 'Aggteleki Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Balaton-felvidéki Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Bükki Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Duna-Dráva Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Duna-Ipoly Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Fertő-Hanság Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Hortobágyi Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Kiskunsági Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Körös-Maros Nemzeti Park',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Őrségi Nemzeti Park',
        ]);
    }
}
