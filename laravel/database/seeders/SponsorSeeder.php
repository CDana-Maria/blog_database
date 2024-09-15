<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Illuminate\Support\Carbon::now('utc')->toDateTimeString();
        $sponsor = [
            [
                'sponsor_name'  => 'Bob Hickman',
				'phone_number' => '+254-896-547-258',
				'email' => 'bob.hickman@gmail.com'
            ],
            [
                'sponsor_name'  => 'Alice Valdermore',
				'phone_number' => '+574-569-547-582',
				'email' => 'alice.valdemore@gmail.com'
            ],
            [
                'sponsor_name'  => 'Toni Stark',
				'phone_number' => '+659-896-547-236',
				'email' => 'toni.stark@gmail.com'
            ],
            [
                'sponsor_name'  => 'Melina Potter',
				'phone_number' => '+324-896-547-651',
				'email' => 'melina.potter@gmail.com'
            ],
            [
                'sponsor_name'  => 'Albert Damiano',
				'phone_number' => '+125-896-547-657',
				'email' => 'albert.damiano@gmail.com'
            ]
            ];
            Sponsor::insert( $sponsor );
    }
}
