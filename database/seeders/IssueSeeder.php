<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Provider\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\Rules\Enum;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusValues = ['open', 'in_progress', 'resolved'];
        $priorityValues = ['low', 'normal', 'high'];

      /* $user1 = User::create([
            'name' => 'Prince Anire',
            'email' => Str::random() . '@gmail.com',
            'password' => \Hash::make(Str::random())
        ]);

       $user2 = User::create([
            'name' => 'Claude Kirke',
            'email' => Str::random() . '@gmail.com',
            'password' => \Hash::make(Str::random())
        ]);

       $user3 = User::create([
            'name' => 'Guiller',
            'email' => Str::random() . '@gmail.com',
            'password' => \Hash::make(Str::random())
        ]);

       $user4 = User::create([
            'name' => 'Angelo Mape',
            'email' => Str::random() . '@gmail.com',
            'password' => \Hash::make(Str::random())
        ]);

       $user5 = User::create([
            'name' => 'Jayson  Milan',
            'email' => Str::random() . '@gmail.com',
            'password' => \Hash::make(Str::random())
        ]);*/

        DB::table('issues')->insert([
            'subject' => Str::random(50),
            'description' => Str::random('50'),
            'status' => $statusValues[rand(0, 2)],
            'priority' => $priorityValues[rand(0,  2)],
            'assignee' => Str::random(),
            'start_date' => \Date::create(2023, 4, 13,),
            'due_date' => \Date::create(rand(2000,  2024), rand(1,  12), rand(1, 27)),
//            'user_id' => $user1->id,
        ]);

        DB::table('issues')->insert([
            'subject' => Str::random(50),
            'description' => Str::random('50'),
            'status' => $statusValues[rand(0, 2)],
            'priority' => $priorityValues[rand(0,  2)],
            'assignee' => Str::random(),
            'start_date' => \Date::create(2023, 4, 13,),
            'due_date' => \Date::create(rand(2000,  2024), rand(1,  12), rand(1, 27)),
//            'user_id' => $user2->id
        ]);

        DB::table('issues')->insert([
            'subject' => Str::random(50),
            'description' => Str::random('50'),
            'status' => $statusValues[rand(0, 2)],
            'priority' => $priorityValues[rand(0,  2)],
            'assignee' => Str::random(),
            'start_date' => \Date::create(2023, 4, 13,),
            'due_date' => \Date::create(rand(2000,  2024), rand(1,  12), rand(1, 27)),
//            'user_id' => $user3->id
        ]);

        DB::table('issues')->insert([
            'subject' => Str::random(50),
            'description' => Str::random('50'),
            'status' => $statusValues[rand(0, 2)],
            'priority' => $priorityValues[rand(0,  2)],
            'assignee' => Str::random(),
            'start_date' => \Date::create(2023, 4, 13,),
            'due_date' => \Date::create(rand(2000,  2024), rand(1,  12), rand(1, 27)),
//            $user4->id
        ]);

        DB::table('issues')->insert([
            'subject' => Str::random(50),
            'description' => Str::random('50'),
            'status' => $statusValues[rand(0, 2)],
            'priority' => $priorityValues[rand(0,  2)],
            'assignee' => Str::random(),
            'start_date' => \Date::create(2023, 4, 13,),
            'due_date' => \Date::create(rand(2000,  2024), rand(1,  12), rand(1, 27)),
//            'user_id' => $user5->id
        ]);

    }
}
