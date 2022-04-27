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
            'phone'=>'+36 48 503 000',
            'email'=>'informacio@anpi.hu',
            'webpage'=>'https://anp.hu/',
            'opening'=>'január 01. – április 30. és szeptember 01. – december 31. között mindennap: 8.00 – 16.30
május 01. és augusztus 31. között mindennap: 8.00 – 17.00',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Balaton-felvidéki Nemzeti Park',
            'phone'=>' +3687555260',
            'email'=>'bfnp@bfnp.hu',
            'webpage'=>'https://www.bfnp.hu/',
            'opening'=>'-',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Bükki Nemzeti Park',
            'phone'=>'+36 30 861-3808',
            'email'=>'titkarsag@bnpi.hu',
            'webpage'=>'https://www.bnpi.hu/',
            'opening'=>'hétfő-csütörtök: 7.30-16.30 péntek: 7.30-13.30',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Duna-Dráva Nemzeti Park',
            'phone'=>'(06 72) 517 200',
            'email'=>'-',
            'webpage'=>'https://www.ddnp.hu/',
            'opening'=>'-',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Duna-Ipoly Nemzeti Park',
            'phone'=>'36 1/200 1168',
            'email'=>'dinpi@dinpi.hu',
            'webpage'=>'https://www.dunaipoly.hu/hu/',
            'opening'=>'-',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Fertő-Hanság Nemzeti Park',
            'phone'=>'+36 30 166 09 50',
            'email'=>'info@fhnp.hu',
            'webpage'=>'https://www.ferto-hansag.hu/',
            'opening'=>'HÉTFŐ-CSÜTÖRTÖK: 8:00 -16:30 PÉNTEK: 8:00-14:00',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Hortobágyi Nemzeti Park',
            'phone'=>'(06 52) 529-920',
            'email'=>'hnp@hnp.hu',
            'webpage'=>'https://www.hnp.hu/hu',
            'opening'=>'Csütörtök 8.00-12.00, 13.00-16.00',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Kiskunsági Nemzeti Park',
            'phone'=>'76/482-611',
            'email'=>' titkarsag@knp.hu ',
            'webpage'=>'https://www.knp.hu/hu',
            'opening'=>'-',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Körös-Maros Nemzeti Park',
            'phone'=>'+36 66 313 855',
            'email'=>' kmnp@kmnp.hu',
            'webpage'=>'https://www.kmnp.hu/hu/',
            'opening'=>'Hétfő-csütörtök: 7.30-16.30 Péntek: 7.30-13.30',
        ]);
        DB::table('nationalparks')->insert([
            'name' => 'Őrségi Nemzeti Park',
            'phone'=>'+36/94 548-036',
            'email'=>'onpi@onpi.hu',
            'webpage'=>'https://orseginemzetipark.hu/',
            'opening'=>'-',
        ]);
    }
}
