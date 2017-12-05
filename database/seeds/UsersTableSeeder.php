<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            ['bigdawg82', 'bigdawgeats@sample.net', Hash::make('dog')],
            ['nastygirl', 'nastygirl@sample.net', Hash::make('fashion')],
            ['carlosdanger', 'carlosdanger@sample.net', Hash::make('andrew')],
            ['hogwild55', 'woopig@sample.net', Hash::make('sooie')],
            ['lostinjungle11', 'lost1@sample.net', Hash::make('monkey')],
            ['unknownwonder', 'unknown@sample.net', Hash::make('wonder')]
        ];

        $count = count($users);

        foreach ($users as $key => $user) {
            User::insert([
                'name' => $user[0],
                'email' => $user[1],
                'password' => $user[2],
                'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString()
            ]);
            $count--;

    }
}
}
