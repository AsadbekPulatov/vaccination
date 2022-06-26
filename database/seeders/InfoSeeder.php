<?php

namespace Database\Seeders;

use App\Models\VaccinationInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VaccinationInfo::create([
           'age' => '1-kunida',
           'name' => 'VGV-1',
        ]);
        VaccinationInfo::create([
            'age' => '2-5 kunida',
            'name' => 'BSJ-1',
        ]);
        VaccinationInfo::create([
            'age' => '2 oylikda',
            'name' => 'OPV-1, Rota-1 (oral rotavirus vaksinasi), penta-1(AKDS-1, VGV-2, XIB-1), pnevmo-1',
        ]);
        VaccinationInfo::create([
            'age' => '3 oylikda',
            'name' => 'OPV-2, Rota-2 (oral rotavirus vaksinasi), penta-2 (AKDS-2, VGV-3, XIB-2), pnevmo-2',
        ]);
        VaccinationInfo::create([
            'age' => '4 oylikda',
            'name' => 'OPV-3, penta -3 (AKDS-3, VGV-4, XIB-3),IPV',
        ]);
        VaccinationInfo::create([
            'age' => '12 oylikda',
            'name' => 'KPK-1, pnevmo-3',
        ]);
        VaccinationInfo::create([
            'age' => '16 oylikda',
            'name' => 'OPV-4, AKDS-4',
        ]);
        VaccinationInfo::create([
            'age' => '6 yosh',
            'name' => 'KPK-2',
        ]);
        VaccinationInfo::create([
            'age' => '1 sinf (7 yosh)',
            'name' => 'OPV-5, ADS-M-5',
        ]);
        VaccinationInfo::create([
            'age' => '9 yosh',
            'name' => 'VPCh',
        ]);
        VaccinationInfo::create([
            'age' => '16 yosh',
            'name' => 'ADS-M-6',
        ]);
    }
}
