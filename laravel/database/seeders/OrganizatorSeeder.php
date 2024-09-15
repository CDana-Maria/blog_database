<?php

namespace Database\Seeders;

use App\Models\Organizator;
use Illuminate\Database\Seeder;

class OrganizatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizator = [
            [
                'name'=>'Malvina Hook'
            ],
            [
                'name'=>'Vincent Jupiter'
            ],
            [
                'name'=>'Sindy Crawford'
            ],
            [
                'name'=>'Daniel Craig'
            ],
            [
                'name'=>'Anne Heathway'
            ]
            ];
            Organizator::insert( $organizator );
    }
}
