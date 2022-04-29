<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrailSeeder extends Seeder
{
    public function run()
    {
        /**
        Bükki Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Bél-kő tanösvény',
            'length' => '3,6',
            'difficulty' =>'Nehéz',
            'img'=> 'Belko.jpg',
            'nationalpark'=>'Bükki Nemzeti Park',
            'description'=> 'Érdemes jó fizikummal rendelkezni, mivel nagyon meredekek az emelkedők és nagy a szintkülönbség, gyerekeknek kisgyerekeknek nehéz lehet.Szélcsendes, meleg napon érdemes látogatni, mert a csúcson erősek a széllőkések.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d24284.80463371835!2d20.347341874627833!3d48.0438691698135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x4740866c2624ce1d%3A0x12c91d70507ce811!2zQsOpbGFww6F0ZmFsdmFpIENpc3p0ZXJjaSBBcMOhdHPDoWcgVGVtcGxvbWEsIELDqWxhcMOhdGZhbHZhLCBLxZFhbGphIGTFsWzFkSwgMzM0Ng!3m2!1d48.0492132!2d20.364544499999997!4m5!1s0x47408675f885f141%3A0x20c904aa64571147!2zQsOpbGvFkS1oZWd5IEtpbMOhdMOzIENzw7pjc3BvbnQgLyBCw6lsa8WRIFplbml0aCA4MTVtLCBCw6lsYXDDoXRmYWx2YSwgMzM0Ng!3m2!1d48.045654!2d20.3821379!5e1!3m2!1shu!2shu!4v1650988515086!5m2!1shu!2shu" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Három Kő kilátó',
            'length' => '4,7',
            'difficulty' =>'Könnyű',
            'img'=> 'HaromKokilato.png',
            'nationalpark'=>'Bükki Nemzeti Park',
            'description'=> 'Gyönyörű kilátás nyílik a Bükk déli vonulataira. Jó időben sűrűn látogatott, könnyen megközelíthető a Zsidó-rét és Keskeny-rét felől. A Bánya-hegyi elágazástól vezető zöld jelzés is ide vezet. Továbbhaladva a Tar-kőhöz lehet érkezni.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m32!1m12!1m3!1d10665.910956394468!2d20.473554794768763!3d48.062420808123996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m17!3e2!4m4!1s0x0%3A0xa737b6006e88fdb1!3m2!1d48.0562076!2d20.4615546!4m5!1s0x474084ee87e998eb%3A0x17925a37df1945f!2zTmFneXZpc255w7MsIEjDoXJvbSBLxZEgS2lsw6F0w7MsIDMzNDk!3m2!1d48.059579!2d20.4737242!4m4!1s0x474085c35823f157%3A0x1bbbf6acc0a0b304!3m2!1d48.0683157!2d20.4903685!5e0!3m2!1shu!2shu!4v1651178937428!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Ódor vár',
            'length' => '4,7',
            'difficulty' =>'Könnyű',
            'img'=> 'odorvar.png',
            'nationalpark'=>'Bükki Nemzeti Park',
            'description'=> 'Gyönyörű kilátás nyílik déli irányba, Cserépfalu felé. Piros és kék jelzésű turistautakon közelíthető meg, illetve kerékpárút is vezet erre. A vár alatt pihenőhely és egy bivakszállás is található.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5340.750016918728!2d20.49979547862585!3d47.98713944763918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d47.9897266!2d20.4970759!4m5!1s0x4740907729d32235%3A0xf720747cd0ce39f3!2zQ3NlcsOpcGZhbHUsIMOTZG9yIHbDoXIsIEjDs3ItdsO2Z3llLCAzNDEz!3m2!1d47.9842525!2d20.5113298!5e0!3m2!1shu!2shu!4v1651179558436!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Füzérkő',
            'length' => '6,9',
            'difficulty' =>'Nehéz',
            'img'=> 'Fuzerko.png',
            'nationalpark'=>'Bükki Nemzeti Park',
            'description'=> 'Madártávlatból lehet látni a hegyeket, de ehhez fel kell fedezni azt a szikát ami benyúlik a lankás hegyoldal fölé mivel nem vezet ide jelzett út, ebből adódóan mindenki saját felelősségére menjen ki a sziklára. Gyerekekkel veszélyes!',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d21356.97075987997!2d20.487016489515515!3d48.001704484794125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x0%3A0xdeac65f5847c9229!3m2!1d47.989515999999995!2d20.496244!4m5!1s0x47409b610fa80bbb%3A0x6c01b22427848076!2zQ3NlcsOpcGZhbHUsIEbDvHrDqXJrxZEsIDI1MTEsIDM0MTM!3m2!1d48.003876999999996!2d20.52191!5e0!3m2!1shu!2shu!4v1651179857093!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Felhagyott kőfejtő',
            'length' => '1',
            'difficulty' =>'Könnyű',
            'img'=> 'Kofejto.png',
            'nationalpark'=>'Bükki Nemzeti Park',
            'description'=> 'Kellemes délutáni séta lehet a családnak.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m31!1m12!1m3!1d5343.342316934561!2d20.52633102862315!3d47.96208270111693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m16!3e2!4m4!1s0x4740914a733a8d03%3A0x6786fb13fbcdb794!3m2!1d47.966925599999996!2d20.5295581!4m5!1s0x474091ccd1f4b207%3A0x691a3e7c688e3d58!2zQ3NlcsOpcGZhbHUsIEZlbGhhZ3lvdHQga8WRZmVqdMWRLCBDc2Vyw6lwZmFsdSwgMjUxMSwgMzQxMw!3m2!1d47.962917!2d20.530533!4m3!3m2!1d47.958478199999995!2d20.531872999999997!5e0!3m2!1shu!2shu!4v1651180449586!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);


        /**
        Balaton-felvidéki Nemzeti Park
         */
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
            'difficulty' =>'Nehéz',
            'img'=> 'Eotvoskarolykilato.jpg',
            'nationalpark'=>'Balaton-felvidéki Nemzeti Park',
            'description'=> 'A túra a Kőtengertől indúl és a fekete-hegyi kilátópontig tart, érinti a Töttöskáli templomromot és az Eötvös Károly kilátót. Gyerekekkel ajánlott, a kilátás gyönyörű.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d8170.689676011038!2d17.567818749007873!3d46.89011989903706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m5!1s0x476909f6fb0027b7%3A0x1eea9baa96ca9754!2zU3plbnRiw6lra8OhbGxhLCBLxZF0ZW5nZXIgcGFya29sw7MsIFVubmFtZWQgUm9hZCwgODI4MQ!3m2!1d46.889302199999996!2d17.5536234!4m4!1s0x476908104b70e58b%3A0xf7cbc993066728ff!3m2!1d46.8900808!2d17.555626399999998!4m4!1s0x4769a7f7272a5c1b%3A0xe6828bbb9152f35e!3m2!1d46.8875019!2d17.5774281!4m4!1s0x476909a1db4e8793%3A0x8fa5b79e31f33ddf!3m2!1d46.891744499999994!2d17.5671484!4m4!1s0x4769a7f50f7cff9d%3A0x6140c2e40d8a8b16!3m2!1d46.8930149!2d17.5777066!4m4!1s0x4769a78cdd741f59%3A0x3d20330e82e649a2!3m2!1d46.894915499999996!2d17.5863118!4m4!1s0x4769a728f767df5b%3A0xeb7041a1d905337b!3m2!1d46.8957694!2d17.5811919!5e0!3m2!1shu!2shu!4v1651135143214!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Szent Balázs templomrom',
            'length' => '2,6',
            'difficulty' =>'könnyű',
            'img'=> 'Szent Balázs templomrom.jpg',
            'nationalpark'=>'Balaton-felvidéki Nemzeti Park',
            'description'=> 'Nem hosszú,könnyű séta délutáni programnak tökéletes.Érinti a Szent Balázs-hegyi levendulást és a Herendi templomromnál van vége. Érdemes Levendula virágzáskor menni.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d8170.689676011038!2d17.567818749007873!3d46.89011989903706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m5!1s0x476909f6fb0027b7%3A0x1eea9baa96ca9754!2zU3plbnRiw6lra8OhbGxhLCBLxZF0ZW5nZXIgcGFya29sw7MsIFVubmFtZWQgUm9hZCwgODI4MQ!3m2!1d46.889302199999996!2d17.5536234!4m4!1s0x476908104b70e58b%3A0xf7cbc993066728ff!3m2!1d46.8900808!2d17.555626399999998!4m4!1s0x4769a7f7272a5c1b%3A0xe6828bbb9152f35e!3m2!1d46.8875019!2d17.5774281!4m4!1s0x476909a1db4e8793%3A0x8fa5b79e31f33ddf!3m2!1d46.891744499999994!2d17.5671484!4m4!1s0x4769a7f50f7cff9d%3A0x6140c2e40d8a8b16!3m2!1d46.8930149!2d17.5777066!4m4!1s0x4769a78cdd741f59%3A0x3d20330e82e649a2!3m2!1d46.894915499999996!2d17.5863118!4m4!1s0x4769a728f767df5b%3A0xeb7041a1d905337b!3m2!1d46.8957694!2d17.5811919!5e0!3m2!1shu!2shu!4v1651135143214!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);


        /**
        Duna-Ipoly Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Rám-szakadék',
            'length' => '3,6',
            'difficulty' =>'könnyű',
            'img'=> 'Ram-szakadek.png',
            'nationalpark'=>'Duna-Ipoly Nemzeti Park',
            'description'=> 'Népszerű, sziklás kanyon vízesésekkel. Korlátokkal és létrákkal ellátott ösvénye egy forrás mellett halad el. Kisgyermekekkel is ajánlott vadregényes táj. A Túra nagyon szép és izgalmas számtalan érdekes növénnyel és népes élővilággal tarkított ösvény.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m37!1m12!1m3!1d5366.782752864457!2d18.886525428600578!3d47.73506053256759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m22!3e2!4m4!1s0x476a7d230b2c6a25%3A0x4da9972c866062b2!3m2!1d47.738721!2d18.8874602!4m5!1s0x476a7de41bd80b1f%3A0x5e316c80f41a8182!2sPilisszentkereszt%2C%20Luk%C3%A1cs-%C3%A1rok%2C%202099!3m2!1d47.737116!2d18.8860506!4m4!1s0x476a7db53111b841%3A0xf69663433340b561!3m2!1d47.738018499999995!2d18.8810231!4m4!1s0x476a7da965d4fc89%3A0x6106a2dd5cd9f7ea!3m2!1d47.737342299999995!2d18.8933185!5e0!3m2!1shu!2shu!4v1651176966150!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Vadálló kövek',
            'length' => '2,4',
            'difficulty' =>'Közepes',
            'img'=> 'Vadallokovek.png',
            'nationalpark'=>'Duna-Ipoly Nemzeti Park',
            'description'=> 'Nem véletlen az elnevezése, mert bizony egy szarvasnak, őznek, vaddisznónak itt esze ágában sem jutna sem fel sem lemenni. Mindezek mellett legalább egyszer ki kell próbálni. Ha eső után megyünk akkor dagonya, ha száraz időben akkor a portól csúszik de mindkét esetben biztos vagyok benne, hogy az adrenalin szint emelkedni fog. Mindkét irányból járható turista út de némi tapasztalat,edzettség szükséges hozzá',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d10731.585342567756!2d18.89798599464127!3d47.74466604605007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x0%3A0xd7371016be78a0e5!3m2!1d47.752056599999996!2d18.903861799999998!4m5!1s0x476a7c4ed735a781%3A0x60aa99965e001f94!2zRMO2bcO2cywgVmFkw6FsbMOzLWvDtnZlaywgTWFjc2vDoXNvay1OeWlsYXNvayBkxbFsxZEsIDIwMjc!3m2!1d47.739821199999994!2d18.912288!5e0!3m2!1shu!2shu!4v1651177292033!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Anna-völgyi vízesés',
            'length' => '10,1',
            'difficulty' =>'Nehéz',
            'img'=> 'Annavolgyivizeses.png',
            'nationalpark'=>'Duna-Ipoly Nemzeti Park',
            'description'=> 'Nagyon szép a környék és az erdő, könnyen megközelíthető, nincs tele szeméttel. A vízesés akkor lehet igazán látványos, amikor nagy esőzések után több a víz.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m47!1m12!1m3!1d20016.331243450786!2d18.986188814068793!3d47.69419424024577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m32!3e2!4m4!1s0x476a7f4c6712028d%3A0xbbc3729b0ef0b4ae!3m2!1d47.6916327!2d19.015716299999998!4m5!1s0x476a7f41e409d297%3A0xd0e13901f93209c1!2zU3plbnRlbmRyZSwgQW5uYS12w7ZsZ3lpIHbDrXplc8OpcywgMjAwMA!3m2!1d47.6904514!2d19.016171399999998!4m4!1s0x476a7f338ea4a057%3A0x5535ce4c75e1cda7!3m2!1d47.6960499!2d18.997283799999998!4m4!1s0x476a7f2c5419cf2f%3A0x3afe0153a1bd3463!3m2!1d47.6958333!2d18.990277799999998!4m4!1s0x476a79f2b3209fb5%3A0x7378b6c9fc192f5c!3m2!1d47.693024099999995!2d18.983484999999998!4m4!1s0x476a791b321bb9af%3A0xba481152dfac7a98!3m2!1d47.690920999999996!2d18.979855099999998!5e0!3m2!1shu!2shu!4v1651177847112!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);


        /**
        Aggteleki Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Jósvafői Mesterséges Tengerszem',
            'length' => '1',
            'difficulty' =>'Könnyű',
            'img'=> 'mestersegestengerszem.png',
            'nationalpark'=>'Aggteleki Nemzeti Park',
            'description'=> 'A parkolóból 10 perc alatt könnyen megközelíthető egy kis sétával.A barlang után jó levezető kirándulás a patak és a tó körbesétálása.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21154.65937655094!2d20.532341!3d48.4885173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf808fc2ddfe178ce!2sJ%C3%B3svaf%C5%91i%20Mesters%C3%A9ges%20Tengerszem!5e0!3m2!1shu!2shu!4v1651181009661!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Kossuth-barlang',
            'length' => '0.5',
            'difficulty' =>'Könnyű',
            'img'=> 'Kossuth-barlang.png',
            'nationalpark'=>'Aggteleki Nemzeti Park',
            'description'=> 'Egy rövid de izgalmas overallos barlangtúrát lehet tenni a barlangban. Ahol fix lepéseken és kiépített drótkötél pályán lehet megközelíteni a barlang végpontján az időjárás függvényében akár derékig gázolva a patak vizében.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d2644.4648780573884!2d20.548868765890543!3d48.48597708480948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x473f9f8bb368e58d%3A0xd3a4781e2c451a4b!3m2!1d48.4844327!2d20.5509894!4m5!1s0x473fa151e6a4882f%3A0x8e6819490d1e7652!2zSsOzc3ZhZsWRLCBLb3NzdXRoLWJhcmxhbmcsIFLDoWvDs2N6aSBGZXJlbmMgdS4gMjMsIDM3NTg!3m2!1d48.487740099999996!2d20.550493!5e0!3m2!1shu!2shu!4v1651181473210!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => ' Szádvár - Fellegvár ',
            'length' => '5.1',
            'difficulty' =>'Közepes',
            'img'=> 'Szadvar.png',
            'nationalpark'=>'Aggteleki Nemzeti Park',
            'description'=> 'A túraútvonal tiszta, átlag tempóban kb 2-3 órát vesz igénybe az út fel a várig és vissza. A várból gyönyörű kilátás tárul a szemünk elé.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m39!1m12!1m3!1d5282.923313164367!2d20.655173778681828!3d48.543547820073954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m24!3e2!4m4!1s0x0%3A0xfd1dc409b6b5a5c7!3m2!1d48.539424!2d20.666614!4m5!1s0x473f0ba0844f5ae7%3A0x81afe7717d956887!2zU3rDtmdsaWdldCwgU3rDoWR2w6FyIC0gRmVsbGVndsOhciwgU3rDoWR2w6FyIHRhbsO2c3bDqW55IDM3NjIsIDM3NjI!3m2!1d48.544556799999995!2d20.6645449!4m3!3m2!1d48.541196199999995!2d20.6577438!4m3!3m2!1d48.5442992!2d20.6642014!4m3!3m2!1d48.5464711!2d20.651181299999998!5e0!3m2!1shu!2shu!4v1651181692675!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);


        /**
        Duna-Dráva Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => ' Bátai holt-Dunai kilátó ',
            'length' => '3.7',
            'difficulty' =>'Könnyű',
            'img'=> 'bataiholtdunaikilato.jpg',
            'nationalpark'=>'Duna-Dráva Nemzeti Park',
            'description'=> 'Hosszabb sétának megfelelő kis túra, szép kilátással gyerekekkel optimális.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d22114.725061367793!2d18.808413836568814!3d46.14396274735544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x4742df561e46c3c7%3A0x5e94726c1c427442!3m2!1d46.127131999999996!2d18.817626999999998!4m5!1s0x4742de5d167ea6e7%3A0x4de60e3ed7bc98c0!2zQsOhdGEsIELDoXRhaSBob2x0LUR1bmFpIGtpbMOhdMOzLCA3MTQ5!3m2!1d46.160694!2d18.8309732!5e0!3m2!1shu!2shu!4v1651182301867!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => ' Pandúr-sziget ',
            'length' => '8',
            'difficulty' =>'Közepes',
            'img'=> 'pandursziget.png',
            'nationalpark'=>'Duna-Dráva Nemzeti Park',
            'description'=> 'Biciklivel könnyedén el lehet lenni a szigeten egy napot. A kijelőlt útról is érdemes letérni a gazdag élővilág megtekintése érdekében, de figyelembe kell venni a vadisznók felbukkanását és a szúnyogokat is.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m42!1m12!1m3!1d22106.386719501497!2d18.886876936601126!3d46.164716586183225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m27!3e2!4m3!3m2!1d46.147560999999996!2d18.8559926!4m5!1s0x4742dfdce3e833c7%3A0x7a66d6b1d169c38a!2sBaja%2C%20Pand%C3%BAr-sziget%2C%206500!3m2!1d46.156517099999995!2d18.8740453!4m3!3m2!1d46.1543539!2d18.854430999999998!4m3!3m2!1d46.1634892!2d18.8721872!4m3!3m2!1d46.1579817!2d18.8838512!4m3!3m2!1d46.156696!2d18.874118199999998!5e0!3m2!1shu!2shu!4v1651182549514!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Pörbölyi Titán (Nagyfa)',
            'length' => '2,8',
            'difficulty' =>'Könnyű',
            'img'=> 'Porbolytitan.png',
            'nationalpark'=>'Duna-Dráva Nemzeti Park',
            'description'=> 'az út végig szépen ki volt táblázva. Egyszerűen oda lehet találni a Nagy Fához, maga az út végig lapos, így kisgyermekek, idősek is könnyedén végigjárhatják ezt a túraútvonalat!',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m30!1m12!1m3!1d11049.439397438695!2d18.88525484402627!3d46.183397372167256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m15!3e2!4m3!3m2!1d46.1845946!2d18.9079347!4m5!1s0x4742dfd0f39bb457%3A0xdb0bcb35cb0e28dd!2zQmFqYSwgUMO2cmLDtmx5aSBUaXTDoW4gKE5hZ3lmYSksIDY1MDA!3m2!1d46.176244399999995!2d18.8801014!4m3!3m2!1d46.1880106!2d18.886650799999998!5e0!3m2!1shu!2shu!4v1651182979470!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);

        /**
        Fertő-Hanság Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Vasfüggöny Emlékhely',
            'length' => '2,5',
            'difficulty' =>'Közepes',
            'img'=> 'vasfuggony.png',
            'nationalpark'=>'Fertő-Hanság Nemzeti Park',
            'description'=> 'Különösen azok számára lehet érdekes, akik még nem éltek akkor, amikor a különféle határvédelmi technikai eszközök és rendszerek a napi élet részei voltak. Tanulságos!Az egykori műszaki zár nyomvonalán áll és ezért egyedülálló az emlékhely. Ezért kicsit "eldugott", ezért kell a templomtól 2,5 km-t megtenni.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d5376.665795398488!2d16.786540928590835!3d47.63909744582939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e2!4m3!3m2!1d47.641590699999995!2d16.7889066!4m5!1s0x476c1a3e04ce7617%3A0xb559713733cfcea7!2zSGVneWvFkSwgVmFzZsO8Z2fDtm55IEVtbMOpa2hlbHksIDk0Mzc!3m2!1d47.6428185!2d16.787397!4m3!3m2!1d47.638785299999995!2d16.7819607!4m3!3m2!1d47.640903099999996!2d16.7974767!5e0!3m2!1shu!2shu!4v1651183623839!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Gloriette kilátó',
            'length' => '1',
            'difficulty' =>'Könnyű',
            'img'=> 'Gloriettekilato.png',
            'nationalpark'=>'Fertő-Hanság Nemzeti Park',
            'description'=> 'Kissebb sétának megfelelő "túra", de nagyon szép a kilátás, ha arrafelé jár az ember nem éri meg kihagyni.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m31!1m12!1m3!1d1344.2455467925192!2d16.697203108328257!3d47.6360229021716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m16!3e2!4m3!3m2!1d47.6356567!2d16.6987071!4m5!1s0x476c19fcf7031f4f%3A0xf6b5109929837988!2zRmVydMWRYm96LCBHbG9yaWV0dGUga2lsw6F0w7MsIDk0OTM!3m2!1d47.636008499999996!2d16.6960723!4m4!1s0x476c194ac9cfede1%3A0xef857b96748f37db!3m2!1d47.6369371!2d16.6960795!5e0!3m2!1shu!2shu!4v1651184006656!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Mexikó puszta',
            'length' => '2',
            'difficulty' =>'Közepes',
            'img'=> 'Mexikopuszta.png',
            'nationalpark'=>'Fertő-Hanság Nemzeti Park',
            'description'=> 'Változatos élővilággal rendelkező pusztaság.Egyszer mindenféleképpen ajánlott helyszín egy kiadós sétára.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d10743.818201166254!2d16.83149734461754!3d47.68530261243202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x476c11395f70c085%3A0x7b88f73f7bf0253d!3m2!1d47.6921219!2d16.840031!4m5!1s0x476c11e3f6b34159%3A0x85542ad687c798d9!2sSarr%C3%B3d%2C%20Vogelbeobachtungsturm%2C%209435!3m2!1d47.678126!2d16.8420179!5e0!3m2!1shu!2shu!4v1651184800079!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        /**
        Hortobágyi Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Kilátó terasz',
            'length' => '4,8',
            'difficulty' =>'Könnyű',
            'img'=> 'Kilatoterasz.png',
            'nationalpark'=>'Hortobágyi Nemzeti Park',
            'description'=> 'A teraszról kitűnő kilátás nyílik a végtelen alföldre érdemes ellátogatni, hatalmas séta és madárfigyelésre is tökéletes helyszín.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d42996.479705882004!2d21.305063127449984!3d47.659557082655354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d47.6778195!2d21.3279566!4m5!1s0x474747f8115bef89%3A0x7ee1f891fb569aba!2zS2lsw6F0w7MgdGVyYXN6LCBIYWpkw7piw7ZzesO2cm3DqW55LCBVbm5hbWVkIFJvYWQsIDQyMjA!3m2!1d47.701277999999995!2d21.3540966!5e0!3m2!1shu!2shu!4v1651185245421!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Hortobágyi vadaspark',
            'length' => '10,8',
            'difficulty' =>'Nehéz',
            'img'=> 'Hortobagyi.png',
            'nationalpark'=>'Hortobágyi Nemzeti Park',
            'description'=> 'A túra érinti a kilenclyukúhidat és a vadasparkot, gyermekekkel kifejezetten ajánlott tenni egy sétát a vadasparkban, biztosan nagyn fogják élvezni.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m37!1m12!1m3!1d21536.596332141264!2d21.129483438815377!3d47.56633807433543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m22!3e2!4m4!1s0x0%3A0x23d193ecacf3fec3!3m2!1d47.573384399999995!2d21.143960999999997!4m5!1s0x47473a8918a7e173%3A0xbc7d8d41508b2937!2zSG9ydG9iw6FneSwgSG9ydG9iw6FneWkgdGFua2NzYXRhIGVtbMOpa23FsSwgNDA3MQ!3m2!1d47.581382399999995!2d21.1586026!4m4!1s0x47473ab30e0da3e3%3A0x4642cdaf975481c4!3m2!1d47.5505767!2d21.1355263!4m4!1s0x47473a8404cb2f0f%3A0x915ca1b6d82aebd5!3m2!1d47.5817705!2d21.1477744!5e0!3m2!1shu!2shu!4v1651185827118!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Pentezug állattartó telep',
            'length' => '7,1',
            'difficulty' =>'Közepes',
            'img'=> 'Pentezug.png',
            'nationalpark'=>'Hortobágyi Nemzeti Park',
            'description'=> 'Látogatásához meg kell venni a jegyet a Hortobágyi Nemzeti Park Látogatóközpontjától, és busszal el lehet utána jutni a gazdaságoz. A busz a pusztaságban megy ahol meg lehet tekinteni a hely élővilág azonrészét mely szabadon mozoghat. Fiatal családoknak ajánlott.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d43087.138393060945!2d21.08594552673739!3d47.54937680268236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d47.5479871!2d21.1310637!4m5!1s0x47472f8029357653%3A0xce86ab597ea98d75!2zSG9ydG9iw6FneSwgUGVudGV6dWcgw6FsbGF0dGFydMOzIHRlbGVwLCA0MDcx!3m2!1d47.5173746!2d21.0858965!5e0!3m2!1shu!2shu!4v1651216876330!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
    ]);
        DB::table('trails')->insert([
            'place' => 'Szálkahalmi tanösvény',
            'length' => '2,7',
            'difficulty' =>'Könnyű',
            'img'=> 'szalkahalmitanosveny.png',
            'nationalpark'=>'Hortobágyi Nemzeti Park',
            'description'=> 'A kilátóból megtekinthetjük a végtelen alföldet és a tanösvényen haladva a kihelyezett táblákról tájékozódhatunk a helyi állat és növény világról.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m32!1m12!1m3!1d21540.44315006751!2d21.276916688800434!3d47.55698137946867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m17!3e2!4m3!3m2!1d47.570862999999996!2d21.2460003!4m3!3m2!1d47.5693364!2d21.2517258!4m3!3m2!1d47.571883899999996!2d21.2580609!4m3!3m2!1d47.5746806!2d21.243358!5e0!3m2!1shu!2shu!4v1651217170451!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        /**
        Kiskunsági Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Ányás',
            'length' => '6,5',
            'difficulty' =>'Közepes',
            'img'=> 'Anyas.png',
            'nationalpark'=>'Kiskunsági Nemzeti Park',
            'description'=> ' 3-4 km-t kell földúton menni odáig. Többnyire sima az út, viszonylag nagy forgalmú. A fürdőruhások partja nem túl nagy, gyorsan mélyül, vízmélység kiszámíthatatlan. Aki nem tud úszni, ne ezt válassza. Gyönyörű, széles itt a Tisza, az öböl is különleges.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d21965.09215093931!2d20.150367537149243!3d46.51530494697239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x474475cabc1f9ca5%3A0x8bc8bfded8718da2!3m2!1d46.532991599999995!2d20.1638697!4m5!1s0x474476ba4ad311b9%3A0x1247b9224d9d4ea3!2zTWluZHN6ZW50LCDDgW55w6FzLCA2NjMw!3m2!1d46.4972867!2d20.1797725!5e0!3m2!1shu!2shu!4v1651218029022!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
        ]);
        DB::table('trails')->insert([
            'place' => 'Tisza-holtág, Mártely',
            'length' => '3,2',
            'difficulty' =>'Könnyű',
            'img'=> 'Martely.png',
            'nationalpark'=>'Kiskunsági Nemzeti Park',
            'description'=> 'Vadregényes tiszai tájakon lehet sétálni amit a gyerekek biztosan élvezni fognak és a kilátóból szemünk elé tárul a Tisza. Gyönyörű!',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m42!1m12!1m3!1d5496.393826719807!2d20.214658728475197!3d46.46460745656194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m27!3e2!4m4!1s0x474470e24796fd03%3A0x2ae825af6eed7ac5!3m2!1d46.4632048!2d20.2118571!4m5!1s0x4744719a73f957dd%3A0x3d7e177d09fec7e7!2zSMOzZG1lesWRdsOhc8OhcmhlbHksIFRhbsO2c3bDqW55IGtpbMOhdMOzLCA2ODAw!3m2!1d46.4592719!2d20.2080417!4m4!1s0x47447105e028ee6f%3A0x67cf00022918ce70!3m2!1d46.4705173!2d20.230030499999998!4m4!1s0x474471441b939d01%3A0x93e50ce7613d1484!3m2!1d46.470790099999995!2d20.227152!4m4!1s0x47447105b32bff09%3A0x1dc9987f0f7021fb!3m2!1d46.469146699999996!2d20.227722099999998!5e0!3m2!1shu!2shu!4v1651218248286!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => ' Régi hajó rakodó ',
            'length' => '5,9',
            'difficulty' =>'Nehéz',
            'img'=> 'Rakodo.png',
            'nationalpark'=>'Kiskunsági Nemzeti Park',
            'description'=> 'Két Útvonal is vezet a rakodóhoz, a Tisza partján sétálva a különleges állatvilágot is megfigyelhetjük, a Rakodóba felmenni szabad, de csak óvatosan!',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d11003.38862839146!2d20.199112944115154!3d46.41208596037132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m5!1s0x47447b3006e90369%3A0xe1c25ab90c3af522!2zUsOpZ2kgaGFqw7MgcmFrb2TDsywgSMOzZG1lesWRdsOhc8OhcmhlbHksIFVubmFtZWQgUm9hZCwgNjgwMA!3m2!1d46.400138399999996!2d20.205601899999998!4m3!3m2!1d46.4187382!2d20.212847399999998!5e0!3m2!1shu!2shu!4v1651218975276!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        /**
        Körös-Maros Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Biharugra madárles',
            'length' => '1,6',
            'difficulty' =>'Könnyű',
            'img'=> 'Biharugra.png',
            'nationalpark'=>'Körös-Maros Nemzeti Park',
            'description'=> 'Ingyenesen meglátogatható, nagyon jó állapotú, magas madárles. Kiváló körpanoráma nyílik a nádassal határolt tóra, ahol rengeteg vízimadár látható a megfelelő időszakban.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d10890.387601022574!2d21.611998544333606!3d46.96960950882151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d46.9700768!2d21.6277747!4m5!1s0x47464362049679a7%3A0xf4f669bfb29bc5af!2sBiharugra%2C%20Biharugra%20mad%C3%A1rles%2C%205538!3m2!1d46.9664216!2d21.6420453!5e0!3m2!1shu!2shu!4v1651219359830!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Csomorkányi Templomrom',
            'length' => '1,7',
            'difficulty' =>'Könnyű',
            'img'=> 'Csomorkanyitemplomrom.png',
            'nationalpark'=>'Körös-Maros Nemzeti Park',
            'description'=> 'Nem túl nagy rom, de van kilátó ahonnan láthatunk a rétenek madarakat. Érdemes kivárni a naplementét, mert nagyon szép vörösre tudja színezni a romokat.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d12154.245205155783!2d20.51622263364747!3d46.439910896382834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!3e2!4m4!1s0x4744421a5789969b%3A0x739bcd889910e825!3m2!1d46.4384892!2d20.5278366!4m3!3m2!1d46.4392638!2d20.505639799999997!5e0!3m2!1shu!2shu!4v1651219917490!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'geodéziai mérőtorony',
            'length' => '2,7',
            'difficulty' =>'Könnyű',
            'img'=> 'Geodeziaimerotorny.png',
            'nationalpark'=>'Körös-Maros Nemzeti Park',
            'description'=> 'A toronyba bemenni szigorúan tilos és életveszélyes! A torony alkalmas cserébe nagyon szép drón felvételek készítésére.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d11006.96742470637!2d20.663513244108245!3d46.39434481517298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d46.391747699999996!2d20.6860797!4m5!1s0x4744456000175353%3A0xc4edfaeccb11b909!2zVMOzdGtvbWzDs3MsIEplbGRvbWIsIGdlb2TDqXppYWkgbcOpcsWRdG9yb255LCA1OTQw!3m2!1d46.395897999999995!2d20.6581536!5e0!3m2!1shu!2shu!4v1651220480228!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        /**
        Őrségi Nemzeti Park
         */
        DB::table('trails')->insert([
            'place' => 'Szőcei tőzegmohás láprét',
            'length' => '0.5',
            'difficulty' =>'Közepes',
            'img'=> 'Tozegmohaslapret.png',
            'nationalpark'=>'Őrségi Nemzeti Park',
            'description'=> 'Érdekes, sok új információt meg lehet tudni a tanösvényt szegélyező táblákról. A kiállítás a mérete ellenére érdekes és részlet-gazdag.A séta kisgyermekkel is ideális',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d1363.0848000686694!2d16.57207745829155!3d46.8993828274909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x0%3A0x118a2bee347705fb!3m2!1d46.8988234!2d16.5726011!4m5!1s0x476ed5d702b542a5%3A0x6713908315156a9a!2zU3rFkWNlLCBTesWRY2VpIHTFkXplZ21vaMOhcyBsw6FwcsOpdCwgOTkzNQ!3m2!1d46.8998285!2d16.5723932!5e0!3m2!1shu!2shu!4v1651220917305!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'őrimagyarósdi várdomb',
            'length' => '1',
            'difficulty' =>'Könnyű',
            'img'=> 'Vardomb.png',
            'nationalpark'=>'Őrségi Nemzeti Park',
            'description'=> 'Nagyon érdekes rendezett és nyugodt hely. Ha az ember a környéken jár, érdemes megnézni.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d2726.8242649134904!2d16.53425856585071!3d46.8865056954347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e2!4m4!1s0x476ed7ecd059a127%3A0x1ca88c3c1543f310!3m2!1d46.8882681!2d16.5398526!4m5!1s0x476ed7fc5dff1121%3A0x60139d809969fb78!2zxZByaW1hZ3lhcsOzc2QsIMWRcmltYWd5YXLDs3NkaSB2w6FyZG9tYiwgOTkzMw!3m2!1d46.8857208!2d16.5352143!5e0!3m2!1shu!2shu!4v1651221381977!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
        DB::table('trails')->insert([
            'place' => 'Malomgát tanösvény',
            'length' => '3.1',
            'difficulty' =>'Közepes',
            'img'=> 'Malomgat.png',
            'nationalpark'=>'Őrségi Nemzeti Park',
            'description'=> 'A buszmegállótól az őrimagyarósdi földváron át vezet egy patak mellett a Vadása tóig.',
            'map'=> 'https://www.google.com/maps/embed?pb=!1m42!1m12!1m3!1d5454.110913362595!2d16.545956728516078!3d46.881957549782584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m27!3e2!4m4!1s0x0%3A0xfa3e303d9151843c!3m2!1d46.8768568!2d16.550381299999998!4m5!1s0x476ed7d88ef24e53%3A0x5a831554a32d907a!2zSGVneWjDoXRzemVudGpha2FiLCBNYWxvbWfDoXQgdGFuw7ZzdsOpbnksIFZhZMOhc3p0w7MgdS4gMTItMjYsIDk5MzQ!3m2!1d46.8799669!2d16.548517399999998!4m4!1s0x476ed544a22c2bfb%3A0xdc8e6f53ba532ce6!3m2!1d46.875910999999995!2d16.5515844!4m4!1s0x476ed527e0ed033b%3A0xa406e8d5f31a2871!3m2!1d46.8775736!2d16.5521495!4m4!1s0x476ed7a7ade22cab%3A0x86718c1aad40501e!3m2!1d46.883539999999996!2d16.5540542!5e0!3m2!1shu!2shu!4v1651221259261!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);
    }
}
