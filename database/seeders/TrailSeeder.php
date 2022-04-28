<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrailSeeder extends Seeder
{
    public function run()
    {
        DB::table('trails')->insert([
            'place' => 'Bél-kő tanösvény',
            'length' => '3,6',
            'difficulty' =>'Közepes',
            'img'=> 'Belko.jpg',
            'nationalpark'=>'Bükki Nemzeti Park',
            'description'=> 'nem nagyon nehéz túra. szép',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d24284.80463371835!2d20.347341874627833!3d48.0438691698135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x4740866c2624ce1d%3A0x12c91d70507ce811!2zQsOpbGFww6F0ZmFsdmFpIENpc3p0ZXJjaSBBcMOhdHPDoWcgVGVtcGxvbWEsIELDqWxhcMOhdGZhbHZhLCBLxZFhbGphIGTFsWzFkSwgMzM0Ng!3m2!1d48.0492132!2d20.364544499999997!4m5!1s0x47408675f885f141%3A0x20c904aa64571147!2zQsOpbGvFkS1oZWd5IEtpbMOhdMOzIENzw7pjc3BvbnQgLyBCw6lsa8WRIFplbml0aCA4MTVtLCBCw6lsYXDDoXRmYWx2YSwgMzM0Ng!3m2!1d48.045654!2d20.3821379!5e1!3m2!1shu!2shu!4v1650988515086!5m2!1shu!2shu" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Folly Arborétum',
            'length' => '9,1',
            'difficulty' =>'Közepes',
            'img'=> 'FollyArboretum.png',
            'nationalpark'=>'Balaton-felvidéki Nemzeti Park',
            'description'=> 'Borkóstolók, vezetett túrák egy cédrus- és ciprusfákat felvonultató arborétumban, továbbá kilátás a Balatonra. Kisgyermekeknek megfelelő.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m42!1m12!1m3!1d21840.730974388967!2d17.53487114090809!3d46.82220176497723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m27!3e2!4m4!1s0x0%3A0x806b0604fa6cb0a5!3m2!1d46.811461!2d17.545547499999998!4m5!1s0x4769a97a02848725%3A0xf53deb0ae959d79e!2zQmFkYWNzb255dG9tYWosIEZvbGx5IEFyYm9yw6l0dW0sIEvDoXBvbG5hdsO2bGd5aSDDunQgMjUsIDgyNTc!3m2!1d46.8091486!2d17.5435519!4m4!1s0x4769a98a7ece98e3%3A0xfee3068abdcb96a2!3m2!1d46.8104349!2d17.5490247!4m4!1s0x4769a9e7d016a037%3A0x1666521fb8810a3f!3m2!1d46.819044!2d17.5415682!4m4!1s0x4769a9d25347e449%3A0x7b9b6186b04d5068!3m2!1d46.836517199999996!2d17.5499574!5e0!3m2!1shu!2shu!4v1651132926615!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Fekete-hegy kilátó pont',
            'length' => '8',
            'difficulty' =>'könnyű',
            'img'=> 'Eotvoskarolykilato.jpg',
            'nationalpark'=>'Balaton-felvidéki Nemzeti Park',
            'description'=> 'A túra a Kőtengertől indúl és a fekete-hegyi kilátópontig tart, érinti a Töttöskáli templomromot és az Eötvös Károly kilátót. Gyerekekkel ajánlott, a kilátás gyönyörű.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d8170.689676011038!2d17.567818749007873!3d46.89011989903706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m5!1s0x476909f6fb0027b7%3A0x1eea9baa96ca9754!2zU3plbnRiw6lra8OhbGxhLCBLxZF0ZW5nZXIgcGFya29sw7MsIFVubmFtZWQgUm9hZCwgODI4MQ!3m2!1d46.889302199999996!2d17.5536234!4m4!1s0x476908104b70e58b%3A0xf7cbc993066728ff!3m2!1d46.8900808!2d17.555626399999998!4m4!1s0x4769a7f7272a5c1b%3A0xe6828bbb9152f35e!3m2!1d46.8875019!2d17.5774281!4m4!1s0x476909a1db4e8793%3A0x8fa5b79e31f33ddf!3m2!1d46.891744499999994!2d17.5671484!4m4!1s0x4769a7f50f7cff9d%3A0x6140c2e40d8a8b16!3m2!1d46.8930149!2d17.5777066!4m4!1s0x4769a78cdd741f59%3A0x3d20330e82e649a2!3m2!1d46.894915499999996!2d17.5863118!4m4!1s0x4769a728f767df5b%3A0xeb7041a1d905337b!3m2!1d46.8957694!2d17.5811919!5e0!3m2!1shu!2shu!4v1651135143214!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Szent Balázs templomrom',
            'length' => '2,6',
            'difficulty' =>'könnyű',
            'img'=> 'Eotvoskarolykilato.jpg',
            'nationalpark'=>'Balaton-felvidéki Nemzeti Park',
            'description'=> 'Nem hosszú,könnyű séta délutáni programnak tökéletes.Érinti a Szent Balázs-hegyi levendulást és a Herendi templomromnál van vége. Érdemes Levendula virágzáskor menni.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d8170.689676011038!2d17.567818749007873!3d46.89011989903706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m5!1s0x476909f6fb0027b7%3A0x1eea9baa96ca9754!2zU3plbnRiw6lra8OhbGxhLCBLxZF0ZW5nZXIgcGFya29sw7MsIFVubmFtZWQgUm9hZCwgODI4MQ!3m2!1d46.889302199999996!2d17.5536234!4m4!1s0x476908104b70e58b%3A0xf7cbc993066728ff!3m2!1d46.8900808!2d17.555626399999998!4m4!1s0x4769a7f7272a5c1b%3A0xe6828bbb9152f35e!3m2!1d46.8875019!2d17.5774281!4m4!1s0x476909a1db4e8793%3A0x8fa5b79e31f33ddf!3m2!1d46.891744499999994!2d17.5671484!4m4!1s0x4769a7f50f7cff9d%3A0x6140c2e40d8a8b16!3m2!1d46.8930149!2d17.5777066!4m4!1s0x4769a78cdd741f59%3A0x3d20330e82e649a2!3m2!1d46.894915499999996!2d17.5863118!4m4!1s0x4769a728f767df5b%3A0xeb7041a1d905337b!3m2!1d46.8957694!2d17.5811919!5e0!3m2!1shu!2shu!4v1651135143214!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
    }
}
