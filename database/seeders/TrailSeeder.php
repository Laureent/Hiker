<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trails')->insert([
            'place' => 'Bél-kő tanösvény',
            'length' => '3,6',
            'difficulty' =>'Közepes',
            'img'=> '',
            'nationalpark'=>'Bükki Nemzeti Park',
            'description'=> 'nem nagyon nehéz túra. szép',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d24284.80463371835!2d20.347341874627833!3d48.0438691698135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x4740866c2624ce1d%3A0x12c91d70507ce811!2zQsOpbGFww6F0ZmFsdmFpIENpc3p0ZXJjaSBBcMOhdHPDoWcgVGVtcGxvbWEsIELDqWxhcMOhdGZhbHZhLCBLxZFhbGphIGTFsWzFkSwgMzM0Ng!3m2!1d48.0492132!2d20.364544499999997!4m5!1s0x47408675f885f141%3A0x20c904aa64571147!2zQsOpbGvFkS1oZWd5IEtpbMOhdMOzIENzw7pjc3BvbnQgLyBCw6lsa8WRIFplbml0aCA4MTVtLCBCw6lsYXDDoXRmYWx2YSwgMzM0Ng!3m2!1d48.045654!2d20.3821379!5e1!3m2!1shu!2shu!4v1650988515086!5m2!1shu!2shu" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
    }
}
