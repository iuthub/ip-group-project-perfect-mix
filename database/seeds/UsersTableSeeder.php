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

        $user = new User([
            'full_name'=>'Jasur Makhsudov',
            'email'=>'j.makhsudov@student.inha.uz',
            'address'=>'Tashkent',
            'phone_number'=>'+998933926354',
            'password'=>Hash::make('jasur'),
        ]);
        $user->markEmailAsVerified();
        $user->save();

        $user = new User([
        	'full_name'=>'Alex Michael',
        	'email'=>'a.michael@student.inha.uz',
            'address'=>'Tashkent',
            'phone_number'=>'+998955555555',
        	'password'=>Hash::make('alex'),
        ]);
        $user->markEmailAsVerified();
        $user->save();
        
    }
}