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
            'phone_number'=>'+998933926354',
        	'password'=>Hash::make('jasur')
        ]);
        $user->save();
        
    }
}