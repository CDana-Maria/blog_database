<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Illuminate\Support\Carbon::now('utc')->toDateTimeString();
        $contact = [
            [
                'organizator_id'  => 1,
				'phone_number' => '+125-896-547-657',
				'email' => 'hook.malvina@gmail.com',
                'address' => 'Baker Street 17',
                'created_at'=> $now,
				'updated_at'=> $now
            ],
            [
                'organizator_id'  => 2,
				'phone_number' => '+324-896-547-651',
				'email' => 'jupiter.vincent@gmail.com',
                'address' => 'Nikanor Street',
                'created_at'=> $now,
				'updated_at'=> $now
            ],
            [
                'organizator_id'  => 5,
				'phone_number' => '+659-896-547-236',
				'email' => 'heathway.anne@gmail.com',
                'address' => 'Macronus Street 36',
                'created_at'=> $now,
				'updated_at'=> $now
            ],
            [
                'organizator_id'  => 3,
				'phone_number' => '+574-569-547-582',
				'email' => 'rawford.sindy@gmail.com',
                'address' => 'Utopian Street 89',
                'created_at'=> $now,
				'updated_at'=> $now
            ],
            [
                'organizator_id'  => 4,
				'phone_number' => '+254-896-547-258',
				'email' => 'craig.daniel@gmail.com',
                'address' => 'Accronyme Street',
                'created_at'=> $now,
				'updated_at'=> $now
            ]
            ];
            Contact::insert( $contact );
    }
}
