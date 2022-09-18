<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Poblacion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PoblacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Poblacion::create([
            'name' => 'GOMEZ FARIAS',
            'cp' => '49120',
            'latitud' => '19.7932214',
            'longitud' => '-103.4831268',
            'name_google' => 'San Sebastián del Sur, jal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'USMAJAC',
            'cp' => '49330',
            'latitud' => '19.8725984',
            'longitud' => '-103.5511198',
            'name_google' => 'Usmajac, jal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'AMACUECA',
            'cp' => '49370',
            'latitud' => '20.0111776',
            'longitud' => '-103.6003447',
            'name_google' => 'Amacueca, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'ATACCO (TAPALPA)',
            'cp' => '49340',
            'latitud' => '19.9272927',
            'longitud' => '-103.7419501',
            'name_google' => 'Atacco, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'ATEMAJAC DE BRIZUELA',
            'cp' => '45790',
            'latitud' => '20.1408274',
            'longitud' => '-103.7285006',
            'name_google' => 'Atemajac de Brizuela, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'ATOYAC', 
            'cp' => '49200', 
            'latitud' => '20.0074267', 
            'longitud' => '-103.5176650', 
            'name_google' => 'Atoyac, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'BARRANCA LOS OTATES', 
            'cp' => '45760', 
            'latitud' => '20.2675509', 
            'longitud' => '-103.6654629', 
            'name_google' => 'Barranca de Otatán, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'CD. GUZMAN', 
            'cp' => '49097', 
            'latitud' => '19.7050171', 
            'longitud' => '-103.4685183', 
            'name_google' => 'Cd Guzman, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'CONTLA', 
            'cp' => '49678', 
            'latitud' => '19.7515246', 
            'longitud' => '-103.1834503', 
            'name_google' => 'Villa de Contla, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'EL RINCON(ZAPOTILTIC', 
            'cp' => '49615',
            'latitud' => '19.6658892', 
            'longitud' => '-103.4012399', 
            'name_google' => 'El Rincón, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'GRAL ANDRES FIGUEROA', 
            'cp' => '45765', 
            'latitud' => '20.3010570', 
            'longitud' => '-103.6075979', 
            'name_google' => 'Gral Andrés Figueroa, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'HUESCALAPA', 
            'cp' => '49610', 
            'latitud' => '19.6352368', 
            'longitud' => '-103.4468419', 
            'name_google' => 'Huescalapa, 49610 Zapotiltic, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'JILOTLAN DE LOS DOLO', 
            'cp' => '49900', 
            'latitud' => '19.3704642', 
            'longitud' => '-103.0197429', 
            'name_google' => 'Jilotlán de los Dolores, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'LA PURISIMA (TECALIT', 
            'cp' => '49910', 
            'latitud' => '19.4917532', 
            'longitud' => '-103.3291307', 
            'name_google' => 'La Purísima, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'SAN ANDRES IXTLAN', 
            'cp' => '49130', 
            'latitud' => '19.8204519', 
            'longitud' => '-103.4668821', 
            'name_google' => 'San Andrés Ixtlán, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'SAYULA', 
            'cp' => '49317', 
            'latitud' => '19.8786995', 
            'longitud' => '-103.5986529', 
            'name_google' => 'Sayula, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TAMAZULA', 
            'cp' => '49650', 
            'latitud' => '19.6751350', 
            'longitud' => '-103.2540219', 
            'name_google' => 'Tamazula de Gordiano, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TAPALPA', 
            'cp' => '49340', 
            'latitud' => '19.9476711', 
            'longitud' => '-103.7607783', 
            'name_google' => 'Tapalpa, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TECALITLAN', 
            'cp' => '49900', 
            'latitud' => '19.4715159', 
            'longitud' => '-103.3070959', 
            'name_google' => 'Tecalitlán, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TECHALUTA', 
            'cp' => '49230', 
            'latitud' => '20.0739432', 
            'longitud' => '-103.5524234', 
            'name_google' => 'Techaluta de Montenegro, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TEHUANTEPEC', 
            'cp' => '49265', 
            'latitud' => '20.0878333', 
            'longitud' => '-103.4805705', 
            'name_google' => 'Tehuantepec, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TEOCUITATLAN CORONA', 
            'cp' => '49250', 
            'latitud' => '20.0166670', 
            'longitud' => '-103.1833330', 
            'name_google' => 'Teocuitatlán de Corona, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TEPEC', 
            'cp' => '49380', 
            'latitud' => '19.9905929', 
            'longitud' => '-103.6406128', 
            'name_google' => 'Tepec, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'TUXPAN', 
            'cp' => '49800', 
            'latitud' => '19.5572679', 
            'longitud' => '-103.3789461', 
            'name_google' => 'Tuxpan, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'VISTA HERMOSA', 
            'cp' => '49657', 
            'latitud' => '19.6934572', 
            'longitud' => '-103.3401878', 
            'name_google' => 'Vista Hermosa, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'ZACOALCO DE TORRES', 
            'cp' =>'45750', 
            'latitud' =>'20.2250528', 
            'longitud' =>'-103.5697229', 
            'name_google' =>'Zacoalco de Torres, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Poblacion::create([
            'name' => 'ZAPOTILTIC', 
            'cp' => '49600', 
            'latitud' => '19.6300235', 
            'longitud' => '-103.4193903', 
            'name_google' => 'Zapotiltic, Jal., México',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
