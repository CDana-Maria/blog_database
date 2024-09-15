<?php

namespace Database\Seeders;

use App\Models\ServiceOrganizator;
use Illuminate\Database\Seeder;

class ServiceOrganizatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizator_service = [
            [
                'organizator_id'=>5,
                'service_id'=>1
            ],
            [
                'organizator_id'=>3,
                'service_id'=>5            ],
            [
                'organizator_id'=>2,
                'service_id'=>4            ],
            [
                'organizator_id'=>1,
                'service_id'=>3            ],
            [
                'organizator_id'=>5,
                'service_id'=>5            ]
            ];
            ServiceOrganizator::insert( $organizator_service );
    }
}
