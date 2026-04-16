<?php

namespace Database\Seeders;

use App\Models\Tevekenyseg;
use Illuminate\Database\Seeder;

class TevekenysegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tevekenysegek = [
            ['tevekenyseg_nev' => 'kerékpárral jöttem iskolába', 'pontszam' => 5],
            ['tevekenyseg_nev' => 'rollerrel jöttem iskolába', 'pontszam' => 5],
            ['tevekenyseg_nev' => '10 km-t gyalogoltam buszozás helyett', 'pontszam' => 7],
            ['tevekenyseg_nev' => 'ültettem fát', 'pontszam' => 8],
            ['tevekenyseg_nev' => 'ültettem virágot', 'pontszam' => 8],
            ['tevekenyseg_nev' => 'ültettem egyéb növényt', 'pontszam' => 8],
            ['tevekenyseg_nev' => 'kevesebb vizet használtam a fürdéshez', 'pontszam' => 10],
            ['tevekenyseg_nev' => 'összeszedtem a szemetet egy közterületen, erdőben, stb', 'pontszam' => 10],
            ['tevekenyseg_nev' => 'tartós szatyorba vásároltam, nem nylonba', 'pontszam' => 12],
            ['tevekenyseg_nev' => 'nem használtam egyszer használatos műanyagot', 'pontszam' => 12],
            ['tevekenyseg_nev' => 'tartós csomagolású terméket vásároltam (pl. üvegbe vettem a tejet)', 'pontszam' => 12],
            ['tevekenyseg_nev' => 'környezetbarát csomagolású terméket vásároltam', 'pontszam' => 12],
            ['tevekenyseg_nev' => 'kevesebb húst ettem a héten', 'pontszam' => 15],
            ['tevekenyseg_nev' => 'ökológiai gazdaságból származó élelmiszert vettem', 'pontszam' => 12],
            ['tevekenyseg_nev' => 'kirándultam, szabadban töltöttem időt a héten', 'pontszam' => 7],
            ['tevekenyseg_nev' => 'kevesebb ruhát vagy terméket vásároltam a héten', 'pontszam' => 8],
            ['tevekenyseg_nev' => 'önkénteskedtem a Greenpeace-nél vagy más zöld szervezetnél', 'pontszam' => 20],
        ];

        foreach ($tevekenysegek as $tevekenyseg) {
            Tevekenyseg::create($tevekenyseg);
        }
    }
}