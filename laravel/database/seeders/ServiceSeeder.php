<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Services;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Illuminate\Support\Carbon::now('utc')->toDateTimeString();
        $service = [
            [   'name' => 'Wedding',
                'price'  => 458,
				'total_bought' => 837,
				'sponsor_id' => 4,
                'description' => 'Wedding for 50 people at the beach',
               
                'content'=>'Queen. An invitation for the accident of the table. 
                `Have some wine,` the March Hare. Alice sighed wearily. 
                `I think I must have imitated somebody else`s hand,` said the Gryphon went on in a bit.`.',
               
                'created_at'=> $now,
				'updated_at'=> $now
            ],
            [   'name' => 'Birthday',
                'price'  => 1763,
				'total_bought' => 324,
				'sponsor_id' => 1,
                'description' => 'Birthday party for kids with 100 people',
              
                'content'=>'WOULD go with Edgar Atheling to meet William and offer him the crown.
                 William`s conduct at first was moderate. But the snail replied "Too far, too far!" 
                 and gave a look askance-- Said he thanked the.',
                
                 'created_at'=> $now,
				'updated_at'=> $now
            ],
            [   'name' => 'Dinner',
                'price'  => 100,
				'total_bought' => 5624,
				'sponsor_id' => 3,
                'description' => 'Dinner for 2',
                
                'content'=>'Hatter instead!` CHAPTER VII. A Mad Tea-Party There was a bright idea came into Alice`s head. 
                `Is that all?` said the King, looking round the table, but it was in a tone of the birds and beasts, as.',
                
                'created_at'=> $now,
				'updated_at'=> $now
            ],
            [   'name' => 'Training',
                'price'  => 9587,
				'total_bought' => 214,
				'sponsor_id' => 5,
                'description' => 'Training for corporation',
                'content'=>'QUITE as much as serpents do, you know.` `Who is it twelve? I--` `Oh, don`t 
                talk about her other little children, and make out at the cook, to see a little pattering of feet on the door and went.',
                'created_at'=> $now,
				'updated_at'=> $now
            ],
            [   'name' => 'Dinner for one Person',
                'price'  => 58,
				'total_bought' => 3654,
				'sponsor_id' => 4,
                'description' => 'Home Alone',
                'content'=>'OURS they had at the Lizard as she could not answer without a great crowd 
                assembled about them--all sorts of things--I can`t remember things as I get it home?` when it saw Alice. It looked.',
                'created_at'=> $now,
				'updated_at'=> $now
            ]
            ];
            Service::insert( $service );
    }
}
